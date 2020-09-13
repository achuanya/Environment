<?php

/**
 * @notes:Baidu Basic
 * @author:阿川<achuan@achuan.io>
 * @time:4/14/20
 */
class BaiduPanApi
{
    /**
     * Baidu ID
     * @var array
     */
    public $cookie = [
        'BDUSS' => '',
        'STOKEN' => '',
    ];

    public function getCookie()
    {
        $cookie = $this -> cookie;
        if (empty($cookie['BDUSS']) and empty($cookie['STOKEN']) ) {
            echo 'Get cookie is null!';
            exit;
        }
        var_dump($cookie);
    }
}

$NewIndex = new BaiduPanApi();
$data = $NewIndex -> getCookie();
echo $data;