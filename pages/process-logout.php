<?php
require_once("includes/db.php");
require_once("includes/functions.php");
session_start();
session_unset($_SESSION['user_id']);
session_destroy();
header("Location: home.php");
?>