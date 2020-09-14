<?php
$a = $b = 2;

function somme() {
    global $a, $b;
    $b = $a + $b;
}
somme();
echo $b."<br>";

function Test() {
    $a=0;
    echo $a."<br>";
    $a++;
}

// Appel de la fonction (2 fois)
Test();
Test();

function Test1 () {
    static $a=0;
    echo "$a<br />";
    $a++;
}

// Appel de la fonction (3 fois)
Test1();
Test1();
Test1();