<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Live Search</title>
<script>
    /**
     * If the input field is empty (str.length==0), the function clears the content of the livesearch placeholder and exits the function.
     * 
     */
    function showResult(str) {
        if (str.length == 0) {
            document.getElementById("livesearch").innerHTML= "";
            document.getElementById("livesearch").style.border = "0px";
            return;
        }
        /**
         * Create an XMLHttpRequest object.
         * Create the function to be executed when the server response is ready.
         * Send the request off to a file on the server.
         */
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("livesearch").innerHTML=this.responseText;
                document.getElementById("livesearch").style.border="1px solid #A5ACB2";
            }
        }
        xmlhttp.open("GET", "livesearch.php?q=" + str, true);
        xmlhttp.send();
    }
</script>
</head>
<body>

<form>
<input type = "text" size = "30" onkeyup = "showResult(this.value)">
<div id = "livesearch"></div>
</form>

<?php
// Get the q parameter from URL
if (isset($_GET['q'])) {
    $q = $_GET['q'];

    $xmlDoc = new DOMDocument();
    $xmlDoc->load("links.xml");

    $x = $xmlDoc->getElementsByTagName("link");

    $hint = "";

    // Lookup all links from the xml file if length of q>0
    for ($i = 0; $i < $x->length; $i++) {
        $y = $x->item($i)->getElementsByTagName("title");
        $z = $x->item($i)->getElementsByTagName("url");

        if ($y->item(0)->nodeType == 1) {
            if (stripos($y->item(0)->childNodes->item(0)->nodeValue, $q) !== false) {
                if ($hint == "") {
                    $hint = "<a href='" . $z->item(0)->childNodes->item(0)->nodeValue . "' target='_blank'>" . 
                            $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                } else {
                    $hint .= "<br /><a href='" . $z->item(0)->childNodes->item(0)->nodeValue . "' target='_blank'>" . 
                             $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
                }
            }
        }
    }

    /**
     * Set output to "no suggestion" if no hint was found.
     * Or to the correct values
     * Output the response.
     */
    if ($hint == "") {
        echo "No suggestion";
    } else {
        echo $hint; 
    }
} else {
    echo "No suggestion"; 
}
?>

    
</body>
</html>