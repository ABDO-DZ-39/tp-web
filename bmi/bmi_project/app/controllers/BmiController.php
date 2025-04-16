<?php
class BmiController {
    private $model;

    public function __construct($model) {
        $this->model = $model;
    }

    public function calculateBmi($name, $weight, $height) {
        $bmi = $weight / ($height * $height);

        if ($bmi < 18.5) {
            $status = "Underweight";
        } elseif ($bmi < 25) {
            $status = "Normal weight";
        } elseif ($bmi < 30) {
            $status = "Overweight";
        } else {
            $status = "Obesity";
        }

        $this->model->saveBmiRecord($name, $weight, $height, $bmi, $status);

        include '../app/views/bmi_result.php';
    }
}
?>