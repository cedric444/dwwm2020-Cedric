<?php
if (file_exists('head.php')) {
    include 'head.php';
} else {
    echo 'erreur';
}
echo '<body>';
if (file_exists('header.php')) {
    include ('header.php');
} else {
    echo 'erreur';
}
/*On initialise un tableau avec les valeurs des cartes*/
for($i=1;$i<9;$i++)
{
    $tab[]= $i;
    $tab[]= $i;
}
for ($i=1;$i<5;$i++)
{
    echo'<div class="ligne">';
    for($j=1;$j<5;$j++)
    {
        $key= array_rand($tab);
        $num= $tab[$key];
        array_splice($tab, $key, 1);
        echo'<div class="espace"></div>
        <div class="case">
        <img  class="recto" src= "Images/plage.jpg" alt="image plage">
        <img class="verso" src="Images/'.$num.'.jpg" alt=""></div>';
    }
    echo'<div class="espaceHor"></div>
    <div class="espace"></div></div>';
}
echo'</body>';
echo'</html>';
