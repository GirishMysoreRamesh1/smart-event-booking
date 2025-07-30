<?php
// Start session if not already started
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Determine user role (assumed to be stored in session)
$role = isset($_SESSION['role']) ? $_SESSION['role'] : 'user';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Smart Event Booking - Dashboard</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/smart-event-booking/css/style.css">
    <script src="/smart-event-booking/js/script.js" defer></script>
</head>
<body>
    <header class="spri-header">
        <div class="spri-header-container">
            <a href="/smart-event-booking/dashboard.php" class="spri-logo">🎓 EventBook</a>
            <nav class="spri-nav">
                <ul class="spri-nav-list">
                    <li><a href="/smart-event-booking/dashboard.php" class="spri-nav-link">Dashboard</a></li>

                    <?php if ($role === 'admin') : ?>
                        <li><a href="/smart-event-booking/create-event.php" class="spri-nav-link">Create Event</a></li>
                    <?php else: ?>
                        <li><a href="/smart-event-booking/event.php" class="spri-nav-link">Book Event</a></li>
                    <?php endif; ?>

                    <li><a href="/smart-event-booking/logout.php" class="spri-nav-link spri-logout">Logout</a></li>
                </ul>
            </nav>
        </div>
    </header>
