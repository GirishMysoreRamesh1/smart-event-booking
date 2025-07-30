<?php
session_start();
include('includes/db.php');
include('includes/header-public.php');

$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email    = trim($_POST['email']);
    $password = $_POST['password'];

    // Validate and fetch user
    $stmt = $conn->prepare("SELECT user_id, name, email, password, role FROM users WHERE email = ?");
    $stmt->bind_param("s", $email);
    $stmt->execute();

    $result = $stmt->get_result();
    if ($result->num_rows === 1) {
        $user = $result->fetch_assoc();

        if (password_verify($password, $user['password'])) {
            // Store session
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['name']    = $user['name'];
            $_SESSION['email']   = $user['email'];
            $_SESSION['role']    = $user['role'];

            header("Location: dashboard.php");
            exit();
        } else {
            $error = "Invalid password.";
        }
    } else {
        $error = "No user found with this email.";
    }

    $stmt->close();
}
?>

<main class="slog-main">
    <section class="slog-container">
        <h2 class="slog-title">Login to Your Account</h2>

        <?php if ($error): ?>
            <p class="slog-error"><?php echo $error; ?></p>
        <?php endif; ?>

        <form action="login.php" method="POST" class="slog-form" onsubmit="return validateLoginForm()">
            <div class="slog-form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="slog-form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit" class="slog-submit-btn">Login</button>
        </form>

        <p class="slog-register-link">Don't have an account? <a href="register.php">Register here</a></p>
    </section>
</main>

<?php include('includes/footer.php'); ?>
