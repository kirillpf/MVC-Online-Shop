<?php 

/**
 * 
 */
class AddController extends Controller
{
	private $pageTpl = '/views/admin/create.tpl.php';

	public function __construct()
	{
		$this->model = new AddModel();
		$this->view = new View();
	}

	public function addlog()
	{
		if(isset($_POST['btn']))
		{
			$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
			$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
			$surname = filter_var(trim($_POST['surname']), FILTER_SANITIZE_STRING);
			$role = filter_var(trim($_POST['role']), FILTER_SANITIZE_STRING);
			$phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
			$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
			$hash = password_hash($password, PASSWORD_DEFAULT);
			$this->model->addNewAdmin($email, $name, $surname, $role, $phone, $hash);
		}
	}

	public function actionAdd()
	{
		$this->addlog();
		$this->pageData['title'] = "Add Admin";
		$this->view->render($this->pageTpl, $this->pageData);
	}
}