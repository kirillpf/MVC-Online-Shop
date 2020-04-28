<?php 

/**
 * 
 */
class AdminController extends Controller
{
	private $pageTpl = '/views/admin/index.tpl.php';

	public function __construct()
	{
		$this->model = new AdminModel();
		$this->view = new View();
	}

	public function adlog()
	{
		if(isset($_POST['btn']))
		{
			$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
			$password = filter_var(trim($_POST['password']), FILTER_SANITIZE_STRING);
			$this->model->loginNewAdmin($email, $password);
		}
	}

	public function actionAdmin()
	{
		$this->adlog();
		$this->pageData['title'] = "Admin panel";
		$this->view->render($this->pageTpl, $this->pageData);
	}
}