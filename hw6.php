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
echo '<hr>';
// fourth function cpu usage
$start = microtime(true);
// keep calling microtime for about 3 seconds
while(microtime(true) - $start < 3) {
 
}
 
$data = getrusage();
echo "User time: ".
    ($data['ru_utime.tv_sec'] +
     $data['ru_utime.tv_usec'] / 1000000);
echo "System time: ".
    ($data['ru_stime.tv_sec'] +
     $data['ru_stime.tv_usec'] / 1000000);


echo '<hr>';
// fifth function magic constants
echo "this section is the debuggin portion, not real ouput for my file of hw6.php";
echo"  though can be seend that the other hr breaks and echo i have after this are then removed from the page that have no real use.";
require_once('config/hw6.php');
require_once(dirname(__File__) . '/config/hw6.php');

echo '<hr>';
// sixth function
echo '<hr>';
// seventh function
echo '<hr>';
// eighth function
echo '<hr>';
// ninth function


?>