<?php
$con = mysqli_connect("localhost", "qaz429", "tntlark85200!", "qaz429") or die ("MySQL 접속실패!");
$sql ="
CREATE TABLE IF NOT EXISTS userTBL
(   userID CHAR(8) NOT NULL PRIMARY KEY,
    userName VARCHAR(10) NOT NULL,
    birthYear INT NOT NULL,
    addr CHAR(2) NOT NULL,
mobile1 CHAR(3),
mobile2 CHAR(8),
height SMALLINT,
mDate DATE
)
";