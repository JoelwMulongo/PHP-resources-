
// Gets inode change time of file
<?php

// outputs e.g.  somefile.txt was last changed: December 29 2002 22:16:23.

$filename = 'somefile.txt';
if (file_exists($filename)) {
    echo "$filename was last changed: " . date("F d Y H:i:s.", filectime($filename));
}

?>
