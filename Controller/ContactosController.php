<?php

/*
 * Controlador de visitas
 *
 */
class ContactosController extends Controller {
	function index()
	{
		$contacts = $GLOBALS['db']->GetActiveRecords('eb50946_contacts');
		$this->view->assign('contacts', $contacts);
	}

	function edit()
	{
	}

	function delete()
	{
		$contact = new ContactModel();
		$contact->load('id='.intval($_GET['id']));
		$contact->delete();
		header('Location: index.php?action=index');
	}
}
