<?php

// Set the MIME type for the stylesheet file
header('Content-Type: text/css');

// Read the contents of the stylesheet file
$css = file_get_contents('css/styles.css');

// Output the contents of the stylesheet file
echo $css;

?>
