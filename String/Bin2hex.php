
// Convert binary data into hexadecimal representation
<?php
$binary = "11111001";
$hex = dechex(bindec($binary));
echo $hex;
?>
