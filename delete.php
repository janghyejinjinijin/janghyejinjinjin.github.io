<? include("dbconn.php"); ?>
<?php
$sno=$_REQUEST['sno'];

$sql = "delete from examtbl where sno = '$sno'";

if ($conn->query($sql) === TRUE) {
    echo "저장완료";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
// 커넥션에서 sql변수로 쿼리를 실행 == true가 값이 들어가있는 것이니까(람다표현식)
// === 값도 같고, 형식도 같음 oop
header('Location:list.php');
$conn.close();
?>