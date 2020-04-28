<?php

/**
 * 
 */
class OrderController extends Controller
{
	private $pageTpl = '/views/admin/order.tpl.php';

	function __construct()
	{
		$this->model = new OrderModel();
		$this->view = new View();
	}

	public function actionOrder()
	{
		$this->pageData['title'] = "Order";
		$this->pageData['data'] = $this->model->allOrder();
		$this->view->render($this->pageTpl, $this->pageData);
	}
}