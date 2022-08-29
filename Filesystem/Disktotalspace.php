
// Returns the total size of a filesystem or disk partition
<?php
// $ds contains the total number of bytes available on "/"
$ds = disk_total_space("/");

// On Windows:
$ds = disk_total_space("C:");
$ds = disk_total_space("D:");
?>
