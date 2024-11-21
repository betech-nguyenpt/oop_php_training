<?php
/**
 * Constants, classes and functions declared in this file will belong to the Html namespace.
 */
namespace html;
class Table {
  /**
   * @var string
   */
  public $title = "";
  /**
   * @var int
   */
  public $numRows = 0;
  /**
   * Prints a message describing the table.
   * @return string
   */
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}
$table = new Table();
$table->title = "My table";
$table->numRows = 5;
?>

<!DOCTYPE html>
<html>
<body>

<?php
$table->message();
?>

</body>
</html>
