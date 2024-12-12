<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax XML</title>
<script>
    /**
     * Check if a CD is selected
     * Create an XMLHttpRequest object
     * Create the function to be executed when the server response is ready
     * Send the request off to a file on the server
     * Notice that a parameter (q) is added to the URL (with the content of the dropdown list)
     */
    function showCD(str) {
        if (str == "") {
            document.getElementById("txtHint").innerHTML = "";
            return;
    }
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
            document.getElementById("txtHint").innerHTML = this.responseText;
        }
    }
    xmlhttp.open("GET", "ajax_xml.php?q=" + str, true);
    xmlhttp.send();
}
</script>
</head>
<body>

<form>
    Select a CD:
    <select name="cds" onchange = "showCD(this.value)">
        <option value="">Select a CD:</option>
        <option value="Bob Dylan">Bob Dylan</option>
        <option value="Bee Gees">Bee Gees</option>
        <option value="Cat Stevens">Cat Stevens</option>
    </select>
</form>
<div id = "txtHint"><b>CD info will be listed here...</b></div>

<?php
$q=$_GET["q"];

$xmlDoc = new DOMDocument();
$xmlDoc->load("cd_catalog.xml");

$x=$xmlDoc->getElementsByTagName('ARTIST');

for ($i=0; $i<=$x->length-1; $i++) {
  //Process only element nodes
  if ($x->item($i)->nodeType==1) {
    if ($x->item($i)->childNodes->item(0)->nodeValue == $q) {
      $y=($x->item($i)->parentNode);
    }
  }
}

$cd=($y->childNodes);

for ($i=0;$i<$cd->length;$i++) {
  //Process only element nodes
  if ($cd->item($i)->nodeType==1) {
    echo("<b>" . $cd->item($i)->nodeName . ":</b> ");
    echo($cd->item($i)->childNodes->item(0)->nodeValue);
    echo("<br>");
  }
}
?>
    
</body>
</html>