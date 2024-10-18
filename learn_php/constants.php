<!DOCTYPE html>
<body>
    <html>
        <?php
        /*Để tạo hằng số, hãy sử dụng define()hàm.(define(name, value);)*/
        define("Tan", "beautiful");
        echo Tan."<br>";
        /*Bạn cũng có thể tạo hằng số bằng cách sử dụng const từ khóa.*/
        const TAN = "Beautiful Boy";
        echo TAN."<br>";
        /*bạn có thể tạo hằng số mảng bằng define()hàm.*/
        define("NgocTan", [
            "beautiful",
             "Good",
              "tall"
            ]);
        echo NgocTan[1]."<br>";
        ?>
    </html>
</body>