<?php
session_start();
// echo $_SESSION['mail'];
// echo $_SESSION['pass'];
unset($_SESSION['email']);
unset($_SESSION['pass']);
//header('location: /DN2ndHome');
header('location: ?page_layout=home');

?>