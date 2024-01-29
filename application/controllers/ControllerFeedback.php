<?php
class ControllerFeedback extends Controller
{
    function __construct()
    {
        $this->model = new ModelFeedback();
        $this->view = new View();
    }
	function store()
	{
        if (!empty($_POST) and $_SERVER["REQUEST_METHOD"] == "POST") {
            $feedback_data = $this->model->validateData($_POST);
            $data['errors'] = isset($feedback_data['errors'])
                ? $feedback_data['errors']
                : '';
            if (empty($data['errors'])) {
                $this->model->store($feedback_data['data']);
                $data['feedback'] = $feedback_data['data'];
            }
        } else {
            $data = [];
        }
        header('Location: /');
    }
}
?>