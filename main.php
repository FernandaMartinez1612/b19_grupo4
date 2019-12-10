<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
	<title>	PRESI-SA</title>
	<link rel="shortcut icon" href="imagenes/icono1.jpg" />
 
    <link rel="stylesheet" type="text/css" href="js/jquery-easyui-1.8.8/themes/black/easyui.css">
	<link rel="stylesheet" type="text/css" href="js/jquery-easyui-1.8.8/themes/icon.css">
	<link rel="stylesheet" type="text/css" href="css/proyecto.css">
    <script type="text/javascript" src="js/jquery-easyui-1.8.8/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-easyui-1.8.8/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="js/jquery-easyui-1.8.8/locale/easyui-lang-es.js"></script>
</head>
<?php
 session_start();
 if( isset(  $_SESSION['usuario']) ==false)
 header("location: index.php") ;
?>
<body class="easyui-layout">
          
 
        <div data-options="region:'north'" style="height:70px"> 
        <div class="imagen"><img src="imagenes/letras.png"  style="top:5px"   > </img></div>
         <div class="titulousuario">
          <b>Usuario:</b> <?php echo $_SESSION['usuario']; ?> 
          <a href="index.php"> <img src="imagenes/logout.png"  style="top:5px"   > </img> </a>
         </div> 

        </div>

        <div data-options="region:'south',split:true" style="height:50px;"></div>
       
        <div data-options="region:'west',split:true" title="Menu" style="width:200px;">
        
        <ul class="easyui-tree">
			<li>
				<span>Menu Principal</span>
				<ul>
				<li>
						<span>Usuarios</span>
						
					</li>
					<li>
						<span>Clientes</span>
						<ul>
							<li>
								<span>Representante Legal</span>
							</li>
							<li>
								<span>Personas de Contacto</span>
							</li>
							
						</ul>
					</li>
					<li>
						<span>Establecimientos</span>
						
					</li>
					<li>
						<span>Eventos</span>
						<ul>
							<li>Auspiciantes</li>
							<li>Participantes</li>
						
						</ul>
					</li>
				</ul>
			</li>
		</ul>

        </div>
        <div data-options="region:'center' ">
		<?php include ('usuarios.php'); ?>
        </div>
 
 
</body>
</html>