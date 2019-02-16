<?php
$username = '';//your username
$password = '';//your password
$host = '';//your localhost
$dbname = 'db_fruit';
$dsn = "pgsql:host=$host;dbname=$dbname";
$conn = new PDO($dsn,$username,$password);
if(!$conn):
    echo "Can't Reach Database";
    exit();
endif;