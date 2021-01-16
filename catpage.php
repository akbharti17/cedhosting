<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php



?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Linux Hosting :: w3layouts</title>
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
	<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
	<script src="js/bootstrap.js"></script>
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
	<!---singleblog--->
	<div class="content">
		<div class="linux-section">
			<div class="container">
				<div class="linux-grids">
					<div class="col-md-8 linux-grid">
						<h2><?php echo $_GET['name']; ?></h2>
						<ul>
							<li><span>Unlimited </span> Domains, Disk Space, Bandwidth and Email Addresses</li>
							<li><span>99.9% uptime </span> with dedicated 24/7 technical support</li>
							<li><span>Powered by </span> CloudLinux, cPanel (demo), Apache, MySQL, PHP, Ruby & more</li>
							<li><span>Launch </span> your business with Rs. 2000* Google AdWords Credit *</li>
							<li><span>30 day </span> Money Back Guarantee</li>
						</ul>
						<a href="#">view plans</a>
					</div>
					<div class="col-md-4 linux-grid1">
						<img src="images/cms.png" class="img-responsive" alt="" />
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>


		<div class="tab-prices">
			<div class="container">
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">

					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
							<div class="linux-prices">
								<?php
								include("tbl_prod_description.php");
								$id = $_GET['id'];
								$prodesdata = new ProdDes();
								$result = $prodesdata->getdata($id);
								for ($i = 0; $i < $result->num_rows; $i++) {
									$row = $result->fetch_assoc();

									$data = json_decode($row["description"]);
									// print_r($data);

								?>
									<div class="col-md-3 linux-price text-center">
										<div class="linux-top">
											<h4><?php echo $data->name; ?></h4>
										</div>
										<div class="linux-bottom">
											<h5>&#8377;<?php echo " " . $row["mon_price"]; ?><span class="month"> per month</span></h5>
											<h5>&#8377;<?php echo " " . $row["annual_price"]; ?><span class="month"> Annual</span></h5>
											<h6><?php echo $data->domain; ?>Free Domain</h6>
											<ul>
												<li><strong><?php echo $data->space . " GB"; ?></strong> Disk Space</li>
												<li><strong><?php echo $data->bandwidth . " GB"; ?></strong> Data Transfer</li>

												<li><strong><?php echo $data->langtech; ?></strong> Servers</li>
												<li><strong>location</strong> : <img src="images/india.png"></li>
											</ul>
										</div>
										<a id="<?php echo $row['id']; ?>" class="cart" data-toggle="modal" data-target="#myModal">buy now</a>
									</div>

								<?php
								}
								?>




								<div class="clearfix"></div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
		<!-- clients -->
		<div class="clients">
			<div class="container">
				<h3>Some of our satisfied clients include...</h3>
				<ul>
					<li><a href="#"><img src="images/c1.png" title="disney" /></a></li>
					<li><a href="#"><img src="images/c2.png" title="apple" /></a></li>
					<li><a href="#"><img src="images/c3.png" title="microsoft" /></a></li>
					<li><a href="#"><img src="images/c4.png" title="timewarener" /></a></li>
					<li><a href="#"><img src="images/c5.png" title="disney" /></a></li>
					<li><a href="#"><img src="images/c6.png" title="sony" /></a></li>
				</ul>
			</div>
		</div>
		<!-- clients -->
		<div class="whatdo">
			<div class="container">
				<h3>Linux Features</h3>
				<div class="what-grids">
					<div class="col-md-4 what-grid">
						<div class="what-left">
							<i class="glyphicon glyphicon-cog" aria-hidden="true"></i>
						</div>
						<div class="what-right">
							<h4>Expert Web Design</h4>
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 what-grid">
						<div class="what-left">
							<i class="glyphicon glyphicon-dashboard" aria-hidden="true"></i>
						</div>
						<div class="what-right">
							<h4>Expert Web Design</h4>
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 what-grid">
						<div class="what-left">
							<i class="glyphicon glyphicon-stats" aria-hidden="true"></i>
						</div>
						<div class="what-right">
							<h4>Expert Web Design</h4>
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
				<div class="what-grids">
					<div class="col-md-4 what-grid">
						<div class="what-left">
							<i class="glyphicon glyphicon-download-alt" aria-hidden="true"></i>
						</div>
						<div class="what-right">
							<h4>Expert Web Design</h4>
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 what-grid">
						<div class="what-left">
							<i class="glyphicon glyphicon-move" aria-hidden="true"></i>
						</div>
						<div class="what-right">
							<h4>Expert Web Design</h4>
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-4 what-grid">
						<div class="what-left">
							<i class="glyphicon glyphicon-screenshot" aria-hidden="true"></i>
						</div>
						<div class="what-right">
							<h4>Expert Web Design</h4>
							<p>Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore </p>
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
		</div>


		<!-- The Modal -->
		<div class="modal" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">

					<!-- Modal Header -->
					<div class="modal-header">
						<h4 class="modal-title">Product Plan</h4>
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>

					<!-- Modal body -->
					<div class="modal-body">
						<form action="">
							<div class="form-group">
								<label for="">Select Plan</label>
								<select name="" id="plans" class="form-control">
									<option value="">--select plan--</option>
									<option value="mon_price">Monthly</option>
									<option value="annual_price">Annual</option>
								</select>
							</div>
							<div class="modal-footer">
								<button type="button" id="crt" class="btn btn-success">Add to cart</button>
								<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
							</div>
						</form>
					</div>



				</div>
			</div>
		</div>




	</div>
	<!---footer--->
	<?php require_once("footer.php"); ?>
	<!---footer--->

	<script>
		var id;
		$(document).ready(function() {
			$('.linux-prices').on('click', '.cart', function(e) {
				// alert('button clicked', this);
				var element = $(this);
				 id = element.attr("id");
				// $.ajax({
				// 	url: "admin/helper.php",
				// 	method: "post",
				// 	data: {
						
				// 	},
				// 	success: function(data, status) {
				// 		// alert(data);
				// 		window.location.href = 'cart.php';
				// 	}
				// })
			})

			$("#crt").click(function() {
				var price = $("#plans option:selected").val();
				console.log(price);
				$.ajax({
					url: "admin/helper.php",
					method: "post",
					data: {
						id: id,
						action: "cart",
						plan: price,
					},
					success: function(data) {
						window.location.href = 'cart.php';
					}
				})

			})

		})
	</script>


</body>

</html>