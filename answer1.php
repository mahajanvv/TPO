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
    <link href="web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="web/css/slicebox.css" rel="stylesheet" type="text/css">
	   <link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
	   <!-- font-awesome-icons -->
	   <link href="web/css/font-awesome.css" rel="stylesheet">
	   <!-- //font-awesome-icons -->
	   <link href='//fonts.googleapis.com/css? family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
             rel='stylesheet' type='text/css'>
	   <link href="//fonts.googleapis.com/css?family=Raleway:100i,200,200i,300,400,500,500i,600,700,700i,800,800i" rel="stylesheet">
     <!-- added boot files -->
    <!-- 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    -->
    
        <style>
.headingstyle
            {
                margin: 16px 16px;
            }
</style>
  </head>
    <body>
    <div class="agileits_top_menu">

		<div class="w3l_header_left">
			<ul>
				<li><i class="fa fa-map-marker" aria-hidden="true"></i> 1143 New York, USA</li>
				<li><i class="fa fa-phone" aria-hidden="true"></i> +(010) 221 918 811</li>
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
			</ul>
		</div>
		<div class="w3l_header_right">
			<div class="w3ls-social-icons text-left">
				<a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
				<a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
				<a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
				<a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
			</div>
		</div>
		<div class="clearfix"> </div>
	   </div>
	   
	<div class="agileits_w3layouts_banner_nav">
		<nav class="navbar navbar-default">
			<div class="navbar-header navbar-left">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
				<h1><a class="navbar-brand" href="index.html"><i class="fa fa-crosshairs" aria-hidden="true"></i> Treasurer</a></h1>

			</div>
			<ul class="agile_forms">
				<li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"> Sign In</a> </li>
				<li><a href="#" data-toggle="modal" data-target="#myModal3"> Sign Up</a> </li>
			</ul>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
				<nav>
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.html" class="hvr-underline-from-center">Home</a></li>
						<li><a href="about.html" class="hvr-underline-from-center">About</a></li>
						<li><a href="portfolio.html" class="hvr-underline-from-center">Portfolio</a></li>
						<li><a href="blog.html" class="hvr-underline-from-center">Blog</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle hvr-underline-from-center" data-toggle="dropdown">Short Codes <b class="fa fa-caret-down"></b></a>
							<ul class="dropdown-menu agile_short_dropdown">
								<li><a href="icons.html">Web Icons</a></li>
								<li><a href="typography.html">Typography</a></li>
							</ul>
						</li>
						<li><a href="contact.html" class="hvr-underline-from-center">Contact</a></li>
					</ul>
				</nav>

			</div>
		</nav>

		<div class="clearfix"> </div>
	</div>
    <br><br><br><br><br>
		<div class="col-md-8 w3l-news">
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#" data-toggle="modal" data-target="#myModal">
						<img class="media-object" src="images/n3.jpg" alt="">
					</a>
						</div>
						<div class="media-body response-text-right">
							<h5>Sit Lorem ipsum</h5>
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i>May 17, 2017</li>
								<li><i class="fa fa-users" aria-hidden="true"></i>Followers : 7485</li>
							</ul>
							<div class="read">
								<a href="single.html" class="view resw3">Read More</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
            <div class="clearfix"> </div>
        </div>
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
        //echo "<div class=row>";
        //echo "<div class="."col-md-2"."></div>";
        //echo "<div class=col-md-8>";
        echo "<div class=col-md-8 w3l-news>";
        echo "<div class=media response-info>";
        echo "<div class=media-left response-text-left>";
		echo "<a href=# data-toggle=modal data-target=#myModal>";
        echo "<img class=media-object src=images/n3.jpg >";
        echo "</a></div>";
        echo "<div class=media-body response-text-right>";
        echo "<h5>".$row["question"]."</h5><ul>";
        echo "<li><i class=fa fa-calendar aria-hidden=true></i>May 17, 2017</li>";
        echo "<li><i class=fa fa-users aria-hidden=true></i>Followers : 7485</li></ul>";
        echo "<div class=read>";
        echo "<a href=single.html class=view resw3>Answers</a></div></div>";
        echo "<div class=clearfix> </div></div>";
        echo "<div class=clearfix> </div></div>";
        //echo "</div>";
        /*echo "<input type=hidden runat=server id=hasflash Value=SomeValues />";
        //<a href="Delete.php?PID=<?php echo $row['PersonID']; 
        echo "<h1><a href=temp.php?PID=<?php echo ".$row["question"].";?>".$row["question"];
        echo "</a></h1><br><h6>".$row["uid"]."</h6>";
        //echo "id: " . $row["id"]. " - question: " . $row["question"]. " " . $row["uid"]. "<br>";
        echo "</div></div>";*/
        /*echo "<p class=headingstyle>".$row["question"]."</p><br><p>".$row["uid"]."</p>";
        echo "<form action=temp.php method=post>";//
        echo "<input type=hidden name=qid value= ".$row["id"] ."/>";
        echo "<input type=submit name=submit value=Answer class=btn btn-primary /></form>";*/
        //echo "<div class=col-sm-2></div></div>";
        
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