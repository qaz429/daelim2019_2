
<?php

$con = mysqli_connect("db_host", "qaz429", "tntlark85200!", "qaz429") or die ("MySQL ���ӽ���!");

$sql ="
  CREATE TABLE IF NOT EXISTS user TBL
  (userID CHAR(8) NOT NULL PRIMARY KEY,
  birthyear INT NOT NULL,
  addr CHAR(2) NOT NULL,
  mobile1 CHAR(3),
  mobile2 CHAR(8),
  height SMALLINT,
  mDate DATE
  )
 ";

 $ret = mysqli_query($con, $sql);

 if($ret){
	 echo "userTBL �� ���������� ������.";
 }
 else{
	 echo"userTBL ���� ���� !!!","<BR>";
	 echo"���п��� : " .mysql_error($con);
 }

 mysqli_close($con);
?>