<?php
session_start();
session_destroy();
header("Local: login.php");
exit;
?>