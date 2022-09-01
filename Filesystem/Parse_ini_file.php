
// Parse a configuration file
<?php

define('BIRD', 'Dodo bird');

// Parse without sections
$ini_array = parse_ini_file("sample.ini");
print_r($ini_array);

// Parse with sections
$ini_array = parse_ini_file("sample.ini", true);
print_r($ini_array);

?>

<?php
// parse_ini_file() parsing a php.ini file
// A simple function used for comparing the results below
function yesno($expression)
{
    return($expression ? 'Yes' : 'No');
}

// Get the path to php.ini using the php_ini_loaded_file() 
// function available as of PHP 5.2.4
$ini_path = php_ini_loaded_file();

// Parse php.ini
$ini = parse_ini_file($ini_path);

// Print and compare the values, note that using get_cfg_var()
// will give the same results for parsed and loaded here
echo '(parsed) magic_quotes_gpc = ' . yesno($ini['magic_quotes_gpc']) . PHP_EOL;
echo '(loaded) magic_quotes_gpc = ' . yesno(get_cfg_var('magic_quotes_gpc')) . PHP_EOL;
?>
