<?php
session_start();
$conn=mysqli_connect('localhost','root','','tpo');

	$year=$_POST['year'];
	$branch=$_POST['branch'];
	$cpi=$_POST['CPI'];
	$fresher=$_POST['fresher'];

  $fileName=$_FILES["resume"]["name"];
  $fileSize=$_FILES["resume"]["size"]/1024;
  $fileType=$_FILES["resume"]["type"];
  $fileTmpName=$_FILES["resume"]["tmp_name"];  

  if($fileType=="application/msword"){
    if($fileSize<=200){

      //New file name
      $random=rand(1111,9999);
      $newFileName=$random.$fileName;

      //File upload path
      $uploadPath="resumes/".$newFileName;

      //function for upload file
      if(move_uploaded_file($fileTmpName,$uploadPath)){
        echo "Successful"; 
        echo "File Name :".$newFileName; 
        echo "File Size :".$fileSize." kb"; 
        echo "File Type :".$fileType; 
      }
    }
    else{
      echo "Maximum upload file size limit is 200 kb";
    }
}
$u=$_SESSION['user'];
$sql="SELECT * FROM login WHERE username='$u'";
$result=mysqli_query($conn, $sql);
$row=mysqli_fetch_array($result);

$name=$row['name'];
$i=$_POST['submit'];

$query="insert into registeruser values('',$i,'$year','$branch','cpi','fresher','$name','$fileName')";
$res=mysqli_query($conn,$query);
header('Location:index.php');
?>