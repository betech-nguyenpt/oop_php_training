<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exceptions</title>
</head>
<body>

<?php
/**
 * Summary of divide
 * @param mixed $dividend
 * @param mixed $divisor
 * @throws \Exception
 * @return float|int
 */
function divide($dividend, $divisor) {
    if($divisor == 0) {
        /**
         * The throw statement allows user defined function or method to throw an exception.
         * When an exception is thrown, the code following it will not be executed.
         */
        throw new Exception("Division by zero");
    }
    return $dividend / $divisor;
}
echo divide(5,0);
?>

<?php
/**
 * Summary of divides
 * @param mixed $dividend
 * @param mixed $divisor
 * @throws \Exception
 * @return float|int
 */
function divides($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero");
  }
  return $dividend / $divisor;
}

/**
 * To avoid the error from the example above, we can use the try...catch statement to catch exceptions and continue the process.
 */
try {
  echo divides(5, 0);
} catch(Exception $e) {
  echo "Unable to divides.";
}

/**
 * The try...catch...finally statement can be used to catch exception.
 */
try {
    echo divide(5,0);
} catch(Exception $e) {
    echo "Unable to divide. ";
    // Output a string even if an exception was not caught.
} finally {
    echo "Process complete.";
}
?>

<?php
/**
 * Summary of divide1
 * @param mixed $dividend
 * @param mixed $divisor
 * @throws \Exception
 * @return float|int
 */
function divide1($dividend, $divisor) {
  if($divisor == 0) {
    throw new Exception("Division by zero", 1);
  }
  return $dividend / $divisor;
}

/**
 * getMessage() returns a string describing why the exception was thrown.
 * getCode() I this exception was triggered by another one, this method returns the previous exception. If not, then it returns null
 * getFile() Returns the exception code.
 * get Line() Returns the line number of the line of coe which threw the exception.
 */
try {
  echo divide1(5, 0);
} catch(Exception $ex) {
  $code = $ex->getCode();
  $message = $ex->getMessage();
  $file = $ex->getFile();
  $line = $ex->getLine();
  echo "Exception thrown in $file on line $line: [Code $code]
  $message";
}
?>
    
</body>
</html>