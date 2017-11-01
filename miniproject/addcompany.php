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


//mysql_connect('localhost','user',password);
//mysql_query($conn,"CREATE USER 'root'@'localhost' IDENTIFIED BY '';");
//mysql_query($conn,"GRANT ALL ON tpo.* TO 'root'@'localhost'");

 $sql = "CREATE TABLE $name( ".
 "id INT NOT NULL AUTO_INCREMENT, ".
 "res_name VARCHAR(100) NOT NULL, ".
 "branch VARCHAR(40) NOT NULL, ".
 "year INT NOT NULL, ".
 "CPI FLOAT NOT NULL, ".
 "resume VARCHAR(40) NOT NULL, ".
 "PRIMARY KEY ( id )); ";
 
 //define your existing database name here.
//mysql_select_db( 'tpo' );
$retval = $conn->query($sql);
if(! $retval )
{
 die('Could not create table: ' . mysql_error());
}
	           }
?>