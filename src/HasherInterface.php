<?php
/**
 * Created by PhpStorm.
 * User: wenrouzei
 * Date: 2019/3/7
 * Time: 23:10
 */

namespace Wenrouzei\Hasher;


interface HasherInterface
{
    public function make();

    public function check();
}