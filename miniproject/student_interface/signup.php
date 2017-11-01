
<?php
	$name=$_POST['name'];
	$uname=$_POST['Username'];
	$pw=$_POST['password'];
	$phone=$_POST['Phone'];
	$mail=$_POST['Email'];
	$connect=mysqli_connect('localhost','root','','tpo');
	 
	if(mysqli_connect_errno($connect))
	{
			echo 'Failed to connect';
	}
	$result=mysqli_query($connect,"SELECT COUNT(*) FROM login WHERE username = '$uname'");
	$row= mysqli_fetch_array($result, MYSQLI_NUM);
	if ($row[0]>=1)
	{
		echo "User Already in Exists<br/>";
	}
	else
	{
	 mysqli_query($connect,"INSERT INTO login VALUES('','$name','$uname','$pw','$mail',$phone)");
	 header('Location: index.html');
	}
?> 
