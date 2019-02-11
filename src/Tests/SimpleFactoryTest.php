<?php
namespace Sources\Tests;
/**
 * Created by PhpStorm.
 * User: sasa
 * Date: 11.2.19.
 * Time: 19.45
 */
use PHPUnit\Framework\TestCase;
use Sources\Classes\Bicycle;
use Sources\Classes\SimpleFactory;

class SimpleFactoryTest extends TestCase
{
    public function testCanCreateBicycle()
    {
        $bicycle = (new SimpleFactory())->createBicycle();
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}