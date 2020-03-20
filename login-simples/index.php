<?php
session_start();

if (isset($_SESSION['id']) && !empty($_SESSION['id'])) {
  echo "área restrita";
} else {
  header("Location: login.php");
}

 ?>
