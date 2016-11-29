
<?php
//storing some values here for calling later.
$_GET['foo'] = 'a';
$_POST['bar'] = 'b';
$_REQUEST['foobar'] ='ab';
//example of another get,  it will get the 'a'
var_dump($_GET); 
echo '<br>';
//example of another post, posts the stored 'b'
var_dump($_POST); 
echo '<br>';
// example  of the $_request, gets foobar's ab
var_dump($_REQUEST); 
echo '<br>';

?>