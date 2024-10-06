<?php

require_once("./navbar/db/DB.php");
session_start();
$_SESSION = array();
session_destroy();
header("location: Signin.php");
?>