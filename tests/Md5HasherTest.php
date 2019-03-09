<?php
/**
 * Created by PhpStorm.
 * User: wenrouzei
 * Date: 2019/3/9
 * Time: 14:25
 */

class Md5HasherTest extends \PHPUnit\Framework\TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new \Wenrouzei\Hasher\Md5Hasher();
    }

    public function testMd5HasherMake()
    {
        $this->assertEquals(md5('password'), $this->hasher->make('password'));
    }

    public function testMd5HasherCheck()
    {
        $this->assertTrue($this->hasher->check('password', md5('password')));
    }
}