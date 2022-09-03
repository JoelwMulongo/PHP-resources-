
// Dumps a string representation of an internal zend value to output
<?php
$var1 = 'Hello World';
$var2 = '';

$var2 =& $var1;

debug_zval_dump(&$var1);
?>
