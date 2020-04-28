<?php

/**
 * 
 */
class PanelController extends Controller
{
	private $pageTpl = '/views/admin/panel.tpl.php';

	public function __construct() {
		$this->model = new PanelModel();
		$this->view = new View();
	}

	public function actionPanel()
	{
		$this->pageData['title'] = "Admin-Panel";
		$this->pageData['data'] = $this->model->adminFromDB();
		$this->pageData['product'] = $this->model->allProducts();
		$this->view->render($this->pageTpl, $this->pageData);
	}
}