<?php 

$stu_id = $_POST['s_id'];
$stu_name = $_POST['s_name'];
$stu_address = $_POST['s_address'];
$stu_class = $_POST['s_dept'];
$stu_phone = $_POST['s_phone'];


include "config.php";

$sql = "UPDATE students SET s_name ='{$stu_name}', s_address ='{$stu_address}', s_dept ='{$stu_class}', s_phone ='{$stu_phone}' WHERE s_id ='{$stu_id}'";

$result = mysqli_query($connec, $sql) or die("Query Unsuccesfull");

header("Location: http://localhost/crud_html/index.php");

mysqli_close($connec);

?>