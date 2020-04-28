<?php

/**
 * 
 */
class RegisterController extends Controller
{
	private $pageTpl = '/views/register/index.tpl.php';

	public function __construct() {
		$this->model = new RegisterModel();
		$this->view = new View();
	}

	public function register()
	{
		if(isset($_POST['btn']))
		{
			$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
			$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
			$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
			$hash = password_hash($password, PASSWORD_DEFAULT);
			$this->model->registerNewUser($email, $name, $hash);
		}
	}

	public function actionRegister()
	{
		$this->register();
		$this->pageData['title'] = "Registration";
		$this->view->render($this->pageTpl, $this->pageData);
	}
}