<table summary="Tabla de direcciones personales para contactos." border="1">
  <caption align="bottom">Direcciones Personales</caption>
  <tbody>
    <tr>
      <th scope="col">Nombre</th>
      <th scope="col">Apellidos</th>
      <th scope="col">Teléfono de la Casa</th>
      <th scope="col">Dirección de la Casa</th>
      <th scope="col">Teléfono del Trabajo</th>
      <th scope="col">Dirección del Trabajo</th>
      <th scope="col">Correo Electrónico</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
    </tr>

<?php
$contacts = $GLOBALS['db']->GetActiveRecords('eb50946_contacts');
foreach ($contacts as $contact):

?>

    <tr>
      <td><?php echo $contact->name; ?></td>
      <td><?php echo $contact->last_name; ?></td>
      <td>234-7693</td>
      <td>Casa 41, Calle de La Tristeza, Liliput</td>
      <td>789-4651</td>
      <td>Cueva de los 7 enanitos</td>
      <td><a href="mailto:<?php echo $contact->email;?>"> <?php echo $contact->email;?> </a></td>
      <td><a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=1&amp;action=edit">Editar</a></td>
      <td><a href="<?php echo $_SERVER['PHP_SELF']; ?>?id=1&amp;action=delete">Borrar</a></td>
    </tr>

<?php
endforeach;
?>

</tbody>
</table>