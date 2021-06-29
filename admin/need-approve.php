<?php 
	session_start();
    
	// cek apakah yang mengakses halaman ini sudah login
	if($_SESSION['level']==""){
        header("location:index.php?pesan=gagal");
	}
    
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SfR - Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
<a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.php">
        <div class="sidebar-brand-icon rotate-n-15">
          <i class="fas fa-volleyball-ball"></i>
        </div>
        <div class="sidebar-brand-text mx-3">SfR <sup><span class="badge badge-pill badge-light">BETA</span></sup></div>
      </a>
      
      <?php include("menu.php"); ?> 

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

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
          <!-- <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
            <div class="input-group">
              <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
              <div class="input-group-append">
                <button class="btn btn-primary" type="button">
                  <i class="fas fa-search fa-sm"></i>
                </button>
              </div>
            </div>
          </form> -->

          <!-- Topbar Navbar -->
          <ul class="navbar-nav ml-auto">

            <div class="topbar-divider d-none d-sm-block"></div>

            <!-- Nav Item - User Information -->
            <li class="nav-item dropdown no-arrow">
              <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $_SESSION['username']; ?></span>
                <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
              </a>
              <!-- Dropdown - User Information -->
              <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                <!-- <a class="dropdown-item" href="#">
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
                <div class="dropdown-divider"></div> -->
                <a class="dropdown-item" href="href="logout.php"" data-toggle="modal" data-target="#logoutModal">
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
          <h1 class="h3 mb-2 text-gray-800">Reservation Need to Approve</h1>
          <!-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below. For more information about DataTables, please visit the <a target="_blank" href="https://datatables.net">official DataTables documentation</a>.</p> -->

          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">DataTables of Reservation</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Date</th>
                      <th>Price</th>
                      <th>Time</th>
                      <th>Status</th>
                      <th>Username</th>
                      <th>Invoice</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>ID</th>
                      <th>Date</th>
                      <th>Price</th>
                      <th>Time</th>
                      <th>Status</th>
                      <th>Username</th>
                      <th>Invoice</th>
                      <th>Action</th>
                    </tr>
                  </tfoot>
                  <tbody>

                    <?php
                    // Create database connection using config file
                    include_once("connect.php");

                    // Fetch all users data from database
                    // $sql = "SELECT * FROM reservation WHERE status='Sudah dibayar' ORDER BY id ASC";
                    $sql = "SELECT reservation.id, reservation.start_date, reservation.username, reservation.start_time, reservation.end_time, price.price, reservation.status, reservation.picture from (reservation reservation LEFT JOIN price price on reservation.price_id = price.id) WHERE status='Sudah dibayar' ORDER BY id ASC";
                    $result = mysqli_query($mysqli, $sql) or die (mysqli_error($mysqli));
                        
                        while($reserv = mysqli_fetch_array($result)) { 

                            //menghitung selisih waktu 
                            $st = strtotime($reserv['start_time']);
                            $et = strtotime($reserv['end_time']);

                            $selisih = $st - $et;
                            $jam = floor($selisih/(60*60));
                            $menit = $selisih - $jam * (60*60);

                            $j = abs($jam);

                            //hitung harga perjam
                            $totalmainperjam = $jam * $reserv['price'];
                            $hpj = abs($totalmainperjam);

                            //hitung harga permenit
                            $hitungpermenit = $reserv['price'] / 60;
                            $hargapermenit = round($hitungpermenit);
                            $totalpermenit = floor( $menit / 60 );
                            $totalmainpermenit = $hargapermenit * $totalpermenit;
                            $hpm = abs($totalmainpermenit);

                            $total = $hpj + $hpm;

                            $total_harga = "Rp " . number_format($total,2,',','.');

                            echo "<tr>";       
                            echo "<td>".$reserv['id']."</td>";       
                            echo "<td>".$reserv['start_date']."</td>";       
                            echo "<td>".$total_harga."</td>";       
                            echo "<td>".$reserv['start_time']." - ".$reserv['end_time']."<br><span class='badge badge-success'>Lama bermain : ".$j." Jam, ".floor( $menit / 60 )." Menit</span></td>";       
                            echo "<td>".$reserv['status']."</td>";       
                            echo "<td>".$reserv['username']."</td>"; 
                            echo "<td><a href='../user/images/pembayaran/".$reserv['picture']."' target='_blank'><img src='../user/images/pembayaran/".$reserv['picture']."' style='width:64px;height:64px;'></a></td>";       
                            if($reserv['status'] == "Sudah dibayar"){
                              echo '<td><a href="approve.php?id='.$reserv['id'].'" type="button" class="btn btn-success" onclick="return approve()">Confirm</a> <a href="decline.php?id='.$reserv['id'].'" type="button" class="btn btn-danger" onclick="return decline()">Decline</a></td>';
                            } else {
                              echo '<td><button type="button" class="btn btn-primary disabled">Done</button></td>';
                            }
                            echo "</td>";
                        }
                        
                    ?>

                  </tbody>
                </table>
              </div>
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
            <span>Copyright &copy; SfR 2020</span>
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

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="logout.php">Logout</a>
        </div>
      </div>
    </div>
  </div>

   <!-- Bootstrap core JavaScript-->
   <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

  <!-- Page level plugins -->
  <script src="vendor/datatables/jquery.dataTables.min.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="js/demo/datatables-demo.js"></script>

  <script>
  function approve() {
    return confirm("Yakin akan mengkonfirmasi transaksi ini ?");
  }
  function decline() {
    return confirm("Yakin akan membatalkan transaksi ini ?");
  }
  </script>

</body>

</html>
