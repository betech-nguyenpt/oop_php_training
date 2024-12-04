<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Create Write</title>
</head>
<body>

<?php
/**
 * The fwrite() function is used to write to a file.
 * The first parameter of fwrite() contains the name of the file to write to and the second parameter is the string to be written.
 * The example below writes a couple of names into a new file called "newfile.txt".
 */
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "John Doe\n";
fwrite($myfile, $txt);
$txt = "Jane Doe\n";
fwrite($myfile, $txt);
fclose($myfile);

/**
 * Now that "newfile.txt" contains some data we can show what happens when we open an existing file for writing.
 * All the existing data will be ERASED and we start with an empty file.
 * If we now open the "newfile.txt" file, both John and Jane have vanished, and only the data we just wrote is present.
 * while the "w" mode overrides (and erases) the old content of the file.
 */
$myfile = fopen("newfile.txt", "w") or die("Unable to open file!");
$txt = "Mickey Mouse\n";
fwrite($myfile, $txt);
$txt = "Minnie Mouse\n";
fwrite($myfile, $txt);
fclose($myfile);

/**
 * You can append data to a file by using the "a" mode.
 * The "a" mode appends text to the end of the file, while the "w" mode overrides (and erases) the old content of the file.
 */
$myfile = fopen("newfile.txt", "a") or die("Unable to open file!");
$txt = "Donald Duck\n";
fwrite($myfile, $txt);
$txt = "Goofy Goof\n";
fwrite($myfile, $txt);
fclose($myfile);
?>
    
</body>
</html>