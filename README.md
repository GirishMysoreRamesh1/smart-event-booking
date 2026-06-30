# 🎓 Smart Event Booking System

A full-stack web application that enables university students and campus administrators to streamline event creation, registration, and management using a browser-based interface. Built with PHP, MySQL, JavaScript, HTML, and CSS.

## 🌐 Live Preview

This project is designed to run locally via XAMPP. Please see the installation instructions below.

## 📁 Features

- 👨‍🎓 Student users can:
  - View all upcoming events
  - Register for events
  - Manage their booked events

- 🛠️ Admin users can:
  - Create, edit, and delete events
  - View who has registered
  - Manage event capacity and details

- 🔐 Secure login/logout session system
- 📱 Fully responsive design for all screen sizes
- ✨ Animations and glowing visual elements for improved UI/UX

## 🧑‍💻 Technologies Used

- **Frontend**: HTML5, CSS3, JavaScript
- **Backend**: PHP 8.x
- **Database**: MySQL (via phpMyAdmin)
- **Server Environment**: XAMPP (Apache + MySQL)
- **Version Control**: Git & GitHub

## ⚙️ Installation & Setup Guide

### Prerequisites

- XAMPP installed on your system
- Git installed on macOS
- A web browser

### Steps

1. Clone the repository:
   ```bash
   git clone https://github.com/CodeMaster-01-prog/smart-event-booking.git
   ```

2. Move the folder to XAMPP's htdocs:
   ```bash
   mv smart-event-booking /Applications/XAMPP/htdocs/
   ```

3. Start Apache and MySQL via XAMPP.

4. Import the database:
   - Open [http://localhost/phpmyadmin](http://localhost/phpmyadmin)
   - Create a database named `event_booking_system`
   - Import the file: `event_booking_system.sql` located in the root of the project

5. Access the application:
   ```
   http://localhost/smart-event-booking
   ```

## 🔑 Default Credentials for Testing

### Admin Login:
- Email: `bob@example.com`
- Password: `$2y$10$R2etAnkPNHHM852JHkbcieu06oBbCWUxMlbMgScX.jmqffeUBazFC` 

### User Login:
- Email: `alice@example.com`
- Password: `$2y$10$Sh02rOfYWem1aLZLp0jvXuzkGOX6rKoEpX9mWZYAtYbzW2c0YxVPe`

## 📂 Repository Structure

```
smart-event-booking/
├── includes/           # Shared header, footer, DB connection
├── css/                # All custom stylesheets
├── js/                 # JavaScript animations and validations
├── docs_phase3/        # Abstract & screencast (for submission)
├── event_booking_system.sql  # SQL dump for database setup
├── *.php               # All functional pages (login, register, dashboard, etc.)
├── README.md
├── github_link.txt
└── .gitignore
```

## 🎬 Screencast

A 1–2 minute screencast of the working system is available inside `/docs_phase3/`.

## 🧠 Lessons Learned

- Gained hands-on experience in integrating frontend and backend logic
- Implemented session management and role-based access control
- Understood database relationships for booking, users, and events
- Refined UI through animations and responsiveness

## 📜 License

This project is part of a university coursework assignment and is not intended for commercial reuse.

---

🔗 GitHub Repository: [https://github.com/CodeMaster-01-prog/smart-event-booking](https://github.com/CodeMaster-01-prog/smart-event-booking)
