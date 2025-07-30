<?php
session_start();
include('includes/db.php');

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

$event_id = isset($_GET['id']) ? intval($_GET['id']) : 0;
$event = null;

if ($event_id > 0) {
    $stmt = $conn->prepare("SELECT * FROM events WHERE event_id = ? AND created_by = ?");
    $stmt->bind_param("ii", $event_id, $_SESSION['user_id']);
    $stmt->execute();
    $result = $stmt->get_result();
    $event = $result->fetch_assoc();
    $stmt->close();
}

include('includes/header-private.php');
?>

<main class="cevt-main">
    <section class="cevt-container">
        <h2 class="cevt-title">🛠️ Edit Event</h2>

        <?php if ($event): ?>
        <form action="update-event.php" method="POST" class="cevt-form" onsubmit="return validateEventForm()">
            <input type="hidden" name="event_id" value="<?php echo $event['event_id']; ?>">

            <div class="cevt-group">
                <label for="title">Event Title</label>
                <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($event['title']); ?>" required>
            </div>

            <div class="cevt-group">
                <label for="event_date">Date</label>
                <input type="date" id="event_date" name="event_date" value="<?php echo $event['event_date']; ?>" required>
            </div>

            <div class="cevt-group">
                <label for="event_time">Time</label>
                <input type="time" id="event_time" name="event_time" value="<?php echo $event['event_time']; ?>" required>
            </div>

            <div class="cevt-group">
                <label for="capacity">Capacity</label>
                <input type="number" id="capacity" name="capacity" value="<?php echo $event['capacity']; ?>" required>
            </div>

            <div class="cevt-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" value="<?php echo htmlspecialchars($event['location']); ?>" required>
            </div>

            <button type="submit" class="cevt-btn">Update Event</button>
        </form>
        <?php else: ?>
            <p class="cevt-error">Event not found or access denied.</p>
        <?php endif; ?>
    </section>
</main>

<?php include('includes/footer.php'); ?>

<script>
function validateEventForm() {
    const title = document.getElementById("title").value.trim();
    const date = document.getElementById("event_date").value;
    const time = document.getElementById("event_time").value;
    const capacity = document.getElementById("capacity").value;
    const location = document.getElementById("location").value.trim();

    if (!title || !date || !time || !capacity || !location) {
        alert("Please fill in all the fields.");
        return false;
    }

    if (parseInt(capacity) <= 0) {
        alert("Capacity must be greater than 0.");
        return false;
    }

    return true;
}
</script>
