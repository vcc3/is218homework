
<?php
// there are npo cookies for the page so there is nothing to pull for name
//this is an example but it wont work because of what  afs sends and the lack of coookies for this page.
echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
?>
