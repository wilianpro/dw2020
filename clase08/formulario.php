<?php
session_start();
if (!$_SESSION['datos'])
{
  $_SESSION['datos']=[];
  setcookie("saludo","tu session a iniciado");
}
$nombre="";
$apellido="";
$fenac="";
 if ($_POST)
{
   array_push($_SESSION['datos'],
   [
     "nombre"=> $_POST['nombre'],
     "apellido"=> $_POST['apellido'],
     "fenac"=> $_POST['fenac'],
    ] );
   $nombre=$_POST['nombre'];
   $apellido=$_POST['apellido'];
   $fenac=$_POST['fenac'];
}
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clase 10</title>
    <link rel="stylesheet" href="libs/bootstrap/css/bootstrap.min.css">
    <script src="libs/jquery/jquery.min.js" charset="utf-8"></script>
    <script src="libs/bootstrap/js/bootstrap.min.js" charset="utf-8"></script>
  </head>
  <body>
    <div class="container">
    <div class="card">
    <div class="card-body">
    <h1 class="card-title">Formulario con PHP</h1>
    <div id="formulario">
      <form class="" action="formulario.php" method="post">
        <label for="nombre">Nombre</label> <br>
        <input type="text" name="nombre" value="" placeholder="Juan"><br>
        <label for="apellido">Apellido</label> <br>
        <input type="text" name="apellido" value="" placeholder="Perez"><br>
        <label for="fenac">Fecha de Nacimiento</label> <br>
        <input type="date" name="fenac" value=""placeholder="Fecha de Nacimiento"><br>
        <p></p>
       <button type="submit" name="button" class="btn btn-primary">Enviar</button>
      </form>
    </div>
  </div>
</div>
</div>
      <p>
        <h5 class="text-uppercase">Hola <?php echo $nombre; ?> <?php echo $apellido; ?></h5>
      </p>
      <!-- <ol>
<?php //print_r($_SESSION);
$datos=$_SESSION['datos'];

//print_r($_SESSION['datos']);
foreach ($datos as $key => $value) {
  echo "<li>".$value['apellido'].", ".$value['nombre']."</li>";
}
?>
</ol> -->
<div class="container">
<div class="card">
<div class="card-body">
<h3 class="card-title">Datos</h3>
<table border="1">
<?php
foreach ( $datos as $key ) {
        ?>
        <tr>
          <td>Nombre</td>
          <td>Apellido</td>
          <td>Fecha de Nacimiento</td>
        </tr>
        <tr>

        <?php
        foreach ( $key as $v ) {
        ?>

                <td><?php echo $v;?></td>

        <?php
        }
        ?>

        </tr>
        <td>
          <spam>Otros Datos<th colspan="3">---</spam>
        </td>
<?php
}
?>
</table>
<button class="btn btn-dark float-right" role="link" onclick="window.location='cerrar.php'">Cerrar Session</button>
</div>
</div>
</div>




  </body>
</html>
