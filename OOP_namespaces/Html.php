<?php
namespace Html;
class Table {
  public $title = "";
  public $numRows = 0;

  /**
   * Summary of message
   * @return string
   */
  public function message() {
    echo "<p>Table '{$this->title}' has {$this->numRows} rows.</p>";
  }
}

class Row {
  /**
   * @var int
   */
  public $numCells = 0;
  /**
   * @return string
   */
  public function message() {
    echo "<p>The row has {$this->numCells} cells.</p>";
  }
}
?>

