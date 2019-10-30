<?php
$contact = new ContactModel();
$contact->load('id='.intval($_GET['id']));
$contact->delete();
header('Location: index.php?action=index');