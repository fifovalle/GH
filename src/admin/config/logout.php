<?php
include 'connection.php';
session_start();
session_destroy();
header("Location: " . $akarUrl . "src/admin/pages/login.php");
