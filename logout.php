<?php

	include_once('include.php');
	
	session_destroy();
	
	header('Location: ' . URL);
	exit;