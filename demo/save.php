<?php

session_start();

$form_data = isset($_POST['formData']) ? $_POST['formData'] : FALSE;

if( !$form_data ) {
	throw new Exception("Error Processing Request", 1);
}

$_SESSION['form_data'] = $form_data;
