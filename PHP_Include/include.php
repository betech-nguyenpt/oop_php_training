<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<h1> Welcome to my home page! </h1>
<p> Some text. </p>
<p> Some more text. </p>
<?php
/**
 * "require" will produce a fatal error (E_COMPILE_ERROR) and stop the script.
 * "include" will only produce a warning (E_WARNING) and the script will continue.
 * Use require when the file is required by the application.
 * Use include when the file is not required and application should continue when file is not found.
 */
?>

<?php 
/**
 * To include the good file in a page, use the include
 */
include 'good.php'; 
?>

<div class = " menu">
    <?php 
    /**
     * Here is how it can be done (we are using a <div> element so that the menu easily can be styled with CSS later).
     */
    include 'menu.php'; 
    ?>
</div>

<?php 
/**
 * If we include the "vars.php" file, the variables can be used in the calling file.
 */
include 'vars.php';
echo " I have a $color $car.";
?>

<?php
/**
 * However, there is one big difference between include and require,
 * when a file is included with the include statement and PHP cannot find it, the script will continue to execute.
 */
include 'noFileExists.php';
echo " I have a $color $car. ";
?>

<?php
/**
 * If we do the same example using the require statement,
 * The echo statement will not be executed because the script execution dies after the require statement returned a fatal error.
 */
require 'noFileExists.php';
echo " I have a $color $car. ";
?>

</body>
</html>