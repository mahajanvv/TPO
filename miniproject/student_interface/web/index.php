<?php
<<<<<<< HEAD
session_start();
if( !isset($_SESSION['user']) )
	echo "Not Logged in";
else
{
=======

>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
$conn=mysqli_connect('localhost','root','','tpo');
$sql3="SELECT * FROM company_profile WHERE status = 1";
$result=mysqli_query($conn, $sql3);
$count=mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
<<<<<<< HEAD
	<title>TPO</title>
=======
	<title>Treasurer a Corporate Category Bootstrap Responsive Website Template | Home :: w3layouts</title>
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
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
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/slicebox.css" rel="stylesheet" type="text/css">
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<!-- font-awesome-icons -->
	<link href="css/font-awesome.css" rel="stylesheet">
	<!-- //font-awesome-icons -->
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic'
	    rel='stylesheet' type='text/css'>
	<link href="//fonts.googleapis.com/css?family=Raleway:100i,200,200i,300,400,500,500i,600,700,700i,800,800i" rel="stylesheet">
    <script type="text/javascript">

	function myFunction() {
		$.ajax({
			url: "view_notification.php",
			type: "POST",
			processData:false,
			success: function(data){
				$("#notification-count").remove();					
				$("#notification-latest").show();$("#notification-latest").html(data);
			},
			error: function(){}           
		});
	 }
	 
	 $(document).ready(function() {
		$('body').click(function(e){
			if ( e.target.id != 'notification-icon'){
				$("#notification-latest").hide();
			}
		});
	});
		 
	</script>

<style type="text/css">

div.demo-content{box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.20);color:#8d9090;}
#notification-header {
	background: #17eccf;
	padding: 10px;
	text-align:right;
}
button#notification-icon {
	background: transparent;
	border: 0;
	position:relative;
	cursor:pointer;
}
#notification-count{
	position: absolute;
	left: 23px;
	top: -23px;
	font-size: 0.8em;		
	color: #de5050;
	font-weight:bold;
}
#form-header {
	font-size:1.5em;
}
#frmNotification {
	padding:20px 30px;
}
.form-row{
	padding-bottom:20px;
}
#btn-send {
	background: #258bdc;
	color: #FFF;
	padding: 10px 40px;
	border: 0px;
}
div.demo-content input[type='text'],textarea{
	width: 100%;
	padding: 10px 5px;
}
#notification-latest {
	color: white;
	position: absolute;
	right: 0px;
	background: #17eccf;
	box-shadow: 0px 1px 5px rgba(0, 0, 0, 0.20);		
	max-width: 250px;
	text-align: left;
}
.notification-item {
	padding:10px;
	border-bottom: #3ae2cb 1px solid;
	cursor:pointer;
}
.notification-subject {		
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
}
.notification-comment {		
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  font-style:italic;
}
</style>


</head>

<body>
	<!-- banner -->
	<div class="agileits_top_menu">

		<div class="w3l_header_left">
			<ul>
<<<<<<< HEAD
				<li><i class="fa fa-map-marker" aria-hidden="true"></i>WCE,SANGLI</li>
				<li><i class="fa fa-phone" aria-hidden="true"></i> +(010) 221 918 811</li>
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">WCETPO@gmail.com</a></li>
=======
				<li><i class="fa fa-map-marker" aria-hidden="true"></i> 1143 New York, USA</li>
				<li><i class="fa fa-phone" aria-hidden="true"></i> +(010) 221 918 811</li>
				<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:info@example.com">info@example.com</a></li>
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
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
<<<<<<< HEAD
				<h1><a class="navbar-brand" href="index.html"><i class="fa fa-crosshairs" aria-hidden="true"></i> WCE_TPO</a></h1>

			</div>
			<ul class="agile_forms">
				<li><a class="active" href="web1/index.php"><?php  echo $_SESSION['user']; echo $_SESSION['id'];?></a> </li>
				<li><a href="#" data-toggle="modal" data-target="#myModal3"> NOTIFICATION</a> </li>
				<li><a class="active" href="logout.php">LOGOUT</a> </li>

=======
				<h1><a class="navbar-brand" href="index.html"><i class="fa fa-crosshairs" aria-hidden="true"></i> Treasurer</a></h1>

			</div>
			<ul class="agile_forms">
				<li><a class="active" href="#" data-toggle="modal" data-target="#myModal2"> Sign In</a> </li>
				<li><a href="#" data-toggle="modal" data-target="#myModal3"> NOTIFICATION</a> </li>
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
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
<<<<<<< HEAD
=======
	<!-- Modal1 -->
	<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
						<h3 class="agileinfo_sign">Sign In</h3>
						<div class="login-form">
							<form action="#" method="post">
								<input type="email" name="email" placeholder="E-mail" required="">
								<input type="password" name="password" placeholder="Password" required="">
								<div class="tp">
									<input type="submit" value="Sign In">
								</div>
							</form>
						</div>
						<div class="login-social-grids">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-rss"></i></a></li>
							</ul>
						</div>
						<p><a href="#" data-toggle="modal" data-target="#myModal3"> Don't have an account?</a></p>
					</div>
				</div>
			</div>
		</div>
	</div>
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
	<!-- //Modal1 -->
	<!-- Modal2 -->
	<div class="modal fade" id="myModal3" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<!--<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
						<h3 class="agileinfo_sign">Sign Up</h3>
						<div class="login-form">
							<form action="#" method="post">
								<input type="text" name="name" placeholder="Username" required="">
								<input type="email" name="email" placeholder="Email" required="">
								<input type="password" name="password" id="password1" placeholder="Password" required="">
								<input type="password" name="password" id="password2" placeholder="Confirm Password" required="">

								<input type="submit" value="Sign Up">
							</form>
						</div>
						<p><a href="#"> By clicking register, I agree to your terms</a></p>
					</div>
				</div>-->
				<div id="notification-header">
			       <div style="position:relative">
			        <button id="notification-icon" name="button" onclick="myFunction()" class="dropbtn"><span id="notification-count"><?php if($count>0) { echo $count; } ?></span><img src="notification-icon.png" /></button>&nbsp;<span><<<< CLICK TO VIEW NEW NOTIFICATIONS</span>
				    <div id="notification-latest"></div>
				   </div>			
		        </div>
			</div>
		</div>
	</div>
<<<<<<< HEAD
	</div>

		
	</div>
=======
	
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
	<div class="banner">


		<div class="wrapper">

			<ul id="sb-slider" class="sb-slider">
				<li>
					<a href="#"><img src="images/banner1.jpg" alt="image1"/></a>
					<div class="sb-description">
						<h3>Creative Lifesaver</h3>
					</div>
				</li>
				<li>
					<a href="#"><img src="images/banner2.jpg" alt="image2"/></a>
					<div class="sb-description">
						<h3>Honest Entertainer</h3>
					</div>
				</li>
				<li>
					<a href="#"><img src="images/banner3.jpg" alt="image1"/></a>
					<div class="sb-description">
						<h3>Brave Astronaut</h3>
					</div>
				</li>
				<li>
					<a href="#"><img src="images/banner4.jpg" alt="image1"/></a>
					<div class="sb-description">
						<h3>Affectionate Decision Maker</h3>
					</div>
				</li>

			</ul>

			<div id="shadow" class="shadow"></div>

			<div id="nav-arrows" class="nav-arrows">
				<a href="#">Next</a>
				<a href="#">Previous</a>
			</div>

			<div id="nav-dots" class="nav-dots">
				<span class="nav-dot-current"></span>
				<span></span>
				<span></span>
				<span></span>

			</div>
		</div>
		<!-- /wrapper -->
	</div>
	<!-- banner-bottom -->
	<div class="banner-bottom">
		<div class="container">
			<div class="mid_agile_bannner_top_info">
<<<<<<< HEAD
				<h2>Let’s see WCE Placement Record</h2>
=======
				<h2>Let’s made Your own Business</h2>
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
				<div class="heading-underline">
					<div class="h-u1"></div>
					<div class="h-u2"></div>
					<div class="h-u3"></div>
					<div class="clearfix"></div>
				</div>
<<<<<<< HEAD
				<p></p>
			</div>
			<div class="col-md-6 agileits_banner_bottom_left">
				<h3>welcome to <span>WCE_TPO</span></h3>
				<p class="w3l_para">Top recuriters with number of placed students</p>
=======
				<p>Lorem ipsum dolor sit amet, Lorem ipsum Lorem ipsum.Integer varius est vitae iaculis suscipit. Integer sed rutrum lectus.</p>
			</div>
			<div class="col-md-6 agileits_banner_bottom_left">
				<h3>welcome to <span>Treasurer</span></h3>
				<p class="w3l_para">Curabitur nec purus eget urna pulvinar placerat. Integer varius est vitae iaculis suscipit. Integer sed rutrum lectus.</p>
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
				<div class="w3l_social_icons">
					<div class="w3l_social_icon_grid">
						<div class="w3l_social_icon_gridl w3_facebook">
							<a href="#">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
						</div>
						<div class="w3l_social_icon_gridr">
<<<<<<< HEAD
							<p class="counter">23</p>
=======
							<p class="counter">23,536</p>
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
						</div>
						<div class="clearfix"> </div>
						<div class="w3l_social_icon_grid_pos">
							<label>-</label>
						</div>
					</div>
					<div class="w3l_social_icon_grid w3ls_social_icon_grid">
						<div class="w3l_social_icon_gridl w3_dribbble">
							<a href="#">
<<<<<<< HEAD
								<i class="fa fa-dribbble" aria-hidden="true">TCS</i>
							</a>
						</div>
						<div class="w3l_social_icon_gridr">
							<p class="counter">1311</p>
=======
								<i class="fa fa-dribbble" aria-hidden="true"></i>
							</a>
						</div>
						<div class="w3l_social_icon_gridr">
							<p class="counter">13,676</p>
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
						</div>
						<div class="clearfix"> </div>
						<div class="w3l_social_icon_grid_pos">
							<label>-</label>
						</div>
					</div>
					<div class="w3l_social_icon_grid">
						<div class="w3l_social_icon_gridl w3_instagram">
							<a href="#">
<<<<<<< HEAD
								<i class="fa fa-instagram" aria-hidden="true">BPCL</i>
							</a>
						</div>
						<div class="w3l_social_icon_gridr">
							<p class="counter">450</p>
=======
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
						</div>
						<div class="w3l_social_icon_gridr">
							<p class="counter">45,342</p>
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
						</div>
						<div class="clearfix"> </div>
						<div class="w3l_social_icon_grid_pos">
							<label>-</label>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 agileits_banner_bottom_right">
				<div class="w3ls_banner_bottom_right">
					<img src="images/2.jpg" alt=" " class="img-responsive" />
					<div class="w3ls_banner_bottom_right_pos">
						<img src="images/1.jpg" alt=" " class="img-responsive" />
					</div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<<<<<<< HEAD
	 

	<!-- banner-bottom-icons 
=======
	<!-- //banner-bottom -->

	<!-- banner-bottom-icons -->
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
	<div class="banner-bottom-icons">
		<div class="col-md-6 w3_banner_bottom_icons_left">

			<div class="w3_agile_banner_bottom">
				<a href="#" class="hvr-rectangle-out">
					<h5 class="grow">Grow Your business</h5>
					<img src="images/banner4.jpg" alt=" " class="img-responsive hvr-radial-in" />
				</a>
			</div>
		</div>
		<div class="col-md-6 w3_banner_bottom_icons_left">
			<div class="w3_agile_banner_bottom">
				<h5 class="grow">Grow Your business</h5>
				<a href="#" class="hvr-rectangle-out"><img src="images/banner2.jpg" alt=" " class="img-responsive hvr-radial-in" /></a>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<<<<<<< HEAD
	
=======
	<!-- //banner-bottom-icons -->
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160

	<div class="skills">
		<div class="container">
			<h3 class="tittle_agile_w3">Our Skills</h3>
			<div class="heading-underline">
				<div class="h-u1"></div>
				<div class="h-u2"></div>
				<div class="h-u3"></div>
				<div class="clearfix"></div>
			</div>
			<div class="why-choose-agile-grids-top">
				<div class="col-md-6 skills_img_agile">
					<h4>Modern business Template</h4>
					<p>Lorem ipsum magna, vehicula ut.Curabitur nec purus eget urna pulvinar placerat. Integer varius est vitae iaculis suscipit.
						Integer sed rutrum lectus.Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit.</p>

					<div class="read">
						<a href="#" class="view resw3" data-toggle="modal" data-target="#myModal">Read More</a>
					</div>
				</div>
				<div class="col-md-6 services_bottom_grid_right">

					<div class='bar_group'>
						<div class='bar_group__bar thin elastic' label='Graphic Design' value='130'></div>
						<div class='bar_group__bar thin elastic' label='SEO' value='160'></div>
						<div class='bar_group__bar thin elastic' label='Web Development' value='180'></div>
						<div class='bar_group__bar thin elastic' label='Web Design' value='230'></div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
<<<<<<< HEAD
	</div>-->
	<!-- choose-us 
=======
	</div>
	<!-- choose-us -->
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
	<div class="why-choose-agile">
		<div class="container">
			<h3 class="tittle_agile_w3 two">What We Do</h3>
			<div class="heading-underline">
				<div class="h-u1"></div>
				<div class="h-u2"></div>
				<div class="h-u3"></div>
				<div class="clearfix"></div>
			</div>
			<div class="why-choose-agile-grids-top">
				<div class="col-md-4 agileits-w3layouts-grid">
					<div class="wthree_agile_us">
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid">
								<i class="fa fa-laptop" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-9 agile-why-text">
							<h4>Responsive Layout </h4>
							<p>Lorem ipsum magna, vehicula ut.</p>
						</div>

						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid">
								<i class="fa fa-globe" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-9 agile-why-text">
							<h4>Web design</h4>
							<p>Lorem ipsum magna, vehicula ut.</p>
						</div>

						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid">
								<i class="fa fa-life-ring" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-9 agile-why-text">
							<h4>Support 24x7 </h4>
							<p>Lorem ipsum magna, vehicula ut.</p>
						</div>

						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 agileits-w3layouts-grid">
					<div class="wthree_agile_us">
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid">
								<i class="fa fa-folder-open-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-9 agile-why-text">
							<h4>Easy Customization</h4>
							<p>Lorem ipsum magna, vehicula ut.</p>
						</div>

						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid">
								<i class="fa fa-lightbulb-o" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-9 agile-why-text">
							<h4>Creative Design </h4>
							<p>Lorem ipsum magna, vehicula ut.</p>
						</div>

						<div class="clearfix"> </div>
					</div>
					<div class="wthree_agile_us">
						<div class="col-xs-3 agile-why-text">
							<div class="wthree_features_grid">
								<i class="fa fa-users" aria-hidden="true"></i>
							</div>
						</div>
						<div class="col-xs-9 agile-why-text">
							<h4>Easy For Users</h4>
							<p>Lorem ipsum magna, vehicula ut.</p>
						</div>

						<div class="clearfix"> </div>
					</div>
				</div>
				<div class="col-md-4 agileits-w3layouts-grid img">
					<img src="images/serve.png" alt=" " class="img-responsive" />
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
	</div>
	</div>
	<!-- //choose-us -->

	<!-- News -->
	<div class="w3l-news-content events">
		<div class="container">
			<h3 class="tittle_agile_w3">Latest News</h3>
			<div class="heading-underline">
				<div class="h-u1"></div>
				<div class="h-u2"></div>
				<div class="h-u3"></div>
				<div class="clearfix"></div>
			</div>
			<?php
			  
<<<<<<< HEAD
	   				$sql="select * from company_profile ORDER BY com_date";
	                $run=mysqli_query($conn,$sql);
	                
			?>
			<div class="w3l-news_info_agile_its" >
				<div class="col-md-6 w3l-news" style="overflow-y: scroll;height:800px;">
=======
	   				$sql="select * from company_profile";
	                $run=mysqli_query($conn,$sql);
	                
			?>
			<div class="w3l-news_info_agile_its">
				<div class="col-md-6 w3l-news">
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
				<?php
				while($row=mysqli_fetch_array($run))
	                {
				?>
<<<<<<< HEAD
				<form action="details.php" method="post">
=======
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
					<div class="media response-info">
						<div class="media-left response-text-left">
							<a href="#" data-toggle="modal" data-target="#myModal">
						<img class="media-object" src="images/n1.jpg" alt="">
					</a>
						</div>
						<div class="media-body response-text-right">
							<h5><?php echo $row['name'] ?></h5>
							<ul>
								<li><i class="fa fa-calendar" aria-hidden="true"></i><?php echo $row['com_date'] ?></li>
								<li><i class="fa fa-users" aria-hidden="true"></i><?php echo $row['site'] ?></li>
							</ul>
							<p>POSITION:<?php echo $row['positions'] ?></p>
							<p>INTAKES:<?php echo $row['intakes'] ?></p>
							<p>SALARY:<?php echo $row['salary'] ?></p>
							<div class="read">
<<<<<<< HEAD
								<a href="10.pdf" target="_blank" class="view resw3">READ MORE</a>
								<a href=""  class="view resw3" data-toggle="modal" data-target="#myModal4">REGISTER</a>
								<br>
								<a href="10.pdf" target="_blank" class="view resw3">SCHEDULE</a>
								<a href="10.pdf" target="_blank" class="view resw3">RESULT</a>
								<?php
								$i=$row['id'];
								$sqltmp="select * from registeruser where id=$i";
                                $data=mysqli_query($conn, $sqltmp);
                                $res=mysqli_num_rows($data);
								?>
								<p><i class="fa fa-users" aria-hidden="true"></i>&nbsp;<?php echo $res ?> registrations</p>
							</div>
							<!--<button type="submit" name="submit" value="<?php echo $row['id'] ?>">Read More</button>-->
						</div>
						<div class="clearfix"> </div>
					</div>
				</form>
		<div class="modal fade" id="myModal4" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>

					<div class="signin-form profile">
						<h3 class="agileinfo_sign">REGISTER FOR INTERVIEW</h3>
						<div class="login-form">
							<form action="register.php" method="post" enctype="multipart/form-data">
								<input type="text" name="year" placeholder="year" required="">
								<input type="text" name="branch" placeholder="branch" required="">
								<input type="text" name="CPI" placeholder="CPI" required="">
								Are you fresher?&nbsp;<input type="checkbox" name="fresher" value="FRESHER" placeholder="CPI" ><br>
								<label for="resume">Upload Resume</label>
								<input type="file" name="resume" placeholder="resume" required="">

								<button type="submit" name="submit" value="<?php echo $row['id'] ?>" class="btn btn-success">REGISTER</button>
							</form> 
						</div>
						<p><a href="#"> By clicking register, I agree to your terms</a></p>
					</div>
				</div>
				
			</div>
		</div>
	</div>
=======
								<a href="10.pdf" target="_blank" class="view resw3">Read More</a>
							</div>
						</div>
						<div class="clearfix"> </div>
					</div>
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
					<?php } ?>	
					
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 wthree_events_grid_right">
					<div class="wthree_events_grid_right1">
						<h3>News Letter</h3>
						<p>Never Miss Any Update From Us!</p>
						<div class="w3layouts_newsletter_right">
							<form action="#" method="post">
								<input type="email" name="Email" placeholder="Email..." required="">
								<input type="submit" value="Subscribe">
							</form>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- Modal1 -->
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog">
		<div class="modal-dialog">
			<!-- Modal content-->
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4>Treasurer</h4>
					<img src="images/banner2.jpg" alt="blog-image" />
					<span>Lorem ipsum dolor sit amet, Sed ut perspiciatis unde omnis iste natus error sit voluptatem , eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.accusantium doloremque laudantium, totam rem aperiamconsectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</span>
				</div>
			</div>
		</div>
	</div>
	<!-- //Modal1 -->
	<!-- //News -->
	<!-- events-top -->
	<div class="events-top">
		<ul id="flexiselDemo1">
			<li>
				<div class="agile_events_top_grid">
					<div class="w3_agileits_evets_text_img">
						<a href="images/4.jpg" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/4.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</div>
							</div>
							<div class="agile_events_top_grid_pos">
								<img src="images/1.png" alt=" " class="img-responsive" />
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text">
						<h3>Richard Carl</h3>
						<p>Client</p>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">
					<div class="w3_agileits_evets_text_img">
						<a href="portfolio.html" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/7.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</div>
							</div>
							<div class="agile_events_top_grid_pos">
								<img src="images/3.png" alt=" " class="img-responsive" />
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text">
						<h3>Michael Crisp</h3>
						<p>Client</p>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">
					<div class="w3_agileits_evets_text_img">
						<a href="portfolio.html" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/6.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</div>
							</div>
							<div class="agile_events_top_grid_pos">
								<img src="images/2.png" alt=" " class="img-responsive" />
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text">
						<h3>Adam Lii</h3>
						<p>Client</p>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">
					<div class="w3_agileits_evets_text_img">
						<a href="portfolio.html" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/5.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</div>
							</div>
							<div class="agile_events_top_grid_pos">
								<img src="images/4.png" alt=" " class="img-responsive" />
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text">
						<h3>Thomas Paul</h3>
						<p>Client</p>
					</div>
				</div>
			</li>
			<li>
				<div class="agile_events_top_grid">
					<div class="w3_agileits_evets_text_img">
						<a href="portfolio.html" class="lsb-preview" data-lsb-group="header">
							<div class="view view-eighth">
								<img src="images/1.jpg" alt=" " class="img-responsive" />
								<div class="mask">
									<i class="fa fa-eye" aria-hidden="true"></i>
								</div>
							</div>
							<div class="agile_events_top_grid_pos">
								<img src="images/2.png" alt=" " class="img-responsive" />
							</div>
						</a>
					</div>
					<div class="agileits_w3layouts_events_text">
						<h3>Adam Lii</h3>
						<p>Client</p>
					</div>
				</div>
			</li>
		</ul>
	</div>
	<!-- //events-top -->


	<!-- bootstrap-pop-up -->
	<div class="modal video-modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					Treasurer
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
				</div>
				<section>
					<div class="modal-body">
						<div class="col-md-6 w3_modal_body_left">
							<img src="images/2.jpg" alt=" " class="img-responsive" />
						</div>
						<div class="col-md-6 w3_modal_body_right">
							<p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi
								consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur.
								<i>" Quis autem vel eum iure reprehenderit qui in ea voluptate velit 
								esse quam nihil molestiae consequatur.</i></p>
						</div>
						<div class="clearfix"> </div>
					</div>
				</section>
			</div>
		</div>
	</div>
	<!-- //bootstrap-pop-up -->
	<!-- subscribe -->
	<div class="w3layouts_bottom">
		<div class="container">
			<div class="col-md-9 w3layouts_getin_info">
				<h3>Are Looking for Business Solutions ?</h3>
			</div>
			<div class="col-md-3 w3layouts_getin">
				<a href="#" data-toggle="modal" data-target="#myModal3">Get In Touch</a>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
	<!-- //subscribe -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="w3_agile_footer_grids">
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Latest Tweets</h3>
					<ul class="agile_footer_grid_list">
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil
							impedit. <span>1 day ago</span></li>
						<li><i class="fa fa-twitter" aria-hidden="true"></i>Itaque earum rerum hic tenetur a sapiente delectus <a href="mailto:info@mail.com">info@mail.com</a>							cumque nihil impedit. <span>2 days ago</span></li>
					</ul>
				</div>
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Navigation</h3>
					<ul class="agileits_w3layouts_footer_grid_list">
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="index.html">Home</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="about.html">About</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="portfolio.html">Portfolio</a></li>
						<li><i class="fa fa-angle-double-right" aria-hidden="true"></i><a href="contact.html">Contact</a></li>
					</ul>
				</div>
				<div class="col-md-4 w3_agile_footer_grid">
					<h3>Instagram Posts</h3>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/f1.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/f2.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/f4.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/f3.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/f1.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="w3_agileits_footer_grid_left">
						<a href="#" data-toggle="modal" data-target="#myModal">
							<img src="images/f2.jpg" alt=" " class="img-responsive" />
						</a>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="w3ls_address_mail_footer_grids">
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-map-marker" aria-hidden="true"></i>
					</div>
					<p>3481 Melrose Place, Beverly Hills, <span>New York City 90210.</span></p>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-phone" aria-hidden="true"></i>
					</div>
					<p>+(000) 123 4565 32 <span>+(010) 123 4565 35</span></p>
				</div>
				<div class="col-md-4 w3ls_footer_grid_left">
					<div class="wthree_footer_grid_left">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
					</div>
					<p><a href="mailto:info@example.com">info@example1.com</a>
						<span><a href="mailto:info@example.com">info@example2.com</a></span></p>
				</div>
				<div class="clearfix"> </div>
			</div>
			<div class="agileinfo_copyright">
				<p>© 2017 Treasurer. All Rights Reserved | Design by <a href="https://w3layouts.com/">W3layouts</a></p>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- menu -->
	<!-- js -->
	<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
	<script type="text/javascript" src="js/modernizr.custom.46884.js"></script>
	<!-- password-script -->
	<script type="text/javascript">
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}

		function validatePassword() {
			var pass2 = document.getElementById("password2").value;
			var pass1 = document.getElementById("password1").value;
			if (pass1 != pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');
			//empty string means no validation error
		}
	</script>
	<!-- //password-script -->

	<!-- //js -->
	<script src="js/bars.js"></script>

	<script type="text/javascript" src="js/jquery.slicebox.js"></script>
	<script type="text/javascript">
		$(function () {

			var Page = (function () {

				var $navArrows = $('#nav-arrows').hide(),
					$navDots = $('#nav-dots').hide(),
					$nav = $navDots.children('span'),
					$shadow = $('#shadow').hide(),
					slicebox = $('#sb-slider').slicebox({
						onReady: function () {

							$navArrows.show();
							$navDots.show();
							$shadow.show();

						},
						onBeforeChange: function (pos) {

							$nav.removeClass('nav-dot-current');
							$nav.eq(pos).addClass('nav-dot-current');

						}
					}),

					init = function () {

						initEvents();

					},
					initEvents = function () {

						// add navigation events
						$navArrows.children(':first').on('click', function () {

							slicebox.next();
							return false;

						});

						$navArrows.children(':last').on('click', function () {

							slicebox.previous();
							return false;

						});

						$nav.each(function (i) {

							$(this).on('click', function (event) {

								var $dot = $(this);

								if (!slicebox.isActive()) {

									$nav.removeClass('nav-dot-current');
									$dot.addClass('nav-dot-current');

								}

								slicebox.jump(i + 1);
								return false;

							});

						});

					};

				return {
					init: init
				};

			})();

			Page.init();

		});
	</script>
	<!-- Stats -->
	<script src="js/waypoints.min.js"></script>
	<script src="js/counterup.min.js"></script>
	<script>
		jQuery(document).ready(function ($) {
			$('.counter').counterUp({
				delay: 10,
				time: 2000
			});
		});
	</script>
	<!-- //Stats -->

	<script type="text/javascript" src="js/jquery.flexisel.js"></script>
	<!-- flexisel -->
	<script type="text/javascript">
		$(window).load(function () {
			$("#flexiselDemo1").flexisel({
				visibleItems: 4,
				animationSpeed: 1000,
				autoPlay: true,
				autoPlaySpeed: 3000,
				pauseOnHover: true,
				enableResponsiveBreakpoints: true,
				responsiveBreakpoints: {
					portrait: {
						changePoint: 480,
						visibleItems: 1
					},
					landscape: {
						changePoint: 640,
						visibleItems: 2
					},
					tablet: {
						changePoint: 768,
						visibleItems: 2
					}
				}
			});

		});
	</script>
	<!-- //flexisel -->
	<!-- //flexisel -->
	<!-- js for portfolio lightbox -->
	<script src="js/jquery.chocolat.js "></script>
	<!-- //menu -->
	<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<!-- //for bootstrap working -->
	<!-- start-smoth-scrolling -->
	<script type="text/javascript" src="js/move-top.js"></script>
	<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function ($) {
			$(".scroll").click(function (event) {
				event.preventDefault();
				$('html,body').animate({
					scrollTop: $(this.hash).offset().top
				}, 1000);
			});
		});
	</script>
	<!-- start-smoth-scrolling -->
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function () {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/

			$().UItoTop({
				easingType: 'easeOutQuart'
			});

		});
	</script>
	<!-- //here ends scrolling icon -->
</body>

<<<<<<< HEAD
</html>
<?php } ?>
=======
</html>
>>>>>>> 5bdd0544c1790e9fc80e42e78efd9dbfe8b02160
