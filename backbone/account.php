<?php
session_start();
include __DIR__ . '/db.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$user = $_SESSION['user'];
?>

<?php include 'header.php'; ?>

<section style="padding: 140px 0 100px; background:#f8f3ea;">
    <div class="container">
        <h1 style="text-align:center; font-size:3rem; color:#4a3c2d;">
            Welcome back, <?= htmlspecialchars($user['name']) ?>!
        </h1>

        <div style="max-width:700px; margin:40px auto; background:white; padding:40px; border-radius:24px;">
            <h2>Your Account</h2>
            <p><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></p>
            <p><strong>Phone:</strong> <?= htmlspecialchars($user['phone'] ?? 'Not provided') ?></p>

            <hr style="margin:30px 0;">
            <h2>Your Bookings</h2>
            <p style="color:#888;">You currently have no active bookings.</p>
        </div>

        <div style="text-align:center;">
            <a href="logout.php" class="btn btn-primary" style="background:#c44; color:white;">Logout</a>
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