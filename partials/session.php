<?php
require_once 'includes/connection.php';
session_start();
if (!isset($_SESSION['id']) || !isset($_SESSION['email'])) {
    header('location: login.php?error=unauthorized access');
}
$id = $_SESSION['id'];
$query = mysqli_query($connect, "SELECT * FROM users WHERE id = '$id'");
if (mysqli_num_rows($query) == 0) {
    header('location: login.php?error=unauthorized access');
}
$rows = mysqli_fetch_assoc($query);
$user = $rows;
