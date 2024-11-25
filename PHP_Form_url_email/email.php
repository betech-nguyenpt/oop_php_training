<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error {
            color: #FF0000;
        }
    </style>
</head>
<body>

<?php
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["name"])) {
        $nameErr = "Name is required";
    } else {
        $name = test_input($_POST["name"]);
        /**
         * Check if name only contains letters and whitespace
         * The code below shows a simple way to check if the name field only contains letters, dashes, apostrophes and whitespaces.
         * If the value of the name field is not valid, then store an error message.
         * The preg_match() function searches a string for pattern, returning true if the pattern exists, and false otherwise.
         */
        if (!preg_match("/^[a-zA-Z' ]*$/",$name)) {
            $nameErr = "Only letter and white space allowed";
        }
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is required";
    } else {
        $email = test_input($_POST["email"]);
        /**
         * The easiest and safest way to check whether an email address is well-formed is to use PHP's filter_var() function.
         * In the code below, if the e-mail address is not well-formed, then store an error message.
         */
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Invalid email format";
        }
    }

    /**
     * This regular expression also allows dashes in the URL.
     * If the URL address syntax is not valid, then store an error message.
     */
    if (empty($_POST["website"])) {
        $website = "";
    } else {
        $website = test_input($_POST["website"]);
        // check if URL address syntax is valid
        if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
            $websiteErr = "Invalid URL";
        }
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
    $data = trim($data);
    $data = stripslashes($data);
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
    <span class = "error"><?php echo $websiteErr;?></span>
    <br><br>
    Comment: <textarea name = "comment" rows = "5" cols = "40"></textarea>
    <br><br>
    Gender:
    <input type = "radio" name = "gender" value = "female">Female
    <input type = "radio" name = "gender" value = "male">Male
    <input type = "radio" name = "gender" value = "other">Other
    <span class = "error">* <?php echo $genderErr;?></span>
    <br><br>
    <input type = "submit" name = "submit" value = "Submit">
</form>

<?php
echo "<h2> Your Input:</h2>";
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