<?php

session_start();
unset($_SESSION['user_id']);
session_destroy();
header("Location: http://localhost/qed42training/html/login.html");
?>