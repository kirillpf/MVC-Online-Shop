<?php

/**
 * 
 */
class LogoutModel extends Model
{
	public function logout()
	{
 		unset($_SESSION['user']);   
 		session_destroy();   
 		header('Location: /');     
	}

	public function logoutAdmin()
	{
		unset($_SESSION['admin']);   
 		session_destroy();   
 		header('Location: /');
	}
}