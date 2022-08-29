
// Reads entire file into a string
<?php
// Get and output the source of the homepage of a website
$homepage = file_get_contents('http://www.example.com/');
echo $homepage;
?>

<?php
// Searching within the include_path
// <= PHP 5
$file = file_get_contents('./people.txt', true);
// > PHP 5
$file = file_get_contents('./people.txt', FILE_USE_INCLUDE_PATH);
?>

<?php
// Reading a section of a file
// Read 14 characters starting from the 21st character
$section = file_get_contents('./people.txt', FALSE, NULL, 20, 14);
var_dump($section);
?>

<?php
// Using stream contexts
// Create a stream
$opts = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n"
  )
);

$context = stream_context_create($opts);

// Open the file using the HTTP headers set above
$file = file_get_contents('http://www.example.com/', false, $context);
?>
