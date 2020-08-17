<?php
require_once '../Controller/PersonaController.php';
$control = new Persona_Controller();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="Styles.css">
    <link rel="stylesheet" type="text/css" href="../Componentes/Roboto/Blod.ttf">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <!-- Scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <title>Sigma</title>
</head>
<body>
<img src="../Componentes/Images/sigma-logo.png" id="img1">
<a href="../index.php">
<button type="button" id="atras" class="btn btn-danger">Atras</button></a>
<div class="tabla-responsive">
<table id="tabla" class="table table-striped">
  <thead>
    <tr>
      <th scope="col">ID Persona</th>
      <th scope="col">Nombre</th>
      <th scope="col">Email</th>
      <th scope="col">Departamento</th>
      <th scope="col">ciudad</th>
     <!-- <th scope="col">Eliminar</th>
      <th scope="col">Editar</th>-->
    </tr>
  </thead>

  <tbody>
    <tr>
        <?php foreach ($control->ListaDatos() as $r):?>   
            <td><?php echo $r->__GET('idPersona');?> </td>
            <td><?php echo $r->__GET('nombre');?> </td>
            <td><?php echo $r->__GET('email');?> </td>
            <td><?php echo $r->__GET('Departamento');?> </td>
            <td><?php echo $r->__GET('ciudad');?> </td>
    
    <!--<td> 
      <a href="../"?php ?>Eliminar</td>-->
      </tr>
    <?php  endforeach ?>
    
  </tbody>
  
</table>
</div>
    </body>
</html>