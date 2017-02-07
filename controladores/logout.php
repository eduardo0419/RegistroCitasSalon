<?php
session_start();
session_unset($_SESSION['id']);
//session_unset($_SESSION['name']);
session_destroy();
echo "<script type=\"text/javascript\">window.location='../index.html';</script>";
?>