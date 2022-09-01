
// Convert all applicable characters to HTML entities
<?php
$str = "A 'quote' is <b>bold</b>";

// Outputs: A 'quote' is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str);

// Outputs: A &#039;quote&#039; is &lt;b&gt;bold&lt;/b&gt;
echo htmlentities($str, ENT_QUOTES);
?>

<?php
$str = "\x8F!!!";

// Outputs an empty string
echo htmlentities($str, ENT_QUOTES, "UTF-8");

// Outputs "!!!"
echo htmlentities($str, ENT_QUOTES | ENT_IGNORE, "UTF-8");
?>
