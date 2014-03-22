<?php
require'config.php';

$connection = new mysqli($host['host'], $host['user'], $host['pass'], $host['dbname'])or die("Connect to DATABASE FAIL..".mysqli_error($connection));

?>