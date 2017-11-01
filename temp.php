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
        <link href="web/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <link href="web/css/slicebox.css" rel="stylesheet" type="text/css">
	   <link href="web/css/style.css" rel="stylesheet" type="text/css" media="all" />
	   <!-- font-awesome-icons -->
	   <link href="web/css/font-awesome.css" rel="stylesheet">
	   <!-- //font-awesome-icons -->
	   <link href='//fonts.googleapis.com/css? family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
             rel='stylesheet' type='text/css'>
	   <link href="//fonts.googleapis.com/css?family=Raleway:100i,200,200i,300,400,500,500i,600,700,700i,800,800i" rel="stylesheet">

        <style>
            .mn{
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
float: right;
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
.headingstyle
            {
                margin: 10px 16px;
                overflow:hidden;
                text-overflow: ellipsis;
            }
.container {
  border: 2px solid #ccc;
  background-color: #eee;
  border-radius: 5px;
  padding: 16px;
  margin: 16px 0px;
max-width: 100%;
    overflow: hidden;
    text-overflow: ellipsis;
}

.container::after {
  content: "";
  clear: both;
  display: table;
}

.container img {
  float: left;
  margin-right: 20px;
  border-radius: 50%;
}

.container span {
  font-size: 20px;
  margin-right: 15px;
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
    <br>
    <button class="button1" id="myBtn"><span1>Add a answer </span1></button>
    <div id="myModal" class="modal">

    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="pqr">
            <form action="addanswer.php" method="post" id="myform123">
            <label for="fname">Hey ,<?php echo $_SESSION['username'];?></label><br><br>
            <!--<input type="text" id="fname" name="firstname" placeholder="Your name..">-->
            <input type="hidden" name="username" value="<?php echo $_SESSION['username']?>">
            <input type="hidden" name="qid" value="<?php echo $_GET['qid']?>">
            <label for="lname">Your Answer </label><br><br>
            <textarea name="lname" rows="6" cols="95" form="myform123">Write your Ansewer here</textarea>
                
            <input type="submit" value="Submit" name="submit">
            </form>
            
        </div>
       
    </div>
    </div>
    <br><br><br><br>
        <?php
        $conn = mysqli_connect("localhost","root","");
        $db = mysqli_select_db($conn,"tpo");
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        $qid= trim($_GET['qid'],'/');
        //echo $qid;
        $sql1 = "SELECT * FROM qusetions WHERE id = ".$qid.";";
        $result = $conn->query($sql1);
        $sql = "SELECT * FROM answers "."WHERE qid = ".$qid.";";
        $resultSet = $conn->query($sql);
        echo "<div class=row>";
        echo "<div class=col-sm-2><h3 class=headingstyle>Answers ".$resultSet->num_rows."</h3></div>";
        echo "<div class=col-sm-8><h2 class=headingstyle>".$result->fetch_assoc()["question"]."</h2></div>";
        echo "<div class=col-sm-2></div>";//
        echo "</div>";
        if ($resultSet->num_rows > 0) {
            // output data of each row
       /* <div class="media">
  <div class="media-left">
    <img src="img_avatar1.png" class="media-object" style="width:60px">
  </div>
  <div class="media-body">
    <h4 class="media-heading">John Doe</h4>
    <p>Lorem ipsum...</p>
        </div>
            </div>*/
        while($row = $resultSet->fetch_assoc()) {
            echo "<div class=row>";
            echo "<div class=col-sm-2></div>";
            echo "<div class=col-sm-8>";
            echo "<div class=container>";
            echo "<div class='mn'>";                     
            echo "<a href='removeanswer.php?id=".$row['id']."&prn=".$row['prn']."&qid=".$qid."'><span class='glyphicon glyphicon-remove'></span></a></div>";            
            echo "<img src=img_avatar1.png alt=Avatar style=width:90px>";
            echo "<p><span>answer by: ".$row['prn']."</span> posted on: ".$row['date']."</p><br>";
            echo "<p>".$row["answer"]."</p>";
            echo "</div></div>";
            echo "<div class=col-sm-2></div>";
            echo "</div>";
            //echo "<h2 class=media-heading>".$row["answer"]."</h2>";
            //echo "id: " . $row["id"]. " - question: " . $row["question"]. " " . $row["uid"]. "<br>";
           
        }
        } 
        else 
        {
            //echo "0 results";
        }
            $conn->close();
            unset($_SESSION['qid']);
            ?>
    <div class="row">
    <div class="col-sm-2"></div>
    <div class="col-sm-8">
    <div id='disqus_thread'></div>
                <script>

/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://wce-tpo.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href='https://disqus.com/?ref_noscript'>comments powered by Disqus.</a></noscript>

    </div>
    <div class="col-sm-2"></div>
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