<div align ="center">
  <br><br>
  <h1>학생 성적 목록 </h1>
<? include("dbconn.php"); ?>
<!-- 불러오기-->

<?php
/*
$servername = "localhost";
$username = "root";
$password = "autoset";
$dbname = "jungbo";
*/

// Create connection
//$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
//if ($conn->connect_error) {
//  die("Connection failed: " . $conn->connect_error);
//}

$sql = "SELECT sno, sname, kor, eng, math, hist,kor+eng+math+hist as summ, (kor+eng+math+hist)/4 as avg FROM examtbl";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  ?>
  <table border=1 width=75%>
    <tr>
      <th>번호</th>
      <th>이름</th>
      <th>국어</th>
      <th>영어</th>
      <th>수학</th>
      <th>역사</th>
    <th>합계</th>
  <th>평균</th></tr>
  <?
  while($row = $result->fetch_assoc()) {
   ?>
   <tr>
    <td><?=$row["sno"]?></td>
    <td>
      <a href=delete.php?sno=<?=$row['sno']?>>
        <?=$row["sname"]?>
    </a>
    </td>
    <td><?=$row["kor"]?></td>
    <td><?=$row["eng"]?></td>
    <td><?=$row["math"]?></td>
    <td><?=$row["hist"]?></td>
    <td><?=$row["summ"]?></td>
    <td><?=$row["avg"]?></td>
  </tr>
  <?
} 
?>
</table>
<? 
}else {
  echo "0 results";

}
$conn->close();
?>
</div>