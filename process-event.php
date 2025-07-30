<?php
session_start();
include('includes/db.php');

// Check admin access
if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = trim($_POST['title']);
    $event_date = $_POST['event_date'];
    $event_time = $_POST['event_time'];
    $capacity = intval($_POST['capacity']);
    $location = trim($_POST['location']);
    $created_by = $_SESSION['user_id'];

    if (!empty($title) && !empty($event_date) && !empty($event_time) && $capacity > 0 && !empty($location)) {
        $stmt = $conn->prepare("INSERT INTO events (title, event_date, event_time, capacity, location, created_by) VALUES (?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssisi", $title, $event_date, $event_time, $capacity, $location, $created_by);

        if ($stmt->execute()) {
            $stmt->close();
            header("Location: dashboard.php?status=success");
            exit();
        } else {
            $stmt->close();
            echo "<script>alert('Database error: Could not create event.'); window.history.back();</script>";
        }
    } else {
        echo "<script>alert('Please fill out all fields correctly.'); window.history.back();</script>";
    }
} else {
    header("Location: create-event.php");
    exit();
}
