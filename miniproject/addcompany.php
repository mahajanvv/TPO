<?php 
	        	$conn=mysqli_connect('localhost','root','','tpo');
	        	print_r("in php");
	        	if($conn)
	        	{
		        	$name=$_POST['name'];
		        	$site=$_POST['email'];
		        	$positions=$_POST['position'];
		        	$intakes=$_POST['intakes'];	
		        	$salary=$_POST['lpa'];	
		        	$com_date=$_POST['date'];
		        	//$com_ppt=$_POST['ppt'];
		   			$sql2="insert into company_profile values('','$name','$site','$positions',$intakes,$salary,'$com_date',1)";
		   			print_r("in phpconn");
		            $run=mysqli_query($conn,$sql2);
	           }
?>