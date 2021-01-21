<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/

-->

<!DOCTYPE HTML>
<html>

<head>
	<title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
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
	<script src="js/modernizr.custom.97074.js"></script>
	<script src="js/jquery.chocolat.js"></script>
	<link rel="stylesheet" href="css/chocolat.css" type="text/css" media="screen">
	<!--lightboxfiles-->
	<script type="text/javascript">
		$(function() {
			$('.team a').Chocolat();
		});
	</script>
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>
	<script type="text/javascript">
		$(function() {

			$(' #da-thumbs > li ').each(function() {
				$(this).hoverdir();
			});

		});
	</script>
	<!--script-->
</head>

<body>
	<!---header--->
	<?php include_once("header.php"); ?>
	<!---header--->

	<div class="container-fluid mb-3">

		<table class="table table-striped" id="table">
			<thead>
				<th>Product Id</th>
				<th>Product Name</th>
				<th>Price</th>
				<th>SKU</th>
				<!-- <th>Quantity</th> -->
				<th>Action</th>
			</thead>
			<tbody>
				
				<?php
				$msg = '';
				if (isset($_SESSION['cart'])) {
					// foreach($_SESSION['cart'] as $key=>$val){
					// 	print_r($val);
	
					// }
					for ($i = 0; $i < count($_SESSION['cart']); $i++) {
						$data = $_SESSION['cart'][$i];
						// echo $data['id'] . "<br>";
						$js = json_decode($data['description']);
				?>

						<tr>
							<td><?php echo $data['id']; ?></td>
							<td><?php echo $js->name ?></td>
							<td><?php if ($_SESSION['plan'] == 'mon_price') {
									echo $data['mon_price'];
								} else {
									echo $data['annual_price'];
								} ?></td>

							<td><?php echo $data['sku']; ?></td>
							<!-- <td></td> -->
							<td><a class='btn btn-danger' id='<?php echo $i; ?>'>Delete</a>
								<a class="btn btn-success" href="checkout.php?id=<?php echo $i; ?>&price=<?php if ($_SESSION['plan'] == 'mon_price') {
																						echo $data['mon_price'];
																					} else {
																						echo $data['annual_price'];
																					} ?>">checkout</a>
							</td>
						</tr>

				<?php
					}
				} else {
					$msg = "No records found";
				}
				?>
				<tr>
					<td colspan="6" class="text-center text-bold"><?php echo $msg; ?></td>
				</tr>
			</tbody>

		</table>

	</div>








	<?php require_once("footer.php"); ?>

	<script>
		$(document).ready(function() {
			$("#table").on("click", ".btn", function() {
				var element = $(this);
				var id = element.attr("id");
				console.log(id);

				$.ajax({
					url: "admin/helper.php",
					method: "post",
					data: {
						id: id,
						action: 'delete cart row'
					},
					success: function(data) {
						window.location.reload();
					}

				})

			})

		})
	</script>




</body>

</html>