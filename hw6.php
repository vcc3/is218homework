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
echo '<br>';
echo"  though can be seend that the other hr breaks and echo i have after this are then removed from the page that have no real use.";
//require_once('config/hw6.php');
//require_once(dirname(__File__) . '/config/hw6.php');

echo '<hr>';
// sixth function unique id
echo " function for unique id";
echo '<br>';
echo uniqid('foo_');
echo '<br>';
echo uniqid('',true);
echo '<br>';
echo uniqid('bar_'.true);
echo '<hr>';
// seventh function serialization
echo " function for serialization";
$myvar = array(
    'hello user',
    42,
    array(0,'one'),
    'pears'
);
$string = serialize($myvar);
 echo '<br>';
echo $string;
$newvar = unserialize($string);
 
print_r($newvar);



echo '<hr>';
// eighth function compressed
echo " function for compression";
echo '<br>';
$string =
"'No person shall be held to answer for a capital, or otherwise infamous crime, unless on a presentment or indictment of a Grand Jury, except in cases arising in the land or naval forces, or in the Militia, when in actual service in time of War or public danger; nor shall any person be subject for the same offense to be twice put in jeopardy of life or limb; nor shall be compelled in any criminal case to be a witness against himself, nor be deprived of life, liberty, or property, without due process of law; nor shall private property be taken for public use, without just compensation.'  ";
 
$compressed = gzcompress($string);
 
echo "Original size: ". strlen($string)."\n";
/* prints
Original size: 800
*/
 
 
 
echo "Compressed size: ". strlen($compressed)."\n";
/* prints
Compressed size: 418
*/
 
// getting it back
$original = gzuncompress($compressed);



echo '<hr>';
// ninth function shutdown
echo " function for shutdown";
echo '<br>';


?>