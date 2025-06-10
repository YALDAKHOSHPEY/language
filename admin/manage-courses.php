<?php
require '../includes/admin-auth.php';
include '../includes/header.php';

// دریافت لیست دوره‌ها از پایگاه داده
?>

<div class="admin-container">
    <h2>مدیریت دوره‌های آموزشی</h2>
    
    <table class="courses-table">
        <thead>
            <tr>
                <th>عنوان دوره</th>
                <th>زبان</th>
                <th>سطح</th>
                <th>عملیات</th>
            </tr>
        </thead>
        <tbody>
            <!-- لیست دوره‌ها -->
        </tbody>
    </table>
    
    <a href="add-course.php" class="btn">افزودن دوره جدید</a>
</div>

<?php include '../includes/footer.php'; ?>