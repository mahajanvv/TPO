<?php
        $uid = $_POST['prnno'];
        $question = $_POST['ques'];
		$conn = mysqli_connect("localhost","root","");
		$db = mysqli_select_db($conn,"tpo");
		// Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        } 
        $stmt = $conn->prepare("INSERT INTO qusetions ( question , uid) VALUES (? , ?)");
        $stmt->bind_param("ss", $question, $uid);
        $stmt->execute();
		mysqli_close($conn);

?>
