<?php

 echo $stu_name = $_POST['sname'];
 echo $stu_address = $_POST['saddress'];
 echo $stu_class = $_POST['class'];
 echo $stu_phone = $_POST['sphone'];


$conn = mysqli_connect("localhost","root","","crud") or die("connection failed");

 $sql = "insert into student(sname,saddress,sclass,sphone) values ('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}') ";
               
 $result = mysqli_query($conn, $sql) or die("query failed");
               
header("Location: http://localhost/crud/index.php"); // it is for redirecting to home.php location file

mysqli_close($conn);


?>