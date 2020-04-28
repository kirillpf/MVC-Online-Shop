<?php

/**
 * 
 */
class CartController extends Controller
{
	private $pageTpl = '/views/cart/index.tpl.php';

	public function __construct() {
		$this->model = new CartModel();
		$this->view = new View();
	}

	public function actionCart()
	{
		$this->pageData['title'] = "Cart";
		$this->view->render($this->pageTpl, $this->pageData);
	}
}