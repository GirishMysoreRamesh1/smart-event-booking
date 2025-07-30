<?php
session_start();
include('includes/db.php');

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

include('includes/header-private.php');

$user_id = $_SESSION['user_id'];
$role = $_SESSION['role'];
?>

<main class="sdash-main">
    <section class="sdash-container">
        <h2 class="sdash-title">Welcome, <?php echo htmlspecialchars($_SESSION['name']); ?>!</h2>

        <?php if ($role === 'user'): ?>
            <h3 class="sdash-subtitle">Your Booked Events</h3>
            <?php
            $stmt = $conn->prepare("SELECT e.title, e.event_date, e.event_time, e.location FROM bookings b JOIN events e ON b.event_id = e.event_id WHERE b.user_id = ?");
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0): ?>
                <table class="sdash-table">
                    <tr>
                        <th>Title</th><th>Date</th><th>Time</th><th>Location</th>
                    </tr>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['title']); ?></td>
                            <td><?php echo $row['event_date']; ?></td>
                            <td><?php echo $row['event_time']; ?></td>
                            <td><?php echo htmlspecialchars($row['location']); ?></td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            <?php else: ?>
                <p class="sdash-msg">You haven’t booked any events yet.</p>
            <?php endif;
            $stmt->close();
            ?>

        <?php elseif ($role === 'admin'): ?>
            <h3 class="sdash-subtitle">Your Created Events</h3>
            <?php
            $stmt = $conn->prepare("SELECT * FROM events WHERE created_by = ?");
            $stmt->bind_param("i", $user_id);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows > 0): ?>
                <table class="sdash-table">
                    <tr>
                        <th>Title</th><th>Date</th><th>Time</th><th>Actions</th>
                    </tr>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['title']); ?></td>
                            <td><?php echo $row['event_date']; ?></td>
                            <td><?php echo $row['event_time']; ?></td>
                            <td>
                                <a href="edit-event.php?id=<?php echo $row['event_id']; ?>" class="sdash-btn edit">Edit</a>
                                <a href="delete-event.php?id=<?php echo $row['event_id']; ?>" class="sdash-btn delete" onclick="return confirm('Delete this event?')">Delete</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </table>
            <?php else: ?>
                <p class="sdash-msg">No events created yet.</p>
            <?php endif;
            $stmt->close();
            ?>
        <?php endif; ?>
    </section>
</main>

<?php include('includes/footer.php'); ?>
