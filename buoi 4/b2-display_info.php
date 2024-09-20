<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thông Tin Đã Gửi</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            max-width: 600px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            margin-bottom: 8px;
            display: block;
        }
        input[type="text"], input[type="email"], input[type="file"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 12px;
            border: none;
            width: 100%;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Thông Tin Đã Gửi</h2>
    <?php
    session_start(); // Bắt đầu phiên làm việc (session)

    // Hiển thị thông tin session để gỡ lỗi
    echo "<pre>";
    print_r($_SESSION);
    echo "</pre>";

    // Kiểm tra nếu có thông tin trong session
    if (isset($_SESSION['first_name'])) { 
        echo "<p><strong>Họ:</strong> " . htmlspecialchars($_SESSION['first_name']) . "</p>";
        echo "<p><strong>Tên:</strong> " . htmlspecialchars($_SESSION['last_name']) . "</p>";
        echo "<p><strong>Email:</strong> " . htmlspecialchars($_SESSION['email']) . "</p>";
        echo "<p><strong>Mã Hóa Đơn:</strong> " . htmlspecialchars($_SESSION['invoice_id']) . "</p>";

        // Hiển thị file hóa đơn đã tải lên nếu có
        if (isset($_SESSION['fileToUpload'])) {
            if ($_SESSION['fileToUpload'] !== 'Upload failed.') {
                echo "<p><strong>Hóa Đơn Đã Tải Lên:</strong><br><img src='" . htmlspecialchars($_SESSION['fileToUpload']) . "' alt='Hóa Đơn' style='max-width: 100px;'></p>";
            } else {
                echo "<p><strong>Thông báo:</strong> " . htmlspecialchars($_SESSION['fileToUpload']) . "</p>";
            }
        }

        echo "<p><strong>Thông Tin Bổ Sung:</strong> " . nl2br(htmlspecialchars($_SESSION['additional_info'])) . "</p>";
    } else {
        echo "<p>Không có thông tin nào để hiển thị.</p>";
    }

    // Hiển thị lỗi PHP nếu có
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
    ?>
</div>

</body>
</html>
