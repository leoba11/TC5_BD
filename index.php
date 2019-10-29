<?php

require __DIR__ . '/vendor/autoload.php';
require __DIR__ . '/vendor/adodb/adodb-php/adodb-active-record.inc.php';

$db = NewADOConnection('postgres9://eb50946:eb50946.@localhost/ci0137');
$dictionary = NewDataDictionary($db);
$dictionary->SetSchema('eb50946');
$db->Execute('SET search_path TO eb50946');
ADOdb_Active_Record::SetDatabaseAdapter($db);
$db->debug = TRUE; // Si se cambia FALSE por TRUE se activa el despliegue de las consultas.

define('DS', DIRECTORY_SEPARATOR);
define('TEMPLATE_DIR', 'View' . DS);
define('BASE_DIR', getcwd() . DS);

// Ac� deber�a haber alg�n tipo de boostrapping o un llamado a una clase que
// se encargue de hacerlo.
//
// Ver un ejemplo en:  http://phpsnaps.com/snaps/view/bootstrap-php-code/
//
// Por supuesto, adaptado a la estructura que estamos manejando.

spl_autoload_register(
	function ($class)
	{
		preg_match('/^(?<name>\w+)(?<function>(Controller|Model)){1}$/', $class, $matches);
		switch (@$matches['function']) {
			case 'Controller':
				require_once('Controller' . DS . $class . '.php');
				break;
			case 'Model':
				require_once('Model' . DS . $class . '.php');
				break;
			default:
				require_once('Ekeke' . DS . $class . '.class.php');
		} // switch
	}
);

$contactosController = new ContactosController();

?>