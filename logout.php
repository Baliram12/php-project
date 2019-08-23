<?php 

session_start();
session_destroy();
$home_url = 'http://localhost/First/loginfirst.html';
header('Location: ' . $home_url);
?>