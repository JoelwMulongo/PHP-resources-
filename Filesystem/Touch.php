
//  Sets access and modification time of file
<?php
if (touch($filename)) {
    echo $filename . ' modification time has been changed to present time';
} else {
    echo 'Sorry, could not change modification time of ' . $filename;
}
?>

<?php
// touch() using the time parameter
// This is the touch time, we'll set it to one hour in the past.
$time = time() - 3600;

// Touch the file
if (!touch('some_file.txt', $time)) {
    echo 'Whoops, something went wrong...';
} else {
    echo 'Touched file with success';
}
?>
