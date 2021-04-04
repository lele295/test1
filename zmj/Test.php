<?php
/**
 * Created by PhpStorm.
 * User: zou_mj
 * Date: 2021/4/4
 * Time: 19:20
 */

namespace zmj;


class Test
{

    public function __construct()
    {
//        echo 'nice';
    }


    public function test()
    {
        echo 'hello world';
    }

    public function setName(PassParam $passParam)
    {
        $passParam->name = '名字被改成小强了';
        return $passParam;
    }
}