// debug_print_backtrace
// Prints a backtrace
<?php
// include.php file

function a() {
    b();
}

function b() {
    c();
}

function c(){
    debug_print_backtrace();
}

a();

?>

<?php
// test.php file
// this is the file you should run

include 'include.php';
?>
