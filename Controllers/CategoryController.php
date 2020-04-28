<?php

/**
 * 
 */
class CategoryController extends Controller
{
	private $pageTpl = "/views/category/index.tpl.php";
	
	function __construct()
	{
		$this->model = new CategoryModel();
		$this->view = new View();
	}

	public function actionCategory()
	{
		$this->pageData['title'] = "Category";
		$this->pageData['data'] = $this->model->allCategory();
		$this->view->render($this->pageTpl, $this->pageData);
	}
}