<?php
require __DIR__ . '/vendor/autoload.php';

use Skywalker\QrCode\Renderer\Color\Rgb;
use Skywalker\QrCode\Renderer\RendererStyle\Gradient;
use Skywalker\QrCode\Renderer\RendererStyle\GradientType;

$types = ['HORIZONTAL', 'VERTICAL'];
foreach ($types as $type) {
    $gradient = new Gradient(
        new Rgb(0, 0, 0),
        new Rgb(255, 0, 0),
        GradientType::$type()
    );

    $toBeHashed = serialize([$gradient->getStartColor(), $gradient->getEndColor(), $gradient->getType()]);
    echo "Hash for $type: " . hash('md5', $toBeHashed) . "\n";
}
