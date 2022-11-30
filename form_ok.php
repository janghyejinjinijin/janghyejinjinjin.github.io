<div align = "center">

<? include ("dbconn.php");?>



<?php
$sno=$_REQUEST['sno'];
$sname=$_REQUEST['sname'];
$kor=$_REQUEST['kor'];
$eng=$_REQUEST['eng'];
$math=$_REQUEST['math'];
$hist=$_REQUEST['hist'];


$sql = "INSERT INTO examtbl (sno, sname, kor, eng, math, hist)
VALUES ('$sno', '$sname', '$kor', '$eng', '$math', '$hist')";

if ($conn->query($sql) === TRUE) {
  echo "저장완료";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

header('Location:list.php');

?>
</div>