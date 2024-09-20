<?php
session_start();

// Lưu trữ dữ liệu form vào các biến session
$_SESSION['first_name'] = $_POST['first_name'];
$_SESSION['last_name'] = $_POST['last_name'];
$_SESSION['email'] = $_POST['email'];
$_SESSION['invoice_id'] = $_POST['invoice_id'];
$_SESSION['pay_for'] = isset($_POST['pay_for']) ? $_POST['pay_for'] : [];
$_SESSION['additional_info'] = $_POST['additional_info'];

// Xử lý tệp tải lên
if (isset($_FILES['fileToUpload']) && $_FILES['fileToUpload']['error'] == UPLOAD_ERR_OK) {
    $uploadDir = 'uploads/';
    $uploadFile = $uploadDir . basename($_FILES['fileToUpload']['name']);
    
    if (move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $uploadFile)) {
        $_SESSION['fileToUpload'] = $uploadFile;
    } else {
        $_SESSION['fileToUpload'] = 'Upload failed.';
    }
}

// Đặt cookie (cookie này sẽ tồn tại trong 30 ngày)
setcookie('first_name', $_POST['first_name'], time() + (86400 * 30), "/");
setcookie('last_name', $_POST['last_name'], time() + (86400 * 30), "/");
setcookie('email', $_POST['email'], time() + (86400 * 30), "/");
setcookie('invoice_id', $_POST['invoice_id'], time() + (86400 * 30), "/");

// Sau khi lưu trữ, chuyển hướng người dùng đến trang hiển thị thông tin
header("Location: b2-display_info.php");
exit();
?>
