<?php

class calculator
{
    protected $plus = '+';
    protected $less = '-';
    protected $multiply = '*';
    protected $except = '/';
    protected $status = array(
        '0' => 'false',
        '1' => 'true',
    );

    /**
     * @return array
     * @author achuan(achuan@achuan.io)
     * @time 2020/5/27 下午5:41
     */
    public function postAjax()
    {
        // Array to object
        $postAjax = json_decode($_POST['data'], true);

        // The data obtained
        $data = array(
            'numberOne' => $postAjax['numberOne'],
            'numberTwo' => $postAjax['numberTwo'],
            'calculationMethod' => $postAjax['calculationMethod'],
        );

        // return $data;

        // if (empty($data['numberOne']) and $data['numberTwo'] == true) {
        //     return json_encode($this->status[0]);
        // }

        // According to the calculation
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

        $result = array(
            'status' => 'true',
            'data' => $calculationResults,
        );
        echo json_encode($result);
        // var_dump(json_encode($result));die;
        // return $result;
        // echo $result;
    }

}

$new = new calculator();
$new->postAjax();
