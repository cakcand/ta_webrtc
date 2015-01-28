<?php
include 'koneksi.php';

$sql3="SELECT * FROM user_online Group by username";
$result3=mysql_query($sql3);
$count_user_online=mysql_num_rows($result3);
echo "User online : $count_user_online";
echo "<table border='1'>";
while($row = mysql_fetch_assoc($result3)) {
echo "<tr><td>" .$row["username"]. "</td></tr>";
}
echo "</table>";
?>