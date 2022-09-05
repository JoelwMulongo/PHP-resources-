
// Changes the current directory on a FTP server
<?php

// set up basic connection
$conn_id = ftp_connect($ftp_server); 

// login with username and password
$login_result = ftp_login($conn_id, $ftp_user_name, $ftp_user_pass); 

// check connection
if ((!$conn_id) || (!$login_result)) {
    die("FTP connection has failed !");
}

echo "Current directory: " . ftp_pwd($conn_id) . "\n";

// try to change the directory to somedir
if (ftp_chdir($conn_id, "somedir")) {
    echo "Current directory is now: " . ftp_pwd($conn_id) . "\n";
} else { 
    echo "Couldn't change directory\n";
}

// close the connection
ftp_close($conn_id);
?>
