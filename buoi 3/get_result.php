<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kết quả từ GET</title>
</head>
<body>
    <h2>Kết quả từ GET</h2>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        // Kiểm tra xem các trường có tồn tại trong GET hay không
        $book_name = isset($_GET['book_name']) ? $_GET['book_name'] : 'Chưa nhập tên sách';
        $author = isset($_GET['author']) ? $_GET['author'] : 'Chưa nhập tác giả';
        $publisher = isset($_GET['publisher']) ? $_GET['publisher'] : 'Chưa nhập nhà xuất bản';
        $year = isset($_GET['year']) ? $_GET['year'] : 'Chưa nhập năm xuất bản';

        // Hiển thị dữ liệu
        echo "<h3>Thông tin đã nhập:</h3>";
        echo "Tên sách: " . htmlspecialchars($book_name) . "<br>";
        echo "Tác giả: " . htmlspecialchars($author) . "<br>";
        echo "Nhà xuất bản: " . htmlspecialchars($publisher) . "<br>";
        echo "Năm xuất bản: " . htmlspecialchars($year) . "<br>";
    }
    ?>
</body>
</html>
