<?php
include_once "views/ADMUsersView.php";

include_once "models/UsuariosModel.php";

include_once "controllers/SesionController.php";

class AdminUsersController{
  private $view;
  function __construct(){
    $this->view = new ADMUsersView();
    $this->model = new UsuariosModel();
  }

  //mostramos ADM de Usuarios
  function mostrarADMUsers(){
    if (SesionController::esAdmin()){
      $this->view->mostrarADMUsers($this->model->getAll());
    } else {
      $this->zonaRestringida();
    }
  }

  function crearUser(){
    //capturamos los parametros del formulario
    if (isset($_POST["user"]) && isset($_POST["pass"])){
      $ModelUser = new UsuariosModel();
      $usuario["user"]=$_POST["user"];
      $usuario["pass"]=$_POST["pass"];
      return $ModelUser->crear($usuario);
    }
  }

  function borraUser(){
    if (SesionController::esAdmin()){
      if (isset($_POST["id"])){
        $ModelUser = new UsuariosModel();
        return $ModelUser->borrar($_POST["id"]);
      }
    } else {
      $this->zonaRestringida();
    }
  }

  function IrModificaUser(){
    if (SesionController::esAdmin()){
      if (isset($_POST["id"])){
        $ModelUser = new UsuariosModel();
        $this->view->mostrarFormEditUser($ModelUser->getData($_POST["id"]));
      }
    } else {
      $this->zonaRestringida();
    }
  }

  function modificaUser(){
    if (SesionController::esAdmin()){
      if (isset($_POST["id"]) && isset($_POST["tipo"])){
        $ModelUser = new UsuariosModel();
        echo $ModelUser->modificar($_POST["id"],$_POST["tipo"]);
      }
    } else {
      $this->zonaRestringida();
    }
  }
}

?>
