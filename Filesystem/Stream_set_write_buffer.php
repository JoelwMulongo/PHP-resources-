
// Sets write file buffering on the given stream
<?php
$fp = fopen($file, "w");
if ($fp) {
  if (stream_set_write_buffer($fp, 0) !== 0) {
      // changing the buffering failed
  }
  fwrite($fp, $output);
  fclose($fp);
}
?>
