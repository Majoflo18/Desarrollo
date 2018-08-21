<?php
  $Nombre = $_POST['nombre'];
  $Email = $_POST['email'];
  $Telefono = $_POST['telefono'];
  $Fecha = $_POST['Fecha'];
  $Ciudad = $_POST['ciudad'];
  $Mensaje = $_POST['mensaje'];
  mail( $email, 'Recibo', $Mensaje);
  ?>
<!DOCTYPE html>
<html ng-app>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Green Leaves</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.7.2/angular.min.js" ></script>
<link rel="stylesheet" href="bootstrap.min.css">
<style> label{ 
width: 150px;
display: inline-block; }
</style>
</head>
<body >
	<div class="contenedor" style="width: 2000px;margin: 3rem;padding: 4rem; text-align: left;height: 200px;box-shadow: inset-5px;">
	 <div class="row">
      <div class="col-lg-6" style="background-color:#3fff33;width: 100px;margin-left: 8rem;margin-right: 15rem;height: 200px;
      text-align:left; border-radius: 20px;
      -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.4);
      -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.4);
       box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.4);">
	   <h1 style=" color: #FFFF;">Green Leaves</h1>
	    <img src="hoja.png" width="200" height="100" align= "right">
      </div>
     </div>
    </div>
    <form  name="mensaje" method="post"style="margin-left: 18%; padding: 9%";>
    <p>{{"  Estimado  "}} <b><?php echo $Nombre?></b></p>

      <p> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Hemos recibido sus datos y nos pondremos en contacto con usted en la brevedad posible. </p>
      <p> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Enviaremos un correo con informacion a su cuenta: <u><font color = "blue"><?php echo $Email?></font></u>.</p>
</p>
</p> 
</p>
          <p>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp Atte.</p>
          <p>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp  <b><font color = "green">Green Leaves</font></b></p>
          <p>  &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <?php echo $Ciudad?> a <?php echo $Fecha?></p>

    </body>
</html>
