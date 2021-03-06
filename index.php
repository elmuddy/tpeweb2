<?php

include_once 'config/ConfigApp.php';

include_once 'controllers/IndexController.php';
include_once 'controllers/HomeController.php';
include_once 'controllers/FixtureController.php';
include_once 'controllers/EquiposController.php';
include_once 'controllers/ContactoController.php';
include_once 'controllers/AdminJugadoresController.php';
include_once 'controllers/JugadoresController.php';
include_once 'controllers/AdminEquiposController.php';
include_once 'controllers/PosicionesController.php';
include_once 'controllers/ComentariosController.php';
include_once 'controllers/SesionController.php';
include_once 'controllers/AdminComentariosController.php';
include_once 'controllers/AdminUsersController.php';

$indexController = new indexController();
$Sesion_Controller = new SesionController();

if(!array_key_exists(ConfigApp::$ACTION, $_REQUEST))
{
  $indexController->mostrarIndex();
  die();
}
else{
  switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ACTION_MOSTRAR_HOME:
      $Controller = new HomeController();
      $Controller->MostrarHome();
    break;
    case ConfigApp::$ACTION_MOSTRAR_FIXTURE:
      $Controller = new FixtureController();
      $Controller->MostrarFixture();
    break;
    case ConfigApp::$ACTION_MOSTRAR_EQUIPOS:
      $Controller = new EquiposController();
      $Controller->MostrarEquipos();
    break;
    case ConfigApp::$ACTION_MOSTRAR_CONTACTO:
      $Controller = new ContactoController();
      $Controller->MostrarContacto();
    break;

    case ConfigApp::$ACTION_MOSTRAR_ADM:
      $Controller = new AdminJugadoresController();
      $Controller-> MostrarAdminJugadores();
    break;

    case ConfigApp::$ACTION_MOSTRAR_ADM_TEAM:
      $Controller = new AdminEquiposController();
      $Controller-> mostrar();
    break;
  //---------------------------------------------------------------------------------------------
    // Acciones respecto a los Jugadores

    case ConfigApp::$ACTION_MOSTRAR_JUGADORES_GRAL:
      $Controller = new JugadoresController();
      $Controller->MostrarJugadoresGral();
      break;

    case ConfigApp::$ACTION_AGREGAR_JUGADOR:
      $Controller = new AdminJugadoresController();
      $Controller->AgregarJugador();
      break;

    case ConfigApp::$ACTION_BORRAR_JUGADOR:
      $Controller = new AdminJugadoresController();
      $Controller->EliminarJugador();
      break;
    case ConfigApp::$ACTION_MODIFICAR_JUGADOR:
        $Controller = new AdminJugadoresController();
        $Controller->MostrarEditarJugador();
        break;
    case ConfigApp::$ACTION_GUARDAR_EDICION_JUGADOR:
        $Controller = new AdminJugadoresController();
        $Controller->ModificarJugador();
        break;
      //muestra la misma vista que el admin de jugadores pero filtrada por equipo
      case ConfigApp::$ACTION_ADM_JUGADOR_TEAM:
        $Controller = new AdminJugadoresController();
        $Controller-> MostrarAdmJugadorTeam();
        break;
  //---------------------------------------------------------------------------------------------
  // Acciones respecto a los Imagenes

  case ConfigApp::$ACTION_AGREGAR_IMAGEN:
      $Controller = new ImagenesController();
      $Controller->AgregarImagen();
      break;
    //muestra la misma vista que el admin de jugadores pero filtrada por equipo
    case ConfigApp::$ACTION_BORRAR_IMAGEN:
      $Controller = new ImagenesController();
      $Controller-> EliminarImagen();
      break;
  //-------------------------------------------------------------------------------------------
  //acciones respecto a Equipos

  //-------------------------------------------------------------------------------------------
  //acciones respecto a Posiciones

  case ConfigApp::$ACTION_AGREGAR_POSICION:
    $Controller = new PosicionesController();
    $Controller->AgregarPosicion();
    break;

  case ConfigApp::$ACTION_BORRAR_POSICION:
    $Controller = new PosicionesController();
    $Controller->borrarPosicion();
    break;

  case ConfigApp::$ACTION_VMODIFICAR_POSICION:
    $Controller = new PosicionesController();
    $Controller->mostrarModificarPosicion();
    break;
  case ConfigApp::$ACTION_MODIFICAR_POSICION:
    $Controller = new PosicionesController();
    $Controller->ModificarPosicion();
    break;
//--------------------------------------------------------------------------------------------
// con respecto a los comentarios de los jugadores
  case ConfigApp::$ACTION_COMENTARIOS_JUGADOR:
      $Controller = new ComentariosController();
      $Controller->MostrarPaginaComentarios();
      break;

  case ConfigApp::$ACTION_IR_ADM_COMENTARIOS:
      $Controller = new AdminComentariosController();
      $Controller->MostrarAdminComentarios();
      break;

//---------------------------------------------------------------------------------------------
// Sesiones de usuario
  case ConfigApp::$ACTION_IR_A_LOGIN:
      $Sesion_Controller->mostrarLogin();
      break;

  case ConfigApp::$ACTION_IR_A_REGISTRO:
      $Sesion_Controller->mostrarRegistrarse();
      break;

  case ConfigApp::$ACTION_REGISTRAR_USER:
      $Controller = new AdminUsersController();
      $Controller->crearUser();
      break;

  case ConfigApp::$ACTION_CERRAR_SESION:
      $Sesion_Controller->desAutenticacion();
      break;

  case ConfigApp::$ACTION_LOGIN:
      $Sesion_Controller->autenticar();
      break;

 case ConfigApp::$ACTION_IR_ADM_USER:
      $Controller = new AdminUsersController();
      $Controller->mostrarADMUsers();
      break;

  case ConfigApp::$ACTION_BORRAR_USER:
      $Controller = new AdminUsersController();
      $Controller->borraUser();
      break;

   case ConfigApp::$ACTION_MODIFICAR_USER:
      $Controller = new AdminUsersController();
      $Controller->modificaUser();
      break;

    case ConfigApp::$ACTION_IR_MOD_USER:
      $Controller = new AdminUsersController();
      $Controller->IrModificaUser();
      break;
//---------------------------------------------------------------------------------------------
// Ver jugadores de un Equipo en especifico
  case ConfigApp::$ACTION_VER_JUGADORES_EQUIPO:
      $Controller = new JugadoresController();
      $Controller->ListarJugadoresTeam();
      break;

// Ver todos los jugadores
  case ConfigApp::$ACTION_VER_JUGADORES:
      $Controller = new EquiposController();
      $Controller->ListarJugadores();
      break;

// Ver todas las posiciones existentes
  case ConfigApp::$ACTION_VER_POSICIONES:
      $Controller = new AdminJugadoresController();
      $Controller->ListarPosiciones();
      break;

      default:
      echo 'Pagina no encontrada';
      break;

    }
}

?>
