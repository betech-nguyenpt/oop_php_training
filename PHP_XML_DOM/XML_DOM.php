<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML DOM</title>
</head>
<body>

<?php
/**
 * The built-in DOM parser makes it possible to process XML documents in PHP.
 * The DOM parser is a tree-based parser.
 * 
 */
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

/**
 * Then the saveXML() function puts the internal XML document into a string, so we can output it.
 */
print $xmlDoc->saveXML();
echo "<br>";
?>

<?php
/**
 * We want to initialize the XML parser, load the XML, and loop through all elements of the <note> element.
 * When XML generates, it often contains white-spaces between the nodes.
 * The XML DOM parser treats these as ordinary elements, and if you are not aware of them, they sometimes cause problems.
 */
$xmlDoc = new DOMDocument();
$xmlDoc->load("note.xml");

$x = $xmlDoc->documentElement;
foreach ($x->childNodes AS $item) {
  print $item->nodeName . " = " . $item->nodeValue . "<br>";
}
?>
    
</body>
</html>