
// Changes to the parent directory
<?php
// set up basic connection
$conn_id = ftp_connect($ftp_server);

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass);

// change the current directory to html
ftp_chdir($conn_id, 'html');

echo ftp_pwd($conn_id); // /html 

// return to the parent directory
if (ftp_cdup($conn_id)) { 
  echo "cdup successful\n";
} else {
  echo "cdup not successful\n";
}

echo ftp_pwd($conn_id); // /

ftp_close($conn_id);
?>
