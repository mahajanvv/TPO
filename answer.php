<?php
session_start();
?>

<!DOCTYPE html>
    <html lang="en">
      <head>
        <meta charset="utf-8"> 
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Bootstrap files -->
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>

        <script src="js/bootstrap.min.js"></script>
         <!-- added boot files -->
        <!-- 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        -->
      </head>
        <body>
        <?php
        $conn = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($conn,"tpo");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $sql = "SELECT * FROM qusetions";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
        while($row = $result->fetch_assoc()) {
            echo "<div class="."row".">";
            echo "<div class="."col-sm-2"."></div>";
            echo "<div class="."col-sm-8".">";
            echo "<h1>".$row["question"]."</h1><br><h6>".$row["uid"]."</h6>";
            //echo "id: " . $row["id"]. " - question: " . $row["question"]. " " . $row["uid"]. "<br>";
            $sql = "SELECT * FROM answers WHERE qid = ".$row["id"]." ;";
            $result1 = $conn->query($sql)   ;
            if ($result1->num_rows > 0) {
            // output data of each row
            while($row1 = $result1->fetch_assoc()) {
                    echo "<div class = "."row".">";
                    echo "<div class = "."col-sm-2"."></div>";
                    echo "<div class = "."col-sm-6"."><h3>".$row1["answer"]."</h3></br>";
                    echo "<h6>".$row1["prn"]."</h6></div>";
                    echo "</div>";

                //echo "id: " . $row["qid"]. " - Name: " . $row["answer"]. " " . $row["prn"]. "<br>";
                }
            } 
            else 
            {
                echo "0 results";
            }
            echo "<div class="."form-group"."><label for="."comment".">Answer:</label><textarea class="."form-control"." rows="."3" ."id="."comment"."></textarea></div>";
            echo "</div>";
            echo "<div class="."col-sm-2"."></div></div>";
        }
        } 
        else 
        {
            echo "0 results";
        }
            $conn->close();
            ?>
        </body>
    </html>