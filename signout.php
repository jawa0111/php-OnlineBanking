<?php
session_start();
unset($_SESSION['first_name']);
header('location:loginform.html');
?>