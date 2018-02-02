<?php
/**
 * Created by PhpStorm.
 * User: pcw1
 * Date: 28/02/2017
 * Time: 09:41
 */

namespace Door\StatePattern;

use Door\Door;


class AjarState implements IDoorState {

    private $door;

    public function __construct(Door $door)
    {

    }

    public function lock()
    {

    }

    public function unlock()
    {

    }

    public function open()
    {

    }

    public function open_wide()
    {

    }

    public function shut()
    {

    }
}