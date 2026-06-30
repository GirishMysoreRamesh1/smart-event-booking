/* ===================================================
   SMART EVENT BOOKING — Responsive Stylesheet
   =================================================== */

/* === Global Reset & Base === */
*, *::before, *::after {
    box-sizing: border-box;
}

body {
    margin: 0;
    padding: 0;
    font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
    -webkit-font-smoothing: antialiased;
}

/* === Global Image Responsiveness === */
img {
    max-width: 100%;
    height: auto;
    display: block;
}


/* ===================================================================
   PUBLIC HEADER — Prefix: spub-
   =================================================================== */
.spub-header {
    background-color: #004080;
    color: white;
    padding: 10px 0;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    position: relative;
    z-index: 1000;
}

.spub-header-container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.spub-logo {
    font-size: 1.5rem;
    font-weight: bold;
    text-decoration: none;
    color: white;
}

.spub-nav-list {
    list-style: none;
    display: flex;
    gap: 20px;
    margin: 0;
    padding: 0;
}

.spub-nav-link {
    color: white;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.spub-nav-link:hover {
    color: #ffcc00;
}

/* Hamburger Toggle — Public Header */
.spub-menu-toggle {
    display: none;
    background: none;
    border: none;
    cursor: pointer;
    padding: 8px;
    z-index: 1010;
}

.spub-hamburger-icon,
.spub-hamburger-icon::before,
.spub-hamburger-icon::after {
    display: block;
    width: 26px;
    height: 3px;
    background-color: white;
    border-radius: 3px;
    transition: all 0.35s ease;
    position: relative;
}

.spub-hamburger-icon::before,
.spub-hamburger-icon::after {
    content: '';
    position: absolute;
    left: 0;
}

.spub-hamburger-icon::before {
    top: -8px;
}

.spub-hamburger-icon::after {
    top: 8px;
}

/* Animated X when menu is open */
.spub-menu-toggle.is-active .spub-hamburger-icon {
    background-color: transparent;
}

.spub-menu-toggle.is-active .spub-hamburger-icon::before {
    top: 0;
    transform: rotate(45deg);
}

.spub-menu-toggle.is-active .spub-hamburger-icon::after {
    top: 0;
    transform: rotate(-45deg);
}

/* Mobile Nav — Public */
@media (max-width: 768px) {
    .spub-menu-toggle {
        display: block;
    }

    .spub-nav {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 1000;
    }

    .spub-nav-list {
        flex-direction: column;
        background-color: #004080;
        width: 100%;
        padding: 0;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease, padding 0.3s ease;
        display: flex;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .spub-nav-list.spub-show {
        max-height: 300px;
        padding: 10px 0;
    }

    .spub-nav-list li {
        text-align: center;
    }

    .spub-nav-link {
        display: block;
        padding: 12px 20px;
        border-bottom: 1px solid rgba(255,255,255,0.1);
        font-size: 1.05rem;
    }

    .spub-nav-list li:last-child .spub-nav-link {
        border-bottom: none;
    }
}


/* ===================================================================
   PRIVATE HEADER — Prefix: spri-
   =================================================================== */
.spri-header {
    background-color: #003366;
    color: white;
    padding: 10px 0;
    box-shadow: 0 2px 5px rgba(0,0,0,0.15);
    position: relative;
    z-index: 1000;
}

.spri-header-container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
}

.spri-logo {
    font-size: 1.6rem;
    font-weight: bold;
    text-decoration: none;
    color: white;
}

.spri-nav-list {
    list-style: none;
    display: flex;
    gap: 25px;
    margin: 0;
    padding: 0;
}

.spri-nav-link {
    color: white;
    text-decoration: none;
    font-weight: 500;
    transition: color 0.3s ease;
}

.spri-nav-link:hover {
    color: #00e6e6;
}

/* Hamburger Toggle — Private Header */
.spri-menu-toggle {
    display: none;
    background: none;
    border: none;
    cursor: pointer;
    padding: 8px;
    z-index: 1010;
}

.spri-hamburger-icon,
.spri-hamburger-icon::before,
.spri-hamburger-icon::after {
    display: block;
    width: 26px;
    height: 3px;
    background-color: white;
    border-radius: 3px;
    transition: all 0.35s ease;
    position: relative;
}

.spri-hamburger-icon::before,
.spri-hamburger-icon::after {
    content: '';
    position: absolute;
    left: 0;
}

.spri-hamburger-icon::before {
    top: -8px;
}

.spri-hamburger-icon::after {
    top: 8px;
}

/* Animated X when menu is open */
.spri-menu-toggle.is-active .spri-hamburger-icon {
    background-color: transparent;
}

.spri-menu-toggle.is-active .spri-hamburger-icon::before {
    top: 0;
    transform: rotate(45deg);
}

.spri-menu-toggle.is-active .spri-hamburger-icon::after {
    top: 0;
    transform: rotate(-45deg);
}

/* Mobile Nav — Private */
@media (max-width: 768px) {
    .spri-menu-toggle {
        display: block;
    }

    .spri-nav {
        position: absolute;
        top: 100%;
        left: 0;
        right: 0;
        z-index: 1000;
    }

    .spri-nav-list {
        flex-direction: column;
        background-color: #003366;
        width: 100%;
        padding: 0;
        max-height: 0;
        overflow: hidden;
        transition: max-height 0.4s ease, padding 0.3s ease;
        display: flex;
        box-shadow: 0 4px 12px rgba(0,0,0,0.2);
    }

    .spri-nav-list.spri-show {
        max-height: 300px;
        padding: 10px 0;
    }

    .spri-nav-list li {
        text-align: center;
    }

    .spri-nav-link {
        display: block;
        padding: 12px 20px;
        border-bottom: 1px solid rgba(255,255,255,0.1);
        font-size: 1.05rem;
    }

    .spri-nav-list li:last-child .spri-nav-link {
        border-bottom: none;
    }
}


/* ===================================================================
   FOOTER — Prefix: sfoot-
   =================================================================== */
.sfoot-footer {
    background-color: #f1f1f1;
    border-top: 1px solid #ddd;
    padding: 15px 0;
    margin-top: 40px;
    font-family: Arial, sans-serif;
    font-size: 0.95rem;
}

.sfoot-footer-container {
    width: 90%;
    max-width: 1200px;
    margin: auto;
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
}

.sfoot-footer-text {
    color: #555;
    margin: 5px 0;
}

.sfoot-footer-links {
    display: flex;
    gap: 15px;
}

.sfoot-footer-link {
    color: #004080;
    text-decoration: none;
    transition: color 0.3s ease;
}

.sfoot-footer-link:hover {
    color: #0080ff;
}

@media (max-width: 600px) {
    .sfoot-footer-container {
        flex-direction: column;
        text-align: center;
    }

    .sfoot-footer-links {
        margin-top: 10px;
        flex-direction: column;
        gap: 10px;
    }
}


/* ===================================================================
   INDEX / LANDING PAGE — Prefix: sind-
   =================================================================== */

/* Carousel Section */
.sind-carousel-section {
    background: linear-gradient(to right, #1a2a6c, #b21f1f, #fdbb2d);
    overflow: hidden;
    padding: 0;
}

.sind-carousel {
    display: flex;
    animation: sind-slide 12s infinite;
    width: 300%;
}

.sind-carousel-slide {
    flex: 1 0 100%;
}

.sind-carousel-slide img {
    width: 100%;
    height: 400px;
    object-fit: cover;
}

/* Welcome Section */
.sind-welcome-section {
    text-align: center;
    background: linear-gradient(to right, #74ebd5, #9face6);
    color: #222;
    padding: 60px 20px;
}

.sind-welcome-section h2 {
    font-size: 2.5rem;
    margin-bottom: 15px;
}

.sind-welcome-section p {
    font-size: 1.2rem;
    max-width: 700px;
    margin: 0 auto 25px;
}

.sind-cta-button {
    display: inline-block;
    background-color: #004080;
    color: white;
    padding: 12px 30px;
    border-radius: 25px;
    text-decoration: none;
    font-weight: bold;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

.sind-cta-button:hover {
    background-color: #0066cc;
    transform: translateY(-2px);
}

/* Featured Events */
.sind-featured-section {
    padding: 60px 20px;
    background: #fff;
    text-align: center;
}

.sind-featured-section h3 {
    font-size: 2rem;
    color: #004080;
}

.sind-event-card-container {
    display: flex;
    justify-content: center;
    gap: 30px;
    flex-wrap: wrap;
    margin-top: 30px;
}

.sind-event-card {
    background: #f9f9f9;
    border-radius: 10px;
    width: 280px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    overflow: hidden;
    transition: transform 0.3s ease;
}

.sind-event-card:hover {
    transform: translateY(-10px);
}

.sind-event-card img {
    width: 100%;
    height: 180px;
    object-fit: cover;
}

.sind-event-card h4 {
    margin: 15px 0 5px;
    color: #004080;
}

.sind-event-card p {
    padding: 0 15px;
    font-size: 0.95rem;
    color: #555;
}

.sind-view-link {
    display: inline-block;
    margin: 10px 0 20px;
    text-decoration: none;
    color: #004080;
    font-weight: bold;
}

/* About Section */
.sind-about-section {
    background: linear-gradient(to right, #ffecd2, #fcb69f);
    padding: 60px 20px;
    text-align: center;
    color: #333;
}

.sind-about-section h3 {
    font-size: 2rem;
    margin-bottom: 10px;
}

.sind-about-section p {
    max-width: 700px;
    margin: 0 auto;
    font-size: 1.1rem;
}

/* Carousel Animation */
@keyframes sind-slide {
    0%, 20% { transform: translateX(0); }
    25%, 45% { transform: translateX(-100%); }
    50%, 70% { transform: translateX(-200%); }
    75%, 100% { transform: translateX(0); }
}

/* --- Index Responsive --- */
@media (max-width: 768px) {
    .sind-carousel-slide img {
        height: 220px;
    }

    .sind-welcome-section {
        padding: 40px 15px;
    }

    .sind-welcome-section h2 {
        font-size: 1.75rem;
    }

    .sind-welcome-section p {
        font-size: 1rem;
    }

    .sind-featured-section {
        padding: 40px 15px;
    }

    .sind-featured-section h3 {
        font-size: 1.5rem;
    }

    .sind-event-card-container {
        flex-direction: column;
        align-items: center;
        gap: 20px;
    }

    .sind-event-card {
        width: 92%;
        max-width: 400px;
    }

    .sind-about-section {
        padding: 40px 15px;
    }

    .sind-about-section h3 {
        font-size: 1.5rem;
    }

    .sind-about-section p {
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .sind-carousel-slide img {
        height: 160px;
    }

    .sind-welcome-section h2 {
        font-size: 1.4rem;
    }

    .sind-cta-button {
        padding: 10px 24px;
        font-size: 0.95rem;
    }
}


/* ===================================================================
   REGISTRATION FORM — Prefix: sreg-
   =================================================================== */
.sreg-main {
    background: linear-gradient(to right, #e0eafc, #cfdef3);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.sreg-container {
    background: white;
    padding: 40px;
    max-width: 500px;
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.sreg-title {
    text-align: center;
    font-size: 1.8rem;
    margin-bottom: 20px;
    color: #004080;
}

.sreg-form-group {
    margin-bottom: 20px;
}

.sreg-form-group label {
    display: block;
    margin-bottom: 6px;
    font-weight: bold;
    color: #333;
}

.sreg-form-group input,
.sreg-form-group select {
    width: 100%;
    padding: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    font-size: 1rem;
}

.sreg-submit-btn {
    width: 100%;
    padding: 12px;
    background-color: #004080;
    color: white;
    font-size: 1rem;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.sreg-submit-btn:hover {
    background-color: #0066cc;
}

.sreg-login-link {
    text-align: center;
    margin-top: 15px;
    font-size: 0.95rem;
}

.sreg-success {
    color: green;
    text-align: center;
    margin-bottom: 15px;
}

.sreg-error {
    color: red;
    text-align: center;
    margin-bottom: 15px;
}

/* --- Registration Responsive --- */
@media (max-width: 480px) {
    .sreg-container {
        padding: 25px 20px;
    }

    .sreg-title {
        font-size: 1.45rem;
    }
}


/* ===================================================================
   LOGIN FORM — Prefix: slog-
   =================================================================== */
.slog-main {
    background: linear-gradient(to right, #f8f9fa, #dbe4f0);
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    padding: 20px;
}

.slog-container {
    background: white;
    padding: 40px;
    max-width: 450px;
    width: 100%;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.08);
}

.slog-title {
    text-align: center;
    font-size: 1.7rem;
    margin-bottom: 20px;
    color: #004080;
}

.slog-form-group {
    margin-bottom: 20px;
}

.slog-form-group label {
    display: block;
    margin-bottom: 6px;
    font-weight: bold;
    color: #333;
}

.slog-form-group input {
    width: 100%;
    padding: 10px;
    border: 1px solid #bbb;
    border-radius: 5px;
    font-size: 1rem;
}

.slog-submit-btn {
    width: 100%;
    padding: 12px;
    background-color: #004080;
    color: white;
    font-size: 1rem;
    font-weight: bold;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.slog-submit-btn:hover {
    background-color: #0066cc;
}

.slog-register-link {
    text-align: center;
    margin-top: 15px;
    font-size: 0.95rem;
}

.slog-error {
    color: red;
    text-align: center;
    margin-bottom: 15px;
}

/* --- Login Responsive --- */
@media (max-width: 480px) {
    .slog-container {
        padding: 25px 20px;
    }

    .slog-title {
        font-size: 1.4rem;
    }
}


/* ===================================================================
   EVENT DETAIL PAGE — Prefix: sevt-  (single event view)
   =================================================================== */
.sevt-main {
    padding: 40px 20px;
    background: linear-gradient(135deg, #d0d0e6, #94a3c4);
    min-height: 90vh;
}

.sevt-heading {
    text-align: center;
    font-size: 2rem;
    color: #003366;
    margin-bottom: 30px;
    text-shadow: 1px 1px 3px rgba(0,0,0,0.1);
}

.sevt-grid {
    display: grid;
    gap: 20px;
    grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
}

.sevt-card {
    padding: 20px;
    background: linear-gradient(135deg, #d376a0, #d26feb);
    border-radius: 10px;
    box-shadow: 0 4px 10px rgba(0,0,0,0.1);
    text-align: center;
}

.sevt-btn {
    display: inline-block;
    padding: 8px 16px;
    background: #0077cc;
    color: #fff;
    border: none;
    border-radius: 20px;
    text-decoration: none;
    margin-top: 10px;
    transition: background 0.3s;
    font-size: 0.95rem;
    cursor: pointer;
}

.sevt-btn:hover {
    background: #005fa3;
}

.sevt-btn.book {
    background: #00cc66;
}

.sevt-btn.book:hover {
    background: #00a854;
}

.sevt-detail-box {
    max-width: 600px;
    margin: 0 auto 20px auto;
    padding: 20px;
    background: linear-gradient(135deg, #d376a0, #d26feb);
    border-radius: 10px;
    box-shadow: 0 2px 8px rgba(0,0,0,0.1);
}

.sevt-msg {
    text-align: center;
    margin: 10px auto;
    font-weight: bold;
    font-size: 1rem;
}

.sevt-form {
    display: flex;
    justify-content: center;
    margin-top: 20px;
}

.sevt-msg.success {
    color: green;
}

.sevt-msg.warn {
    color: #cc9900;
}

.sevt-msg.error {
    color: red;
}

/* Glassmorphism event detail (kept for book.php single-event view) */
.sevt-wrapper {
    max-width: 800px;
    margin: auto;
    background-color: rgba(255, 255, 255, 0.07);
    backdrop-filter: blur(12px);
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 0 25px rgba(255, 255, 255, 0.15);
    animation: fadeInUp 0.8s ease-out;
}

.sevt-title {
    font-size: 2.5rem;
    text-align: center;
    margin-bottom: 25px;
    color: #ffffff;
    text-shadow: 0 0 15px #ff00ff, 0 0 30px #00ffff;
}

.sevt-banner {
    width: 100%;
    border-radius: 15px;
    margin-bottom: 25px;
    object-fit: cover;
    box-shadow: 0 0 20px rgba(255, 255, 255, 0.3);
}

.sevt-details-card {
    background: rgba(0, 0, 0, 0.4);
    padding: 25px;
    border-radius: 15px;
    margin-bottom: 30px;
}

.sevt-details-card p {
    margin-bottom: 15px;
    font-size: 1rem;
    color: #eee;
}

.sevt-details-card span {
    font-weight: bold;
    color: #ffd700;
}

.sevt-book-form {
    text-align: center;
}

.sevt-book-btn {
    background: linear-gradient(90deg, #ff0080, #7928ca);
    border: none;
    padding: 14px 32px;
    font-size: 1.1rem;
    color: #fff;
    border-radius: 30px;
    cursor: pointer;
    font-weight: bold;
    text-shadow: 0 0 6px #fff;
    box-shadow: 0 0 15px #ff00ff;
    transition: all 0.3s ease;
}

.sevt-book-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 0 25px #00ffff;
}

.sevt-login-reminder {
    text-align: center;
    font-size: 1rem;
    margin-top: 25px;
}

.sevt-login-reminder a {
    color: #00ffff;
    text-decoration: underline;
}

.sevt-error-msg {
    text-align: center;
    color: #ff4444;
    font-weight: bold;
    font-size: 1.2rem;
}

@keyframes fadeInUp {
    0% {
        opacity: 0;
        transform: translateY(40px);
    }
    100% {
        opacity: 1;
        transform: translateY(0);
    }
}

/* --- Event Page Responsive --- */
@media (max-width: 768px) {
    .sevt-main {
        padding: 25px 12px;
    }

    .sevt-heading {
        font-size: 1.5rem;
        margin-bottom: 20px;
    }

    .sevt-grid {
        grid-template-columns: 1fr;
        gap: 15px;
    }

    .sevt-card {
        padding: 16px;
    }

    .sevt-detail-box {
        padding: 16px;
        margin: 0 10px 20px 10px;
    }

    .sevt-wrapper {
        padding: 20px 15px;
    }

    .sevt-title {
        font-size: 1.6rem;
    }

    .sevt-details-card {
        padding: 16px;
    }

    .sevt-book-btn {
        padding: 12px 24px;
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .sevt-heading {
        font-size: 1.25rem;
    }

    .sevt-card h3 {
        font-size: 1.05rem;
    }

    .sevt-card p {
        font-size: 0.9rem;
    }

    .sevt-btn {
        padding: 8px 14px;
        font-size: 0.85rem;
    }
}


/* ===================================================================
   DASHBOARD — Prefix: sdash-
   =================================================================== */
.sdash-main {
    padding: 40px 20px;
    background: linear-gradient(to right, #e0eafc, #cfdef3);
    min-height: 90vh;
}

.sdash-container {
    max-width: 900px;
    margin: auto;
    background: white;
    padding: 30px;
    border-radius: 10px;
    box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}

.sdash-title {
    text-align: center;
    font-size: 2rem;
    color: #004080;
    margin-bottom: 20px;
}

.sdash-subtitle {
    font-size: 1.3rem;
    color: #333;
    margin: 20px 0 10px;
}

/* Responsive table wrapper */
.sdash-table-wrapper {
    width: 100%;
    overflow-x: auto;
    -webkit-overflow-scrolling: touch;
}

.sdash-table {
    width: 100%;
    border-collapse: collapse;
    margin-bottom: 20px;
    min-width: 500px;
}

.sdash-table th, .sdash-table td {
    border: 1px solid #ccc;
    padding: 10px;
    text-align: left;
}

.sdash-table th {
    background: #f0f0f0;
    color: #333;
    white-space: nowrap;
}

.sdash-btn {
    padding: 6px 12px;
    margin: 0 5px;
    border-radius: 5px;
    text-decoration: none;
    font-size: 0.9rem;
    display: inline-block;
}

.sdash-btn.edit {
    background-color: #28a745;
    color: white;
}

.sdash-btn.delete {
    background-color: #dc3545;
    color: white;
}

.sdash-msg {
    text-align: center;
    font-size: 1rem;
    color: #555;
}

/* --- Dashboard Responsive --- */
@media (max-width: 768px) {
    .sdash-main {
        padding: 20px 10px;
    }

    .sdash-container {
        padding: 20px 15px;
    }

    .sdash-title {
        font-size: 1.5rem;
    }

    .sdash-subtitle {
        font-size: 1.1rem;
    }

    .sdash-table th, .sdash-table td {
        padding: 8px 6px;
        font-size: 0.9rem;
    }

    .sdash-btn {
        padding: 5px 8px;
        font-size: 0.8rem;
        margin: 2px;
    }
}

@media (max-width: 480px) {
    .sdash-container {
        padding: 15px 10px;
    }

    .sdash-title {
        font-size: 1.3rem;
    }
}


/* ===================================================================
   CREATE / EDIT EVENT FORM — Prefix: cevt-
   =================================================================== */
.cevt-main {
    background: linear-gradient(135deg, #1c1b2f, #5f72bd);
    color: #ffffff;
    padding: 60px 20px;
    min-height: 90vh;
    font-family: 'Segoe UI', sans-serif;
}

.cevt-container {
    max-width: 600px;
    margin: auto;
    background: rgba(255, 255, 255, 0.08);
    padding: 40px;
    border-radius: 20px;
    box-shadow: 0 0 25px rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
}

.cevt-title {
    text-align: center;
    font-size: 2rem;
    color: #ffccff;
    margin-bottom: 30px;
    text-shadow: 0 0 10px #ff00cc, 0 0 20px #00ffff;
}

.cevt-form {
    display: flex;
    flex-direction: column;
}

.cevt-group {
    margin-bottom: 20px;
}

.cevt-group label {
    display: block;
    margin-bottom: 6px;
    font-weight: bold;
    color: #f9f9f9;
}

.cevt-group input {
    width: 100%;
    padding: 10px;
    border: none;
    border-radius: 8px;
    font-size: 1rem;
    background-color: rgba(255, 255, 255, 0.9);
    color: #000;
}

.cevt-btn {
    background: linear-gradient(90deg, #ff00cc, #3333ff);
    color: #fff;
    padding: 12px 25px;
    font-size: 1.1rem;
    border: none;
    border-radius: 30px;
    cursor: pointer;
    box-shadow: 0 0 15px #00ffff;
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.cevt-btn:hover {
    transform: scale(1.05);
    box-shadow: 0 0 25px #ff00ff;
}

.cevt-error {
    text-align: center;
    color: #ff6b6b;
    font-weight: bold;
    font-size: 1.1rem;
    margin-top: 20px;
}

/* --- Create/Edit Event Responsive --- */
@media (max-width: 768px) {
    .cevt-main {
        padding: 30px 15px;
    }

    .cevt-container {
        padding: 25px 20px;
    }

    .cevt-title {
        font-size: 1.5rem;
    }

    .cevt-btn {
        width: 100%;
        padding: 14px;
        font-size: 1rem;
    }
}

@media (max-width: 480px) {
    .cevt-container {
        padding: 20px 15px;
        border-radius: 14px;
    }

    .cevt-title {
        font-size: 1.3rem;
        margin-bottom: 20px;
    }

    .cevt-group input {
        padding: 10px 8px;
        font-size: 0.95rem;
    }
}
