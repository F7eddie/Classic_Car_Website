<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

session_start();
include __DIR__ . '/db.php';

if (isset($_SESSION['user'])) {
    header("Location: account.php");
    exit();
}

$error = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name     = trim($_POST['name']);
    $email    = trim($_POST['email']);
    $phone    = trim($_POST['phone']);
    $password = $_POST['password'];
    $confirm  = $_POST['confirm_password'];

    if ($password !== $confirm) {
        $error = "Passwords do not match.";
    } elseif (strlen($password) < 6) {
        $error = "Password must be at least 6 characters.";
    } else {
        try {
            $stmt = $pdo->prepare("SELECT id FROM users WHERE email = ?");
            $stmt->execute([$email]);

            if ($stmt->rowCount() > 0) {
                $error = "Email already registered.";
            } else {
                $hashed = password_hash($password, PASSWORD_DEFAULT);
                $stmt = $pdo->prepare("INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)");
                $stmt->execute([$name, $email, $phone, $hashed]);

                $_SESSION['user'] = [
                    'id'    => $pdo->lastInsertId(),
                    'name'  => $name,
                    'email' => $email,
                    'phone' => $phone
                ];
                header("Location: account.php");
                exit();
            }
        } catch (Exception $e) {
            $error = "Error: " . $e->getMessage();
        }
    }
}
?>

<?php include 'header.php'; ?>

<section class="hero" style="height: auto; min-height: 90vh; padding: 140px 0;">
    <div class="container hero-content">
        <div class="hero-panel" style="max-width:460px; background:rgba(255,253,248,0.98);">
            <h1 style="color:#4a3c2d; text-align:center;">Create Account</h1>
            <p style="text-align:center; color:#6d5b45;">Join us to book classic cars</p>

            <?php if ($error): ?>
                <div style="background:#f8d7da; color:#721c24; padding:12px; border-radius:12px; margin:15px 0; text-align:center;">
                    <?= htmlspecialchars($error) ?>
                </div>
            <?php endif; ?>

            <form method="POST">
                <input type="text" name="name" class="form-input" placeholder="Full Name" required>
                <input type="email" name="email" class="form-input" placeholder="Email Address" required>
                <input type="tel" name="phone" class="form-input" placeholder="Phone Number">
                <input type="password" name="password" class="form-input" placeholder="Password" minlength="6" required>
                <input type="password" name="confirm_password" class="form-input" placeholder="Confirm Password" required>

                <button type="submit" class="btn btn-primary" style="width:100%; padding:16px;">Register</button>
            </form>

            <p style="text-align:center; margin-top:20px;">
                Already have an account? <a href="login.php">Login here</a>
            </p>
        </div>
    </div>
</section>

<footer>
    <div class="container">
        <p>© 2026 Old Timer Motors Co. — Classic Car Hire & Sales</p>
    </div>
</footer>

</body>
</html>