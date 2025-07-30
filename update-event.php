<?php
session_start();
include('includes/db.php');

// Check if admin is logged in
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

// Process only POST requests
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $event_id = intval($_POST['event_id']);
    $title = trim($_POST['title']);
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $capacity = intval($_POST['capacity']);
    $location = trim($_POST['location']);
    $created_by = $_SESSION['user_id'];

    if (!empty($title) && !empty($event_date) && !empty($event_time) && $capacity > 0 && !empty($location)) {
        // Update only if the event belongs to the logged-in admin
        $stmt = $conn->prepare("UPDATE events SET title = ?, event_date = ?, event_time = ?, capacity = ?, location = ? WHERE event_id = ? AND created_by = ?");
        $stmt->bind_param("sssissi", $title, $event_date, $event_time, $capacity, $location, $event_id, $created_by);

        if ($stmt->execute()) {
            $stmt->close();
            header("Location: dashboard.php?update=success");
            exit();
        } else {
            $stmt->close();
            echo "<script>alert('Error updating event.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Invalid input. Please check the form.'); window.history.back();</script>";
    }
} else {
    header("Location: dashboard.php");
    exit();
}
