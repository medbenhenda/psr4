<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 24/03/2016
 * Time: 15:47
 */

namespace Med\Psr4;


use Doctrine\Instantiator\Exception\InvalidArgumentException;

class Calculator
{
    public function addNumbers($x, $y)
    {
        if (!is_numeric(($x)) || !is_numeric($y)) {
            throw new \InvalidArgumentException();
        }
        return $x + $y;
    }
}