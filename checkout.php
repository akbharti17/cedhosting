<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planet Hosting a Hosting Category Flat Bootstrap Responsive Website Template | Home :: w3layouts</title>
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Planet Hosting Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
</head>

<body>
    <?php include_once("header.php"); ?>
    <?php
    $i = $_GET['id'];
    $data = $_SESSION['cart'][$i];
    $js = json_decode($data['description']);
    // var_dump($data);
    ?>
    <div class="container my-4">
        <div class="row">
            <div class="col-sm-4"></div>
            <div class="col-sm-4">

                <h3 for="">Product Id: <span><?php echo $data['id']; ?></span></h3>
                <h3 for="">Product Name: <?php echo $js->name; ?></h3>
                <h3 for="">Price: <?php
                                    if ($_SESSION['plan'] == 'mon_price') {
                                        echo $data['mon_price'];
                                    } else {
                                        echo $data['annual_price'];
                                    } ?></h3>

                <div id="paypal-button-container"></div>
            </div>
            <div class="col-sm-4"></div>
        </div>
        <div class="col-sm-8">

        </div>

    </div>


    <?php include_once("footer.php"); ?>

    <script src="https://www.paypal.com/sdk/js?client-id=AUyaAaNMd0Q08R6Z26UihDDZCZOJo57XSn8H2WGlAYHLQBqrmZM82T2Gs5k4vJj_vm7ppoPwmNBWUH8p&currency=INR"></script>


    <script>
        paypal.Buttons({
            createOrder: function(data, actions) {
                // This function sets up the details of the transaction, including the amount and line item details.
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '100'
                        }
                    }]
                });
            },
            onApprove: function(data, actions) {
                // This function captures the funds from the transaction.
                return actions.order.capture().then(function(details) {
                    // This function shows a transaction success message to your buyer.
                    alert('Transaction completed by ' + details.payer.name.given_name);
                   
                });
            }
        }).render('#paypal-button-container');
        //This function displays payment buttons on your web page.
    </script>


</body>

</html>