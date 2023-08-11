<?php
     require_once './animal.php';

     class Ape extends Animal {
         public function yell() {
            echo "Yell : Auooo";
         }
         public function legs () {
            return "2";
         }
    }
?>