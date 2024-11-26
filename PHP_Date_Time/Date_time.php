<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    /**
     * The required format parameter of the "date()" function specifies how to format the date (or time).
     * d - Represents the day of the month (01 to 31).
     * m - Represents a month (01 to 12)
     * Y - Represents a year (in four digits).
     * l (lowercase 'L') - Represents the day of the week.
     */

    echo "Today is " . date("Y/m/d") . "<br>";
    echo " Today id " . date("Y.m.d") . "<br>";
    echo "Today is " . date("Y-m-d") . "<br>";
    echo "Today is " . date("l");

    /**
     * Use the "date()" function to automatically update the copyright year on your website.
     * Can be written like this "(© 2010-<?php echo date("Y");?>)"
     */
    echo " 2001-" . date("Y")."<br>";

    /**
     * H - 24-hour format of an hour (00 to 23)
     * h - 12-hour format of an hour with leading zeros (01 to 12)
     * i - Minutes with leading zeros (00 to 59)
     * s - Seconds with leading zeros (00 to 59)
     * a - Lowercase Ante meridiem and Post meridiem (am or pm)
     */
    echo "The time is " . date("h:i:sa")."<br>";

    /**
     * if you need the time to be correct according to a specific location, you can set the timezone you want to use.
     */
    date_default_timezone_set("asia/Ho_Chi_Minh");
    echo "The time is " . date("H:i:sa")."<br>";

    /**
     * The PHP "mktime()" function returns the Unix timestamp for a date.
     * The Unix timestamp contains the number of seconds between the Unix Epoch (January 1 1970 00:00:00 GMT) and the time specified.
     */
    $d = mktime(14, 05, 15, 26, 11, 2024);
    echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";

    /**
     *  Creates a date and time from the "strtotime()" function.
     */
    $d = strtotime("14:15pm November 26 2024");
    echo "Created date is " . date("Y-m-d h:i:sa", $d)."<br>";

    /**
     * About converting a string to a date, so you can put in various values.
     */
    $d = strtotime("tomorrow");
    echo date("Y-m-d", $d)."<br>";

    $d = strtotime("next Sunday");
    echo date("Y-m-d h:i:sa", $d) . "<br>";

    $d = strtotime("+5 years");
    echo date("Y-m-d h:i:sa", $d). "<br>";

    /**
     * Outputs the dates for the next six Sunday.
     */
    $startdate = strtotime("Sunday");
    $enddate = strtotime("+7 weeks", $startdate);

    while ($startdate < $enddate) {
        echo date("M d", $startdate) . "<br>";
        $startdate = strtotime("+1 weeks", $startdate);
    }

    /**
     * 
     */
    $d1 = strtotime("February 15 2025");
    $d2 = ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 ." days until 15, 2, 2025.";
    echo "<br>";

    $d1 = strtotime("July 23 2025");
    $d2 = ceil(($d1-time())/60/60/24);
    echo "There are " . $d2 ." days until 23, 7, 2025.";
    ?>
    
    
    
</body>
</html>