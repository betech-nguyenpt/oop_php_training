<?php
// Khai báo biến
$a = 5;
$b = 10;
$c = 15;
$d = 20;

// Tính toán phức tạp
$result = $a + $b * $c - $d / 5 + ($a * $c - $b);

// Kết quả từng bước
// Bước 1: Tính phép nhân và chia
// $b * $c = 10 * 15 = 150
// $d / 5 = 20 / 5 = 4

// Bước 2: Thay vào biểu thức
// $result = 5 + 150 - 4 + (5 * 15 - 10)

// Bước 3: Tính phép nhân trong ngoặc
// 5 * 15 = 75
// $result = 5 + 150 - 4 + (75 - 10)

// Bước 4: Tính toán trong ngoặc
// 75 - 10 = 65

// Bước 5: Thay vào biểu thức
// $result = 5 + 150 - 4 + 65

// Bước 6: Tính từng phép cộng và trừ
// 5 + 150 = 155
// 155 - 4 = 151
// 151 + 65 = 216

echo "Result: " . $result . "\n"; // Output: 216

// Ví dụ khác với toán tử điều kiện
$isAdult = true;
$status = $isAdult ? "Adult" : "Minor";
echo "Status: " . $status . "\n"; // Output: Adult

// Ví dụ với toán tử AND và OR
$x = 7;
$y = 10;
$z = 5;

// Sử dụng toán tử so sánh
$result = ($x > $y && $y > $z) || ($x < $z);
echo "Logical Result: " . ($result ? "True" : "False") . "\n"; // Output: False
?>