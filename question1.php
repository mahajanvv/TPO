<?php
session_start();
$_SESSION['username']='vinit';
if(!isset($_SESSION['username']))
{
    header("location:index.php");
}
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">

<head>
	<title>Treasurer a Corporate Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
	<!-- custom-theme -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Treasurer Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //custom-theme -->
	<link href="web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="web/css/slicebox.css" rel="stylesheet" type="text/css" media="all">
	<link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="web/css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
	<!-- //font-awesome-icons -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
	    rel='stylesheet' type='text/css'>
	<link href="//fonts.googleapis.com/css?family=Raleway:100i,200,200i,300,400,500,500i,600,700,700i,800,800i" rel="stylesheet" type="text/css">
<style>
    .mn
    {
        float: right;
    }
input[type=text]{
    width: 80%;
    height: 300px;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 80%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}

.pqr {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    padding-top: 100px; /* Location of the box */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: rgb(0,0,0); /* Fallback color */
    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
}

/* Modal Content */
.modal-content {
    background-color: #fefefe;
    margin: auto;
    padding: 20px;
    border: 1px solid #888;
    width: 80%;
}

/* The Close Button */
.close {
    color: #aaaaaa;
    float: right;
    font-size: 28px;
    font-weight: bold;
}

.close:hover,
.close:focus {
    color: #000;
    text-decoration: none;
    cursor: pointer;
}
    .button1 {
  border-radius: 10px;
  background-color: #f4511e;
  border: none;
  color: #FFFFFF;
  text-align: center;
  font-size: 25px;
  padding: 20px;
  width: 300px;
  transition: all 0.5s;
  cursor: pointer;
  margin: 5px;
}

.button1 span1 {
  cursor: pointer;
  display: inline-block;
  position: relative;
  transition: 0.5s;
}

.button1 span1:after {
  content: '\00bb';
  position: absolute;
  opacity: 0;
  top: 0;
  right: -20px;
  transition: 0.5s;
}

.button1:hover span1 {
  padding-right: 25px;
}

.button1:hover span1:after {
  opacity: 1;
  right: 0;
}
    .abc{
        margin: 10px 10px;
    }
    .xyz{
        overflow: auto;
        
    }
    .badge
    {
        background: #949494;
    }
.media-body.response-text-right {
    float: left;
	width: 100%;
    
}
.media-body.response-text-right h5 {
    font-size: 1.4em;
    color: #000;
    letter-spacing: 1px;
    padding-bottom: .5em;
}
.media-body.response-text-right ul li {
    list-style: none;
    display: inline-block;
    color: #949191;
    font-size: 0.9em;
    letter-spacing: 1px;
    margin-bottom: 0.5em;
}
.media-body.response-text-right ul li i {
    color: #000;
    padding-right: .5em;
}
.media-body.response-text-right ul li:nth-child(2) {
    margin-left: 0.1em;
}
.media-body.response-text-right p {
    font-size: .9em;
    line-height: 1.9em;
}
.media.response-info {
    background: #f9f9f9;
    padding: 1em;
    border: 1px solid #e4e2e2;
}
.read {
    margin-top: 1em;
}
a.view.resw3 {
    font-size: 0.9em;
    color: #fff;
    padding: 0.6em 1.2em;
    background: #00a98f;
    letter-spacing: 1px;
    display: inline-block;
	    border-radius: 5px;
	-webkit-border-radius: 5px;
	-o-border-radius: 5px;
	-moz-border-radius: 5px;
	-ms-border-radius: 5px;
}
a.view.resw3:hover {
	-webkit-transition: all 0.5s;
    -moz-transition: all 0.5s;
    -ms-transition: all 0.5s;
    -o-transition: all 0.5s;
    transition: all 0.5s;
	    background: #111;
}
.media.response-info.m2 {
    margin-top: 3em;
}
</style>
</head>

<body>
	<!-- banner -->
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
	<!-- News -->
    
    <!-- The Modal -->
    <button class="button1" id="myBtn"><span1>Ask a question </span1></button>
    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="pqr">
            <form action="addquestion.php" method="post" id="myform123">
            <label for="fname">Hey ,<?php echo $_SESSION['username'];?></label><br><br>
            <!--<input type="text" id="fname" name="firstname" placeholder="Your name..">-->
            <input type="hidden" name="username" value="<?php echo $_SESSION['username']?>">
            <label for="lname">Your Question</label><br><br>
            <textarea name="lname" rows="6" cols="95" form="myform123">Write your question here</textarea>
                
            <input type="submit" value="Submit" name="submit">
            </form>
            
        </div>
       
    </div>
    </div>
    <!-- Questions -->
	<div class="w3l-news-content events">
		<div class="container">
			<h3 class="tittle_agile_w3">Questions</h3>
			<div class="heading-underline">
				<div class="h-u1"></div>
				<div class="h-u2"></div>
				<div class="h-u3"></div>
                <!--<div class="clearfix"></div>-->
			</div>
			<div class="w3l-news_info_agile_its">
                <div class="col-md-1"></div>
                <div class="col-md-10 xyz">
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
                    $i=$result->num_rows;
                    while($row = $result->fetch_assoc()) {$i-=1;
                                                          $j=3;
                                                          $k= $i % $j;
                                                          $k+=1;
                        $sql1="SELECT * FROM answers WHERE qid=".$row['id'].";";
                        $resultSet=$conn->query($sql1);
                        echo "<div class='abc w3l-news'>";
                        echo "<div class='media response-info'>";
                        echo "<div class='mn'>";                     
                        echo "<a href='removequestion.php?id=".$row['id']."&user=".$row['uid']."'><span class='glyphicon glyphicon-remove'></span></a></div>";
                        /*echo "<div class='media-left response-text-left'>";
                        echo "<a href='#' data-toggle='modal' data-target='#myModal'>";
                        echo "<img class='media-object' src='web/images/n".$k.".jpg' alt='dasdsad'>";
                        echo "</a>";
                        echo "</div>";*/
                        echo "<div class='media-body response-text-right'>";
                        echo "<h5>".nl2br($row["question"],true)."</h5>";
                        echo "<ul>";
                        echo "<li><i class='fa fa-calendar' aria-hidden='true'></i>".$row['date']."</li>";
                        echo "<li><i class='fa fa-users' aria-hidden='true'></i>Question contributed by :".$row['uid']."</li>";
                        echo "</ul>";
                        echo "<div class='read'>";
                        //echo "<form action='temp.php' method='post' id='myform'>";
                        //echo "<input type='hidden' name='qid' value= ".$row["id"] ."/>";
                        //echo "<input type='submit' name='submit' value='View Answers'/></form>";
                        echo "<a href='temp.php?qid=".$row['id']."' class='view resw3' >View answers <span class='badge'>".$resultSet->num_rows."</span></a>";
                        echo "</div>";
                        echo "</div>";
                        echo "<div class='clearfix'> </div>";
                        echo "</div>";
                        echo "<div class='clearfix'> </div>";
                        echo "</div>";
                }
                } 
                else 
                {
                echo "0 results";
                }
                $conn->close();
                ?>
                </div>
			</div>
		</div>
	</div>
    <script>
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
</body>

</html>