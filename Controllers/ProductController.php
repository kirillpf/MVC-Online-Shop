<?php 

/**
 * 
 */
class ProductController extends Controller
{
	private $pageTpl = '/views/product/index.tpl.php';

	public function __construct()
	{
		$this->model = new ProductModel();
		$this->view = new View();
	}

	public function add()
	{
		if(isset($_POST['btn']))
		{
			$title = filter_var(trim($_POST['title']), FILTER_SANITIZE_STRING);
			$type = filter_var(trim($_POST['type']), FILTER_SANITIZE_STRING);
			$producer = filter_var(trim($_POST['producer']), FILTER_SANITIZE_STRING);
			$description = filter_var(trim($_POST['description']), FILTER_SANITIZE_STRING);
			$model = filter_var(trim($_POST['model']), FILTER_SANITIZE_STRING);
			$country = filter_var(trim($_POST['country']), FILTER_SANITIZE_STRING);
			$data = filter_var(trim($_POST['data']), FILTER_SANITIZE_STRING);
			$price = filter_var(trim($_POST['price']), FILTER_SANITIZE_STRING);

			$path = '/img/Product/' . time() . $_FILES['img']['name'];
			if (!move_uploaded_file($_FILES['img']['tmp_name'], ROOT. $path)) {
				$path = 'http://placehold.it/800x600';
		    }

			$this->model->addToDB($title, $type, $producer, $description, $model, $country, $data, $price, $path);
		}
	}

	public function actionProduct()
	{
		$this->add();
		$this->pageData['title'] = "Add Product";
		$this->view->render($this->pageTpl, $this->pageData);
	}
}