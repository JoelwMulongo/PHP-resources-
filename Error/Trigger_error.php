
// Generates a user-level error/warning/notice message
<?php
if ($divisor == 0) {
    trigger_error("Cannot divide by zero", E_USER_ERROR);
}
?>
