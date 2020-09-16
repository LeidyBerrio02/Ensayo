<?php
require_once '../Controller/PersonaController.php';
$control = new Persona_Controller();
if($control->eliminar($_GET['id'])){
//echo "Daros eliminados con exito ";?>
<meta http-equiv="refresh" content="0; url=PersonaList.php">
<?php
}

?>