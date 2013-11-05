<?php
  require_once ("config.php");

  if(isset($_SESSION["ses_id"]))
  {
        if(!empty($_GET['accion']))
      {
        $accion=$_GET['accion'];
      }else{
        $accion ="index";

      }

      if (is_file("controller/".$accion."Controller.php")) {
        require_once("controller/".$accion."Controller.php");   
      }
      else{
        require_once("controller/errorController.php");

      }

  }else
  {

    require_once("controller/indexController.php");



  }
  ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
	<title></title>

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="scripts/js/html5shiv.js"></script>
      <script src="scripts/js/respond.min.js"></script>
    <![endif]-->
    	<script src=""></script>
      <link rel="stylesheet" type="text/css" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="<?php echo Conectar::ruta();?>scripts/css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="<?php echo Conectar::ruta();?>scripts/css/carousel.css">
<link rel="stylesheet" type="text/css" href="<?php echo Conectar::ruta();?>scripts/css/mios.css">
<link rel="stylesheet" type="text/css" href="<?php echo Conectar::ruta();?>scripts/css/animaciones.css">

</head>
<body>





<nav class="navbar navbar-default navbar-fixed-bottom footer" role="navigation">
  <footer>
    <div class="container">
    <center>
        &copy; <a href="http://www.twitter.com/ederjulianA" target="_blank">@ederjulianA</a>--<a href="https://twitter.com/camandres9" target="_blank">@camandres9</a>---2013           
        </center>
    </div>
  </footer>
</nav>
<!-- Placed at the end of the document so the pages load faster -->
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <script src="<?php echo Conectar::ruta();?>/scripts/js/jquery.js"></script>
    <script src="<?php echo Conectar::ruta();?>/scripts/js/validaciones.js"></script>
    <script src="<?php echo Conectar::ruta();?>/scripts/js/bootstrap.min.js"></script>
    <script src="<?php echo Conectar::ruta();?>/scripts/js/holder.js"></script>
</body>
</html>
