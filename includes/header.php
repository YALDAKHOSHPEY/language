<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $page_title; ?></title>
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>
<body>
    <header class="main-header">
        <nav>
            <a href="index.php" class="logo">یادگیری هوشمند</a>
            <ul class="nav-links">
                <li><a href="courses.php">دوره‌ها</a></li>
                <li><a href="about.php">درباره ما</a></li>
                <?php if(isset($_SESSION['user_id'])): ?>
                    <li><a href="user-panel/overview.php">پنل کاربری</a></li>
                <?php else: ?>
                    <li><a href="auth/login.php">ورود</a></li>
                    <li><a href="auth/register.php">ثبت‌نام</a></li>
                <?php endif; ?>
            </ul>
        </nav>
    </header>
    <main></main>