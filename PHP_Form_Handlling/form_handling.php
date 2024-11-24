<!DOCTYPE html>
<html lang="en">
<body>
/**
 * The PHP superglobals #_GET and $_POST are used to collect from-data.
 * $_GET is an array of variables passed to the current script via the URL parameters.
 * $_POST is an array of variables to the current script via the HTTP POST method.
 */
<form action="welcome.php" method="post">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

welcome <?php echo $_POST["name"]; ?><br>
Your email address is: <?php echo $_POST["email"]; ?>

<form action="welcome_get.php" method="GET">
    Name: <input type="text" name="name"><br>
    E-mail: <input type="text" name="email"><br>
    <input type="submit">
</form>

welcome <?php echo $_GET["name"]; ?><br>
Your email address is: <?php echo $_GET["email"]; ?>]
</body>
</html>