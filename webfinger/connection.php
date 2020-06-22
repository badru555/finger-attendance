<?php
$username = "root";
$pass = "";
$host = "localhost";
$db_name = "fingerdb";
$con = mysqli_connect ($host, $username, $pass);
$db = mysqli_select_db ( $con, $db_name );

// to call
$monthin=mysqli_query($con,"SELECT *, COUNT(a.finger) AS qlog FROM logfinger a, students b 
WHERE a.`finger`=b.`id` 
AND MONTH(a.time_stamp)=MONTH(CURDATE())
GROUP BY a.`finger` HAVING COUNT(a.finger)%2=1;");
$summonthin=mysqli_num_rows($monthin);
$month=mysqli_query($con,"SELECT *, COUNT(a.finger) AS qlog FROM logfinger a, students b 
WHERE a.`finger`=b.`id` 
AND MONTH(a.time_stamp)=MONTH(CURDATE())
GROUP BY a.`finger` HAVING COUNT(a.finger)%2=0;");
$summonthout=mysqli_num_rows($month);
?>