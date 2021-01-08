<?php

namespace FondOfSpryker\Yves\EnhancedEcommerceExtension\Dependency;

use Twig\Environment;

interface EnhancedEcommerceRendererInterface
{
    /**
     * @param \Twig\Environment $twig
     * @param string $page
     * @param array $twigVariableBag
     *
     * @return string
     */
    public function expand(Environment $twig, string $page, array $twigVariableBag): string;

    /**
     * @return string
     */
    public function getTemplate(): string;
}
