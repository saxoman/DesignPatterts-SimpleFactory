<?php
namespace Sources\Classes;
/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 11.2.19.
 * Time: 19.01
 */



class SimpleFactory
{
    public function createBicycle():Bicycle
    {
        return new Bicycle();
    }
}