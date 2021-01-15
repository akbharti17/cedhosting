<!---header--->
<?php
include("tbl_product.php");
$tblprodobj = new Product();
$result = $tblprodobj->getData(1);
$n = $result->num_rows;
?>
<div class="header">
	<div class="container">
		<nav class="navbar navbar-default">
			<div class="container-fluid">
				<!-- Brand and toggle get grouped for better mobile display -->
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<i class="sr-only">Toggle navigation</i>
						<i class="icon-bar"></i>
						<i class="icon-bar"></i>
						<i class="icon-bar"></i>
					</button>
					<div class="navbar-brand">
						<h1><a href="index.php"><span style="color: #585CA7;">Ced</span><span style="color: #e7663f;">Hosting</span></a></h1>
					</div>
				</div>

				<!-- Collect the nav links, forms, and other content for toggling -->
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					<ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home <i class="sr-only">(current)</i></a></li>
						<li><a href="about.php">About</a></li>
						
						<li><a href="services.php">Services</a></li>
						<li class="dropdown">
							<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hosting<i class="caret"></i></a>
							<ul class="dropdown-menu">
								<?php for ($i = 0; $i < $n; $i++) {
									$data = $result->fetch_assoc();
									?>
									<li><a href="catpage.php?id=<?php echo $data['id']; ?>&name=<?php echo $data["prod_name"]; ?>"><?php echo $data["prod_name"]; ?></a></li>
									<?php
								} ?>
								
							</ul>
						</li>
						<li><a href="pricing.php">Pricing</a></li>
						<li><a href="blog.php">Blog</a></li>
						<li><a href="contact.php">Contact</a></li>
						<li><a href="cart.php"><i class="fa fa-shopping-cart" aria-hidden="true"></i></a></li>
						<li><a href="login.php">Login</a></li>
					</ul>

				</div><!-- /.navbar-collapse -->
			</div><!-- /.container-fluid -->
		</nav>
	</div>
</div>
<!---header--->