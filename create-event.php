<?php
session_start();
include('includes/db.php');

if (!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin') {
    header("Location: index.php");
    exit();
}

include('includes/header-private.php');
?>

<main class="cevt-main">
    <section class="cevt-container">
        <h2 class="cevt-title">✨ Create a New Event ✨</h2>

        <form action="process-event.php" method="POST" class="cevt-form" onsubmit="return validateEventForm()">
            <div class="cevt-group">
                <label for="title">Event Title</label>
                <input type="text" id="title" name="title" required>
            </div>

            <div class="cevt-group">
                <label for="event_date">Date</label>
                <input type="date" id="event_date" name="event_date" required>
            </div>

            <div class="cevt-group">
                <label for="event_time">Time</label>
                <input type="time" id="event_time" name="event_time" required>
            </div>

            <div class="cevt-group">
                <label for="capacity">Capacity</label>
                <input type="number" id="capacity" name="capacity" min="1" required>
            </div>

            <div class="cevt-group">
                <label for="location">Location</label>
                <input type="text" id="location" name="location" required>
            </div>

            <button type="submit" class="cevt-btn">Create Event</button>
        </form>
    </section>
</main>

<?php include('includes/footer.php'); ?>

<!-- JavaScript -->
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
