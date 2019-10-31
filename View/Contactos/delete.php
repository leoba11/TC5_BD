<html>
<head>
	<title>Eliminar</title>
</head>
<body>
<h1 style="text-align:center;">¿Está seguro que desea eliminar este contacto?</h1>

<p style="text-align:center;" >
	<button onclick="window.location.href = '/~eb50946/TC5/?action=index';">Cancelar</button> 
</p>

<form name="sure" id="sure" method="post" action="/~eb50946/TC5/?id=<?php echo $contact->id?>">

  <input name="action" type="hidden" value="sure" />
  
  <p style="text-align:center;">Nombre: <u> <?php echo $contact->name?> </u> </p>
  <p style="text-align:center;">Apellido: <u><?php echo $contact->last_name?> </u></p>
  <p style="text-align:center;">Telefono de casa: <u><?php echo $contact->home_telephone?></u></p>
  <p style="text-align:center;">Direccion de casa: <u><?php echo $contact->home_address?></u></p>
  <p style="text-align:center;">Telefono de trabajo: <u><?php echo $contact->work_telephone?></u></p>
  <p style="text-align:center;">Direccion de trabajo: <u><?php echo $contact->work_address?></u></p>
  <p style="text-align:center;">Email: <u><?php echo $contact->email?></u></p>

    </br>
	<div style="text-align:center;">
		<table style="margin: 0 auto;">
			
				<input name="Enviar" type="submit" id="Enviar" value="Eliminar"/>
			
		</table>
	</div>
</form>
</body>
</html>