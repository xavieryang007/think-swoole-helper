<?php
namespace app\lib;

class Timer extends \think\swoole\template\Timer
{
    public function initialize($args)
    {
        var_dump('initialize');
    }

    public function run()
    {
        var_dump('hello timer');
        var_dump(time());
    }
}