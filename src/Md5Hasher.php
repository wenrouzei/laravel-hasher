<?php
/**
 * Created by PhpStorm.
 * User: wenrouzei
 * Date: 2019/3/7
 * Time: 23:14
 */

namespace Wenrouzei\Hasher;


class Md5Hasher implements HasherInterface
{
    /**
     * @param string $value
     * @param array $options
     * @return string
     */
    public function make($value, array $options = [])
    {
        $salt = $options['salt'] ?? '';
        return hash('md5', $value . $salt);
    }

    /**
     * @param string $value
     * @param $hashedValue
     * @param array $options
     * @return bool
     */
    public function check($value, $hashedValue, array $options = [])
    {
        $salt = $options['salt'] ?? '';
        return hash('md5', $value . $salt) == $hashedValue;
    }
}