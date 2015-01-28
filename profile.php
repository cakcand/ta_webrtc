<?php
include('session.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <div id="profile">
    <b id="welcome">Welcome : <i><?php echo $login_session; ?></i></b>
    <b id="logout"><a href="logout.php">Log Out</a></b>
    </div>
    User online now : <?php echo $count_user_online ; ?>
    <table border="1">
        <?php
            while($row = mysql_fetch_assoc($result3)) {
                echo "<tr><td>" .$row["username"]. "</td></tr>";
            }
        ?>
    </table>
</body>
</html>