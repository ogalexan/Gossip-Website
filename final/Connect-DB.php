<?php
$databaseName = 'RAMSTER_labs';
$dsn = 'mysql:host=webdb.uvm.edu;dbname=' . $databaseName;
$username = 'ramster_writer';
$password = 'Mh4jQjo05kpL';

$pdo = new PDO($dsn, $username, $password);
if($pdo) print '<!-- Connection complete -->';
?>