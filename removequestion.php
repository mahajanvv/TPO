<?php
    session_start();
    if($_SESSION['username']==$_GET['user'])
    {
        
                $id = $_GET['id'];
		      $conn = mysqli_connect("localhost","root","");
		      $db = mysqli_select_db($conn,"tpo");
		      // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $sql = "DELETE FROM answers WHERE qid=".$id.";";
            $conn->query($sql);
            $stmt = "DELETE FROM qusetions WHERE id=".$id.";";
            $conn->query($stmt);
		    mysqli_close($conn);
            
            header('Location:question1.php');
            exit();   
    }
    else
    {
        echo "U are not authorised to remove this question";
    }
?>