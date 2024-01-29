<?php
class ControllerMain extends Controller
{
    function __construct()
    {
        $this->model = new ModelMain();
        $this->view = new View();
    }
	function index()
	{
        $data = $this->model->getData();
		$this->view->generate('main_view.php', 'template_view.php', $data);
	}
}
?>