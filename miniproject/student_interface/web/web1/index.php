<?php
session_start();
$u=$_SESSION['user'];
$conn=mysqli_connect('localhost','root','','tpo');
$sql3="SELECT * FROM login WHERE username='$u'";
$result=mysqli_query($conn, $sql3);
$row=mysqli_fetch_array($result);
$i=$row['id'];
$sql4="SELECT * FROM experience WHERE id=$i";
$result2=mysqli_query($conn, $sql4);

$sql5="SELECT * FROM profile WHERE id=$i";
$resultprofile=mysqli_query($conn, $sql5);
$profile=mysqli_fetch_array($resultprofile);

$sql6="SELECT * FROM projects WHERE id=$i";
$resultproject=mysqli_query($conn, $sql6);

?>

<html>
<head>
<title>Preface a Personal Category Flat Bootstrap Responsive Website Template| Home :: w3layouts</title>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="js/jquery.min.js"></script>
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />`
 <!-- Custom Theme files -->
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <meta name="keywords" content="Preface Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, Sony Ericsson, Motorola web design" />
<!-- webfonts -->
	<link href='//fonts.googleapis.com/css?family=Asap:400,700,400italic' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<!-- webfonts -->
 <!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
	<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<script type="text/javascript">
$(function(){
  
    $('[data-toggle="tooltip"]').tooltip(); 
	
	$(".req-input input, .req-input textarea").on("click input", function(){
		validate($(this).closest("[data-form-container]"));
	});
    
	//This is for the on blur, if the form fields are all empty but the target was one of the fields do not reset to defaul state
	var currentlySelected;
	$(document).mousedown(function(e) {
        currentlySelected = $(e.target);
    });
	
	//Reset to form to the default state of the none of the fields were filled out
	$(".req-input input,  .req-input textarea").on("blur", function(e){
		var Parent = $(this).closest("[data-form-container]");
		//if the target that was clicked is inside this form then do nothing
		if(typeof currentlySelected != "undefined" && currentlySelected.parent().hasClass("req-input") && Parent.attr("id") == currentlySelected.closest(".form-container").attr("id"))
			return;
		
		var length = 0;
		Parent.find("input").each(function(){
			length += $(this).val().length;
		});
		Parent.find("textarea").each(function(){
			length += $(this).val().length;
		});
		if(length == 0){
			var container = $(this).closest(".form-container");
			resetForm(container);
		}
	});
	
	$(".create-account").on('click', function(){
		if($(".confirm-password").is(":visible")){
			$(this).text("Create an Account");
			$(this).closest("[data-form-container]").find(".submit-form").text("Login");
			$(".confirm-password").parent().slideUp(function(){
				validate($(this).closest("[data-form-container]"));
			});
		} else {
			$(this).closest("[data-form-container]").find(".submit-form").text("Create Account");
			$(this).text("Already Have an Account");
			$(".confirm-password").parent().slideDown(function(){
				validate($(this).closest("[data-form-container]"));
			});
		}
		
	});
	
	$("[data-toggle='tooltip']").on("mouseover", function(){
		console.log($(this).parent().attr("class"));
		if($(this).parent().hasClass("invalid")){
			$(".tooltip").addClass("tooltip-invalid").removeClass("tooltip-valid");
		} else if($(this).parent().hasClass("valid")){
			$(".tooltip").addClass("tooltip-valid").removeClass("tooltip-invalid");
		} else {
			$(".tooltip").removeClass("tooltip-invalid tooltip-valid");
		}
	});
	
})

function resetForm(target){
	var container = target;
	container.find(".valid, .invalid").removeClass("valid invalid")
	container.css("background", "");
	container.css("color", "");
}

function setRow(valid, Parent){
	var error = 0;
	if(valid){
		Parent.addClass("valid");
		Parent.removeClass("invalid");
	} else {
		error = 1;
		Parent.addClass("invalid");
		Parent.removeClass("valid");
	}
	return error;
}

function validate(target){
	var error = 0;
	target.find(".req-input input, .req-input textarea, .req-input select").each(function(){
		var type = $(this).attr("type");
		
		if($(this).parent().hasClass("confirm-password") && type == "password"){
			var type = "confirm-password"; 
		}
		
		var Parent = $(this).parent();
		var val = $(this).val();
		
		if($(this).is(":visible") == false)
			return true; //skip iteration
		
		switch(type) {
			case "confirm-password":
				var initialPassword = $(".input-password input").val();
				error += setRow(initialPassword  == val && initialPassword.length > 0, Parent);
				break;
			case "password":
			case "textarea":
			case "text":
				var minLength = $(this).data("min-length");
				if(typeof minLength == "undefined")
					minLength = 0;
				error += setRow(val.length >= minLength, Parent);
				break; 
			case "email":
				error += setRow(validateEmail(val), Parent);
				break;
			case "tel":
				error += setRow(phonenumber(val), Parent);
				break;			
		}	
	});
	
	var submitForm = target.find(".submit-form");
	var formContainer = target;
	var formTitle = target.find(".form-title");
	if(error == 0){
		formContainer.css("background", "#C8E6C9");
		formContainer.css("color", "#2E7D32");
		submitForm.addClass("valid");
		submitForm.removeClass("invalid");
        return true;
	} else {		
		formContainer.css("background", "#FFCDD2");
		formContainer.css("color", "#C62828");
		submitForm.addClass("invalid");
		submitForm.removeClass("valid");
        return false;
	}
}
function phonenumber(inputtxt) {  
	if(typeof inputtxt == "undefined")
		return;
	var phoneno = /^\d{10}$/;  
	if((inputtxt.match(phoneno))) {  
		return true;  
	}  
	else {  
		return false;  
	}  
}  

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}
</script>
 <!---- start-smoth-scrolling---->
 <style type="text/css">
.btn-glyphicon { padding:8px; background:#ffffff; margin-right:4px; }
.icon-btn { padding: 1px 15px 3px 2px; border-radius:50px;}

.form-container div, .form-container  span{
    font-family: Calibri, Candara, Segoe, 'Segoe UI', Optima, Arial, sans-serif;
}

.form-container ::-webkit-input-placeholder { /* WebKit, Blink, Edge */
    color:    #999;
}

.form-container :-moz-placeholder { /* Mozilla Firefox 4 to 18 */
   color:    #999;
   opacity:  1;
}

.form-container ::-moz-placeholder { /* Mozilla Firefox 19+ */
   color:    #999;
   opacity:  1;
}

.form-container :-ms-input-placeholder { /* Internet Explorer 10-11 */
   color:    #999;
}

.form-container :placeholder-shown { /* Standard (https://drafts.csswg.org/selectors-4/#placeholder) */
  color:  #999;
}

.oauth-buttons {
    text-align:center;
}
.row {
	text-align:center;
}
#login-form{
 min-width:375px;   
}
.login-container{
	width:400px;
	height:330px;
	display:inline-block;
	margin-top: -165px;
    top: 50%;
    left: 50%;
    position: absolute;
    margin-left: -200px;
}
.form-container .create-account:hover{
	opacity:.7;
}
.form-container .create-account{
	color:inherit;
	margin-top: 15px;
    display: inline-block;
	cursor:pointer;
	text-decoration:none;
}

.oauth-buttons .fa{
	cursor:pointer;
	margin-top:10px;
	color:inherit;
	width:30px;
	height:30px;
	text-align:center;
	line-height:30px;
	margin:5px;
	margin-top:15px;
}
.oauth-buttons .fa:hover{
	color:white;
}
.oauth-buttons .fa-google-plus:hover{
	background: #dd4b39;
}
 .oauth-buttons .fa-facebook:hover{
	background:	#8b9dc3;
}

.oauth-buttons .fa-linkedin:hover{
	background:	#0077b5;
}

.oauth-buttons .fa-twitter:hover{
	background:	#55acee;
}

.form-container .req-input .input-status {
    display: inline-block;
    height: 40px;
    width: 40px;
    float: left;	
}
.form-container .input-status::before{
	content: " ";
	height:20px;
	width:20px;
	position:absolute;
	top:10px;
	left:10px;
	color:white;
	border-radius:50%;
	background:white;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
	
}

.form-container .input-status::after{
	content: " ";
	height:10px;
	width:10px;
	position:absolute;
	top:15px;
	left:15px;
	color:white;
	border-radius:50%;
	background:#00BCD4;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.form-container .req-input{
	width:100%;
    float:left;
	position:relative;
	background:#00BCD4;
	height:40px;
	display:inline-block;
	border-radius:0px;
	margin:5px 0px;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.form-container div .row .invalid:hover{
	background:#EF9A9A;
}

.form-container div .row .invalid{
	background:#E57373;
}

.form-container .invalid .input-status:before {
	width:20px;
	height:4px;
	top:19px;
	left:10px;
	background:white;/*#F44336;*/
	border-radius:0px;
	 -ms-transform: rotate(45deg); /* IE 9 */
    -webkit-transform: rotate(45deg); /* Chrome, Safari, Opera */
    transform: rotate(45deg);
}

.form-container .invalid .input-status:after {
	width:20px;
	height:4px;
	background:white;
	border-radius:0px;
	top:19px;
	left:10px;
	 -ms-transform: rotate(-45deg); /* IE 9 */
    -webkit-transform: rotate(-45deg); /* Chrome, Safari, Opera */
    transform: rotate(-45deg);
}

.form-container div .row  .valid:hover{
	background:#A5D6A7;
}

.form-container div .row .valid {
	background:#81C784;
	
}

.form-container .valid .input-status:after {
	border-radius:0px;
    width: 17px;
    height: 4px;
    background: white;
    top: 16px;
    left: 15px;
    -ms-transform: rotate(-45deg);
    -webkit-transform: rotate(-45deg);
    transform: rotate(-45deg);
}

.form-container .valid .input-status:before {
	border-radius:0px;
    width: 11px;
    height: 4px;
	background:white;
    top: 19px;
    left: 10px;
    -ms-transform: rotate(45deg);
    -webkit-transform: rotate(45deg);
    transform: rotate(45deg);
}

.form-container .input-container{
	padding:0px 20px;
}

 .form-container .row-input{
	padding:0px 5px;
}

.form-container .req-input.input-password{
	margin-bottom:0px;
}
.form-container .req-input.confirm-password{
	margin-top:0px;
}

.form-container {
	margin:20px;
	padding:20px;
	border-radius:0px;
	background:#B3E5FC;
	color:#00838F;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.form-container .form-title{
	font-size:25px;
	color:inherit;
	text-align:center;
	margin-bottom:10px;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.form-container .submit-row{
	padding:0px 0px;
}

.form-container .btn.submit-form{
	margin-top:15px;
	padding:12px;
	background:#00BCD4;
	color:white;
	border-radius:0px;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}

.form-container .btn.submit-form:focus{
	outline:0px;
	color:white;
}

.form-container .btn.submit-form:hover{
	background:#00cde5;
	color:white;
}

.form-container .tooltip.top .tooltip-arrow {
	border-top-color:#00BCD4 !important;
}

.form-container .tooltip.top.tooltip-invalid .tooltip-arrow {
	border-top-color:#E57373 !important;
}

.form-container .tooltip.top.tooltip-invalid .tooltip-inner::before{
	background:#E57373;
}
.form-container .tooltip.top.tooltip-invalid .tooltip-inner{
	background:#FFEBEE !important;
	color:#E57373;
}

.form-container .tooltip.top.tooltip-valid .tooltip-arrow {
	border-top-color:#81C784 !important;
}

.form-container .tooltip.top.tooltip-valid .tooltip-inner::before{
	background:#81C784;
}
.form-container .tooltip.top.tooltip-valid .tooltip-inner{
	background:#E8F5E9 !important;
	color:#81C784;
}

.form-container .tooltip.top .tooltip-inner::before{
	content:" ";
	width:100%;
	height:6px;
	background:#00BCD4;
	position:absolute;
	bottom:5px;
	right:0px;
}
.form-container .tooltip.top .tooltip-inner{
	border:0px solid #00BCD4;
	background:#E0F7FA !important;
	color:#00ACC1;
	font-weight:bold;
	font-size:13px;
	border-radius:0px;
	padding:10px 15px;
}
.form-container .tooltip {
	max-width:150px;
	opacity:1 !important;
}

.form-container .message-box{
	width:100%;
	height:auto;
}

.form-container textarea:focus,.form-container textarea:hover{
	background:#fff;
	outline:none;
	border:0px;
}

.form-container .req-input textarea {
	max-width:calc(100% - 50px);
    width: 100%;
    height: 80px;
    border: 0px;
    color: #777;
    padding: 10px 9px 0px 9px;
	float:left;
	
}
.form-container input[type=text]:focus, .form-container input[type=password]:focus, .form-container input[type=email]:focus, .form-container input[type=tel]:focus, .form-container select{
    background:#fff;
	color:#777;
	border-left:0px;
	outline:none;
}

.form-container input[type=text]:hover,.form-container input[type=password]:hover,.form-container input[type=email]:hover,.form-container input[type=tel]:hover, . form-container select{
	background:#fff;
}

.form-container input[type=text], .form-container input[type=password], .form-container input[type=email],input[type=tel], form-container select{
	width:calc(100% - 50px);
	float:left;
	border-radius:0px;
	border:0px solid #ddd;
	padding:0px 9px;
	height:40px;
	line-height:40px;
	color:#777;
	background:#fff;
	-webkit-transition: all .3s ease-in-out;
	-moz-transition: all .3s ease-in-out;
	-o-transition: all .3s ease-in-out;
	transition: all .3s ease-in-out;
}
 </style>
</head>
	<body>
		<!-- container -->
			<!-- header -->
			<div id="home" class="header">
				<div class="container">
				<!-- top-hedader -->
				<div class="top-header">
					<!-- /logo -->
					<!--top-nav---->
					<div class="top-nav">
					<div class="navigation">
					<div class="logo">
						<h1><a href="index.html"><span>MYRESUME</span></a></h1>
					</div>
					<div class="navigation-right">
						<span class="menu"><img src="images/menu.png" alt=" " /></span>
						<nav class="link-effect-3" id="link-effect-3">
							<ul class="nav1 nav nav-wil">
								<li class="active"><a data-hover="Home" href="index.html">Home</a></li>
								<li><a class="scroll" data-hover="About" href="#about">About</a></li>
								<li><a class="scroll" data-hover="Services" href="#services" >Services</a></li>
								<li><a class="scroll" data-hover="Experience" href="#work">Experience</a></li>
								<li><a class="scroll" data-hover="Portfolio" href="#port">Portfolio</a></li>
								<li><a class="scroll" data-hover="Blog" href="#projects">PROJECTS</a></li>
								<li><a class="scroll" data-hover="Contact" href="#contact">Contact</a></li>
							</ul>
						</nav>
							<!-- script-for-menu -->
								<script>
								   $( "span.menu" ).click(function() {
									 $( "ul.nav1" ).slideToggle( 300, function() {
									 // Animation complete.
									  });
									 });
								</script>
							<!-- /script-for-menu -->
					</div>
					<div class="clearfix"></div>
				</div>
				<!-- /top-hedader -->
				</div>
			<div class="banner-info">
				<div class="col-md-7 header-right">
					<h1>Hi !</h1>
					<h6>UX & UI DESIGNER</h6>
					<ul class="address">
					
					<li>
							<ul class="address-text">
								<li><b>NAME</b></li>
								<li>I'M <?php echo $row['name'] ?> </li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>D.O.B</b></li>
								<li>23-06-1980</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>PHONE </b></li>
								<li><?php echo $row['phone'] ?></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>ADDRESS </b></li>
								<li>756 Global Place,New York.</li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>E-MAIL </b></li>
								<li><a href="mailto:example@mail.com"> <?php echo $row['email'] ?></a></li>
							</ul>
						</li>
						<li>
							<ul class="address-text">
								<li><b>WEBSITE </b></li>
								<li><a href="#"><?php echo $profile['website'] ?></a></li>
							</ul>
						</li>
						
					</ul>
				</div>
				<div class="col-md-5 header-left">
					<img src="images/<?php echo $profile['photo'] ?>" alt="">
				</div>
				<div class="clearfix"> </div>
						
		      </div>
			</div>
		</div>
	</div>
			<!-- about -->
			<div id="about" class="about">
				<div class="col-md-6 about-left">
					<div id="owl-demo1" class="owl-carousel owl-carousel2">
					                <div class="item">
					                	<?php echo $profile['about'] ?>
					                </div>
					</div>
				</div>
				<div class="col-md-6 about-right">
					
				</div>
				<div class="clearfix"> </div>
							<link href="css/owl.carousel.css" rel="stylesheet">
							    <script src="js/owl.carousel.js"></script>
			<script>
				$(document).ready(function() {
					$("#owl-demo1").owlCarousel({
						items : 1,
						lazyLoad : false,
						autoPlay : true,
						navigation : false,
						navigationText :  false,
						pagination : true,
					});
				});
			</script>
			<!-- Feedback -->
			<script>
				$(document).ready(function() {
					$("#owl-demo3").owlCarousel({
						items : 1,
						lazyLoad : false,
						autoPlay : true,
						navigation : false,
						navigationText :  true,
						pagination :true,
					});
				});
			</script>
			</div>
			<!-- /about -->
			<!-- services -->
			<div id="services" class="services">
				<div class="container">
					<div class="service-head one text-center ">
						<h4>WHAT I DO</h4>
						<h3>MY <span>SERVICES</span></h3>
						<span class="border two"></span>
					</div>
					<!-- services-grids -->
					<div class="wthree_about_right_grids w3l-agile">
				<div class="col-md-6 wthree_about_right_grid">
					<div class="col-xs-4 wthree_about_right_grid_left">
						<div class="hvr-rectangle-in">
							<i class="glyphicon glyphicon-pencil"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_about_right_grid_right">
						<h4>Web Design</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 wthree_about_right_grid">
					<div class="col-xs-4 wthree_about_right_grid_left">
						<div class="hvr-rectangle-in">
							<i class="glyphicon glyphicon-cog"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_about_right_grid_right">
						<h4>Web Design</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 wthree_about_right_grid">
					<div class="col-xs-4 wthree_about_right_grid_left">
						<div class="hvr-rectangle-in">
							<i class="glyphicon glyphicon-leaf"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_about_right_grid_right">
						<h4>Web Design</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-6 wthree_about_right_grid">
					<div class="col-xs-4 wthree_about_right_grid_left">
						<div class="hvr-rectangle-in">
							<i class="glyphicon glyphicon-gift"></i>
						</div>
					</div>
					<div class="col-xs-8 wthree_about_right_grid_right">
						<h4>Web Design</h4>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim.</p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>

					<!-- services-grids -->
				</div>
			</div>
			<!-- services -->
			<!--work-experience-->
	<div id="work" class="work">
		<div class="container">
			<div class="service-head text-center">
						<h4>WHAT I DID</h4>
						<h3>MY <span>EXPERIENCE</span></h3>
						<span class="border one"></span>

					</div>
					<a class="btn icon-btn btn-success pull-right" href="#" data-toggle="modal" data-target="#myModal2" class="read hvr-shutter-in-horizontal"><span class="glyphicon btn-glyphicon glyphicon-plus img-circle text-success"></span>Add</a>

					<?php
				while($row2=mysqli_fetch_array($result2))
	                {
				?>

					<div class="time-main w3l-agile">
							<div class="col-md-6 year-info">
							   <ul class="year">
								   <li><?php echo $row2['year'] ?></li>
								   <div class="clearfix"></div>
								</ul>
							</div> 
					                        <ul class="col-md-6 timeline">
																<li>
																  <div class="timeline-badge info"><i class="glyphicon glyphicon-briefcase"></i></div>
																  <div class="timeline-panel">
																	<div class="timeline-heading">
																	  <h4 class="timeline-title"><?php echo $row2['company_name'] ?></h4>
																	</div>
																	<div class="timeline-body">
																	  <p><?php echo $row2['disc'] ?> </p>
																	</div>
																  </div>
																</li>
															
															</ul>
								<div class="clearfix"></div>
					  </div>
					  <?php } ?>
						</div>
				</div>
	<!--//work-experience add-->
				<div class="modal ab fade" id="myModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog about" role="document">
					<div class="modal-content about">
						<div class="modal-header">
							<button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body">
								
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<div class="container">
    <div class="row">
		
    	<div class="col-md-6">
			<form action="addexperience.php" method="post">
			<div id="contact-form" class="form-container" data-form-container>
			<div class="row">
				<div class="form-title">
					<span>EXPERIENCE</span>
				</div>
			</div>
			<div class="input-container">
				<div class="row">
					<span class="req-input" >
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Year"> </span>
						<input type="text" data-min-length="2" name="year" placeholder="year">
					</span>
				</div>
				
				<div class="row">
					<span class="req-input">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Please name of company"> </span>
						<input type="text" data-min-length="2" name="company" placeholder="company/organisation">
					</span>
				</div>
				<div class="row">
					<span class="req-input message-box">
						<span class="input-status" data-toggle="tooltip" data-placement="top" title="Please Include a Discription."> </span>
						<textarea type="textarea" data-min-length="10" name="disc" placeholder="Discription"></textarea>
				</div>
				<div class="row submit-row">
					<button type="button" name="submit" class="btn btn-block">Submit</button>
				</div>
				<button type="button" name="submit" class="btn btn-block submit-form">Submit</button>
				<input type="submit" class="btn btn-success" name="submit" value="submit">
			</div>
			</div>

			</form>
		</div>
       
				
			</div>
			</div>
		
			</form>
		</div>
	
	</div>
</div>
								</div>
						</div>
					</div>
				</div>
			</div>

		<!-- portfolio -->
<div class="portfolio" id="port">
				<div class="service-head text-center">
						<h4>MY WORKS</h4>
						<h3>MY <span>PORTFOLIO</span></h3>
						<span class="border"></span>
					</div>
			<div class="portfolio-grids">
				<script src="js/easyResponsiveTabs.js" type="text/javascript"></script>
				<script type="text/javascript">
									$(document).ready(function () {
										$('#horizontalTab').easyResponsiveTabs({
											type: 'default', //Types: default, vertical, accordion           
											width: 'auto', //auto or any width like 600px
											fit: true   // 100% fit in a container
										});
									});
									
				</script>
				<div class="sap_tabs">
					<div id="horizontalTab" style="display: block; width: 100%; margin: 0px;">
						<ul class="resp-tabs-list">
							<li class="resp-tab-item" aria-controls="tab_item-0" role="tab"><span>ALL</span></li> 
							<li class="resp-tab-item" aria-controls="tab_item-1" role="tab"><span>WEB DESIGN</span></li> 
							<li class="resp-tab-item" aria-controls="tab_item-2" role="tab"><span>MOBILE UI</span></li> 				
							<li class="resp-tab-item" aria-controls="tab_item-3" role="tab"><span>ILLUSTRATIONS</span></li> 
						</ul>				  	 
						<div class="resp-tabs-container">
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal1" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic4.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal3" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic5.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal2" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic9.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd ">
								
										<a href="#portfolioModal4" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic6.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd yes_marg ">
									
										<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic10.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd yes_marg ">
									
										<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic11.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd yes_marg ">
									
										<a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic13.jpg" alt="">
										
										</a>
								
								</div>
								<div class="col-md-3 team-gd yes_marg ">
									
										<a href="#portfolioModal8" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic14.jpg" alt="">
										
										</a>
									
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
								<div class="col-md-3 team-gd ">
									<div class="thumb">
										<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic10.jpg" alt="">
										
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd  ">
									<div class="thumb">
										<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic11.jpg" alt="">
										
										</a>
									</div>
								</div>
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic13.jpg" alt="">
										
										</a>
									
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-2">
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal2" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic9.jpg" alt="">
										
										</a>
								
								</div>
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal4" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic6.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd">
									
										<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic10.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd">
									
										<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic11.jpg" alt="">
									
										</a>
									
								</div>
								<div class="clearfix"></div>
							</div>
								<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-3">
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal5" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic10.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd">
									
										<a href="#portfolioModal6" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic11.jpg" alt="">
										
										</a>
									
								</div>
								<div class="col-md-3 team-gd ">
									
										<a href="#portfolioModal7" class="portfolio-link b-link-diagonal b-animate-go" data-toggle="modal"><img src="images/pic13.jpg" alt="">
										
										</a>
									
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
	<!-- //portfolio -->
    <!-- top-grids -->
				<div class="blog" id="blogs">
					<div class="container">
						<div class="service-head text-center">
						<h4>PROJECTS</h4>
						<h3>MY <span>PROJECTS</span></h3>
						<span class="border one"></span>
					</div>
					<?php
				while($project=mysqli_fetch_array($resultproject))
	                {
				?>
					   <div class="news-grid w3l-agile">
					    <div class="col-md-6 news-img">
						  <a href="#" data-toggle="modal" data-target="#myModal1"> <img src="images/b1.jpg" alt=" " class="img-responsive"></a>
						 
						</div>
					    <div class="col-md-6 news-text">
						   <h3> <a href="#" data-toggle="modal" data-target="#myModal1"><?php echo $project['title'] ?></a></h3>
							<ul class="news">
								<li><i class="glyphicon glyphicon-user"></i> <a href="#">Admin</a></li>
								<li><i class="glyphicon glyphicon-users"></i> <a href="#"><?php echo $project['team'] ?>&nbsp;members</a></li>
								<li><i class="glyphicon glyphicon-heart"></i> <a href="#">50 Likes</a></li>
								<li><i class="glyphicon glyphicon-tags"></i> <a href="#">3 Tags</a></li>
							</ul>
							<p><?php echo $project['exp'] ?></p>
							<a href="#" data-toggle="modal" data-target="#myModal1" class="read hvr-shutter-in-horizontal">Read More</a>
					
						</div>
		
						<div class="clearfix"></div>
					 </div>

					 <?php } ?>
					</div>
				</div>
				<!-- top-grids -->
	<!-- /blog-pop-->
			<div class="modal ab fade" id="myModal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modal-dialog about" role="document">
					<div class="modal-content about">
						<div class="modal-header">
							<button type="button" class="close ab" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modal-body about">
								<div class="about">
									
									  <div class="about-inner">
									   
									      <img src="images/b3.jpg" alt="about"/>
										     <h4 class="tittle">A Fews words about us</h4>
										   <p>Lorem ipsum dolor sit amet Integer gravida,Lorem ipsum dolor sit amet Integer gravida velit,Ming sits in the corner the whole day. She's into crochet. quis dolor tristiqumsan.Mirum est notare quam littera gothica, quam nunc putamus parum claram, anteposuerit litterarum formas humanitatis per seacula quarta decima et quinta decima. velit quis dolor tristiqumsan.</p>
										    <p>Lorem ipsum dolor sit amet. Integer gravida velit quis dolor tristiqumsan.anteposuerit litterarum formas humanitatis per seacula amet Integer gravida velit. </p>
									  </div>
												
								</div>
						</div>
					</div>
				</div>
			</div>
			<!-- //blog-pop-->

			<!-- /header -->
<div class="footer" id="contact">
	<div class="container">
	<div class="service-head one text-center">
						<h4>CONTACT ME</h4>
						<h3>GET <span>IN TOUCH WITH ME</span></h3>
						<span class="border two"></span>
					</div>
		<div class="mail_us">
			<div class="col-md-6 mail_left">
				<div class="contact-grid1-left">
					<div class="contact-grid1-left1">
						<span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
						<h4>Contact By Email</h4>
						<ul>
							<li>Mail1: <a href="mailto:info@example.com">info@example1.com</a></li>
							<li>Mail2: <a href="mailto:info@example.com">info@example2.com</a></li>
						</ul>
					</div>
				</div>
					<div class="contact-grid1-left">
						<div class="contact-grid1-left1">
							<span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<h4>Contact By Phone</h4>
							<ul>
								<li>Phone: +0000 123 312</li>
								<li>Fax: +123 312</li>
							</ul>
						</div>
					</div>
					<div class="contact-grid1-left">
						<div class="contact-grid1-left1">
							<span class="glyphicon glyphicon-home" aria-hidden="true"></span>
							<h4>Looking For Address</h4>
							<ul>
								<li>Address: General Pvt 66, Dong Da</li>
								<li>Hanoi, Vietnam.</li>
							</ul>
						</div>
					</div>
				<div class="clearfix"> </div>
			</div>
			<div class="col-md-6 mail_right">
				<form action="#" method="post">
					<input type="text" name="Name" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
					<input type="email" name="Email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
					<input type="text" name="Mobile number" value="Mobile number" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Mobile number';}" required="">
					<textarea name="Message..." onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
					<input type="submit" value="Send">
					
				</form>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="copy_right text-center">
			<p>&copy; 2016 Preface . All rights reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts.</a></p>
			 <ul class="social-icons two">
							<li><a href="#"> </a></li>
							<li><a href="#" class="fb"> </a></li>
							<li><a href="#" class="in"> </a></li>
							<li><a href="#" class="dott"> </a></li>
						</ul>
		</div>
	</div>
</div>
			<!-- //footer -->
		<!-- /container -->
		<div class="portfolio-modal modal fade slideanim" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic4.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic9.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic5.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic6.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic10.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic11.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal7" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic13.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal8" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
						<h3>Image-Title</h3>
                        <img src="images/pic14.jpg" class="img-responsive img-centered" alt="">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="portfolio-modal modal fade slideanim" id="portfolioModal9" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-content port-modal">
        <div class="close-modal" data-dismiss="modal">
            <div class="lr">
                <div class="rl"></div>
            </div>
        </div>
        <div class="container">
			<div class="row">
                <div class="col-lg-8 col-lg-offset-2 text-center">
                    <div class="modal-body">
                        <img src="images/pic1.jpg" class="img-responsive img-centered" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<a href="#home" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
	<!--start-smooth-scrolling-->
						<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
								<!--end-smooth-scrolling-->
<!-- //for bootstrap working -->
	<script src="js/bootstrap.js"></script>
	<script type="text/javascript">

	</script>

	</body>
</html>

