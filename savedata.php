<?php 

$stu_name = $_POST['s_name'];
$stu_address = $_POST['s_address'];
$stu_class = $_POST['s_dept'];
$stu_phone = $_POST['s_phone'];


include "config.php";

$sql = "INSERT INTO students(s_name,s_address,s_dept,s_phone) VALUES('{$stu_name}','{$stu_address}','{$stu_class}','{$stu_phone}')";

$result = mysqli_query($connec, $sql) or die("Query Unsuccesfull");

header("Location: http://localhost/crud_html/index.php");

mysqli_close($connec);

?>