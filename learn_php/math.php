<!DOCTYPE html>
<html>
    <body>
    
            <?php  
            /*Hàm pi()trả về giá trị PI:*/
            echo (pi())."<br>"; 
            /*Các hàm min()và max()có thể được sử dụng để tìm giá trị thấp nhất hoặc cao nhất trong danh sách đối số:*/
            echo(max(0,200,50,-53,-120)) ."<br>";
            echo(min(0,200,50,-53,-120))."<br>";
            /*Hàm abs()trả về giá trị tuyệt đối (dương) của một số:*/
            echo(abs(-152))."<br>";
            /*Hàm sqrt()trả về căn bậc hai của một số:*/
            echo(sqrt(64))."<br>";
            echo(sqrt(255))."<br>";
            echo(sqrt(225))."<br>";
            /*Hàm này round()làm tròn số dấu phẩy động thành số nguyên gần nhất:*/
            echo(round(12))."<br>";
            echo(round(-1.3))."<br>";
            echo(round(0.49))."<br>";
            echo(round(0.99))."<br>";
            /*Hàm này rand()tạo ra một số ngẫu nhiên:*/
            echo(rand())."<br>";
            echo(rand())."<br>";
            /*nếu bạn muốn một số nguyên ngẫu nhiên trong khoảng từ 10 đến 100 (bao gồm cả 10 và 100), hãy sử dụng rand(10, 100):*/
            echo(rand(0,100))."<br>";

           ?>
    
    </body>
</html>