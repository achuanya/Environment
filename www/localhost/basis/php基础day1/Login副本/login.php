<?php

//接收数据
$username = $_POST['username'];
$password = $_POST['password'];
//定义返回结果
$result = array('success' => false, 'message' => null, 'data' => null);
//模拟登陆场景
if(empty($username) || empty($password)){
    $result['message'] = '账号和密码不能为空';
    echo json_encode($result);
    exit;
}
//这里简单模拟 - 用户名为admin，密码为123456
//实际需查询数据库，再判断其密码、用户状态和密码md5等判断操作
if($username!="admin" || $password!="123456"){
    $result['message'] = '用户名或密码错误';
    echo json_encode($result);
    exit;
}

$result['success'] = true;
$result['data'] = '登录成功';
echo json_encode($result);
exit;
