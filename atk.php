<?php
	include "common/conn.php";

	$stmt = $dbh->query("SELECT id,date,user FROM atk ORDER BY id DESC ");
	
	$arr = $stmt->fetch(PDO::FETCH_NUM);

	echo json_encode($arr,JSON_FORCE_OBJECT); 
?>