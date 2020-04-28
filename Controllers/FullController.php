<?php 

/**
 * 
 */
class FullController extends Controller
{
	private $pageTpl = '/views/product/full.tpl.php';

	public function __construct()
	{
		$this->model = new FullModel();
		$this->view = new View();
	}

	public function actionFull($id)
	{
		$this->id = $id;
		$this->pageData['title'] = "Product";
		$this->pageData['data'] = $this->model->fromToDb($this->id);
		$this->view->render($this->pageTpl, $this->pageData);
	}
}