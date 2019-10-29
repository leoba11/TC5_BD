<?php

class ContactModel extends ADODB_Active_Record {
	public $_table = 'eb50946_contacts';
	
	function __construct() {
		parent::__construct();
		$row = $GLOBALS['db']->GetRow("SELECT nextval('eb50946_contacts_id_seq'::regclass) AS id");
		$this->id = $row['id'];
	}

	function edit() {

	}

	function delete() {
		
	}
}