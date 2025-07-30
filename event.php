<?php
session_start();
include('includes/db.php');
include('includes/header-private.php');

$user_id = $_SESSION['user_id'] ?? null;
$is_logged_in = isset($_SESSION['user_id']);
?>

<main class="sevt-main">
    <section class="sevt-container">
        <?php if (!isset($_GET['id'])): ?>
            <h2 class="sevt-heading">All Available Events</h2>
            <div class="sevt-grid">
                <?php
                $result = $conn->query("SELECT event_id, title, event_date, event_time, location FROM events ORDER BY event_date ASC");
                while ($row = $result->fetch_assoc()):
                ?>
                    <div class="sevt-card">
                        <h3><?php echo htmlspecialchars($row['title']); ?></h3>
                        <p><strong>Date:</strong> <?php echo $row['event_date']; ?></p>
                        <p><strong>Time:</strong> <?php echo $row['event_time']; ?></p>
                        <p><strong>Location:</strong> <?php echo htmlspecialchars($row['location']); ?></p>
                        <a href="event.php?id=<?php echo $row['event_id']; ?>" class="sevt-btn">View Details</a>
                    </div>
                <?php endwhile; ?>
            </div>

        <?php else: ?>
            <?php
            $event_id = intval($_GET['id']);
            $stmt = $conn->prepare("SELECT * FROM events WHERE event_id = ?");
            $stmt->bind_param("i", $event_id);
            $stmt->execute();
            $event = $stmt->get_result()->fetch_assoc();
            $stmt->close();

            if ($event):
            ?>
                <h2 class="sevt-heading"><?php echo htmlspecialchars($event['title']); ?></h2>

                <div class="sevt-detail-box">
                    <p><strong>Description:</strong> <?php echo htmlspecialchars($event['description']); ?></p>
                    <p><strong>Date:</strong> <?php echo $event['event_date']; ?></p>
                    <p><strong>Time:</strong> <?php echo $event['event_time']; ?></p>
                    <p><strong>Location:</strong> <?php echo htmlspecialchars($event['location']); ?></p>
                    <p><strong>Capacity:</strong> <?php echo $event['capacity']; ?></p>
                </div>

                <?php
                // Booking status messages
                if (isset($_GET['status'])) {
                    $status = $_GET['status'];
                    if ($status === 'success') echo "<p class='sevt-msg success'>✅ Booking successful!</p>";
                    elseif ($status === 'already') echo "<p class='sevt-msg warn'>⚠️ You've already booked this event.</p>";
                    elseif ($status === 'full') echo "<p class='sevt-msg error'>❌ Sorry, this event is fully booked.</p>";
                    elseif ($status === 'error') echo "<p class='sevt-msg error'>⚠️ Something went wrong. Try again.</p>";
                }
                ?>

                <?php if ($is_logged_in): ?>
                    <form action="book.php" method="POST" class="sevt-form">
                        <input type="hidden" name="event_id" value="<?php echo $event['event_id']; ?>">
                        <button type="submit" class="sevt-btn book">Book This Event</button>
                    </form>
                <?php else: ?>
                    <p class="sevt-msg warn">⚠️ You must <a href="login.php">log in</a> to book this event.</p>
                <?php endif; ?>
            <?php else: ?>
                <p class="sevt-msg error">❌ Event not found.</p>
            <?php endif; ?>
        <?php endif; ?>
    </section>
</main>

<?php include('includes/footer.php'); ?>
