<?php
/**
 * Created by PhpStorm.
 * User: wenrouzei
 * Date: 2019/3/9
 * Time: 14:57
 */

namespace Wenrouzei\Hasher;


class ArrayMd5Hasher implements HasherInterface
{
    /**
     * @param $array
     * @param array $options
     * @return string
     */
    public function make($array, array $options = [])
    {
        $salt = $options['salt'] ?? '';
        ksort($array);
        foreach ($array as $key => $value) {
            $params[] = $key . "=" . $value;
        }
        $string = implode('&', $params ?? []);
        return hash('md5', $string . $salt);
    }

    /**
     * @param $array
     * @param $hashedValue
     * @param array $options
     * @return bool
     */
    public function check($array, $hashedValue, array $options = [])
    {
        $salt = $options['salt'] ?? '';
        ksort($array);
        foreach ($array as $key => $value) {
            $params[] = $key . "=" . $value;
        }
        $string = implode('&', $params ?? []);
        return hash('md5', $string . $salt) == $hashedValue;
    }
}