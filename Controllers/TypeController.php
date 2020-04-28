<?php 

/**
 * 
 */
class TypeController extends Controller
{
	private $pageTpl = '/views/category/type.tpl.php';

	public function __construct()
	{
		$this->model = new TypeModel();
		$this->view = new View();
	}

	public function actionType($type)
	{
		$this->type = $type;
		$this->pageData['title'] = "Product";
		$this->pageData['data'] = $this->model->fromToDb($this->type);
		$this->view->render($this->pageTpl, $this->pageData);
	}
}