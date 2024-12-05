<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JSON</title>
</head>
<body>
    
<?php
$age = array("Peter"=>35, "Ben"=>37, "Joe"=>43);
$cars = array("Volvo", "BMW", "Toyota");
/**
 * The "json_encode()" function is used to encode a value to JSON format.
 */
echo json_encode($age)."<br>";
echo json_encode($cars)."<br>";
?>

<?php
$jsonobj = '{"Peter":35, "Ben":37, "Joe":43}';

/**
 * The "json_encode()" function is used to decode a JSON object into a PHP object or an associative array.
 * The json_decode() function returns an object by default.
 * The json_encode() function has a secoud parameter, and when set to true, JSON objects are decoded into associative arrays.
 */
var_dump(json_decode($jsonobj));
echo "<br>";
var_dump(json_decode($jsonobj, true));
echo "<br>";
?>

<?php
/**
 * How to access the decoded values from an object and from an associative array.
 */
$jsonnobj = '{"Peter":35, "Ben":37, "Joe":43}';

$obj = json_decode($jsonobj);
$arr = json_decode($jsonobj, true);

echo $obj->Peter;
echo $obj->Ben;
echo $obj->Joe;
echo "<br>";

echo $arr["Peter"];
echo $arr["Ben"];
echo $arr["Joe"];
echo "<br>";

/**
 * You can also loop through the values with a "foreach()" loop.
 */

 // The values of a PHP object.
foreach($obj as $key => $value) {
    echo $key . " => " . $value . "<br>";

// The values of a PHP associative array.    
foreach($arr as $key => $value) {
    echo $key. " => ". $value. "<br>";
 
}    
}
?>


</body>
</html>