<?php
$page_title = "ورود به سیستم";
include '../includes/header.php';

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    require '../includes/config.php';
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);
    $user = $stmt->fetch();
    
    if($user && password_verify($password, $user['password'])) {
        $_SESSION['user_id'] = $user['id'];
        $_SESSION['username'] = $user['username'];
        header("Location: ../user-panel/overview.php");
        exit();
    } else {
        $error = "ایمیل یا رمز عبور نادرست است";
    }
}
?>

<div class="auth-container">
    <h2>ورود به حساب کاربری</h2>
    <?php if(isset($error)): ?>
        <div class="alert error"><?php echo $error; ?></div>
    <?php endif; ?>
    <form method="post">
        <div class="form-group">
            <label for="email">ایمیل:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="password">رمز عبور:</label>
            <input type="password" id="password" name="password" required>
        </div>
        <button type="submit" class="btn">ورود</button>
    </form>
    <p>حساب کاربری ندارید؟ <a href="register.php">ثبت‌نام کنید</a></p>
</div>

<?php include '../includes/footer.php'; ?>