
// Returns canonicalized absolute pathname
<?php
chdir('/var/www/');
echo realpath('./../../etc/passwd') . PHP_EOL;

echo realpath('/tmp/') . PHP_EOL;
?>

<?php
echo realpath('/windows/system32'), PHP_EOL;

echo realpath('C:\Program Files\\'), PHP_EOL;
?>
