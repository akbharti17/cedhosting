<!--
=========================================================
* Argon Dashboard - v1.2.0
=========================================================
* Product Page: https://www.creative-tim.com/product/argon-dashboard


* Copyright  Creative Tim (http://www.creative-tim.com)
* Coded by www.creative-tim.com



=========================================================
* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
-->

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="Start your development with a Dashboard for Bootstrap 4.">
  <meta name="author" content="Creative Tim">
  <title>Argon Dashboard - Free Dashboard for Bootstrap 4</title>
  <!-- Favicon -->
  <link rel="icon" href="../assets/img/brand/favicon.png" type="image/png">
  <!-- Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700">
  <!-- Icons -->
  <link rel="stylesheet" href="../assets/vendor/nucleo/css/nucleo.css" type="text/css">
  <link rel="stylesheet" href="../assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" type="text/css">
  <!-- Page plugins -->
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">


</head>

<body>
  <!-- Sidenav -->
  <nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
      <!-- Brand -->
      <div class="sidenav-header  align-items-center">
        <a class="navbar-brand" href="javascript:void(0)">
          <h1><span style="color: #585CA7;">Ced</span><span style="color: #e7663f;">Hosting</span></h1>
          <!-- <img src="assets/img/brand/blue.png" class="navbar-brand-img" alt="..."> -->
        </a>
      </div>
      <div class="navbar-inner">
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="sidenav-collapse-main">
          <ul class="dot-removal">
            <li class="nav-item" style="list-style: none;">
              <a class="nav-link active" href="../admindashboard.php">
                <i class="ni ni-tv-2 text-primary"></i>
                <span class="nav-link-text">Dashboard</span>
              </a>
            </li>
            <hr class="my-3">
            <!-- Heading -->
            <h6 class="navbar-heading p-0 text-muted">
              <span class="docs-normal">Products</span>
            </h6>
            <li style="list-style: none;" data-toggle="collapse" data-target="#products" class="collapsed active">
              <a href="#">Products <span class="fas">&#xf103;</span></a>
            </li>
            <ul class="navbar-nav sub-menu collapse" id="products">
              <li class="nav-item">
                <a class="nav-link" href="register.php">
                  <i class="ni ni-planet text-orange"></i>
                  <span class="nav-link-text">Create Category</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addproduct.php">
                  <i class="ni ni-pin-3 text-primary"></i>
                  <span class="nav-link-text">Add Product</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/viewproduct.php">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">View Products</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/tables.html">
                  <i class="ni ni-bullet-list-67 text-default"></i>
                  <span class="nav-link-text">Create New Offers</span>
                </a>
              </li>
            </ul>
            <hr class="my-3">
            <!-- Heading -->
            <!-- Heading -->
            <h6 class="navbar-heading p-0 text-muted">
              <span class="docs-normal">Orders</span>
            </h6>
            <li style="list-style: none;" data-toggle="collapse" data-target="#Orders" class="collapsed active">
              <a href="#">Orders <span class="fas">&#xf103;</span></a>
            </li>
            <ul class="navbar-nav sub-menu collapse" id="Orders">
              <li class="nav-item">
                <a class="nav-link" href="examples/register.php">
                  <i class="ni ni-planet text-orange"></i>
                  <span class="nav-link-text">Pending Orders</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/addproduct.php">
                  <i class="ni ni-pin-3 text-primary"></i>
                  <span class="nav-link-text">Completed Orders</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="viewproducts.php">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">All Orders</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/tables.html">
                  <i class="ni ni-bullet-list-67 text-default"></i>
                  <span class="nav-link-text">Generate Invoice</span>
                </a>
              </li>
            </ul>
            <hr class="my-3">
            <!-- Heading -->

            <!-- heading-->
            <h6 class="navbar-heading p-0 text-muted">
              <span class="docs-normal">Services</span>
            </h6>
            <li style="list-style: none;" data-toggle="collapse" data-target="#service" class="collapsed active">
              <a href="#">Services <span class="fas">&#xf103;</span></a>
            </li>
            <ul class="navbar-nav sub-menu collapse" id="service">
              <li class="nav-item">
                <a class="nav-link" href="examples/register.php">
                  <i class="ni ni-planet text-orange"></i>
                  <span class="nav-link-text">Active Services</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/addproduct.php">
                  <i class="ni ni-pin-3 text-primary"></i>
                  <span class="nav-link-text">Expired Services</span>
                </a>
              </li>
            </ul>
            <hr class="my-3">
            <!--End of heading -->
            <!-- heading-->
            <h6 class="navbar-heading p-0 text-muted">
              <span class="docs-normal">Users</span>
            </h6>
            <li style="list-style: none;" data-toggle="collapse" data-target="#user" class="collapsed active">
              <a href="#">Users <span class="fas">&#xf103;</span></a>
            </li>
            <ul class="navbar-nav sub-menu collapse" id="user">
              <li class="nav-item">
                <a class="nav-link" href="examples/register.php">
                  <i class="ni ni-planet text-orange"></i>
                  <span class="nav-link-text">All User List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/addproduct.php">
                  <i class="ni ni-pin-3 text-primary"></i>
                  <span class="nav-link-text">Create New User</span>
                </a>
              </li>
            </ul>
            <hr class="my-3">
            <!--End of heading -->

            <!-- heading-->
            <h6 class="navbar-heading p-0 text-muted">
              <span class="docs-normal">Blog</span>
            </h6>
            <li style="list-style: none;" data-toggle="collapse" data-target="#blog" class="collapsed active">
              <a href="#">Blog <span class="fas">&#xf103;</span></a>
            </li>
            <ul class="navbar-nav sub-menu collapse" id="blog">
              <li class="nav-item">
                <a class="nav-link" href="examples/register.php">
                  <i class="ni ni-planet text-orange"></i>
                  <span class="nav-link-text">Add Blog</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/addproduct.php">
                  <i class="ni ni-pin-3 text-primary"></i>
                  <span class="nav-link-text">View all Blog</span>
                </a>
              </li>
            </ul>
            <hr class="my-3">
            <!--End of heading -->

            <!-- heading-->
            <h6 class="navbar-heading p-0 text-muted">
              <span class="docs-normal">Account</span>
            </h6>
            <li style="list-style: none;" data-toggle="collapse" data-target="#ac" class="collapsed active">
              <a href="#">Account <span class="fas">&#xf103;</span></a>
            </li>
            <ul class="navbar-nav sub-menu collapse" id="ac">
              <li class="nav-item">
                <a class="nav-link" href="examples/register.php">
                  <i class="ni ni-planet text-orange"></i>
                  <span class="nav-link-text">Update Company Info</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/addproduct.php">
                  <i class="ni ni-pin-3 text-primary"></i>
                  <span class="nav-link-text">Change Security Ques</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/addproduct.php">
                  <i class="ni ni-pin-3 text-primary"></i>
                  <span class="nav-link-text">Change Password</span>
                </a>
              </li>
            </ul>
            <hr class="my-3">

            <h6 class="navbar-heading p-0 text-muted">
              <span class="docs-normal">Documentation</span>
            </h6>
            <!-- Navigation -->
            <ul class="navbar-nav mb-md-3">
              <li class="nav-item">
                <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/getting-started/overview.html" target="_blank">
                  <i class="ni ni-spaceship"></i>
                  <span class="nav-link-text">Getting started</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/foundation/colors.html" target="_blank">
                  <i class="ni ni-palette"></i>
                  <span class="nav-link-text">Foundation</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/components/alerts.html" target="_blank">
                  <i class="ni ni-ui-04"></i>
                  <span class="nav-link-text">Components</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="https://demos.creative-tim.com/argon-dashboard/docs/plugins/charts.html" target="_blank">
                  <i class="ni ni-chart-pie-35"></i>
                  <span class="nav-link-text">Plugins</span>
                </a>
              </li>
            </ul>
        </div>
      </div>
    </div>
  </nav>
  <!-- Main content -->
  <div class="main-content" id="panel">
    <div class="container-fluid my-8 mr-2">
      <h1>View All Products</h1>
      <table class="table table-bordered text-center" id="myTable">

        <thead>
          <tr>
            <th>Product Parent Name</th>
            <th>Product Name</th>
            <th>Link</th>
            <th>Availability</th>
            <th>Launch Date & Time</th>
            <th>Monthly price</th>
            <th>Annual price</th>
            <th>SKU</th>
            <th>Language and Technology</th>
            <th>Webspace</th>
            <th>Bandwidth</th>
            <th>Free Domain</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          include_once("../../tbl_product.php");

          $obj = new Product();
          $result = $obj->getAllrecord();
          for ($i = 0; $i < $result->num_rows; $i++) {
            $row = $result->fetch_assoc();

            $data = json_decode($row['description']);
          ?>
            <tr>
              <td><?php echo $row['prod_name']; ?></td>
              <td><?php echo $data->name; ?></td>
              <td><?php echo $row["link"]; ?></td>
              <td><?php echo $row['prod_available']; ?></td>
              <td><?php echo $row['prod_launch_date']; ?></td>
              <td><?php echo $row['mon_price'] ?></td>
              <td><?php echo $row['annual_price']; ?></td>
              <td><?php echo $row['sku']; ?></td>
              <th><?php echo $data->langtech; ?></th>
              <td><?php echo $data->space; ?></td>
              <td><?php echo $data->bandwidth; ?></td>
              <td><?php echo $data->domain; ?></td>
              <td><a id="<?php echo $row['prod_id']; ?>" data-toggle="modal" data-target="#exampleModal" class="delete btn btn-outline-danger">Delete</a></td>
            </tr>
          <?php
          }

          ?>


        </tbody>
      </table>
    </div>

  </div>

  <!-- All Data -->






  <!-- End of all data-->
  </div>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Optional JS -->
  <script src="../assets/vendor/chart.js/dist/Chart.min.js"></script>
  <script src="../assets/vendor/chart.js/dist/Chart.extension.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>



  <script>
    $(document).ready(function() {
          $('#myTable').on('click', '.delete', function(e) {
            // alert('button clicked', this);
            var element = $(this);
            var del_id = element.attr("id");
            console.log(del_id);
            if (confirm("Are you sure you want to delete this?")) {
              $.ajax({
                type: "POST",
                url: "../helper.php",
                data: {
                  id: del_id,
                  action: "delete all"
                },
                success: function(data, status) {
                  alert(data);
                  $("#myTable").load(" #myTable");
                }
              })
              return false;

            }
          })
        })
  </script>
</body>

</html>