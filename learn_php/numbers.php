<!DOCTYPE html>
<html>
<body>

<?php
  /*Kiểm tra xem kiểu của biến có phải là số nguyên không:*/
$x = 5985;
var_dump(is_int($x));
echo "<br>";
$x = 59.85;
var_dump(is_int($x));
echo "<br>";
/*Kiểm tra xem kiểu của biến có phải là float không:*/
var_dump(is_float($x));
echo "<br>";
/*Kiểm tra xem giá trị số là hữu hạn hay vô hạn:*/
$y = 1.9e411;
var_dump($y);
var_dump($x);
echo "<br>";
/*Tính toán không hợp lệ sẽ trả về NaNgiá trị:*/
$z = acos(15);
var_dump($z);
echo "<br>";
/*Hàm PHP is_numeric()có thể được sử dụng để tìm xem một biến có phải là số hay không. Hàm trả về true nếu biến là số hoặc chuỗi số, nếu không thì trả về false.*/
$d = "Tan";;
var_dump(is_numeric($d));
echo "<br>";
var_dump(is_numeric($x));
echo "<br>";
/*Các hàm (int), (integer), và intval()thường được sử dụng để chuyển đổi một giá trị thành số nguyên.*/
$e = 15.02;
$int_cast = (int)$e;
echo $int_cast;
echo "<br>";
$f = "15.02";
$int_cast = (int)$f;
echo $int_cast;
echo"<br>";

?>  
<pre>
<?php  
/*Để chuyển sang chuỗi, hãy sử dụng (string)câu lệnh:*/ 
$a = true;
$b = NULL;
$x = (string) $x;
$y =(string) $y;
$d = (string) $d;
$a = (string) $a;
$b = (string) $b;
var_dump($x);
var_dump($y);
var_dump($d);
var_dump($a);
var_dump($b);
echo "<br>";
/*Để chuyển sang số nguyên, hãy sử dụng (int)câu lệnh:*/
$x = (int) $x;
$y = (int) $y;
$d = (int) $d;
$a = (int) $a;
$b = (int) $b;
var_dump($x);
var_dump($y);
var_dump($d);
var_dump($a);
var_dump($b);
echo"<br/>";
/*Để ép kiểu thành float, hãy sử dụng (float)câu lệnh:*/
$o = "15 Tan";
$i = "Tan 15";
$x = (float) $x;
$o = (float) $o;
$i = (float) $i;
$a = (float) $a;
$b = (float) $b;
var_dump($x);
var_dump($o);
var_dump($i);
var_dump($a);
var_dump($b);
echo"<br/>";
/*Để chuyển sang kiểu boolean, hãy sử dụng (bool)câu lệnh:*/
$a = (bool) $a;
$b = (bool) $b;
$d = (bool) $d;
$e = (bool) $e;
$f = (bool) $f;
$x = (bool) $x;
$y = (bool) $y;
$z = (bool) $z;
$o = (bool) $o;
$i = (bool) $i;
var_dump($a);
var_dump($b);
var_dump($d);
var_dump($e);
var_dump($f);
var_dump($x);
var_dump($y);
var_dump($z);
var_dump($o);
var_dump($i);
echo"<br/>";
?>
</pre>

<pre>
    <?php
    /*Để ép kiểu sang mảng, hãy sử dụng (array)câu lệnh:*/
    $h = "Hello World";
    $h = (array) $h;
    var_dump($h);
    $j = 20;
    $l = "3.14";
    $u = true;
    $s = NULL;
    $j = (array) $j;
    $i = (array) $i;
    $u = (array) $u;
    $s = (array) $s;
    var_dump ($j);
    var_dump($i);
    var_dump($u);
    var_dump($s);
    echo "<br>";
/*Các đối tượng được chuyển đổi thành mảng kết hợp trong đó tên thuộc tính trở thành khóa và giá trị thuộc tính trở thành giá trị:*/
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
      
      $myCar = (array) $myCar;
      var_dump($myCar);
      echo"<br>";
/*Để chuyển sang đối tượng, hãy sử dụng (object)câu lệnh:*/
      $h = (object) $h;
      $j = (object) $j;
      $i = (object) $i;
      $u = (object) $u;
      $s = (object) $s;
      var_dump($h);
      var_dump($j);
      var_dump($i);
      var_dump($u);
      var_dump($s);
      echo "<br>";

      /*Khi chuyển đổi thành đối tượng, hầu hết các kiểu dữ liệu đều chuyển đổi thành một đối tượng có một thuộc tính, được gọi là "scalar", với giá trị tương ứng.*/
    $k = array("Volvo", "BMW", "Toyota"); 
$l = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43"); 
$k = (object) $k;
$l = (object) $l;
var_dump($l);
var_dump($k);
echo"<br>";

    ?>
</pre>


</body>
</html>
