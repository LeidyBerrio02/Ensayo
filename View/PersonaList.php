<?php
require_once '../Controller/PersonaController.php';
require_once '../Model/PersonaModel.php';
$control = new Persona_Controller();
$persona = new Persona();
//$re = $control->buscar($_GET['id']);
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="Styles.css">
  <link rel="stylesheet" href="../Componentes/popper/popper.min.js">
  <link rel="stylesheet" href="../Componentes/bootstrap4/css/bootstrap.min.css">
  <link rel="stylesheet" href="../Componentes/plugins/sweetAlert2/sweetalert2.min.css">
  <script src="aprender.js" type="text/javascript"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.js">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootbox.js/5.4.0/bootbox.min.js.map">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.4/jquery-confirm.min.js">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
  <link rel="shortcut icon" href="../Componentes/Images/favicon.ico" />
  <link href="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/css/alertify.min.css" rel="stylesheet"/>
<script src="https://cdn.jsdelivr.net/npm/alertifyjs@1.11.0/build/alertify.min.js"></script>

  <title>Sigma</title>
</head>

<body>
  <div class="container" id="contenedor">
    <img src="../Componentes/Images/sigma-logo.png" id="img1">
    <a href="../index.php">
      <button type="button" class="btn btn-danger">Atras</button></a>
    <div class="tabla-responsive">
      <table id="tabla" class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID Persona</th>
            <th scope="col">Nombre</th>
            <th scope="col">Email</th>
            <th scope="col">Departamento</th>
            <th scope="col">Ciudad</th>
            <th scope="col">Editar</th>
            <th scope="col">Eliminar</th>
          <tr></tr>
          </tr>
        </thead>

        <tbody>
          <tr>
            <?php $resul;
            foreach ($control->ListaDatos() as $r) : ?>
              <td><?php echo $r->__GET('idPersona'); ?> </td>
              <td><?php echo $r->__GET('nombre'); ?> </td>
              <td><?php echo $r->__GET('email'); ?> </td>
              <td><?php echo $r->__GET('Departamento'); ?> </td>
              <td><?php echo $r->__GET('ciudad'); ?> </td>
              <td><a href="PersonaUpdate.php?id=<?php echo $r->idPersona; ?>">
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@mdo">Editar</button>
                </a></td>
              <!--Mostrando botones de acciones -->
              <td style="display: flex; justify-content: space-around">
                <a href="PersonaDelete.php?id=<?php echo $r->idPersona; ?>">
      <button type="submit" class="btn btn-danger" onclick=" return CorfirmacionEliminacion()">Eliminar</button></a></td>
                 <!-- <button id="btn1" type="button" class="btn btn-danger" onclick=" return CorfirmacionEliminacion()">Eliminar</button></a></td>-->
          </tr>
        <?php endforeach ?>
        </tbody>
      </table>
      <button id="btn1" type="button" class="btn btn-danger" onclick=" return CorfirmacionEliminacions()">Eliminar</button></a></td>

    </div>

    <!--
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Editar informacion de Persona</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Formulario -->
    <!--<form action="#" method="post" id="id" name="formulario" onsubmit="return Validacion();">
    <div class="form-group">
      <label>id:</label>
	   <input type="text"  class="form-control" name="id"  value="<?php echo $re->idPersona; ?>"  disabled >  <br>

      <label>Departamento*</label><br>
      <input name="departamento" class="custom-select" value="<?php echo $re->Departamento; ?>" onchange="cambiaCiudad()">
      <option select >Departamento</option>
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
      <div class="form-group">
        <label>Ciudad*</label><br>
        <input name="ciudad" class="custom-select" value="<?php echo $re->ciudad; ?>">
        <option disabled>Ciudad</option>
        </select>
      </div>
      <div class="form-group">
        <label for="inputAddress">Nombre*</label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $re->nombre;  ?>" class="form-control" required="required">
      </div>
      <div class="form-group">
        <label for="inputAddress2">Correo*</label>
        <input type="mail" name="email" id="email" value="<?php echo $re->email; ?>" class="form-control" required="required">
      </div>


  <div class="modal-footer">
  <a href="PersonaList.php">
    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button></a>
    <button type="submit" value="enviar" class="btn btn-primary" data-dismiss="modal">Aceptar</button>
	<input type="submit" name="enviar" class="btn btn-primary" value="enviar">

  </div>
  </div>
  </div>
  </div>
  </div>
  </form>

  Apartir de aca es el proceso de actualizar
-->
    <!--
  <?php/*
  if (isset($_POST['enviar'])) {
    $persona->__SET('idPersona', $_GET['id']);
    $persona->__SET('nombre', $_POST['nombre']);
    $persona->__SET('email', $_POST['email']);
    $persona->__SET('Departamento', $_POST['departamento']);
    $persona->__SET('ciudad', $_POST['ciudad']);

    if ($control->actualizar($persona)) {
      echo "datos  actualizados con exito";*/
  ?>
      <meta http-equiv="refresh" content="2 url=PersonaList.php">
  <?php/*
    }
  } else {
    echo "Ingrese los datos nuevos y presione el boton enviar";
  }*/?>
  
-->
    <!-- Scripts-->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    
  </div>
</body>

</html>