<?php
$conn=mysqli_connect('localhost','root','','tpo');

$sql="UPDATE company_profile SET status=0 WHERE status=1";	
$result=mysqli_query($conn, $sql);

$sql="select * from company_profile ORDER BY id DESC limit 5";
$result=mysqli_query($conn, $sql);

$response='';
while($row=mysqli_fetch_array($result)) {
	$response = $response . "<div class='notification-item'>" .
	"<div class='notification-subject'>". $row["name"] . "</div>" . 
	"<div class='notification-comment'>" . $row["com_date"]  . "</div>" .
	"</div>";
}
if(!empty($response)) {
	print $response;
}


?>