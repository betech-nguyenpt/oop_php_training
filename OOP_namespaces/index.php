<?php
/**
 * When many classes from the same namespace are being used at the same time, it is easier to use the namespace keyword.
 * Use classes from the Html namespace without the need for the Html\qualifier. 
 */

include "Html.php";

$table = new Html\Table();
$table->title = "My table";
$table->numRows = 5;

$row = new Html\Row();
$row->numCells = 3;
?>

<html>
<body>

<?php $table->message(); ?>
<?php $row->message(); ?>

</body>
</html>



<?php
/**
 * It can be useful to give a namespace or class an alias to make it easier to write. This is done with the use keyword.
 */
include "Html.php";
use Html as H;
$table = new H\Table();
$table->title = "My table";
$table->numRows = 5;
?>

<html>
<body>

<?php $table->message(); ?>

</body>
</html>

<?php
/**
 * Give a class an alias.
 */
include "Html.php";
use Html\Table as T;
$table = new T();
$table->title = "My table";
$table->numRows = 5;
?>

<html>
<body>

<?php $table->message(); ?>

</body>
</html>

