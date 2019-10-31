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
		$contact = new ContactModel();
		$contact->load('id='.intval($_GET['id']));
		$this->view->assign('contact', $contact);
	}

	function delete()
	{
		$contact = new ContactModel();
		$contact->load('id='.intval($_GET['id']));
		$contact->delete();
		header('Location: index.php?action=index');
	}

	function editSubmit() 
	{
		$contact = new ContactModel();
		$contact->load('id='.intval($_GET['id']));
		$contact->name = $_POST['name'];
		$contact->last_name = $_POST['last_name'];
		$contact->home_telephone = $_POST['home_telephone'];
		$contact->home_address = $_POST['home_address'];
		$contact->work_telephone = $_POST['work_telephone'];
		$contact->work_address = $_POST['work_address'];
		$contact->email = $_POST['email'];
		$contact->save();
		header('Location: index.php?action=index');
	}
}
