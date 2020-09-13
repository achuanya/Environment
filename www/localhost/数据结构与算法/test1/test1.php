<?php

/**
 * 算法与数据结构
 * Class test1
 */
class test1
{
    /**
     * 斐波纳契数
     * 实现：0 1 1 2 3 5 8 13
     * 总结：
     *
     *
     * @author achuan(achuan@achuan.io)
     * @time 2020/5/7 下午5:24
     */
    public function fibonacciNumbers(int $n)
    {
        if ($n <= 1) {
            return $n;
        }

        $one = $this->fibonacciNumbers($n - 1);
        $two = $this->fibonacciNumbers($n - 2);

        return $this->fibonacciNumbers($n - 1) + $this->fibonacciNumbers($n - 2);

    }
}

$new = new test1;
// 斐波纳契数
echo $new->fibonacciNumbers(0) . "<br>";
echo $new->fibonacciNumbers(1) . "<br>";
// (2-1=1 + 2-2=0)=1
echo $new->fibonacciNumbers(2) . "<br>";
// (3-1=2 + 3-2=1)=2
echo $new->fibonacciNumbers(3) . "<br>";
// (4-1=2 + 4-2=)=5
echo $new->fibonacciNumbers(4) . "<br>";
// (5-1=4 + 5-2=3)=7
echo $new->fibonacciNumbers(5) . "<br>";
// (6-1=5 + 6-2=4)=9
echo $new->fibonacciNumbers(6) . "<br>";
// (7-1=6 + 7-2=5)=11
// echo $new->fibonacciNumbers(7) . "<br>";
/*
0[0] 0
1[1] 0+1=1
1[2] 0+1=1
2[3] 1+2=3
3[4] 2+3=5
5[5] 4+3=8
8[6]
 */



/**
 * 算法与数据结构
 * Class test1
 */
class test2
{
    /**-
     * 斐波纳契数
     * 0 1 1 2 3 5 8 13
     * @author achuan(achuan@achuan.io)
     * @time 2020/5/7 下午5:24
     */
    public function fibonacciNumbers(int $n)
    {
        if ($n <= 1) {
            return $n;
        }
        // return $this->fibonacciNumbers($n - 1) + $this->fibonacciNumbers($n - 2);
        return $this->fibonacciNumbers($n - 1) + $this->fibonacciNumbers($n - 2);
    }
}

$new = new test2;
// 斐波纳契数
echo "<hr><hr><hr>";
echo $new->fibonacciNumbers(0) . "<br>";
echo $new->fibonacciNumbers(1) . "<br>";
echo $new->fibonacciNumbers(2) . "<br>";
echo $new->fibonacciNumbers(3) . "<br>";
echo $new->fibonacciNumbers(4) . "<br>";
echo $new->fibonacciNumbers(5) . "<br>";
echo $new->fibonacciNumbers(6) . "<br>";
// echo $new->fibonacciNumbers(7) . "<br>";