<?php
session_start();
include('../koneksi.php');


?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Kres.co</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <!-- Google font-->
   <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,500,700" rel="stylesheet">

<!-- themify -->
<link rel="stylesheet" type="text/css" href="../Assets/icon/themify-icons/themify-icons.css">

<!-- iconfont -->
<link rel="stylesheet" type="text/css" href="../Assets/icon/icofont/css/icofont.css">

<!-- simple line icon -->
<link rel="stylesheet" type="text/css" href="../Assets/icon/simple-line-icons/css/simple-line-icons.css">

<!-- Required Fremwork -->
<link rel="stylesheet" type="text/css" href="../Assets/plugins/bootstrap/css/bootstrap.min.css">

<!-- Chartlist chart css -->
<link rel="stylesheet" href="../Assets/plugins/chartist/dist/chartist.css" type="text/css" media="all">

<!-- Weather css -->
<link href="../Assets/css/svg-weather.css" rel="stylesheet">


<!-- Style.css -->
<link rel="stylesheet" type="text/css" href="../Assets/css/main.css">

<!-- Responsive.css-->
<link rel="stylesheet" type="text/css" href="../Assets/css/responsive.css">

    
    <!-- Custom styles for this template -->
    <link href="../Assets/css/sidebars.css" rel="stylesheet">
  </head>
  <body class="sidebar-mini fixed">
   <div class="loader-bg">
      <div class="loader-bar">
      </div>
   </div>
   <div class="wrapper">
      <!-- Navbar-->
      <header class="main-header-top hidden-print">
         <a href="index.php" class="logo" ><b>Kres.co PEMILIK</b></a>
         <nav class="navbar navbar-static-top">
            <!-- Sidebar toggle button-->
            <a href="#!" data-toggle="offcanvas" class="sidebar-toggle"></a>
            
            <!-- Navbar Right Menu-->
            <div class="navbar-custom-menu f-right">
               <ul class="top-nav">
                  <!-- User Menu-->
                  <li class="dropdown" style="padding-left: 800px;">
                     <a href="profil.php" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle drop icon-circle drop-image">
                        <span><img class="img-circle " src="../Assets/images/avatar-1.png" style="width:40px;" alt="User Image"></span>
                        <span>
                        <?php
                           $no = 1;
                           $sql = $conn->query ("SELECT * FROM pemilik WHERE id_pemilik ='$_SESSION[id_pemilik]'");
                           while ($dataa = $sql -> fetch_assoc()) {
                        ?>
                           <b><?php echo $dataa['username'] ?></b> <?php  } ?>
                           <i class=" icofont icofont-simple-down"></i></span>
                     </a>
                     <ul class="dropdown-menu settings-menu">
                        <a style = "text-decoration: none; color: black;" href="profil.php"><li><i class="icon-user"></i> Profile</li></a>
                        <a style = "text-decoration: none; color: black;" href="../logout.php"><li><i class="icon-logout"></i> Keluar</li></a>
                     </ul>
                  </li>
               </ul>
            </div>
         </nav>
      </header>
      <!-- Side-Nav-->
      <aside class="main-sidebar hidden-print ">
         <section class="sidebar" id="sidebar-scroll">
            <!-- Sidebar Menu-->
            <ul class="sidebar-menu">
                <li class="nav-level"></li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="index.php">
                        <i class="icon-speedometer"></i><span> Dashboard</span>
                    </a>                
                </li>
                <li class="nav-level"></li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="datapegawai.php">
                        <i class="icon-list"></i><span> Data Pegawai</span>
                    </a>                
                </li>
                <li class="nav-level"></li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="data_pelanggan.php">
                        <i class="icofont icofont-users"></i><span> Data Pelanggan</span>
                    </a>                
                </li>
                <li class="nav-level"></li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="barang/produk.php">
                        <i class="icon-briefcase"></i><span> Barang</span>
                    </a>                
                </li>
                <li class="nav-level"></li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="pemesanan/index.php">
                        <i class="icofont icofont-files"></i><span> Pemesanan</span>
                    </a>                
                </li>
                <li class="nav-level"></li>
                <li class="active treeview">
                    <a class="waves-effect waves-dark" href="rekap/index.php">
                        <i class="icofont icofont-wallet"></i><span> Rekapitulasi</span>
                    </a>                
                </li>
                
               
                </li>
            </ul>
         </section>
      </aside>
      
      <<div class="content-wrapper">
         <div class="container-fluid">
            <div class="row">
               <div class="main-header">
                  <h4>Tambah Pegawai</h4>
               </div>
            </div>
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="main-panel">
			<div class="content">
				<div class="page-inner">
					
					
					<div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                        <div class="panel-body">
                            <div class="table-responsive">
                            <div class="row">
                                <div class="col-md-8">
                                    
                                    <form method="POST" action="proses_tambah.php">
                                        <div class="form-group">
                                            <label>Nama Lengkap</label>
                                            <input type="text" class="form-control" name="nama_lengkap" placeholder="Nama Lengkap" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Alamat</label>
                                            <input type="text" class="form-control" name="alamat" placeholder="Alamat" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>No Handphone</label>
                                            <input type="tel" class="form-control" name="no_hp" pattern="[0-9]{12,13}" placeholder="No HP" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="form-control" name="email" placeholder="Email" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Username" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Password" required/>
                                        </div>
                                        <div class="form-group">
                                            <label>Konfirmasi password</label>
                                            <input type="password" class="form-control" name="password2" id="password2" placeholder="Ulangi password anda" required/>
                                        </div>
                                        <div class="col text-right">
                                            <a href="datapegawai.php" class="btn btn-danger">Batal</a>
                                            <input type="submit" value="Simpan" class="btn btn-primary"/>
                                        </div>
                           </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            

   <!-- Required Jqurey -->
   <script src="../Assets/plugins/Jquery/dist/jquery.min.js"></script>
   <script src="../Assets/plugins/jquery-ui/jquery-ui.min.js"></script>
   <script src="../Assets/plugins/tether/dist/js/tether.min.js"></script>

   <!-- Required Fremwork -->
   <script src="../Assets/plugins/bootstrap/js/bootstrap.min.js"></script>

   <!-- Scrollbar JS-->
   <script src="../Assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
   <script src="../Assets/plugins/jquery.nicescroll/jquery.nicescroll.min.js"></script>

   <!--classic JS-->
   <script src="../Assets/plugins/classie/classie.js"></script>

   <!-- notification -->
   <script src="../Assets/plugins/notification/js/bootstrap-growl.min.js"></script>

   <!-- Sparkline charts -->
   <script src="../Assets/plugins/jquery-sparkline/dist/jquery.sparkline.js"></script>

   <!-- Counter js  -->
   <script src="../Assets/plugins/waypoints/jquery.waypoints.min.js"></script>
   <script src="../Assets/plugins/countdown/js/jquery.counterup.js"></script>

   <!-- Echart js -->
   <script src="../Assets/plugins/charts/echarts/js/echarts-all.js"></script>

   <script src="https://code.highcharts.com/highcharts.js"></script>
   <script src="https://code.highcharts.com/modules/exporting.js"></script>
   <script src="https://code.highcharts.com/highcharts-3d.js"></script>

   <!-- custom js -->
   <script type="text/javascript" src="../Assets/js/main.min.js"></script>
   <script type="text/javascript" src="../Assets/pages/dashboard.js"></script>
   <script type="text/javascript" src="../Assets/pages/elements.js"></script>
   <script src="../Assets/js/menu.min.js"></script>
<script>
var $window = $(window);
var nav = $('.fixed-button');
$window.scroll(function(){
    if ($window.scrollTop() >= 200) {
       nav.addClass('active');
    }
    else {
       nav.removeClass('active');
    }
});
</script>

</body>
</html>

	



