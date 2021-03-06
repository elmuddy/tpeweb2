//Constantes

const PREFIJO_ACTION ="index.php?action=";
//navegacion
const ACTION_MOSTRAR_ADM = 'adminjugadores';
const ACTION_MOSTRAR_INICIO = 'home';

const ACTION_VER_JUGADORES_EQUIPO = 'ver_jugadores_equipo';
const ACTION_ADM_JUGADOR_TEAM = 'adm_jugador_team';

const ACTION_BORRAR_JUGADOR = 'borrar_jugador';
const ACTION_AGREGAR_JUGADOR = 'agregar_jugador';
const ACTION_MODIFICAR_JUGADOR = 'modificar_jugador';
const ACTION_GUARDAR_EDICION_JUGADOR = 'guardar_mod_jugador';

const ACTION_AGREGAR_POSICION = 'agregar_posicion';
const ACTION_BORRAR_POSICION = 'borrar_posicion';
const ACTION_VMODIFICAR_POSICION = 'vista_mod_posicion';
const ACTION_MODIFICAR_POSICION = 'modificar_posicion';

const BOTON_CREAR_JUGADOR="crear-jugador";
const BOTON_EDITAR_JUGADOR = "boton-editar-jugador";

const BOTON_CREAR_POSICION = "nueva-posicion";
const BOTON_EDITAR_POSICION = 'editar_posicion';
const BOTON_UPDATE_POSICION = "update_posicion";

const REF_FORMULARIO_CARGA_JUGADOR = "form-carga-jugador";
const REF_FORMULARIO_CARGA_POSICION = "form-agregar-posicion";
const REF_FORMULARIO_EDITA_JUGADOR = "form-editar-jugador";
const REF_FORMULARIO_EDITA_POSICION = "form-edita-posicion";

//comentarios de Jugadores
const ACTION_COMENTARIOS_JUGADOR = 'comentarios_jugador';
const REF_ID_AREA_COMENTARIOS = "zona_de_comentarios";
const URL_API_COMENTS = "./api/comentario/";
const INTERVALO_DE_ACTUALIZACION = 2000;

const BTN_NUEVO_COMENT = "enviar-coment";
const BTN_ELIMINA_COMENT = "borrar_coment";

const REF_TABLA_ADM_COMENTARIOS = "tabla-Comentarios-Admin";
const REF_FORM_NUEVO_COMENT = "form-nuevo-comentario";

//mensajes
const MSG_NO_COMENTS = "No se pudieron obtener los comentarios";
const TEXT_USER_NO_CREADO = "Ocurrio un error al intentar crear el usuario";
const TEXT_ERROR_GENERICO = "Ocurrio un error";

//Usuarios
const REF_BTN_INGRESAR = "boton_ingresar";
const REF_BTN_IR_A_NUEVO_USER = "ir_registrarse";
const REF_BTN_BORRAR_USR = "borrar_user";
const REF_BTN_MODIFICA_USR = "btn_mod_user";
const REF_BTN_G_USER_MOD ="boton_Guardar_usr";
const REF_FORM_EDIT_PERMISO ="form-tipo-edit";

const REF_FORM_LOGIN = "form-sesion";
const REF_FORM_REGISTRAR_USER = "form-nuevo-user";

const ACTION_IR_A_NUEVO_USER = "ir_registrarse";
const ACTION_REGISTRAR_USER = "guardar_user";
const ACTION_LOGIN = "login_user";
const ACTION_CERRAR_SESION = "cerrar_sesion";
const ACTION_BORRAR_USER = "delete_user";
const ACTION_MODIFICAR_USER = "modificar_user";
const ACTION_IR_MOD_USER = "ir_edit_user";
const ACTION_IR_ADM_USER = "adminusuarios";
