<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>XML Expat</title>
</head>
<body>

<?php
// Initialize the XML parser
$parser = xml_parser_create();

/**
 * Function to use at the start of an element
 * Summary of start
 * @param mixed $parser
 * @param mixed $element_name
 * @param mixed $element_attrs
 * @return string
 */
function start($parser, $element_name, $element_attrs) {
    switch($element_name) {
        case "NOTE":
            echo "--Note --<br>";
            break;
        case "TO":
            echo "To: ";
            break;
        case "FROM":
            echo "From: ";
            break;
        case "HEADING":
            echo "Heading: ";
            break;
        case "BODY":
            echo "Message: ";
            break;
        default:
            break;
    }
}

/**
 * Function to use at the end of an element
 * Summary of stop
 * @param mixed $parser
 * @param mixed $element_name
 * @return string
 */
function stop($parser, $element_name) {
    echo "<br>";
}

/**
 * Function to use when finding character data
 * Summary of char
 * @param mixed $parser
 * @param mixed $data
 * @return string
 */
function char($parser, $data) {
    echo $data;
}

/**
 * Add the xml_set_element_handler() function to specify which function will be executed when the parser encounters the opening and closing tags.
 */
xml_set_element_handler($parser, "start", "stop");

/**
 * Add the xml_set_character_data_handler() function to specify which function will execute when the parser encounters character data.
 */
xml_set_character_data_handler($parser, "char");

/**
 * Parse the file "note.xml" with the xml_parse() function.
 */
$fp=fopen("note.xml","r");

// Read data
while ($data = fread($fp,4096)) {
    xml_parse($parser,$data,feof($fp)) or
    die (sprintf("XML Error: %s at line %d",
    /**
     * In case of an error, add xml_error_string() function to convert an XML error to a textual description.
     */
    xml_error_string(xml_get_error_code($parser)),
    xml_get_current_line_number($parser)));
}

/**
 * Call the xml_parser_free() function to release the memory allocated with the xml_parser_create() function.
 */
xml_parser_free($parser);
?>
    
</body>
</html>
