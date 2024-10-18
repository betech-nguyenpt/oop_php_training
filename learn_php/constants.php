<!DOCTYPE html>
<body>
    <html>
        <?php
        /*To create a constant, use the define() function.*/
        define("Tan", "beautiful");
        echo Tan."<br>";
        /*You can also create a constant by using the const keyword.*/
        const TAN = "Beautiful Boy";
        echo TAN."<br>";
        /*you can create an Array constant using the define() function.*/
        define("NgocTan", [
            "beautiful",
             "Good",
              "tall"
            ]);
        echo NgocTan[1]."<br>";
        ?>
    </html>
</body>