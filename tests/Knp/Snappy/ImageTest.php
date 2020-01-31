<?php

namespace Tests\Knp\Snappy;

use Knp\Snappy\Image;
use PHPUnit\Framework\TestCase;

class ImageTest extends TestCase
{
    public function testCreateInstance()
    {
        $testObject = new Image();
        $this->assertInstanceOf(Image::class, $testObject);
    }
}
