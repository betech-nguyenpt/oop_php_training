<!DOCTYPE html>
<html>
    <body>
        
        <?php
        /*If used inside a class, the class name is returned.*/
        class Fruits {
            public function myValue(){
              return __CLASS__;
            }
          }
          $kiwi = new Fruits();
          echo $kiwi->myValue();
          echo "<br>";
          /*The directory of the file.*/
          echo __DIR__;
          echo "<br>";
          /*The file name including the full path.*/
        echo __FILE__;
        echo "<br>";
        /*If inside a function, the function name is returned.*/
        function myValue(){
            return __FUNCTION__;
        }
        echo myValue();
        echo "<br>";
        /*The current line number.*/
        echo __LINE__;
        echo "<br>";
        /*If used inside a function that belongs to a class, both class and function name is returned.*/
        class Pool {
            public function myValue(){
              return __METHOD__;
            }
          }
          $kiwi = new Pool();
          echo $kiwi->myValue();
          echo "<br>";
          echo myValue();
          echo "<br>";
          /*If used inside a trait, the trait name is returned.*/
       trait message1 {
        public function msg1(){
            echo __TRAIT__;
        }
       }
       class Welcome{
        use message1;
       }
       $obj = new Welcome();
       $obj->msg1();
        echo "<br>";
        

        ?>
    </body>
</html>