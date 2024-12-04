<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Handling</title>
</head>
<body>
    
<?php
/**
 * The readfile() function reads a file and writes it to the output buffer.
 * The PHP code to read the file and write it to the output buffer is as follows (the readfile() function returns the number of bytes read on success).
 * The readfile() function is useful if all you want to do is open up a file and read its contents.
 */
echo readfile("Note.txt");
?>
</body>
</html>