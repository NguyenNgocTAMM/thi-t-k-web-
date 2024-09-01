<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả từ POST</title>
</head>
<body>
    <h2>Kết quả từ POST với Validation Server-side</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $errors = [];

        // Validate name
        if (empty($_POST['name'])) {
            $errors[] = "Tên không được để trống.";
        } else {
            $name = htmlspecialchars($_POST['name']);
        }

        // Validate email
        if (empty($_POST['email'])) {
            $errors[] = "Email không được để trống.";
        } elseif (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors[] = "Địa chỉ email không hợp lệ.";
        } else {
            $email = htmlspecialchars($_POST['email']);
        }

        // Validate book name
        if (empty($_POST['book_name'])) {
            $errors[] = "Tên sách không được để trống.";
        } else {
            $book_name = htmlspecialchars($_POST['book_name']);
        }

        // Validate author
        if (empty($_POST['author'])) {
            $errors[] = "Tác giả không được để trống.";
        } else {
            $author = htmlspecialchars($_POST['author']);
        }

        // Validate publisher
        if (empty($_POST['publisher'])) {
            $errors[] = "Nhà xuất bản không được để trống.";
        } else {
            $publisher = htmlspecialchars($_POST['publisher']);
        }

        // Validate year
        if (empty($_POST['year'])) {
            $errors[] = "Năm xuất bản không được để trống.";
        } elseif (!is_numeric($_POST['year'])) {
            $errors[] = "Năm xuất bản phải là một số.";
        } else {
            $year = htmlspecialchars($_POST['year']);
        }

        // Hiển thị kết quả hoặc lỗi
        if (empty($errors)) {
            echo "<h3>Thông tin đã nhập:</h3>";
            echo "Tên: " . $name . "<br>";
            echo "Email: " . $email . "<br>";
            echo "Tên sách: " . $book_name . "<br>";
            echo "Tác giả: " . $author . "<br>";
            echo "Nhà xuất bản: " . $publisher . "<br>";
            echo "Năm xuất bản: " . $year . "<br>";
        } else {
            echo "<h3>Lỗi:</h3>";
            foreach ($errors as $error) {
                echo $error . "<br>";
            }
            echo "<br><a href='form.html'>Quay lại form</a>";
        }
    }
    ?>
</body>
</html>
