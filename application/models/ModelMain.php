<?php
class ModelMain extends Model
{
    public function getData()
    {
        $bananas = mysqli_query($this->connect, "SELECT * FROM `products` ORDER BY id DESC LIMIT 9");
        $bananas = mysqli_fetch_all($bananas, MYSQLI_ASSOC);
        $data['bananas'] = $bananas;
        return $data;
    }
}
?>