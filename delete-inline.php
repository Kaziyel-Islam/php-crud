<?php 

$stu_id = $_GET['id'];



include "config.php";

$sql = "DELETE FROM students WHERE s_id ='{$stu_id}'";

$result = mysqli_query($connec, $sql) or die("Query Unsuccesfull");

header("Location: http://localhost/crud_html/index.php");

mysqli_close($connec);

?>