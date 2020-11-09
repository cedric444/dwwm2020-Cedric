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


for ($i=1;$i<5;$i++)
{
    echo'<div class="ligne">';
    for($j=1;$j<5;$j++)
    {
        echo'<div class="espace"></div>
        <div class="case">
        <img  class="recto" src= "Images/plage.jpg" alt="image plage">
        <img class="verso" src="Images/'.$i.'.jpg" alt=""></div>';
    }
    echo'<div class="espaceHor"></div>';
    echo '</div>';
}
echo'</body>';
echo'</html>';
