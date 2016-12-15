<?php
$db = new mysqli("localhost", "root", "", "techrunch");
if ($db->connect_errno) {
    echo "Failed to connect to MySQL: (" . $db->connect_errno . ") " . $db->connect_error;
}
//echo $db->host_info . "\n";
?>
