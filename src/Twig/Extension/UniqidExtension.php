<?php

namespace App\Twig\Extension;

use Twig\Extension\AbstractExtension;

class UniqidExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new \Twig\TwigFunction("uniqid", function (string $prefix = '', bool $moreEntropy = false) {
                return uniqid($prefix, $moreEntropy);
            }),
        ];
    }
}
