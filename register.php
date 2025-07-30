<?php
include('includes/db.php');
include('includes/header-public.php');

$success = '';
$error = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name  = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];
    $role = $_POST['role'];

    if ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters.";
    } else {
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        $stmt = $conn->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $hashed_password, $role);

        if ($stmt->execute()) {
            $success = "Registration successful. You can now <a href='login.php'>login</a>.";
        } else {
            $error = "Error: " . $stmt->error;
        }

        $stmt->close();
    }
}
?>

<main class="sreg-main">
    <section class="sreg-container">
        <h2 class="sreg-title">Create an Account</h2>

        <?php if ($success): ?>
            <p class="sreg-success"><?php echo $success; ?></p>
        <?php elseif ($error): ?>
            <p class="sreg-error"><?php echo $error; ?></p>
        <?php endif; ?>

        <form action="register.php" method="POST" class="sreg-form" onsubmit="return validateRegisterForm()">
            <div class="sreg-form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="sreg-form-group">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required>
            </div>

            <div class="sreg-form-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required minlength="6">
            </div>

            <div class="sreg-form-group">
                <label for="confirm_password">Confirm Password</label>
                <input type="password" id="confirm_password" name="confirm_password" required>
            </div>

            <div class="sreg-form-group">
                <label for="role">Register As</label>
                <select id="role" name="role" required>
                    <option value="user">Student</option>
                    <option value="admin">Organizer</option>
                </select>
            </div>

            <button type="submit" class="sreg-submit-btn">Register</button>
        </form>

        <p class="sreg-login-link">Already have an account? <a href="login.php">Login here</a></p>
    </section>
</main>

<?php include('includes/footer.php'); ?>
