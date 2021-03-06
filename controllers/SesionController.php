<?php
// de este controlador tienen que heredar todos los que usen sesiones

include_once dirname(__DIR__).'/models/UsuariosModel.php';

include_once dirname(__DIR__).'/views/LoginView.php';
include_once dirname(__DIR__).'/views/ErrorsView.php';

  class SesionController{
    private $VistaLogin;
    private $ModelUser;

    function  __construct(){
      session_start();
      $this->VistaLogin = new LoginView();
    }

    // comprobemos todos los datos por si las moscas
    function mostrarLogin(){
      $this->VistaLogin->mostrar();
    }
    // mostramos un formulario para registrase un nuevo usuario (publico)
    function mostrarRegistrarse(){
      $this->VistaLogin->mostrarRegistrarse();
    }

    function autenticar(){
      //capturamos los parametros del formulario
      if (isset($_POST["user"]) && isset($_POST["pass"])){
        $ModelUser = new UsuariosModel();
        $usuario["user"]=$_POST["user"];
        $usuario["pass"]=$_POST["pass"];
        echo $ModelUser->login($usuario);
      }
    }

    function esAdmin(){
      $User= SesionController::usuarioActivo();
      if ($User != "-1"){
        $ModelUser = new UsuariosModel();
        return $ModelUser->getTipo($User)==ConfigApp::$USER_ADMIN || $ModelUser->getTipo($User)==ConfigApp::$USER_DUENIO;
      } else {
        return false;
      }
    }

    function esDuenio(){
      $User= SesionController::usuarioActivo();
      if ($User != "-1"){
        $ModelUser = new UsuariosModel();
        return $ModelUser->getTipo($User)==ConfigApp::$USER_DUENIO;
      } else {
        return false;
      }
    }

    function esUser(){
      $User= SesionController::usuarioActivo();
      if ($User != "-1"){
        return true;
      } else {
        return false;
      }
    }

    function desAutenticacion(){
      $ModelUser = new UsuariosModel();
      $ModelUser->desAutenticar();
      echo "chauu!";
    }

    function usuarioActivo(){
      if (isset($_SESSION["nombre"])){
        return $_SESSION["nombre"];
      } else {
        return "-1";
      }
    }

    //esta funcioin sirve para "mostrar" un tpl con el cartel zona restringida, el tpl esta en nav/AccesoNoAutorizado.tpl
    function zonaRestringida(){
      $this->VistaError = new ErrorsView();
      $this->VistaError->MsgzonaRestringida();
    }

  }
?>
