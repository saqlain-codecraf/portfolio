<?php

$user_name = $_POST["username"];
$con = mysqli_connect("localhost","root","","ftl");
mysqli_query($con,"insert into user (name) values ('$user_name')");

CREATE TABLE bpv (bid int PRIMARY KEY AUTO_INCREMENT, dat varchar(100), cheque_no varchar(100), pay_to varchar(300), description varchar(500),account1 varchar(200), account_code1 varchar(100), debit1 varchar(100),credit1 varchar(100),account2 varchar(200), account_code2 varchar(100), debit2 varchar(100),credit2 varchar(100),account3 varchar(200), account_code3 varchar(100), debit3 varchar(100),credit3 varchar(100),account4 varchar(200), account_code4 varchar(100), debit4 varchar(100),credit4 varchar(100),account5 varchar(200), account_code5 varchar(100), debit5 varchar(100),credit5 varchar(100),account6 varchar(200), account_code6 varchar(100), debit6 varchar(100),credit6 varchar(100),account7 varchar(200), account_code7 varchar(100), debit7 varchar(100),credit7 varchar(100),account8 varchar(200), account_code8 varchar(100), debit8 varchar(100),credit8 varchar(100),balance varchar(100), total_debit varchar(100), total_credit varchar(100));


?>