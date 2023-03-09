<?php
session_start();

if($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['address'] = $_POST['address'];
  $_SESSION['city'] = $_POST['city'];
  $_SESSION['state'] = $_POST['state'];
  
  header('Location: process.php');
  exit;
}
?>
