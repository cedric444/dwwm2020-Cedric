<?php
if(file_exists('head.php'))
{
    include ('head.php');
}
else
{
    echo 'erreur';
}
echo'<body>
    <div class="page">';
if(file_exists('header.php'))
{
    include ('header.php');
}
else
{
    echo 'erreur';
}
if(file_exists('nav.php'))
{
    include ('nav.php');
}
else
{
    echo 'erreur';
}
echo'<div class="espaceHor"></div>';
if(file_exists('section.php'))
{
    include ('section.php');
}
else
{
    echo 'erreur';
}
echo'<div class="espaceHor"></div>';
if(file_exists('partie2.php'))
{
    include ('partie2.php');
}
else
{
    echo 'erreur';
}
echo'<div class="espaceHor"></div>';
if(file_exists('footer.php'))
{
    include ('footer.php');
}
else
{
    echo 'erreur';
}
echo'</div>
</body>

</html>';