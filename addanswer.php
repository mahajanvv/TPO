<?php 
session_start();
unset($_SESSION['qid']);
    if($_SERVER["REQUEST_METHOD"]=="POST")
        {
                $qid=$_POST['qid'];
                $uid=$_POST['username'];
                $answer = $_POST['lname'];
		      $conn = mysqli_connect("localhost","root","");
		      $db = mysqli_select_db($conn,"tpo");
		      // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $stmt = $conn->prepare("INSERT INTO answers ( qid , answer ,prn , date) VALUES (? , ? ,? ,?)");
            date_default_timezone_set('Asia/Kolkata');
            $stmt->bind_param("ssss", $qid, $answer ,$uid ,date("Y-m-d h:i:s a"));
            $stmt->execute();
		    mysqli_close($conn);
            }
            $string = 'Location:temp.php?qid='.$qid;
            header($string);
    exit();
?>