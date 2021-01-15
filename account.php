<!--
	
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>

<head>
	<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Account :: w3layouts</title>
	<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script type="application/x-javascript">
		addEventListener("load", function() {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<!---fonts-->
	<link href='//fonts.googleapis.com/css?family=Voltaire' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!---fonts-->
	<!--script-->
	<link rel="stylesheet" href="css/swipebox.css">
	<script src="js/jquery.swipebox.min.js"></script>
	<script type="text/javascript">
		jQuery(function($) {
			$(".swipebox").swipebox();
		});
	</script>
	<!--script-->
</head>

<body>
	<!---header--->
	<?php require_once("header.php"); ?>
	<!---header--->
	<!---login--->
	<div class="content">
		<!-- registration -->
		<div class="main-1">
			<div class="container">
				<div class="register">
					<form>
						<div class="register-top-grid">
							<h3>personal information</h3>
							<div>
								<span>First Name<label>*</label></span>
								<input type="text" id="fname" onkeypress="return /[a-z]/i.test(event.key)">
							</div>
							<div>
								<span>Last Name<label>*</label></span>
								<input type="text" id="lastn" onkeypress="return /[a-z]/i.test(event.key)">
							</div>
							<div>
								<span>Email Address<label>*</label></span>
								<input type="email" id="email" style="padding-bottom:5px;width:68%;">
								<input type="button" value="send otp" class="btn" style="background:#585CA7;color:white;width:28%;margin-top:2px;">
							</div>
							<div>
								<span style="visibility: hidden;">otp<label>*</label></span>
								<input type="number" style="padding-bottom:5px;width:68%;">
								<input type="button" value="verify otp" class="btn" style="background:#585CA7;color:white;width:28%;margin-top:2px;">
							</div>
							<div>
								<span>Mobile<label>*</label></span>
								<input type="number" id="mobile" style="padding-bottom:5px;width:68%;">
								<input type="button" value="send otp" class="btn" style="background:#585CA7;color:white;width:28%;margin-top:2px;">
							</div>
							<div>
								<span style="visibility: hidden;">otp<label>*</label></span>
								<input type="number" style="padding-bottom:5px;width:68%;">
								<input type="button" value="verify otp" class="btn" style="background:#585CA7;color:white;width:28%;margin-top:2px;">
							</div>
							<div>
								<span>Security Question<label>*</label></span>
								<select id="ques" name="securityquestion" style="width: 80%;padding:8px;">
									<option value="Please select security question">Please select security question</option>
									<option value="What was your childhood nickname?">What was your childhood nickname?</option>
									<option value="What is the name of your favourite childhood friend?">What is the name of your favourite childhood friend?</option>
									<option value="What was your favourite place to visit as a child?">What was your favourite place to visit as a child?</option>
									<option value="What was your dream job as a child?">What was your dream job as a child?</option>
									<option value="What is your favourite teacher's nickname?">What is your favourite teacher's nickname?</option>
								</select>
							</div>
							<div>
								<span>Your Answer<label>*</label></span>
								<input type="text" id="ans">
							</div>
							<div class="clearfix"> </div>
							<a class="news-letter" href="#">
								<label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Sign Up for Newsletter</label>
							</a>
						</div>
						<div class="register-bottom-grid">
							<h3>login information</h3>
							<div>
								<span>Password<label>*</label></span>
								<input type="password" id="pass">
							</div>
							<div>
								<span>Confirm Password<label>*</label></span>
								<input type="password" id="cpass">
							</div>
						</div>
					</form>
					<div class="clearfix"> </div>
					<div class="register-but">
						<form>
							<input type="button" value="submit" id="signup">
							<div class="clearfix"> </div>
						</form>
					</div>
				</div>
			</div>
		</div>
		<!-- registration -->

	</div>
	<!-- login -->
	<!---footer--->
	<?php require_once("footer.php"); ?>
	<!---footer--->
    
	<script>
		$(document).ready(function() {

			$("#signup").click(function(){
				var fname=$("#fname").val();
				var lsname=$("#lastn").val();
				var name=fname+' '+lsname;
				var email=$("#email").val();
				var mob=$("#mobile").val();
				var ques=$("#ques option:selected").val();
				var ans=$("#ans").val();
				var pass=$("#pass").val();

				$.ajax({
					url:"helper.php",
					method:"post",
					data:{name:name,email:email,mob:mob,ques:ques,ans:ans,pass,action:"insert"},
					success: function(data,status){
						alert(data);
					}
				})
			

			})
		});
	</script>
</body>

</html>