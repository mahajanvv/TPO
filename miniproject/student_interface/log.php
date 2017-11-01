
<?php
	session_start();
	$uname=$_POST['Username'];
	$pw=$_POST['Password'];
	$connect=mysqli_connect('localhost','root','','tpo');
	$result=mysqli_query($connect,"SELECT COUNT(*) FROM login WHERE username = '$uname' and password='$pw'");
	$row= mysqli_fetch_array($result, MYSQLI_NUM);
	$_SESSION['user']=$uname;
	$_SESSION['id']=$row['id'];
	if ($row[0]==1)
	{
		header('Location: web/index.php');
	}
	
 ?> 
