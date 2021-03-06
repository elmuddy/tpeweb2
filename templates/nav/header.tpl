<header class="container hidden-xs">
  <div class="row">
    <img id="logo" src="images/logo.jpg"></img>
  </div>
</header>

<nav id="navigationBar" class="container navbar navbar-default">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navigation" aria-expanded="false">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="navigation">
      <ul class="nav navbar-nav">
        <li class="navItem" name="home"><a href="#">Home</a></li>
        <li class="navItem" name="fixture"><a href="#">Fixture</a></li>
        <li class="navItem" name="equipos"><a href="#">Equipos</a></li>
        <li class="navItem" name="jugadores"><a href="#">Jugadores</a></li>
        <li class="navItem" name="contacto"><a href="#">Contacto</a></li>
        <li class="navItem" name="ingresar"><a href="#">Ingresar</a></li>
        {if $UserActual['Admin']}
          <li class="navItem" name="adminjugadores"><a href="#">Admin Jugadores</a></li>
          <li id="ADMComents" name="admincomentarios"><a href="#">Admin Comentarios</a></li>
          <li class="navItem" name="adminusuarios"><a href="#">Admin Usuarios</a></li>
        {/if}
        <li> <a {if $UserActual['Nombre']!='-1'} id="cerrar_sesion"{/if}>Usuario: {if $UserActual['Nombre']=='-1'} Invitado {else} {$UserActual['Nombre']} (Salir) {/if}</a></li>
        <!--<li class="navItem" name="adminequipos"><a href="#">Admin Equipos</a></li> -->
      </ul>
    </div><!-- /.navbar-collapse -->
</nav>
