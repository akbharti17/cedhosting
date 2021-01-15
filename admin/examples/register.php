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
<?php
include("../../tbl_product.php");
$product = new Product();
$data = $product->getData(1);
?>
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
  <!-- Argon CSS -->
  <link rel="stylesheet" href="../assets/css/argon.css?v=1.2.0" type="text/css">
</head>

<body class="bg-Secondary">
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
                <a class="nav-link" href="viewproduct.php">
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
                <a class="nav-link" href="register.php">
                  <i class="ni ni-planet text-orange"></i>
                  <span class="nav-link-text">All User List</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="addproduct.php">
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
                <a class="nav-link" href="../register.php">
                  <i class="ni ni-planet text-orange"></i>
                  <span class="nav-link-text">Update Company Info</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../addproduct.php">
                  <i class="ni ni-pin-3 text-primary"></i>
                  <span class="nav-link-text">Change Security Ques</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../addproduct.php">
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
  <div class="main-content">
    <!-- Header -->
    <div class="header bg-Secondary  py-3 py-lg-2 pt-lg-3">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="">
              <h1>Add Category</h1>
              <p class="text-lead">Use these awesome forms to login or create new account in your project for free.</p><br>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <!-- <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg> -->
      </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
      <!-- Table -->
      <div class="row justify-content-center">
        <div class="col-lg-6 col-md-8">
          <div class="card bg-Gray 700 border-0">
            <div class="card-header bg-transparent pb-5">
            </div>
            <div class="card-body px-lg-7 py-lg-3">
              <form role="form">
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                    </div>
                    <input class="form-control" style="text-align: center;" value="Hosting" type="text" disabled>
                  </div>
                </div>
                <div class="form-group">
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                    </div>
                    <input class="form-control" id="name" placeholder="Product Name" type="text" required>
                  </div>
                </div>
                <div class="form-group">
                  <textarea id="editor" class="form-control" placeholder="link"></textarea>
                  <div class="input-group input-group-merge input-group-alternative mb-3">
                    <div class="input-group-prepend">

                    </div>
                    <!-- <input class="form-control" id="link" placeholder="Product Link" type="text"> -->
                  </div>
                </div>
                <div class="text-center">
                  <input type="submit" id="add" value="Add Category" class="btn btn-primary mt-4">
                </div>
              </form>
            </div>



          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <table class="table table-bordered text-center" id="tblshow">
        <thead>
          <tr style="font-weight: bold;">
            <th>Parent Category Name</th>
            <th>Product Name</th>
            <th>Link</th>
            <th>Availability</th>
            <th>Launch Date & Time</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          <?php
          for ($i = 0; $i < $data->num_rows; $i++) {
            $row = $data->fetch_assoc();
            // var_dump($row);
          ?>
            <tr>
              <td><?php if ($row["prod_parent_id"] == 1) {
                    echo "Hosting";
                  } ?></td>
              <td><?php echo $row["prod_name"]; ?></td>
              <td><?php echo $row["link"]; ?></td>

              <td><?php if ($row["prod_available"] == 1) {
                    echo "available";
                  } ?></td>
              <td><?php echo $row["prod_launch_date"]; ?></td>
              <td>
                <a id="<?php echo $row['id']; ?>" data-toggle="modal" data-target="#exampleModal" class="edit btn btn-outline-success">Edit</a>
                <a id="<?php echo $row['id']; ?>" class="delete btn btn-outline-danger">delete</a>
                <!-- <input type="button" class="btn btn-outline-danger" value="delete"> -->
              </td>

            </tr>
          <?php
          }
          ?>

        </tbody>
      </table>
    </div>

  </div>
  </div>

  <!-- All Data -->



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form role="form">
            <div class="form-group">
              <div class="input-group input-group-merge input-group-alternative mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                </div>
                <input class="form-control" style="text-align: center;" value="Hosting" type="text" disabled>
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-merge input-group-alternative mb-3">
                <div class="input-group-prepend">
                  <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                </div>
                <input class="form-control" id="prodname" placeholder="Product Name" type="text">
              </div>
            </div>
            <div class="form-group">
              <div class="input-group input-group-merge input-group-alternative mb-3">

                <textarea id="editor2" class="form-control" placeholder="link"></textarea>
              </div>
            </div>
            <div class="form-group">

              <select name="" id="avail" class="form-control">
                <option value="1">Available</option>
                <option value="0">Unavailable</option>
              </select>
            </div>
            <div class="text-center">
              <button type="button" id="update" class="btn btn-primary mt-4">Update Category</button>
            </div>
          </form>

        </div>

      </div>
    </div>
  </div>

  <!-- End of all data-->

  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>
  <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

  <script>
    tinymce.init({
      selector: 'textarea#editor',
      menubar: false
    });
    tinymce.init({
      selector: 'textarea#editor2',
      menubar: false
    });
  </script>

  <script>
    var js;
    $(document).ready(function() {
      $("#add").click(function(e) {
        var name = $("#name").val();
        console.log(name);
        e.preventDefault();
        var link = tinyMCE.activeEditor.getContent();
        console.log(link);

        $.ajax({
          url: "../../helper.php",
          method: "post",
          data: {
            proname: name,
            link: link,
            action: "insertproduct"
          },
          success: function(data, status) {
            alert(data);
            $("#tblshow").load(" #tblshow");

          }

        })
      })
      $('#tblshow').on('click', '.delete', function(e) {
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
              action: "delete"
            },
            success: function(data, status) {
              // alert(data);
              $("#tblshow").load(" #tblshow");

            }
          });

        }
        return false;
      });
      $('#tblshow').on('click', '.edit', function(e) {
        var element = $(this);
        var id = element.attr("id");
        console.log(id);

        $.ajax({
          url: "../helper.php",
          method: "post",
          data: {
            id: id,
            action: 'getdata'
          },
          success: function(data) {
            js = JSON.parse(data);
            $("#prodname").val(js.prod_name);
            $("#editor2").html(js.link);
            $("#avail selected:option").val(js.prod_available);
          }
        })

      });
      $("#update").click(function() {
        var name = $("#prodname").val();
        var link = tinyMCE.activeEditor.getContent();
        var avail = $("#avail").val();
        var id=js.id;
        console.log(js.id);
        console.log(name);
        console.log(avail);
        if(confirm("Are sure to update record ?")){
          $.ajax({
            type: "POST",
            url: "../helper.php",
            data:{id:id,name:name,link:link,avail:avail,action:'update'},
            success: function(data, status) {
              // alert(data);
              alert(data);
              location.reload();

            }
          });
         

        }
          return false;
      })
    })
  </script>
</body>

</html>