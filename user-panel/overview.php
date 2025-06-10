<?php
$page_title = "پنل کاربری - خلاصه فعالیت‌ها";
require '../includes/auth.php';
include '../includes/header.php';

// دریافت اطلاعات کاربر
$user_id = $_SESSION['user_id'];
$stmt = $pdo->prepare("SELECT * FROM users WHERE id = ?");
$stmt->execute([$user_id]);
$user = $stmt->fetch();
?>

<div class="dashboard-container">
    <div class="welcome-message">
        <h1>سلام <?php echo $user['username']; ?>!</h1>
        <p>وضعیت یادگیری شما امروز</p>
    </div>
    
    <div class="stats-cards">
        <!-- کارت‌های آمار -->
    </div>
    
    <div class="recent-courses">
        <h3>دوره‌های اخیر</h3>
        <!-- لیست دوره‌ها -->
    </div>
</div>

<?php include '../includes/footer.php'; ?>