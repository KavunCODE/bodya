<?php
foreach ($_POST as $key => $value){
	//echo "$key: $value<br>";
	if(empty($value)){
		$_SESSION["error"] = "Wypelnij wszystkie pola w formularzu!";
		echo "<script>history.back();</script>";
		exit();
	}
}

require_once "./connect.php";
$sql ="INSERT INTO `users` (`id`, `city_id`, `firstName`, `lastName`, `birthday`) VALUES (NULL, '$_POST[city_id]', '$_POST[firstName]', '$_POST[lastName]', '$_POST[birthday]');";
$conn->query($sql);

//echo $conn->affected_rows;
if ($conn->affected_rows == 1){
	$_SESSION["error"] = "Prawidlowo dodano rekord";
}else{
	$_SESSION["error"] = "Nie dodano rekoru";
}

header("location: ../4_db/3_db_table.php");