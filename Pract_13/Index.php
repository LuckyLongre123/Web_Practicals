<?php

$string = " Hello   World! This   is   PHP. ";

$after = str_replace(' ', '', $string);

echo "Original String: " . $string . "\n";
echo "Without Whitespaces: " . $after;
?>
