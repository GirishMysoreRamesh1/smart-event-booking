<?php
session_start();
include('includes/db.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['event_id'])) {
    $user_id = $_SESSION['user_id'];
    $event_id = intval($_POST['event_id']);

    // Check if event exists and has available capacity
    $stmt = $conn->prepare("
        SELECT 
            e.capacity,
            (SELECT COUNT(*) FROM bookings WHERE event_id = ?) AS booked
        FROM events e
        WHERE e.event_id = ?
    ");
    $stmt->bind_param("ii", $event_id, $event_id);
    $stmt->execute();
    $result = $stmt->get_result();
    $event = $result->fetch_assoc();
    $stmt->close();

    if ($event) {
        $booked = $event['booked'];
        $capacity = $event['capacity'];

        if ($booked >= $capacity) {
            header("Location: event.php?id=$event_id&status=full");
            exit();
        }

        // Check if user already booked
        $checkStmt = $conn->prepare("SELECT * FROM bookings WHERE event_id = ? AND user_id = ?");
        $checkStmt->bind_param("ii", $event_id, $user_id);
        $checkStmt->execute();
        $existing = $checkStmt->get_result()->fetch_assoc();
        $checkStmt->close();

        if ($existing) {
            header("Location: event.php?id=$event_id&status=already");
            exit();
        }

        // Insert booking
        $insertStmt = $conn->prepare("INSERT INTO bookings (event_id, user_id) VALUES (?, ?)");
        $insertStmt->bind_param("ii", $event_id, $user_id);

        if ($insertStmt->execute()) {
            $insertStmt->close();
            header("Location: event.php?id=$event_id&status=success");
            exit();
        } else {
            $insertStmt->close();
            header("Location: event.php?id=$event_id&status=error");
            exit();
        }
    } else {
        header("Location: event.php?id=$event_id&status=notfound");
        exit();
    }
} else {
    header("Location: index.php");
    exit();
}
