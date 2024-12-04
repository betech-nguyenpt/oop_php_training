<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Open Read</title>
</head>
<body>

<?php
/**
 * The first parameter of fopen() contains the name of the file to be opened and the second parameter specifies in which mode the file should be opened.
 * 
 */
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fread($myfile,filesize("webdictionary.txt"));
fclose($myfile);
echo "<br>";

/**
 * The fgets() function is used to read a single line from a file.
 */
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
echo fgets($myfile);
fclose($myfile);

/**
 * The feof() function checks if the "end-of-file" (EOF) has been reached.
 * The feof() function is useful for looping through data of unknown length.
 */
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one line intil end-of-file
while(!feof($myfile)) {
    echo fgets($myfile) . "<br>";
}
fclose($myfile);

/**
 * The fgetc() function reads a single character from a file.
 */
$myfile = fopen("webdictionary.txt", "r") or die("Unable to open file!");
// Output one character until end-of-file
while(!feof($myfile)) {
  echo fgetc($myfile);
}
fclose($myfile);
?>
    
</body>
</html>