<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajax Poll</title>
</head>
<script>
    /**
     * Create an XMLHttpRequest object.
     * Create the function to be executed when the server response is ready.
     * Send the request off to a file on the server.
     * Notice that a parameter (vote) is added to the URL (with the value of the yes or no option).
     */
    function getVote(int) {
        var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("poll").innerHTML = this.responseText;
            }
        };
        xmlhttp.open("GET", "poll_vote.php?vote=" + int, true);
        xmlhttp.send();
    }
</script>
<body>

<div id = "poll">
    <h3>Do you ike PHP and AJAX so far?</h3>
    <form>
        Yes: <input type = "Radio" name = "vote" value = "0" onclick = "getVote(this.value)"><br>
        No: <input type = "Radio" name = "vote" value = "1" onclick = "getVote(this.value)">
    </form>
</div>
    
</body>
</html>