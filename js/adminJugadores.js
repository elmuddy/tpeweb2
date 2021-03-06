function BindeosADMJugadores(){
  //Agregar posicion
  $("#"+BOTON_CREAR_POSICION).on("click",function(){
    $.post({
        url:PREFIJO_ACTION+ACTION_AGREGAR_POSICION,
        type:"POST",
        data:$("#"+REF_FORMULARIO_CARGA_POSICION).serialize(),
      }).success(function(resultData){
          alert(resultData);
          injectContentByName(ACTION_MOSTRAR_ADM,"");
        }).error(function(jqxml, status, errorThrown){
          console.log(errorThrown);
      });
      return false;
  });
  // BOTON editar posicion
  $("."+BOTON_EDITAR_POSICION).on("click",function(){
    PlayOffs.ULTIMO_ID_POSICION = $(this).attr("data-id");
    injectContentByName(ACTION_VMODIFICAR_POSICION,"&id="+PlayOffs.ULTIMO_ID_POSICION);
  });

  // BOTON para guardar la posicion editada
  $("#"+BOTON_UPDATE_POSICION).on("click",function(){
    var Info = new FormData(document.getElementById(REF_FORMULARIO_EDITA_POSICION));
    Info.append("id",PlayOffs.ULTIMO_ID_POSICION);
    $.post({
        url:PREFIJO_ACTION+ACTION_MODIFICAR_POSICION,
        data:Info,
        processData: false,  // tell jQuery not to process the data
        contentType: false   // tell jQuery not to set contentType
      }).success(function(resultData){
          alert(resultData);
          injectContentByName(ACTION_MOSTRAR_ADM,"");

        }).error(function(jqxml, status, errorThrown){
          console.log(errorThrown);
      });
        return false;
  });

  //Eliminar posicion BOTON_ELIMINAR_POSICION
  $("."+ACTION_BORRAR_POSICION).on("click",function(){
    $.post({
        url:PREFIJO_ACTION+ACTION_BORRAR_POSICION,
        type:"POST",
        data:{"rk_id_posicion":$(this).attr("data-id")},
      }).success(function(resultData){
          alert(resultData);
          injectContentByName(ACTION_MOSTRAR_ADM,"");
        }).error(function(jqxml, status, errorThrown){
          console.log(errorThrown);
      });
      return false;
  });

  //Borrar jugador
  $("."+ACTION_BORRAR_JUGADOR).on("click",function(){
    var IdElemento = $(this).attr("data-id");
    injectContentByName(ACTION_BORRAR_JUGADOR,"&id="+IdElemento);
  });

  //Mostrar Editar Jugador
  $("."+ACTION_MODIFICAR_JUGADOR).on("click",function(){
    PlayOffs.ULTIMO_ID_JUGADOR = $(this).attr("data-id");
    injectContentByName(ACTION_MODIFICAR_JUGADOR,"&id="+PlayOffs.ULTIMO_ID_JUGADOR);
  });

  //Si se presiona el boton guardar del editar formulario
  $("#"+BOTON_EDITAR_JUGADOR).on("click",function(){
    var Info = new FormData(document.getElementById(REF_FORMULARIO_EDITA_JUGADOR));
    Info.append("id_jugador",PlayOffs.ULTIMO_ID_JUGADOR);
    $.post({
        url:PREFIJO_ACTION+ACTION_GUARDAR_EDICION_JUGADOR,
        data:Info,
        processData: false,  // tell jQuery not to process the data
        contentType: false   // tell jQuery not to set contentType
      }).success(function(resultData){
          alert(resultData);
          injectContentByName(ACTION_MOSTRAR_ADM,"");

        }).error(function(jqxml, status, errorThrown){
          console.log(errorThrown);
      });
        return false;
  });

  //Si se apreta en el boton crear jugador
  $("#"+BOTON_CREAR_JUGADOR).on("click", function(){
    var Info = new FormData(document.getElementById(REF_FORMULARIO_CARGA_JUGADOR));
    //var Archivo = document.getElementById("jugador-imagen").files[0];
    //Info.append("imagen",Archivo);
    $.post({
        url:PREFIJO_ACTION+ACTION_AGREGAR_JUGADOR,
        type:"POST",
        data:Info,
        processData: false,  // tell jQuery not to process the data
        contentType: false   // tell jQuery not to set contentType
      }).success(function(resultData){
          alert(resultData);
          injectContentByName(ACTION_MOSTRAR_ADM,"");
        }).error(function(jqxml, status, errorThrown){
          console.log(errorThrown);
      });
      return false;
  });
}
