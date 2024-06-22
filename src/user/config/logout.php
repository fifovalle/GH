<?php
include 'connection.php';
session_start();
session_destroy();
header("Location: " . $akarUrl . "src/user/pages/login.php");
