<?php

class variable
{
    /**
     * 创建变量及使用
     * @author achuan(achuan@achuan.io)
     * @time 2020/5/8 下午3:01
     */
    public function createVariable()
    {
        // 创建一个名为userName变量，变量类型是String字符串类型
        $userName = 'achuan';

        // 判断变量是否存在，返回类型为bool
        $result = isset($userName);
        var_dump($result);

        // 销毁$userName变量
        unset($userName);

        // 执行报错Notuce：Undefined variable
        echo $userName;
    }


    /**
     * 变量传值
     * @author achuan(achuan@achuan.io)
     * @time 2020/5/8 下午2:17
     */
    public function variablePassing()
    {
        // 值传递
        $one = 1;
        $oneCopy = $one;

        echo $oneCopy . '<br>';
        $one = 2;

        // 重新赋值$a
        echo $oneCopy . '<br>';
        echo $one . '<br>';
        // 传值之后两个值互不影响，互相独立
    }

    /**
     * 变量的引用传值
     * @author achuan(achuan@achuan.io)
     * @time 2020/5/8 下午2:42
     */
    public function variableReferenceValue()
    {
        $one = 1;

        // 引用传递
        $oneCopy = &$one;

        // 重新赋值
        $one = 2;
        echo $oneCopy . '<br>';

        $oneCopye = 3;
        echo $one . '<br>';

        // 引用传值是复制该变量关系。如果被引用变量值发生改变，那么引用变量值将随被引用变量改变
    }
}

$new = new variable();
// 创建变量
// $new->createVariable();
// 变量传值
// $new->variablePassing();
// 变量的引用
$new->variableReferenceValue();
