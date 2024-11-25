<!DOCTYPE html>
<html>
<head>
</head>
<body>
    
<?php
// Define variables and set to empty values
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /**
     * We will name the function "test_input()".
     * we can check each "$_POST"
     * variable with the "test_input()" function
     */

    $name = test_input($_POST["name"]);
    $email = test_input($_POST["email"]);
    $website = test_input($_POST["website"]);
    $commit = test_input($_POST["comment"]);
    $gender = test_input($_POST["gender"]);
}
/**
 * Summary of test_input
 * @param mixed $data
 * @return string
 */
function test_input($data) {
    // Strip unnecessary characters (extra space, tab, newline) from the user input data (with the PHP "trim()" function).
    $data = trim($data);
    // Remove backslashes \ from the user input data (with the PHP "stripslashes()" function).
    $data = stripslashes($data);
    // The first thing we will do is to pass all variables through PHP's "htmlspecialchars()" function.
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<form method = "post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"])?>">
    name: <input type = "text" name = "name">
    <br><br>
    E-mail: <input type = "text" name = "email">
    <br><br>
    Website: <input type = "text" name = "website">
    <br><br>
    Comment: <textarea name = "comment" rows = "5" cols = "40"></textarea>
    <br><br>
    Gender:
    <input type = "radio" name = "gender" value = "female">Female
    <input type = "radio" name = "gender" value = "male">Male
    <input type = "radio" name = "gender" value = "other">Other
    <br><br>
    <input type = "submit" name = "submit" value = "Submit">
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>

</body>
</html>