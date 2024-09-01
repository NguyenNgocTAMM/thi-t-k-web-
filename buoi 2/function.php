<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Phép Toán</title>
</head>
<body>

<form method="POST">
    <label for="number1">Số thứ nhất:</label>
    <input type="number" name="number1" id="number1" value="<?php echo isset($_POST['number1']) ? $_POST['number1'] : ''; ?>"><br><br>

    <label for="number2">Số thứ hai:</label>
    <input type="number" name="number2" id="number2" value="<?php echo isset($_POST['number2']) ? $_POST['number2'] : ''; ?>"><br><br>

    <label for="number">Số kiểm tra chẵn lẻ/nguyên tố:</label>
    <input type="number" name="number" id="number" value="<?php echo isset($_POST['number']) ? $_POST['number'] : ''; ?>"><br><br>

    <label for="operation">Chọn phép toán:</label>
    <select name="operation" id="operation">
        <option value="tong" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'tong') ? 'selected' : ''; ?>>Tính Tổng</option>
        <option value="hieu" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'hieu') ? 'selected' : ''; ?>>Tính Hiệu</option>
        <option value="tich" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'tich') ? 'selected' : ''; ?>>Tính Tích</option>
        <option value="thuong" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'thuong') ? 'selected' : ''; ?>>Tính Thương</option>
        <option value="chan-le" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'chan-le') ? 'selected' : ''; ?>>Kiểm Tra Chẵn/Lẻ</option>
        <option value="ngto" <?php echo (isset($_POST['operation']) && $_POST['operation'] == 'ngto') ? 'selected' : ''; ?>>Kiểm Tra Nguyên Tố</option>
    </select><br><br>

    <label for="operation2">Chọn phép toán kiểm tra thứ hai:</label>
    <select name="operation2" id="operation2">
        <option value="chan-le" <?php echo (isset($_POST['operation2']) && $_POST['operation2'] == 'chan-le') ? 'selected' : ''; ?>>Kiểm Tra Chẵn/Lẻ</option>
        <option value="ngto" <?php echo (isset($_POST['operation2']) && $_POST['operation2'] == 'ngto') ? 'selected' : ''; ?>>Kiểm Tra Nguyên Tố</option>
    </select><br><br>

    <input type="submit" value="Tính toán">
</form>

<?php
function tinhTong($a, $b) {
    return $a + $b;
}

function tinhHieu($a, $b) {
    return $a - $b;
}

function tinhTich($a, $b) {
    return $a * $b;
}

function tinhThuong($a, $b) {
    if ($b == 0) {
        return "Không thể chia cho 0";
    }
    return $a / $b;
}

function kiemTraNguyenTo($n) {
    if ($n < 2) {
        return "không phải số nguyên tố";
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return "không phải số nguyên tố";
        }
    }
    return "là số nguyên tố";
}

function kiemTraChan($n) {
    return ($n % 2 == 0) ? "là số chẵn" : "là số lẻ";
}

$result = '';
$result2 = '';

$number = isset($_POST['number']) ? $_POST['number'] : null;
$number1 = isset($_POST['number1']) ? $_POST['number1'] : null;
$number2 = isset($_POST['number2']) ? $_POST['number2'] : null;
$operation = isset($_POST['operation']) ? $_POST['operation'] : null;
$operation2 = isset($_POST['operation2']) ? $_POST['operation2'] : null;

if ($operation) {
    switch ($operation) {
        case "tong":
            $result = "Kết quả phép tính tổng: " . tinhTong($number1, $number2);
            break;
        case "hieu":
            $result = "Kết quả phép tính hiệu: " . tinhHieu($number1, $number2);
            break;
        case "tich":
            $result = "Kết quả phép tính tích: " . tinhTich($number1, $number2);
            break;
        case "thuong":
            $result = "Kết quả phép tính thương: " . tinhThuong($number1, $number2);
            break;
        case "chan-le":
            $result = "Số $number " . kiemTraChan($number);
            break;
        case "ngto":
            $result = "Số $number " . kiemTraNguyenTo($number);
            break;
        default:
            break;
    }
}

if ($operation2) {
    switch ($operation2) {
        case "chan-le":
            $result2 = "Số $number " . kiemTraChan($number);
            break;
        case "ngto":
            $result2 = "Số $number " . kiemTraNguyenTo($number);
            break;
        default:
            break;
    }
}

if ($result) {
    echo "<h3>Kết quả: $result</h3>";
}

if ($result2) {
    echo "<h3>Kết quả kiểm tra thứ hai: $result2</h3>";
}
?>

</body>
</html>
