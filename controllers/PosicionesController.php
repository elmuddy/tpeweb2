<?php
include_once 'models/PosicionesModel.php';
include_once 'views/EditPosicionesView.php';

class PosicionesController extends SesionController{
  function __construct(){
    $this->MPosiciones = new PosicionesModel();
  }

  function agregarPosicion(){
    if(isset($_REQUEST['posicion'])){
        if(!(empty($_REQUEST['posicion']))){
            if($this->MPosiciones->agregarPosicion($_REQUEST['posicion'])) {
              echo "Posicion agregada satisfactoriamente";
            } else {
              echo "Ocurrio un error al intentar crear la nueva posición";
            }
        } else {
          echo "No se cargo la posicion";
        }
    }
  }

  function borrarPosicion(){
    if(isset($_REQUEST['rk_id_posicion'])){
      if($this->MPosiciones->borrarPosicion($_REQUEST['rk_id_posicion'])) {
        echo "Posicion borrada satisfactoriamente";
      } else {
        echo "Ocurrio un error al intentar borrar la posicion";
      }
    } else {
      echo "id no especificado";
    }
  }

  function mostrarModificarPosicion(){
    if (isset($_REQUEST['id'])){
      $vistaEdit = new EditPosicionesView();
      $vistaEdit->mostrar($this->MPosiciones->getPosicion($_REQUEST['id']));
    } else {
      echo "error";
    }
  }

  function modificarPosicion(){
    if (isset($_REQUEST['id'])){
     if($this->MPosiciones->modificarPosicion($_POST['posicion'],$_POST['id'])){
       echo "Posicion modificada";
     } else {
       echo "Error de base de datos";
     }
   } else {
     echo "Error parmetros";
   }
  }


}
 ?>
