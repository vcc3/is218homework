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
// second function
$files = glob('*.{php,csv}', GLOB_BRACE);
$files =array_map('realpath',$files);
echo " Second function of Global and full patchs ";
print_r($files);

echo '<hr>';
// third function
echo " infomration for memory usage";
echo "Initial: ".memory_get_usage()." in bytes \n";
for ($i = 0; $i < 100000; $i++) {
    $array []= md5($i);
}
for ($i = 0; $i < 100000; $i++) {
    unset($array[$i]);
}
echo "Final: ".memory_get_usage()." bytes \n";
echo "Peak: ".memory_get_peak_usage()." bytes \n";



?>