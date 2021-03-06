<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>NBA PlayOffs</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Estilos propios -->
    <link href="css/estilos.css" rel="stylesheet">
  </head>

  <body>
    {include file='nav/header.tpl' links=$UserActual}

    <!-- Seccion principal donde se injecta contenido -->
    <section id="mainContent" class="container">
    </section>

    {include file='nav/footer.tpl'}

    <!-- jQuery -->
    <script src="js/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="js/bootstrap.min.js"></script>
    <!-- JS propio -->
    <script src="js/constantes.js"></script>
    <script src="js/usuarios.js"></script>
    <script src="js/adminJugadores.js"></script>
    <script src="js/comentarios.js"></script>
    <script src="js/firstLoad.js"></script>
    <script src="js/partialRender.js"></script>

  </body>
</html>
