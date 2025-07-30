<?php include('includes/header-public.php'); ?>
<main class="sind-main">

    <!-- 🔄 Hero Carousel Section -->
    <section class="sind-carousel-section">
        <div class="sind-carousel" id="sind-carousel">
            <div class="sind-carousel-slide"><img src="assets/images/event-banner1.png" alt="Event 1"></div>
            <div class="sind-carousel-slide"><img src="assets/images/event-banner2.png" alt="Event 2"></div>
            <div class="sind-carousel-slide"><img src="assets/images/event-banner3.jpg" alt="Event 3"></div>
        </div>
    </section>

    <!-- ✨ Welcome Section -->
    <section class="sind-welcome-section">
        <h2>Welcome to Smart Event Booking</h2>
        <p>Discover, register, and engage with exciting campus events. Built for students, clubs, and event creators.</p>
        <a href="register.php" class="sind-cta-button">Get Started</a>
    </section>

    <!-- 🗓️ Featured Events Section -->
    <section class="sind-featured-section">
        <h3>Upcoming Events</h3>
        <div class="sind-event-card-container">
            <div class="sind-event-card">
                <img src="assets/images/tech-talk.webp" alt="Tech Talk">
                <h4>AI in 2025</h4>
                <p>Explore the future of AI in industry and academia.</p>
                <a href="login.php" class="sind-view-link">View Details</a>
            </div>
            <div class="sind-event-card">
                <img src="assets/images/art-workshop.png" alt="Art Workshop">
                <h4>Watercolor Workshop</h4>
                <p>Learn hands-on techniques from expert artists.</p>
                <a href="login.php" class="sind-view-link">View Details</a>
            </div>
        </div>
    </section>

    <!-- 💡 About Section -->
    <section class="sind-about-section">
        <h3>Why Choose Us?</h3>
        <p>Efficient event booking, live updates, admin tools for organizers, and a seamless student experience.</p>
    </section>

</main>
<?php include('includes/footer.php'); ?>
