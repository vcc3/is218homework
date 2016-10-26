<?php

$var = '1';
$var2;
$var3 ='';
$var4 = NULL;
// $var is set to something in empty space so its checking for set var.
if (isset($var)) {
    echo " This is the isset if statement output section";
    echo '<br>';
    echo "This var is set so I'll print.   ";
}

if (isset($var2)) {
    echo " This is the isset empty output";
    echo '<br>';
    echo " nothing is set i won't print.   ";
}
echo '<hr>';
// If for empty, checking the value of vars2 is set to 0
if (empty($var3)) {
    echo "This is the if empty statment output section";
    echo '<br>';
    echo '$var is empty.   ';
}
echo '<hr>';
error_reporting(E_ALL);
    echo" This is the is_null section showing that the read outputs show boolean value     of 1 for true is null.";
    echo '<br>';
    echo "is_null returns: ".is_null($inexistent)." for true"." and var4 returns: "       .is_null($var4)." for true";  
    
echo '<hr>';


//var_dump(is_null($inexistent), is_null($var4));

//Practice if
/*
$t = date("H");

if ($t < "10") {
    echo "Have a good morning!";
} elseif ($t < "20") {
    echo "Have a good day!";
} else {
    echo "Have a good night!";
}
*/
?>