<?php
//victor carlos cornejo
// php code for $_Server. get information from server to output and read. not all information is given back from server.

// echo out the AFS server names
echo " This server is named : ". $_SERVER['SERVER_NAME'];
echo '<br>';
// output the server address
echo " This servers address is : ". $_SERVER['SERVER_ADDR'];
echo '<br>';
//output the software we are using
echo " This server is using the : ". $_SERVER['SERVER_SOFTWARE'];
echo '<br>';
// what method i used to get the page
echo " The method used to call was : ". $_SERVER['REQUEST_METHOD'];
echo '<br>';
// time it took for request
echo " The time it took for request is  : ". $_SERVER['REQUEST_TIME'];
echo '<br>';
// rmomte ports 
echo " The port used is : ". $_SERVER['REMOTE_PORT'];
echo '<br>';

?>