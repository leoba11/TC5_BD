<html>
<head>
	<title>Eliminar</title>
</head>
<body>
<h1 style="text-align:center;">¿Está seguro que desea eliminar este contacto?</h1>

<p style="text-align:center;" >
	<button onclick="window.location.href = '/~eb70442/TC5/?action=index';">Cancelar</button> 
</p>

<form name="sure" id="sure" method="post" action="/~eb70442/TC5/?id=<?php echo $contact->id?>">

  <input name="action" type="hidden" value="sure" />
  
  <p style="text-align:center;">Nombre: <u> <?php echo $contact->nombre?> </u> </p>
  <p style="text-align:center;">Apellido: <u><?php echo $contact->apellido?> </u></p>
  <p style="text-align:center;">Telefono de casa: <u><?php echo $contact->telefono_casa?></u></p>
  <p style="text-align:center;">Direccion de casa: <u><?php echo $contact->direccion_casa?></u></p>
  <p style="text-align:center;">Telefono de trabajo: <u><?php echo $contact->telefono_trabajo?></u></p>
  <p style="text-align:center;">Direccion de trabajo: <u><?php echo $contact->direccion_trabajo?></u></p>
  <p style="text-align:center;">Email: <u><?php echo $contact->correo?></u></p>

    </br>
	<div style="text-align:center;">
		<table style="margin: 0 auto;">
			
				<input name="Enviar" type="submit" id="Enviar" value="Eliminar"/>
			
		</table>
	</div>
</form>
</body>
</html>