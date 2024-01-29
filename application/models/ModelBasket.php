<?php
class ModelBasket extends Model
{
    public function get_Data()
    {
        $feedback = mysqli_query($this->connect, "SELECT * FROM `feedback`");
        $feedback = mysqli_fetch_all($feedback);
        $data['feedback'] = $feedback;
        return $data;
    }
}
?>