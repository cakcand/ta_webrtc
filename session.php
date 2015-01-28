<?php
include 'koneksi.php';

session_start();// Starting Session
// Storing Session
$user_check = $_SESSION['login_user'];
$session = session_id();
// SQL Query To Fetch Complete Information Of User
//$ses_sql = mysql_query("select username from login where username='$user_check'", $connection);
//$row = mysql_fetch_assoc($ses_sql);
//$login_session =$row['username'];

var_dump($user_check);
var_dump($session);

// user online update
$time = time();
$time_check = $time - 600 ; //SET TIME 10 Minute

// Connect to server and select databse

$sql = mysql_query("SELECT * FROM user_online WHERE session='$session'", $connection);
$count = mysql_num_rows($sql);

if($count == 0 ){
    $sql1 = "INSERT INTO user_online (session, time, username) VALUES ('$session', '$time', '$user_check')";
    $result1 = mysql_query($sql1);
}
else {
    $sql2 = "UPDATE user_online SET time='$time' WHERE session = '$session'";
    $result2 = mysql_query($sql2);
}

$sql3 = "SELECT * FROM user_online Group by username";
$result3 = mysql_query($sql3);
$count_user_online = mysql_num_rows($result3);


// if over 10 minute not logout, delete session 
$sql4 = "DELETE FROM user_online WHERE time < $time_check";
$result4 = mysql_query($sql4);

if(!isset($user_check)){
    mysql_close($connection); 
    header('Location: index.php'); 
}
?>