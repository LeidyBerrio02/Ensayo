<?php
require_once '../Controller/PersonaController.php';
require_once '../Model/PersonaModel.php';
$persona = new Persona();
$control = new Persona_Controller();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Styles.css">
  <link rel="stylesheet" href="../Componentes/plugins/animate.css/animate.css">
  <link rel="stylesheet" type="text/css" href="../Componentes/Roboto/Blod.ttf">
  <link rel="stylesheet" href="../Componentes/popper/popper.min.js">
  <link rel="stylesheet" href="../Componentes/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Componentes/plugins/sweetAlert2/sweetalert2.min.css">
  <link rel="stylesheet" href="../Componentes/plugins/animate.css/animate.css">
  <link rel="stylesheet" href="../Componentes//sweetAlert2/sweetalert2.min.css">


  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <!-- Scripts-->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js"></script>
  <script src="../Componentes/bootbox.min.js"></script>
  <script src="../Componentes/jquery-3.5.1.min.js"></script>
  <script type="text/javascript" src="aprender.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
 
  <title>Pieza-Sigma</title>
  <link rel="shortcut icon" href="../Componentes/Images/favicon.ico" />
</head>

<body>
  <div class="container">
    <img src="../Componentes/Images/sigma-logo.png" id="img1">
    <h2>Prueba de desarrollo sigma</h2><br>
    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the<br>
      industry's standard dummy text since the 1500s, when an unknown printer took a galley of type and<br>
      scrambled it to make a type specimen book.</p>
    <div class="flex-container">
      <img src=../Componentes/Images/sigma-image.png id="img2">
      <a href="PersonaList.php">
        <button type="button" name="lista" id="blist" class="btn btn-danger">Listado</button>
      </a>
      <form action="#" method="post" id="form1" name="formulario" onsubmit="return Validacion();">
        <div class="form-group">
          <label>Departamento*</label><br>
          <select name="departamento" class="custom-select" onchange="cambiaCiudad()" required="required">
            <option selected>Departamento</option>
            <option value="Amazonas">Amazonas</option>
            <option value="Antioquia">Antioquia</option>
            <option value="Atlántico">Atlántico</option>
            <option value="Caquetá">Caquetá</option>
            <option value="Cesar">Cesar</option>
            <option value="Chocó">Chocó</option>
            <option value="Córdoba">Córdoba</option>
            <option value="Guainía">Guainía</option>
            <option value="Guaviare">Guavirare</option>
            <option value="Huila">Huila</option>
            <option value="LaGuajira">La Guajira</option>
            <option value="Putumayo">Putumayo</option>
            <option value="Quindío">Quindio</option>
            <option value="San Andrés y Providencia">San Andrés y Providencia</option>
            <option value="Sucre">Sucre</option>
            <option value="Tolima">Tolima</option>
            <option value="Vaupés">Vaupés</option>
            <option value="Vichada">Vichada</option>
          </select>
        </div>
        <div class="form-group">
          <label>Ciudad*</label><br>
          <select name="ciudad" class="custom-select" required="required">
            <option selected value="">Ciudad</option>
          </select>
        </div>
        <div class="form-group">
          <label for="inputAddress">Nombre*</label>
          <input type="text" name="nombre" id="nombre" class="form-control" required="required">
        </div>
        <div class="form-group">
          <label for="inputAddress2">Correo*</label>
          <input type="mail" name="email" id="email" class="form-control" required="required">
        </div>


        <button type="submit" name="enviar" class="btn btn-danger" id="button1">Enviar</button>
        <br><br><br>
      </form>


      <?php

      if (isset($_POST['enviar'])) {
        $persona->__SET('Departamento', $_POST['departamento']);
        $persona->__SET('ciudad', $_POST['ciudad']);
        $persona->__SET('nombre', $_POST['nombre']);
        $persona->__SET('email', $_POST['email']);
        if ($control->insertar($persona)) {
      ?>
          <script>
            
            Swal.fire({        
        type: 'success',
        title: 'Éxito',
        text: '¡Perfecto!',        
    });
          </script>
          <meta http-equiv="refresh" content="2; url=../index.php">
      <?php
        } else {
          echo "Error Ingreso Datos";
        }
      }


      ?>
    </div>
  </div>

   <!-- Scripts-->
   <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
        <script src="../Componentes/popper/popper.min.js"></script>
</body>

</html>