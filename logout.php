<?php
include 'koneksi.php';
session_start();
$user_check=$_SESSION['login_user'];
if(session_destroy()) // Destroying All Sessions
{
    mysql_query("DELETE FROM user_online WHERE username = '$user_check'", $connection);
    header("Location: index.php"); // Redirecting To Home Page
}
?>