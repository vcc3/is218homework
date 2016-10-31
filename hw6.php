<?php
// first function 
function foo() {
 
    // returns an array of all passed arguments
    $args = func_get_args();
 // foreach loop that sets args as k and set to v
    foreach ($args as $k => $v) {
        echo "arg".($k+1).": $v\n";
    } 
} 
echo " First function of Number of Args ";
foo(); 
foo('hello'); 
foo('hello', 'world', 'again');

echo '<hr>';
$files = glob('*.{php,csv}', GLOB_BRACE);
 
echo " Second function of Global ";
print_r($files);

echo '<hr>';




?>