
<?php
session_start();
    $id=$_SESSION['id'];
	$year=$_POST['year'];
	$com=$_POST['company'];
	$disc=$_POST['disc'];
	$connect=mysqli_connect('localhost','root','','tpo');
	$u=$_SESSION['user'];
     if(mysqli_connect_errno($connect))
	{
			echo 'Failed to connect';
	}

	$sql3="SELECT * FROM login WHERE username='$u'";
	$result1=mysqli_query($connect, $sql3);
	$row=mysqli_fetch_array($result1);
	$i=$row['id'];
	
	echo $i;
	echo $_SESSION['id'];
	$result=mysqli_query($connect,"insert into experience values('',$i,'$year','$com','$disc')");
	$row1= mysqli_fetch_array($result, MYSQLI_NUM);
	header('Location:index.php');
	 ?> 
