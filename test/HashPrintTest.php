<?php

declare(strict_types=1);

namespace Skywalker\QrCodeTest;

use Skywalker\QrCode\Renderer\Color\Rgb;
use Skywalker\QrCode\Renderer\RendererStyle\Gradient;
use Skywalker\QrCode\Renderer\RendererStyle\GradientType;
use PHPUnit\Framework\TestCase;

class HashPrintTest extends TestCase
{
    public function testPrintHashes()
    {
        $types = ['HORIZONTAL', 'VERTICAL'];
        foreach ($types as $type) {
            $gradient = new Gradient(
                new Rgb(0, 0, 0),
                new Rgb(255, 0, 0),
                GradientType::$type()
            );

            $toBeHashed = serialize([$gradient->getStartColor(), $gradient->getEndColor(), $gradient->getType()]);
            echo "\nHASH FOR $type: " . hash('md5', $toBeHashed) . "\n";
        }
        $this->assertTrue(true);
    }
}
