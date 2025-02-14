<?php

require_once(__DIR__."/../core/ValidationException.php");

class JuradoProfesional{



	private $idJuradoProfesional;
	private	$dni;
	private $telefono;
	private $nombre;
	private $apellidos;
	private $login;
	private $password;



	public function __construct($idJuradoProfesional=NULL, $dni=NULL, $telefono=NULL,
                     $nombre = NULL, $apellidos = NULL, $login = NULL, $password = NULL) {
	    $this->idJuradoProfesional = $idJuradoProfesional;
	    $this->dni = $dni;
	    $this->telefono = $telefono;
	    $this->nombre = $nombre;
	    $this->apellidos = $apellidos; 
      $this->login = $login;
      $this->password = $password;   
  	}


  	public function getIdJuradoProfesional() {
    	return $this->idJuradoProfesional;
  	}
  

  	public function getDni() {
    	return $this->dni;
  	}
  

  	public function getTelefono() {
    	return $this->telefono;
  	}
  

  	public function getNombre() {
    	return $this->nombre;
  	}
  

  	public function getApellidos() {
    	return $this->apellidos;
  	}
    
    public function getLogin(){
      return $this->login;
    }

    public function getPassword(){
      return $this->password;
    }
	
    // Solo ten get
/*	public function setIdJuradoProfesional($idJuradoProfesional) {
    	$this->idJuradoProfesional = $idJuradoProfesional;
  	}
*/
  	public function setDni($dni) {
    	$this->dni = $dni;
  	}

  	public function setTelefono($telefono) {
    	$this->telefono = $telefono;
  	}

  	public function setNombre($nombre) {
    	$this->nombre = $nombre;
  	}

  	public function setApellido($apellido) {
    	$this->apellido = $apellido;
  	}
    public function setLogin($login){
      $this->login = $login;
    }
    public function setPassword($password){
      $this->password = $password;
    }


  	public function checkIsValidForCreate() {
    	$errors = array();
     	
      // ID xenerado por BBDD
      /*
      if (strlen(trim($this->idJuradoProfesional)) == 0 ) {
			$errors["idJuradoProfesional"] = "El ID es obligatorio";
	     }
       */
	    if (strlen(trim($this->dni)) == 0 ) {
			$errors["dni"] = "El DNI es obligatorio";
	    }
      if (strlen(trim($this->nombre)) == 0 ) {
      $errors["nombre"] = "El nombre es obligatorio";
      }
      if (strlen(trim($this->apellido)) == 0 ) {
      $errors["apellido"] = "El apellido es obligatorio";
      }
	    if (strlen(trim($this->login)) == 0 ) {
      $errors["login"] = "El login es obligatorio";
      }
      if (strlen(trim($this->password)) == 0 ) {
      $errors["password"] = "La contraseña es obligatoria";
      }

	    if (sizeof($errors) > 0){
			throw new ValidationException($errors, "No se ha podido realizar el alta");
	    }
  	}



}



?>