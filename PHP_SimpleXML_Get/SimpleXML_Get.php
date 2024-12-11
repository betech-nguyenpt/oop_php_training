<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SimpleXML Get</title>
</head>
<body>

<?php
/**
 * SimpleXML is a PHP extension that allows us to easily manipulate and get XML data.
 */
$xml = simplexml_load_file("note.xml") or die("Error: Cannot create object"); 
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body . "<br>";
?>

<?php
/**
 * Gets the node value of the <title> element in the first and second <book> elements in the "books.xml" file.
 */
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
echo $xml->book[0]->title . "<br>";
echo $xml->book[1]->title . "<br>";
?>

<?php
/**
 * Loops through all the <book> elements in the "books.xml" file, and gets the node values of the <title>, <author>, <year>, and <price> elements.
 */
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) {
  echo $books->title . ", ";
  echo $books->author . ", ";
  echo $books->year . ", ";
  echo $books->price . "<br>";
}
?>

<?php
/**
 * Gets the attribute value of the "category" attribute of the first <book> element and the attribute value of the "lang" attribute of the <title> element in the second <book> element.
 */
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
echo $xml->book[0]['category'] . "<br>";
echo $xml->book[1]->title['lang'] . "<br>";
?>

<?php
/**
 * Gets the attribute values of the <title> elements in the "books.xml" file:
 */
$xml=simplexml_load_file("books.xml") or die("Error: Cannot create object");
foreach($xml->children() as $books) {
  echo $books->title['lang'];
  echo "<br>";
}
?>

    
</body>
</html>