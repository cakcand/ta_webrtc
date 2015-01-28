<?php
include 'koneksi.php';
session_start();
$error='';

if (isset($_POST['submit'])) {
    if (empty($_POST['username']) || empty($_POST['password'])) {
		$error = "Username or Password is Empty";
		$_SESSION['login_error'] = $error;
		header("location: index.php");
    }
    else{
        $username=$_POST['username'];
        $password=$_POST['password'];

        $username = stripslashes($username);
        $password = stripslashes($password);
        $username = mysql_real_escape_string($username);
        $password = mysql_real_escape_string($password);
        
        $query = mysql_query("select * from login where password='$password' AND username='$username'", $connection);
        $rows = mysql_num_rows($query);
        if ($rows == 1) {
			$data = mysql_fetch_array($query);
		
            $_SESSION['login_user']=$username;
			$_SESSION['user_status']=$data['status'];
			
            header("location: home.php");
        } 
        else {
            $error = "Username or Password is invalid";
			$_SESSION['login_error'] = $error;
			header("location: index.php");
        }
        
        mysql_close($connection);
    }
}
?>