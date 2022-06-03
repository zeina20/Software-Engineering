<?php 
require_once APPROOT . '/controllers/Pages.php';
class Admin extends View {

   
    public function output() {
        require APPROOT . '/views/inc/header.php';


  
?>
  
    <html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="http://localhost/Software-Engineering/app/Theme/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="http://localhost/Software-Engineering/app/Theme/css/sb-admin-2.min.css" rel="stylesheet">
     </head>

   

     <body id="page-top">
     

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-success sidebar sidebar-dark accordion" id="accordionSidebar">

        

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <!-- <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a> -->
                       
                        </li>

                    

                       

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small">Admin</span>
                                <img class="img-profile rounded-circle"
                                    src="http://localhost/Software-Engineering/public/images/admin.png">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
        

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Admin Dashboard</h1>
                
                    </div>

                    <div class="container-fluid">

    <!--DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-dark">ADMIN Profile
                <a href="AddProducts" class="btn btn-success float-right">Add Product</a>
                <a href="<?php echo URLROOT . 'users/register'; ?>" class="btn btn-success float-right">Register New Admin</a>

            </h6>
        </div>

        <div class="card-body">

        <?php
      $products=$this->model->getAllProducts();

       ?>

            <div class="table-responsive">
                
               
            <table class='table' width=100%>
			<tr>
				<th>Product Name</th>
				<th>Product_ID</th>
                <th>Description</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Edit</th>
                <th>Delete</th>
			</tr>
            <?php
			foreach ($products as $product){
             ?>
                <tr>
                    <td> <?php echo $product->productname;?></td>
                    <td> <?php echo $product->product_id;?></td>
                    <td> <?php echo $product->description;?></td>
                    <td> <?php echo $product->quantity;?></td>
                    <td> <?php echo $product->price;?></td>
                    <td>
                        <a href="<?php echo 'EditProducts/'.$product->product_id; ?>" class="btn btn-primary">Edit</a>
                    </td>
                    <td>
                        <a href="<?php echo 'DeleteProducts/'.$product->product_id; ?>" class="btn btn-danger">Delete</a>
                    </td>
                    
                </tr>

               
              
                  
            <?php
            }
            
        
 ?>
    
    </table>
            
     </div>
    </div>
    </div>




    </div>

    <!--/.container-fluid-->


                    <!-- Content Row -->
                    <div class="row">

                     
                    </div>

                   

                        <!-- Content Column -->
                        <div class="col-lg-6 mb-4">

                           

                     

                        </div>

                        <div class="col-lg-6 mb-4">

                        

                          

                        </div>
                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Egyeuro 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

    <!-- Bootstrap core JavaScript-->
    <script src="http://localhost/Software-Engineering/app/Theme/vendor/jquery/jquery.min.js"></script>
    <script src="http://localhost/Software-Engineering/app/Theme/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="http://localhost/Software-Engineering/app/Theme/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="http://localhost/Software-Engineering/app/Theme/js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="http://localhost/Software-Engineering/app/Theme/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="http://localhost/Software-Engineering/app/Theme/js/demo/chart-area-demo.js"></script>
    <script src="http://localhost/Software-Engineering/app/Theme/js/demo/chart-pie-demo.js"></script>



     </body>
    </html>
    
   <?php
    require APPROOT . '/views/inc/footer.php';
    }
}
?>