<?php

$server = '127.0.0.1';
$username = 'root';
$password = '';
$database = 'db_grand_prix';

$db = mysqli_connect($server, $username, $password, $database);

mysqli_query($db, "SET NAMES 'utf-8'");