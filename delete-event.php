<?php
session_start();
include('includes/db.php');

// Restrict access to admins
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

if (isset($_GET['id'])) {
    $event_id = intval($_GET['id']);
    $created_by = $_SESSION['user_id'];

    // Delete only if this admin created the event
    $stmt = $conn->prepare("DELETE FROM events WHERE event_id = ? AND created_by = ?");
    $stmt->bind_param("ii", $event_id, $created_by);

    if ($stmt->execute()) {
        $stmt->close();
        header("Location: dashboard.php?delete=success");
        exit();
    } else {
        $stmt->close();
        echo "<script>alert('Error deleting event.'); window.history.back();</script>";
    }
} else {
    header("Location: dashboard.php");
    exit();
}
