<?php

declare(strict_types=1);

namespace TalesFromADev\Twig\Extra\Tailwind\Bridge\Symfony\Bundle;

use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use Symfony\Component\HttpKernel\Bundle\Bundle;
use TalesFromADev\Twig\Extra\Tailwind\Bridge\Symfony\Bundle\DependencyInjection\TalesFromADevTwigExtraTailwindExtension;

final class TalesFromADevTwigExtraTailwindBundle extends Bundle
{
    public function getContainerExtension(): ?ExtensionInterface
    {
        return new TalesFromADevTwigExtraTailwindExtension();
    }
}
