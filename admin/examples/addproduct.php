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
$tblprodobj = new Product();
$result = $tblprodobj->getData(1);
$n = $result->num_rows;
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

<body class="bg-default">
  <!-- Navbar -->
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
            <!--End of heading -->

            <!-- Nav items
            <ul class="navbar-nav">
              
              <li class="nav-item">
                <a class="nav-link" href="examples/icons.html">
                  <i class="ni ni-planet text-orange"></i>
                  <span class="nav-link-text">Icons</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/map.html">
                  <i class="ni ni-pin-3 text-primary"></i>
                  <span class="nav-link-text">Google</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/profile.html">
                  <i class="ni ni-single-02 text-yellow"></i>
                  <span class="nav-link-text">Profile</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/tables.html">
                  <i class="ni ni-bullet-list-67 text-default"></i>
                  <span class="nav-link-text">Tables</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/login.html">
                  <i class="ni ni-key-25 text-info"></i>
                  <span class="nav-link-text">Login</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/register.html">
                  <i class="ni ni-circle-08 text-pink"></i>
                  <span class="nav-link-text">Register</span>
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="examples/upgrade.html">
                  <i class="ni ni-send text-dark"></i>
                  <span class="nav-link-text">Upgrade</span>
                </a>
              </li>
            </ul> -->
            <!-- Divider -->
            <!-- <hr class="my-3"> -->
            <!-- Heading -->
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
    <div class="header bg-gradient-primary py-4 py-lg-5 pt-lg-6">
      <div class="container">
        <div class="header-body text-center mb-7">
          <div class="row justify-content-center">
            <div class="">
              <h1 class="text-white">Add Product</h1>
              <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="separator separator-bottom separator-skew zindex-100">
        <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
          <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
        </svg>
      </div>
    </div>
      <!-- Page content -->
      <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
          <div class="col-lg-6 col-md-8">
            <div class="card bg-secondary border-0">
              <div class="card-header bg-transparent pb-5">   
              </div>
              <div class="card-body px-lg-5 py-lg-2">
                <form role="form">
                  <div class="form-group">
                  <label for="">Product Category</label>
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <!-- <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-hat-3"></i></span>
                      </div> -->
                      
                      <select name="prId" id="prId" class="form-control">
                      <option value=" ">Select Product Category</option>
                      <?php for ($i = 0; $i < $n; $i++) {
									$data = $result->fetch_assoc();
									?>
									<option value="<?php echo $data["id"]; ?>"><?php echo $data["prod_name"]; ?></option>
									<?php
								} ?>
                      </select>
                    </div>
                  </div>

                  <div class="form-group">
                      <label for="">Product Name</label>
                      <input name="pdsc" id="name" placeholder="Product Name" class="form-control">
                  </div>
                  <div class="form-group">
                      <label for="">PageUrl</label>
                      <input name="pdsc" id="pageurl" placeholder="Page Url" class="form-control">
                  </div>            
                  
                  <div class="form-group">
                  <label for="">Monthly Price</label>
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <input class="form-control" id="monPrice" placeholder="Monthly Price" type="number">
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="">Annual Price</label>
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <input class="form-control" id="AnnPrc" placeholder="Annual Price" type="number">
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="">SUK</label>
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <input class="form-control" id="suk" placeholder="SUK" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="">Web Space</label>
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <input class="form-control" id="space" placeholder="Web Space in GB" type="number">
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="">Bandwidth</label>
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <input class="form-control" id="bandwidht" placeholder="Bandwidht in GB" type="number">
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="">Free Domain</label>
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <input class="form-control" id="freedomain" placeholder="Free Domain" type="number">
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="">Language And Technology</label>
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <input class="form-control" id="langtech" placeholder="Language / Technology Support" type="text">
                    </div>
                  </div>
                  <div class="form-group">
                  <label for="">Mailbox</label>
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <input class="form-control" id="mail" placeholder="mailbox" type="number">
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <div class="input-group input-group-merge input-group-alternative mb-3">
                      <div class="input-group-prepend">
                        <span class="input-group-text"><i class="ni ni-email-83"></i></span>
                      </div>
                      <input class="form-control" id="link" placeholder="Product Link" type="text">
                    </div>
                  </div> -->
                  
               
                  <div class="text-center">
                    <button type="button" id="add" class="btn btn-primary mt-4">Add Product</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- Footer -->
  <footer class="py-5" id="footer-main">
    <div class="container">
      <div class="row align-items-center justify-content-xl-between">
        <div class="col-xl-6">
          <div class="copyright text-center text-xl-left text-muted">
            &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">Creative Tim</a>
          </div>
        </div>
        <div class="col-xl-6">
          <ul class="nav nav-footer justify-content-center justify-content-xl-end">
            <li class="nav-item">
              <a href="https://www.creative-tim.com" class="nav-link" target="_blank">Creative Tim</a>
            </li>
            <li class="nav-item">
              <a href="https://www.creative-tim.com/presentation" class="nav-link" target="_blank">About Us</a>
            </li>
            <li class="nav-item">
              <a href="http://blog.creative-tim.com" class="nav-link" target="_blank">Blog</a>
            </li>
            <li class="nav-item">
              <a href="https://github.com/creativetimofficial/argon-dashboard/blob/master/LICENSE.md" class="nav-link" target="_blank">MIT License</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>
  <!-- Argon Scripts -->
  <!-- Core -->
  <script src="../assets/vendor/jquery/dist/jquery.min.js"></script>
  <script src="../assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/vendor/js-cookie/js.cookie.js"></script>
  <script src="../assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
  <script src="../assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
  <!-- Argon JS -->
  <script src="../assets/js/argon.js?v=1.2.0"></script>

  <script>
    $(document).ready(function(){
      $("#add").click(function(){
       var id=$("#prId option:selected").val();
       var name=$("#name").val();
       var pageurl=$("#pageurl").val();
       var mprice=$("#monPrice").val();
       var annualprc=$("#AnnPrc").val();
       var suk=$("#suk").val();
       var space=$("#space").val();
       var bandwidht=$("#bandwidht").val();
       var domain=$("#freedomain").val();
       var langtech=$("#langtech").val();
       var mail=$("#mail").val();

       var description={'name':name,'pageurl':pageurl,'space':space,'bandwidth':bandwidht,'domain':domain,'langtech':langtech,'mail':mail};
       console.log(description);
       console.log(id);
       console.log(mprice);
       console.log(annualprc);
       console.log(suk);

       $.ajax({
           url:"../../helper.php",
           method:"post",
           data:{id:id,des:description,mprice:mprice,annualprc:annualprc,suk:suk,action:"insert in pro_description"},
           success:function(data,status){
               alert(data);
           }
       })
       
       
    })
})
  </script>
</body>

</html>