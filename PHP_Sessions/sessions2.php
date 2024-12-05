<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions2</title>
</head>
<body>

<?php
// Echo session variables that were set on previous page
echo  "Favorite color is " . $_SESSION["favcolor"] . "<br>";
echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
echo "<br>";
?>

<?php
/**
 * Another way to show all the session variable values for a user session is to run the following code.
 */
print_r($_SESSION);
echo "<br>";
?>

<?php
// to change a session variable, just overwrite it
$_SESSION["favcolor"] = "yellow";
print_r($_SESSION);
echo "<br>";
?>

<?php
/**
 * To remove all global session variables and destroy the session, use session_unset() and session_destroy().
 */

// remove all session variables
session_unset();

// destroy the session
session_destroy();

echo "All session variables are now removed, and the session is destroyed."
?>
    
</body>
</html>