<?php
  session_start();
  if(!isset($_SESSION['session_admin'])){
  echo '<script> window.location="login.php"; </script>';
  }
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
      <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Nebbit</title>
	<!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

   <link href="css/estilo.css" rel="stylesheet" />
</head>
<body>
     
           
          
    <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="img/nebbitlogo.png" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="./inc/logout.php" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">

              <?php
                if ($_SESSION['session_admin'][2] == "Soportes"){    //SECCION DE SOPORTE?> 
                  <ul class="nav" id="main-menu">
                    <li class="active-link">
                        <a href="index.html" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="inspeccionar_clientes_soporte.php"><i class="fa fa-edit "></i>Inspeccionar Clientes</a>
                    </li>                   
                  </ul>

                <?php }else{      //SECCION DE ADMIN?>
                        <ul class="nav" id="main-menu">
                        <li class="active-link">
                            <a href="index.html" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                        </li>
                        <li>
                            <a href="inspeccionar_clientes_admin.php"><i class="fa fa-edit "></i>Inspeccionar Clientes</a>
                        </li>
                        <li>
                            <a href="inspeccionar_claves_admin.php"><i class="fa fa-edit "></i>Inspeccionar Claves</a>
                        </li>
                        <li>
                            <a href="inspeccionar_claves_admin.php"><i class="fa fa-plus "></i>Crear Clave</a>
                        </li>                     
                      </ul>
                <?php }  ?>
            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2><?php echo strtoupper($_SESSION['session_admin'][2])?> DASHBOARD</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Bienvenido <?php echo $_SESSION['session_admin'][0] .' '. $_SESSION['session_admin'][1]; ?> ! </strong> Disfrute de nuestro nuevo dashboard.
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 

                  <?php
                    if ($_SESSION['session_admin'][2] == "Soportes") {?>
                        <div class="row text-center pad-top">
                        <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                        <div class="div-square">
                        <a href="inspeccionar_clientes_soporte.php" >
                        <i class="fa fa-users fa-5x"></i>
                            <h4>Inspeccionar clientes</h4>
                        </a>
                        </div>  
                        </div> 
                        </div>
              <?php }else{?>
                        <div class="row text-center pad-top">
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="div-square">
                              <a href="inspeccionar_clientes_admin.php" >
                              <i class="fa fa-users fa-5x"></i>
                                  <h4>Inspeccionar clientes</h4>
                              </a>
                            </div>  
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="div-square">
                              <a href="inspeccionar_claves_admin.php" >
                              <i class="fa fa-key fa-5x"></i>
                                  <h4>Inspeccionar claves</h4>
                              </a>
                            </div>  
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="div-square">
                              <a href="crear_claves_admin.php" >
                              <i class="fa fa-plus fa-5x"></i>
                                  <h4>Crear clave</h4>
                              </a>
                            </div>  
                          </div>
                          <div class="col-lg-2 col-md-2 col-sm-2 col-xs-6">
                            <div class="div-square">
                              <a href="crear_claves_admin.php" >
                              <i class="fa fa-user fa-5x"></i>
                                  <h4>Crear cliente</h4>
                              </a>
                            </div>  
                          </div>                         
                        </div>  
              <?php } ?>                  
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2017 nebbit.com
                </div>
            </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>
    
   
</body>
</html>
