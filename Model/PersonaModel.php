<?php

class Persona{
    private $idPersona;
    private $nombre;
    private $email;
    private $Departamento;
    private $ciudad;

    //Metodos Set y Get

    public function __GET($att)
	{
		return $this->$att;
	}

	public function __SET($att, $v)
	{
		$this->$att=$v;
	}

}

?>