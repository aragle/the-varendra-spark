<?php
session_start(); 
$_SESSION["favcolor"] = "green";
echo 'Hello ' . htmlspecialchars($_SESSION["favcolor"]) . '!';
?>
