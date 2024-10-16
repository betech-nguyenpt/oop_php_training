<!DOCTYPE html>
<html>
<body>

<?php
$x = 5;
$y = "Hello world!";
$z = 'Hello world!';
$a = 3.14;
$b = true;

/*Bạn có thể lấy được kiểu dữ liệu của bất kỳ đối tượng nào bằng cách sử dụng var_dump()hàm. */
var_dump($x);
echo "<br>";

/*Một chuỗi có thể là bất kỳ văn bản nào bên trong dấu ngoặc kép. Bạn có thể sử dụng dấu ngoặc đơn hoặc dấu ngoặc kép:*/
var_dump($y);
echo "<br>"; 
var_dump($z);   

/*Số thực (floating point number) là số có dấu thập phân hoặc số ở dạng mũ. */
echo "<br>";
var_dump($a);

/*Boolean biểu diễn hai trạng thái có thể xảy ra: ĐÚNG hoặc SAI.*/
echo "<br>";
var_dump($b);

/*Mảng lưu trữ nhiều giá trị trong một biến duy nhất.*/
echo"<br>";
$cars = array("Volvo","BMW","Toyota");
var_dump($cars);

/*Lớp và đối tượng là hai khía cạnh chính của lập trình hướng đối tượng.*/
echo"<br>";
class Car {
    public $color;
    public $model;
    public function __construct($color, $model) {
      $this->color = $color;
      $this->model = $model;
    }
    public function message() {
      return "My car is a " . $this->color . " " . $this->model . "!";
    }
  }
  
  $myCar = new Car("red", "Volvo");
  var_dump($myCar);

  /*Null là một kiểu dữ liệu đặc biệt chỉ có thể có một giá trị: NULL.*/
  echo "<br>";
  $print = "Hello world";
  $print = null;
  var_dump($print);
 
  /*Nếu bạn gán giá trị số nguyên cho một biến, kiểu dữ liệu sẽ tự động là số nguyên*/
  $c = 5;
  var_dump($c);
  echo "<br>";
  $c = "Hello word";
  var_dump($c);

  /*Ép kiểu cho phép bạn thay đổi kiểu dữ liệu trên các biến:*/
  echo "<br>";
  $d = 10;
  $d = (string) $d;
  var_dump($d);


  


?>

</body>
</html>
