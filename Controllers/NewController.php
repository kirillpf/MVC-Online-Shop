<?php 

/**
 * 
 */
class NewController extends Controller
{
	private $pageTpl = "/views/admin/new.tpl.php";
	
	function __construct()
	{
		$this->model = new NewModel();
		$this->view = new View();
	}

	public function category()
	{
		$title = $_POST['title'];
		$type = $_POST['type'];
		$description = $_POST['description'];

		$path = '/img/Category/' . time() . $_FILES['img']['name'];
		if (!move_uploaded_file($_FILES['img']['tmp_name'], ROOT. $path)) {
			$path = 'http://placehold.it/800x600';
		}
		$this->model->categoryToDB($title, $type, $description, $path);
	}

	public function actionNew()
	{
		$this->category();
		$this->pageData['title'] = "New";
		$this->view->render($this->pageTpl, $this->pageData);
	}
}