<?php
/**
 * Created by PhpStorm.
 * User: wenrouzei
 * Date: 2019/3/9
 * Time: 15:05
 */

class ArrayMd5HasherTest extends \PHPUnit\Framework\TestCase
{
    protected $hasher;

    public function setUp()
    {
        $this->hasher = new \Wenrouzei\Hasher\ArrayMd5Hasher();
    }

    public function testMake()
    {
        $array = [
            'app_id' => 100,
            'timestamp' => time()
        ];
        $array['key'] = rand(1, 100);
        ksort($array);
        foreach ($array as $key => $value) {
            $params[] = $key . "=" . $value;
        }
        $string = implode('&', $params ?? []);
        $this->assertEquals(md5($string), $this->hasher->make($array));
    }

    public function testCheck()
    {
        $array = [
            'app_id' => 100,
            'timestamp' => time()
        ];
        $array['key'] = rand(1, 100);
        ksort($array);
        foreach ($array as $key => $value) {
            $params[] = $key . "=" . $value;
        }
        $string = implode('&', $params ?? []);
        $this->assertTrue($this->hasher->check($array, md5($string)));
    }
}