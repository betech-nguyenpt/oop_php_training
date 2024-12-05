<?php
/**
 * The session_start() function must be the very first thing in your document. Before any HTML tags.
 */

// Star the session
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions</title>
</head>
<body>

<?php
/**
 * A session is started with the session_start() function.
 * Session variables are set with the PHP global variable: $_SESSION.
 */

// Set session variables
$_SESSION["favcolor"] = "green";
$_SESSION["favanimal"] = "cat";
echo "Sesson variables are set.";
?>
    
</body>
</html>