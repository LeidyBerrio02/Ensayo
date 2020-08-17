<?php 
include_once '../Model/configuracion.php';
include_once '../Model/PersonaModel.php';


class Persona_Controller extends Conexion
{

    private $conexion;

	public function __CONSTRUCT()
	{
		try{
		$this->conexion=new PDO('mysql:host=localhost;dbname=ejemplo1', 'root', '');
		$this->conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		}catch(Exception $error){
		//echo "Se ha presentado un error en la conexion".$error->getMessage();
		die($error->getMessage());
		}	
	}	

	public function ListaDatos(){
		$datos=array();
		$consulta="SELECT * FROM persona ORDER BY idPersona";
		try {
            $resultado = $this->conexion->prepare($consulta);
			$resultado->execute();
			foreach ($resultado->fetchAll(PDO::FETCH_OBJ) as $datos) {
                $persona= new Persona();
                $persona->__SET('idPersona',$datos->idPersona);
                $persona->__SET('nombre',$datos->nombre);
				$persona->__SET('email',$datos->email);
				$persona->__SET('Departamento',$datos->Departamento);
				$persona->__SET('ciudad',$datos->ciudad);
				$dato[]=$persona;
			}
			return $dato;
		} catch (Exception $e) {
			die($e->getMessage());
		}
    }
    
    public function insertar(Persona $persona)
	{
		$insertar="INSERT INTO persona (nombre,email,Departamento,ciudad) values (?,?,?,?)";
		try {
			$this->conexion->prepare($insertar)->execute(array(
                $persona->__GET('nombre'),
                $persona->__GET('email'),
                $persona->__GET('Departamento'),
				$persona->__GET('ciudad') 
				));

			return true;
		} catch (Exception $error) {
			echo "Error al ingresar datos ".$error->getMessage();
		}
	}

	public function eliminar($id){

		$eliminar="DELETE * FROM persona WHERE id =?";
		try{
			$this->conexion->prepare($eliminar)->execute(array($id));
			return true;

		}catch(Exception $e){
			echo "Error al eliminar Persona", $e->getMessage();

		}

	}
	



}



?>