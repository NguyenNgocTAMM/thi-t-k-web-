<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form và Kết quả</title>
</head>
<body>
    <h2>Nhập Thông Tin</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Kiểm tra và xử lý dữ liệu từ POST
        $name = isset($_POST["name"]) ? htmlspecialchars($_POST["name"]) : 'Chưa nhập tên';
        $email = isset($_POST["email"]) ? htmlspecialchars($_POST["email"]) : 'Chưa nhập email';

        echo "<h3>Kết quả từ POST:</h3>";
        echo "Welcome " . $name . "<br>";
        echo "Your email address is: " . $email . "<br><br>";
    } else {
        echo "<h3>Vui lòng nhập thông tin của bạn:</h3>";
    }
    ?>

    <!-- Form sử dụng phương thức POST -->
    <form method="post" action="">
        Tên: <input type="text" name="name"><br><br>
        Email: <input type="text" name="email"><br><br>
        <input type="submit" value="Gửi">
    </form>
</body>
</html>
