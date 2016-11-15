<?php
function testing() {
    $information = " Example text in here.";
    //will be using the glpbal set below.
    echo 'information in global is: ' . $GLOBALS["information"];
    echo '<br>';
    // This echos only the text that was set in $information at the top. this is different from the global declared below.
    echo 'information in just regular is still: ' . $information;
}
// this sets the $information with text that will be set in the $Global echo.
$information = "Global Portion";
testing();

?>