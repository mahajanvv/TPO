<?php
            if($_SERVER["REQUEST_METHOD"]=="POST")
            {
                $uid=$_POST['username'];
                $question = $_POST['lname'];
		      $conn = mysqli_connect("localhost","root","");
		      $db = mysqli_select_db($conn,"tpo");
		      // Check connection
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            } 
            $stmt = $conn->prepare("INSERT INTO qusetions ( question , uid ,date) VALUES (? , ? ,?)");
            $stmt->bind_param("sss", $question, $uid ,date("Y-m-d"));
            $stmt->execute();
		    mysqli_close($conn);
            }
            header('Location:question1.php');
            exit();
?>