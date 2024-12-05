<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filters</title>
<style>
    table, th, td {
        border: 1px solid black;
        border-collapse: collapse;
    }
    th, td {
        padding: 5px;
    }
</style>    
</head>

<body>

<table>
    <tr>
        <td>Filter Name</td>
        <td>Filter ID</td>
    </tr>

    <?php
    /**
     * The filter_list() function can be used to list what the PHP filter extension offers.
     */
    foreach (filter_list() as $id => $filter) {
        echo '<tr><td>' . $filter . '</td><td>' . filter_id($filter) . '</td></tr>';
    }
    ?>
</table>

<?php
/**
 * The filter_var() function both validate and sanitize data.
 * The filter_var() function filters a single variable with a specified filter. It takes two pieces of data.
 */

// The following example uses the filter_var() function to remove all HTML tags from a string.
$str = "<h1>Hello World!</h1>";
$newstr = filter_var($str, FILTER_SANITIZE_STRING);
echo $newstr;
echo "<br>";
?>

<?php
/**
 * The following example uses the filter_var() function to check if the variable $int is an integer.
 * If $int is an integer, the output of the code below will be: "Integer is valid".
 * If $int is not an integer, the output will be: "Integer is not valid".
 */

$int = 15.02;

if (!filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
echo "<br>";
?>

<?php
/**
 * In the example above, if $int was set to 0, the function above will return "Integer is not valid".
 * To solve this problem, use the code below.
 */
$int = 0;

if (filter_var($int, FILTER_VALIDATE_INT) === 0 || !filter_var($int, FILTER_VALIDATE_INT) === false) {
  echo("Integer is valid");
} else {
  echo("Integer is not valid");
}
echo "<br>";
?>

<?php
/**
 * The following example uses the filter_var() function to check if the variable $ip is a valid IP address.
 */
$ip = "127.0.0.1";

if (!filter_var($ip, FILTER_VALIDATE_IP) === false) {
  echo("$ip is a valid IP address");
} else {
  echo("$ip is not a valid IP address");
}
echo "<br>";
?>

<?php
/**
 * The following example uses the filter_var() function to first remove all illegal characters from the $email variable, then check if it is a valid email address.
 */
$email = "nguyenngoctanpro15@gmail.com";

// Remove all illegal characters from email
$email = filter_var($email, FILTER_SANITIZE_EMAIL);

// Validate e-mail
if (!filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
  echo("$email is a valid email address");
} else {
  echo("$email is not a valid email address");
}
echo "<br>";
?>

<?php
/**
 * The following example uses the filter_var() function to first remove all illegal characters from a URL, then check if $url is a valid URL.
 */
$url = "https://www.w3schools.com";

// Remove all illegal characters from a url
$url = filter_var($url, FILTER_SANITIZE_URL);

// Validate url
if (!filter_var($url, FILTER_VALIDATE_URL) === false) {
  echo("$url is a valid URL");
} else {
  echo("$url is not a valid URL");
}
?>
    
</body>
</html>