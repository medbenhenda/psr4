<?php
/**
 * Created by PhpStorm.
 * User: m.benhenda(benhenda.med@gmail.com)
 * Date: 24/03/2016
 * Time: 15:26
 */

use Med\Psr4\Keyboard;

class KeyboardTest extends PHPUnit_Framework_TestCase
{
    public function testHasNumericPad()
    {
        $keyBoard = new Keyboard(true);
        $this->assertTrue($keyBoard->hasNumericPad());
    }
}