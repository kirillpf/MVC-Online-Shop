<?php 

/**
 * 
 */
class LogoutController extends Controller
{
	public function __construct() {
		$this->model = new LogoutModel();
		$this->view = new View();
	}

	public function actionLogout()
	{
		$this->model->logout();
	}
}