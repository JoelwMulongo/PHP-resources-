
// Returns available space on filesystem or disk partition
<?php
// $df contains the number of bytes available on "/"
$df = disk_free_space("/");

// On Windows:
$df_c = disk_free_space("C:");
$df_d = disk_free_space("D:");
?>
