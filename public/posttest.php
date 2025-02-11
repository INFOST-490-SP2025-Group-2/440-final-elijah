<?php
session_start(); // Start the session.
if (isset($_SESSION['user_id'])) {
	include ('header.php');
	echo 'You are logged in!'	;		
} else { 
	echo 'You are not logged in and cannot edit' ;
}
