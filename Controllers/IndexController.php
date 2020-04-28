<?php

/**
 * 
 */
class IndexController extends Controller
{
	private $pageTpl = '/views/site/index.tpl.php';

	public function __construct() {
		$this->model = new IndexModel();
		$this->view = new View();
	}

	public function header()
	{
		if(isset($_POST['btn']))
		{
			$this->model->page();
		}
	}

	public function actionIndex()
	{
		$this->header();
		$this->pageData['title'] = "Home";
		$this->pageData['data'] = $this->model->fromToDb();
		$this->view->render($this->pageTpl, $this->pageData);
	}
}