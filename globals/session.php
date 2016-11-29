<?php
//starts a session
session_start();
//set session to $value
$_SESSION["newsession"]=$value;
//echo out  the session
echo $_SESSION["newsession"];
//nothing will appear because there is no real seession to record. this is an exmaple of $_session
echo ' please look at commments in code for why nothing is displayed. this is o  eof the globals that has nothing to display because a lack of an actual session happening';
?>