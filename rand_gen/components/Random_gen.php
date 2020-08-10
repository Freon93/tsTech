<?php

namespace app\components;


class Random_gen
{
    public function __construct($config = [])
    {

        while (!isset($this->number)) {
            $number = rand(1, 1000000);
            if (!$this->isprime($number)) {
                $this->number = $number;
            }
        }

    }

    public function isprime($n)
    {
        if ($n == 1)
            return false;
        for ($d = 2; $d * $d <= $n; $d++) {
            if ($n % $d == 0)
                return false;
        }
        return true;
    }
}
