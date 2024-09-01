<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<html>
    <body>
        <h2>Kết quả từ POST</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Kiểm tra xem các trường có tồn tại trong POST hay không
            $book_name = isset($_POST['book_name']) ? $_POST['book_name'] : 'Chưa nhập tên sách';
            $author = isset($_POST['author']) ? $_POST['author'] : 'Chưa nhập tác giả';
            $publisher = isset($_POST['publisher']) ? $_POST['publisher'] : 'Chưa nhập nhà xuất bản';
            $year = isset($_POST['year']) ? $_POST['year'] : 'Chưa nhập năm xuất bản';

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
