<?php
    require_once './animal.php';
    require_once './frog.php';
    require_once './ape.php';

    $sheep = new Animal("shaun");
    echo "Name :" . $sheep->name ."<br>";// "shaun"
    echo "Legs :" . $sheep->legs ."<br>";// 4
    echo "Cold_blooded :" . $sheep->cold_blooded ."<br>"; // "no"
    echo "<br>";

    $kodok = new Frog("buduk");
    echo "Name :" . $kodok->name ."<br>";
    echo "Legs :" . $kodok->legs ."<br>";
    echo "Cold_blooded :" . $kodok->cold_blooded ."<br>"; 
    $kodok->jump() ; // "hop hop"
    echo "<br>";
    echo "<br>";

    $sungokong = new Ape("kera sakti");
    echo "Name :" . $sungokong->name ."<br>";
    echo "Legs :" . $sungokong->legs() ."<br>";
    echo "Cold_blooded :" . $sungokong->cold_blooded ."<br>"; // "no"
    $sungokong->yell() // "Auooo"
?>
