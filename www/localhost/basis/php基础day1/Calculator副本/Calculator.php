<?php


class login
{
    protected $plus = '+';
    protected $less = '-';
    protected $multiply = '*';
    protected $except = '/';
    protected $status = array(
        '0' => 'false',
        '1' => 'true',
    );

    public function postAjax()
    {
        $data = array(
            'numberOne' => $_POST['numberOne'],
            'numberTwo' => $_POST['numberTwo'],
            'calculationMethod' => $_POST['calculationMethod'],
        );

        switch ($data['calculationMethod']) {
            // Plus
            case $this->plus;
                $calculationResults = $data['numberOne'] + $data['numberTwo'];
                break;

            // Less
            case $this->less;
                $calculationResults = $data['numberOne'] - $data['numberTwo'];
                break;

            // Mlutiply
            case $this->multiply;
                $calculationResults = $data['numberOne'] * $data['numberTwo'];
                break;

            // Except
            case $this->except;
                $calculationResults = $data['numberOne'] / $data['numberTwo'];
                break;
        }
        $result = array();
        $result ['status'] = $this->status[1];
        $result ['data'] = $calculationResults;

        echo json_encode($result);
    }
}
$new = new login();
$new->postAjax();