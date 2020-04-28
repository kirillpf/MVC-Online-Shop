<?php

/**
 * 
 */
class LoginController extends Controller
{
	private $pageTpl = '/views/login/index.tpl.php';

	public function __construct() {
		$this->model = new LoginModel();
		$this->view = new View();
	}

	public function login()
	{
		if(isset($_POST['btn']))
		{
			$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
			$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
			$this->model->loginNewUser($email, $password);
		}
	}

	public function actionLogin()
	{
		$this->login();
		$this->pageData['title'] = "Login";
		$this->view->render($this->pageTpl, $this->pageData);
	}
}