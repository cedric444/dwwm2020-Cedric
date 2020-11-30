<div class=espaceHor></div>
<nav>
<?php

if(isset($_SESSION['users']))
{
    if($_SESSION['users']->getRole()==1)
    {
        echo'<button><a href="index.php?codePage=admin">admin</a></button>';
    }
    echo'<button><a href="index.php?codePage=user">user</a></button>';
}
?>
</nav>