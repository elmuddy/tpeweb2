<?php
require_once "BaseModel.php";

class PosicionesModel extends BaseModel {

  function GetAll(){
    $consulta = $this->db->prepare("SELECT * FROM Posiciones");
    $consulta->execute();
    return $consulta->fetchAll();
  }

  function getPosicion($id){
    $consulta = $this->db->prepare("SELECT * FROM Posiciones WHERE rk_id_posicion=:v1");
    $consulta->bindParam(':v1',$id);
    $consulta->execute();
    return $consulta->fetchAll()[0];
  }

  function agregarPosicion($posicion){
    try {
      $consulta = $this->db->prepare('INSERT INTO Posiciones(nombre_posicion) VALUES(:nombre_posicion)');
      $consulta->execute(array(":nombre_posicion"=>$posicion));
      $id_posicion = $this->db->lastInsertId();
      return true;
    } catch(PDOException $ex)
    {
      return false;
    }
  }

  function borrarPosicion($id_pos){
    try {
      //borramos todos los registros de la tabla Jugadores que contengan la posicion que se va a borrar
      $consulta = $this->db->prepare('DELETE FROM Jugadores WHERE posicion=?');
      $consulta->execute(array($id_pos));
      //borramos la posicion
      $consulta = $this->db->prepare('DELETE FROM Posiciones WHERE rk_id_posicion=?');
      $consulta->execute(array($id_pos));
      return true;
    }  catch(PDOException $ex)
    {
      return false;
    }

  }

  // VERSION CON PASO DE NOMBRE E ID VIA PARAMETRO
  function modificarPosicion($posicion_nombre,$posicion_id){
    try {
      $consulta = $this->db->prepare('UPDATE Posiciones SET nombre_posicion=:v1 WHERE rk_id_posicion=:v2');
      $consulta->bindParam(':v1',$posicion_nombre);
      $consulta->bindParam(':v2',$posicion_id);
      $consulta->execute();
      return true;
    } catch(PDOException $ex) {
      return false;
    }
  }
}
 ?>
