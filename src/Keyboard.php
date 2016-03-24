<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 24/03/2016
 * Time: 15:18
 */

namespace Med\Psr4;

/**
 * Class Keyboard
 *
 * @package Med\Psr4
 */
class Keyboard
{
    /**
     * @var
     */
    private $numericPad;

    /**
     * @param $numericPad
     */
    public function __construct($numericPad)
    {
        $this->numericPad = $numericPad;
    }

    /**
     * Set numeric pad.
     * @return mixed
     */
    public function getNumericPad()
    {
        return $this->numericPad;
    }

    /**
     * Get numeric pad.
     *
     * @param boolean $numericPad
     */
    public function setNumericPad($numericPad)
    {
        $this->numericPad = $numericPad;
    }

    /**
     * The keyboard has a numeric pad.
     *
     * @return bool
     */
    public function hasNumericPad()
    {
        if ($this->getNumericPad()) {
            return true;
        }

        return false;
    }
}