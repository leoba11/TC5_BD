<html>
<head>
	<title>Libro de visitas, bienvenido</title>
</head>
<body>
<h1>Libro de Visitas</h1>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=liste">Ver los comentarios de los visitantes anteriores.</a></p>
<form name="visita" id="visita" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <input name="action" type="hidden" value="grabe" />
  <p>Este formulario le permite enviar comentarios sobre este sitio.</p>
  <p>Nombre:
    <input name="nombre" type="text" id="nombre" size="51" maxlength="50" />
  </p>
  <p>Correo electr&oacute;nico:
    <input name="correo" type="text" id="correo" size="51" maxlength="50" />
  </p>

  <p>Comentario:
    <textarea name="comentario" cols="50" rows="3" wrap="VIRTUAL" id="comentario"></textarea>
  </p>
  <p>
    <input name="Enviar" type="submit" id="Enviar" />
  </p>
</form>
<p><a href="<?php echo $_SERVER['PHP_SELF']; ?>?action=liste">Ver los comentarios de los visitantes anteriores.</a></p>
</body>
</html>