<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $books = []; 
    for ( $i = 1; $i <= 100; $i++){
        $books[] = ["STT" => $i, "Tên sách" => "Tensach" .$i, "Nội dung sách" => "Noidung" .$i];
    }

    // Logic phân trang
    $rowsPerPage = 10;
    $totalRows = count($books);
    $totalPages = ceil($totalRows / $rowsPerPage);

    if (isset($_GET['page']) && is_numeric($_GET['page'])) {
        $currentPage = (int)$_GET['page'];
    } else {
        $currentPage = 1;
    }

    if ($currentPage > $totalPages) {
        $currentPage = $totalPages;
    }
    if ($currentPage < 1) {
        $currentPage = 1;
    }

    $startIndex = ($currentPage - 1) * $rowsPerPage;
    $endIndex = min($startIndex + $rowsPerPage - 1, $totalRows - 1);

    // Hiển thị bảng
    echo "<table border='1'>";
    echo "<tr><th>STT</th><th>Tên sách</th><th>Nội dung sách</th></tr>";
    for ($i = $startIndex; $i <= $endIndex; $i++) {
        echo "<tr><td>{$books[$i]['STT']}</td><td>{$books[$i]['Tên sách']}</td><td>{$books[$i]['Nội dung sách']}</td></tr>";
    }
    echo "</table>";

    // Điều hướng
    echo "<div>";
    if ($currentPage > 1) {
        echo "<a href='?page=" . ($currentPage - 1) . "'>Trang trước</a> ";
    }
    for ($i = 1; $i <= $totalPages; $i++) {
        echo "<a href='?page=$i'>$i</a> ";
    }
    if ($currentPage < $totalPages) {
        echo "<a href='?page=" . ($currentPage + 1) . "'>Trang sau</a>";
    }
    echo "</div>";
    ?>
</body>
</html>
