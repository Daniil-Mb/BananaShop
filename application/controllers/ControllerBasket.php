<?php
class ControllerBasket extends Controller
{

    function __construct()
    {
        $this->model = new ModelBasket();
        $this->view = new View();
    }

    function index()
    {
        $data = $this->model->get_Data();
        $this->view->generate('basket_view.php', 'template_view.php', $data);

    }
}
?>