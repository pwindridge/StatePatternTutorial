<?php
/**
 * Created by PhpStorm.
 * User: pcw1
 * Date: 28/02/2017
 * Time: 08:23
 */

namespace Door\StatePattern;


interface IDoorState
{
    function lock();

    function unlock();

    function open();

    function open_wide();

   function shut();
}