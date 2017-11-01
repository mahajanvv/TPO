
<?php
	$uname=$_POST['Username'];
	$pw=$_POST['Password'];
	$connect=mysqli_connect('localhost','root','','tpo');
	$result=mysqli_query($connect,"SELECT COUNT(*) FROM login WHERE username = '$uname' and password='$pw'");
	$row= mysqli_fetch_array($result, MYSQLI_NUM);
	if ($row[0]==1)
	{
		echo "Logged In<br/>";
	}
	else
	{
		echo "Not Found";
	}
 ?> 
