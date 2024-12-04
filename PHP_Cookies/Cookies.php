<!DOCTYPE html>
<?php
/**
 * The setcookie() function must appear BEFORE the <html> tag.
 */
$cookie_name = "user";
$cookie_value = "John Doe";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day

// set the expiration date to one hour ago
setcookie("user", "", time() - 3600);

/**
 * /**
 * First, try to create a test cookie with the setcookie() function, then count the $_COOKIE array variable.
 */
setcookie("test_cookie", "test", time() + 3600, '/');

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>

<?php
/**
 * We then retrieve the value of the cookie "user" (using the global variable $_COOKIE).
 * We also use the isset() function to find out if the cookie is set.
 */
if(!isset($_COOKIE[$cookie_name])) {
  echo "Cookie named '" . $cookie_name . "' is not set!";
} else {
  echo "Cookie '" . $cookie_name . "' is set!<br>";
  echo "Value is: " . $_COOKIE[$cookie_name];
  echo "<br>";
}

/**
 * To delete a cookie, use the setcookie() function with an expiration date in the past.
 */
echo "Cookie 'user' is deleted."."<br>";

/**
 * First, try to create a test cookie with the setcookie() function, then count the $_COOKIE array variable.
 */
if(count($_COOKIE) > 0) {
    echo "Cookies are enabled.";
  } else {
    echo "Cookies are disabled.";
  }
?>
    
</body>
</html>