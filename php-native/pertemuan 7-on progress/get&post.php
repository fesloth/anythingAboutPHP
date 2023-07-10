<?php
// lingkup variabel / variabel scope
$x = 10;

function tampilX()
{
    $x = 20;
    echo $x;
}

tampilX();
echo "<br>";
echo $x;
