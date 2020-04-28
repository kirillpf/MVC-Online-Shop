<?php 

/**
 * 
 */
class SubmitController extends Controller
{
	private $pageTpl = '/views/cart/submit.tpl.php';

	function __construct()
	{
		$this->model = new SubmitModel();
		$this->view = new View();
	}

	public function submit()
	{
		if(isset($_POST['btn']))
		{
			$status = 1;
			$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
			$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
			$phone = filter_var(trim($_POST['phone']), FILTER_SANITIZE_STRING);
			$address = filter_var(trim($_POST['address']), FILTER_SANITIZE_STRING);
			$this->model->order($status, $name, $email, $phone, $address);
		}
	}

	public function actionSubmit()
	{
		$this->submit();
		$this->pageData["title"] = "GetOrder";
		$this->view->render($this->pageTpl, $this->pageData);
	}
}