<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simple Parser</title>
</head>
<body>

<?php
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<note>
<to>Tove</to>
<from>Jani</from>
<heading>Reminder</heading>
<body>Don't forget me this weekend!</body>
</note>";

/**
 * The PHP "simplexml_load_string()" function is used to read XML data from a string.
 * 
 */
$xml=simplexml_load_string($myXMLData) or die("Error: Cannot create object");
print_r($xml);
?>

<?php
/**
 * Use the libxml functionality to retrieve all XML errors when loading the document and then iterate over the errors.
 */
libxml_use_internal_errors(true);
$myXMLData =
"<?xml version='1.0' encoding='UTF-8'?>
<document>
  <user>John Doe</wronguser>
  <email>john@example.com</wrongemail>
</document>";

$xml = simplexml_load_string($myXMLData);
if ($xml === false) {
    echo "Failed loading XML: ";
    foreach(libxml_get_errors() as $error) {
        echo "<br>", $error->message;
    }
} else {
    print_r($xml);
    
}
echo "<br>";
?>

<?php
/**
 * Assume we have an XML file called "note.xml"
 * The PHP simplexml_load_file() function is used to read XML data from a file.
 */
$xml=simplexml_load_file("note.xml") or die("Error: Cannot create object");
print_r($xml);
?>

</body>
</html>