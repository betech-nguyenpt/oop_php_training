<!DOCTYPE html>
<html>
<body>

<?php
$x = " Hello World! ";


/*Hàm PHP strlen()trả về độ dài của một chuỗi.*/
echo strlen("Hello world!");
echo "<br>";
/*Hàm PHP str_word_count()đếm số từ trong một chuỗi.*/
echo str_word_count("Hello world!");
echo "<br>";
/*Hàm PHP strpos()tìm kiếm một đoạn văn bản cụ thể trong một chuỗi.*/
echo strpos("Hello world!", "world");
echo"<br>";
/*Hàm này strtoupper()trả về chuỗi ký tự viết hoa:*/
echo strtoupper($x);
echo"<br>";
/*Hàm này strtolower()trả về chuỗi ở dạng chữ thường:*/
echo strtolower($x);
echo"<br>";
/*Hàm PHP str_replace()thay thế một số ký tự bằng một số ký tự khác trong chuỗi.*/
echo str_replace("World", "Tan", $x);
echo "<br>";
/*Hàm PHP strrev()đảo ngược một chuỗi.*/
echo strrev($x);
echo "<br>";
/*Khoảng trắng là khoảng trống trước và/hoặc sau văn bản thực tế và bạn thường muốn xóa khoảng trống này.(Xóa trim()bất kỳ khoảng trắng nào ở đầu hoặc cuối:)*/
echo "<input value='" . $x . "'>";
echo "<br>";
echo "<input value='" . trim($x) . "'>";
echo"<br>";
/*Hàm PHP explode()chia một chuỗi thành một mảng.
Tham số đầu tiên của explode()hàm biểu diễn "dấu phân cách". "Dấu phân cách" chỉ định nơi chia chuỗi.*/
$y = explode(" ", $x);
print_r($y);
echo "<br>";
/*Để nối hoặc kết hợp hai chuỗi, bạn có thể sử dụng .toán tử:*/
$a = "Nguyen";
$b = "Ngoc";
$c = "Tan";
$t = $a . $b . $c ;
echo $t;
echo "<br>";

/*Bạn có thể thêm một ký tự khoảng trắng như thế này:*/
$t = $a . " " . $b . " " .$c;
echo $t;
echo "<br>";

/*Bằng cách bao quanh hai biến trong dấu ngoặc kép với khoảng trắng ở giữa, khoảng trắng cũng sẽ xuất hiện trong kết quả:*/
$t = "$a $b $c";
echo $t;
echo "<br>";

/*Bạn có thể trả về một phạm vi ký tự bằng cách sử dụng substr()hàm.*/  
echo substr($x, 6, 6);
echo "<br>";
echo substr($t, 12, 3);
echo "<br>";
echo substr($t, 12);
echo "<br>";





  


?>

</body>
</html>
