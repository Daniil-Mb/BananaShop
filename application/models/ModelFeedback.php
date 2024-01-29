<?php
class ModelFeedback extends Model
{
    private $message = [
        'name' => 'Введите корректное имя',
        'address' => 'Введите корректное адресс',
        'number' => 'Введите корректное номер',
        'email' => 'Введите корректный email',
    ];
    public function store($data)
    {
        $stmt = $this->connect->prepare("INSERT INTO feedback (id, name, address, number, email, product_id) VALUES (NULL, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssi", $data['name'], $data['address'], $data['number'], $data['email'], $data['product_id']);
        $stmt->execute();
    }

    public function validateData($data)
    {
        if (!empty($data['name']) && preg_match('/^[a-zA-Zа-яА-ЯёЁ]+\s[a-zA-Zа-яА-ЯёЁ]+\s[a-zA-Zа-яА-ЯёЁ]+$/u', $data['name'])) {
            $feedback['data']['name'] = $data['name'];
        } else {
            $feedback['errors']['name'] = $this->message['name'];
        }

        if (!empty($data['address'])){
            $feedback['data']['address'] = $data['address'];
        } else {
            $feedback['errors']['address'] = $this->message['address'];
        }

        if (!empty($data['number']) && strpos($data['number'], '8') === 0 && strlen($data['number']) === 11) {
            $feedback['data']['number'] = $data['number'];
        } else {
            $feedback['errors']['number'] = $this->message['number'];
        }

        if (!empty($data['email']) and strpos($data['email'], "@")){
            $feedback['data']['email'] = $data['email'];
        } else {
            $feedback['errors']['email'] = $this->message['email'];
        }

        $feedback['data']['product_id'] = $data['product_id'];
        return $feedback;
    }
}
?>