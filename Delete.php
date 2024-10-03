<?php
include "batabaseQuery.php";
$del= $_GET['id'];
$query ="DELETE FROM students WHERE id='$del'";
mysqli_query($con, $query);

header("Location:form.php");

?>