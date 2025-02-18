<?php 

require_once 'module_01/challenge_01.php';
// You use require_once to make sure the class exists, and include_once, if it's not mandatory

ob_start();
// start output buffering

var_dump($bicycle1);
// dump it to the console and browser

$output = ob_get_clean();

// store the output as a string of the budder in a variable

echo "Capturd output";
echo $output;





?>