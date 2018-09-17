<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <link rel="icon" type="png" href="../img/favicon.png">
    <title>Admin</title>    
    <!-- Bootstrap CSS--> 
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link href="../css/fontawesome/css/fontawesome.min.css" rel="stylesheet">
    <link href="../css/fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="../css/fontawesome/css/brands.css" rel="stylesheet">
    <link href="../css/fontawesome/css/solid.css" rel="stylesheet"> 
    <!-- Popper js--> 
    <script src="../js/popper/popper.min.js"   crossorigin="anonymous"></script>
    <!-- Jquery js--> 
    <script src="../js/jquery/jquery.min.js"></script>
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="../css/fontastic.css">
    <!-- Google fonts - Poppins -->
    <link rel="stylesheet" href="../css/poppins.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="../css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="../img/favicon.apple-icon.png">
    <script type="text/javascript" src="../modulos/Hackaton/funciones.js"></script>
  </head>
  <body>

  	<?php require_once 'ingresarHackaton.php'; ?>
  	<?php require_once '../modulos/Hackaton/modal_editar.php' ?>
  	<?php require_once '../modulos/Hackaton/modal_eliminar.php'?>
<div class="container">
	<h1 align="center">Hackaton</h1>     
</div>
 
 <header>
 	<div class="d-flex"> 
 		<div class="col-md-1"></div>
	 	<div class="col-md-5">
			<form class="form-inline">
			    <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
			    <button class="btn btn-outline-success my-2 my-sm-0 fas fa-search" type="submit">Buscar</button>
			 </form>
		</div>
		<div class="col-md-6">
			<div align="right">
				<button type="button" class="btn btn-success fas fa-plus" data-toggle="modal" data-target="#ModalHackaton1"> Nuevo
				</button>
			</div>			 
		</div>
	</div>
 </header>
<body>
	 <div class="row">
		<div class="col-md-1">
		</div>
		<div class="col-md-10">
				   <div class="visualizar">

			     </div> 
		</div>
		<div class="col-md-1">
		</div>
	</div>
</body>
  
    <script src="../js/Bootstrap/bootstrap.min.js"></script> 
  </body>    
</html> 
 















	

 