<?php
session_start();
$_SESSION['username']="Vinit Mahajan";
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
    <div class="row">
        <div class="col-lg-12">
            <a href="#" class="btn btn-danger" role="button">Ask a Question</a>        
        </div>
    </div>
      
    <form action="question.php" method="post">
        <div class="form-group">
            <label for="prnno">PRN NO:</label>
            <input type="input" class="form-control" id="prnno" name="prnno">
        </div>
        <div class="form-group">
            <label for="ques">QUESTION:</label>
            <input type="input" class="form-control" id="ques" name="ques">
        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </body>
</html>
