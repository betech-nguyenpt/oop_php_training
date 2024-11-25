<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {color: #FF0000;} /* Style for displaying error messages */
    </style>
</head>
<body>

<?php
/**
 * Define variables and set to empty values
 * These error variables will hold error messages for the required fields.
 * Have also added an if else statement for each "$_POST" variable.
 * This checks if the $_POST variable is empty (with the PHP empty() function).
 * 
 */
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    /**
     * If it is empty, an error message is stored in the different error variables.
     * if it is not empty, it sends the user input data through the "test_input()" function.
     */
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
    }

    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
    }

    if (empty($_POST["comment"])) {
        $comment = "";
    } else {
        $comment = test_input($_POST["comment"]);
    }

    if (empty($_POST["gender"])) {
        $genderErr = "Gender is required";
    } else {
        $gender = test_input($_POST["gender"]);
    }
}

/**
 * Summary of test_input
 * @param mixed $data
 * @return string
 */
function test_input($data) {
    // Remove extra spaces
    $data = trim($data);
    // Remove backslashes
    $data = stripslashes($data);
    // Convert special characters to HTML entities
    $data = htmlspecialchars($data);
    return $data;
}
?>

<h2>PHP Form Validation Example</h2>
<p><span class = "error">* required field</span></p>
<form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name: <input type = "text" name = "name">
    <span class = "error">* <?php echo $nameErr;?></span>
    <br><br>
    E-mail: <input type = "text" name = "email">
    <span class = "error">* <?php echo $emailErr;?></span>
    <br><br>
    Website: <input type = "text" name = "website">
    <span class="error"><?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name = "comment" rows = "5" cols = "40"></textarea>
    <br><br>
    Gender:
    <input type = "radio" name = "gender" value = "female">Female
    <input type = "radio" name = "gender" value = "male">male
    <input type = "radio" name = "gender" value = "other">other
    <span class = "error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type = "submit" name = "submit" value = "Submit">
</form>

<?php
echo "<h2> Your Input: </h2>";
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