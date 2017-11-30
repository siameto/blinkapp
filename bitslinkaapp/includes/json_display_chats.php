<?php 

// include connection

require_once("connection.php");

$query ="SELECT*FROM chat_tbl ORDER BY chat_date_time DESC";
$result =mysqli_query($connection, $query);
$res= array();
while ($row =mysqli_fetch_array($result)) {
	array_push($res,array('user_id'=>$row[1],'chat_msg'=>$row[2]));
	
}

echo json_encode(array("result"=>$res));



 ?>