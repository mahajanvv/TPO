<?php 
session_start();
    if($_SESSION['username']==$_GET['prn'])
    {
        
                $id = $_GET['id'];
		      $conn = mysqli_connect("localhost","root","");
		      $db = mysqli_select_db($conn,"tpo");
		      // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "DELETE FROM answers WHERE id=".$id.";";
            $conn->query($sql);
		    mysqli_close($conn);
            $stmt='Location:temp.php?qid='.$_GET['qid'];
            header($stmt);
            exit();   
    }
    else
    {
        echo "U are not authorised to remove this answer";
    }
?>