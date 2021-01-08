<?php

namespace FondOfSpryker\Yves\EnhancedEcommerceExtension\Dependency;

use Twig\Environment;

interface EnhancedEcommerceRenderePluginInterface
{
    /**
     * @param \Twig\Environment $twig
     * @param string $page
     * @param array $twigVariableBag
     *
     * @return string
     */
    public function render(Environment $twig, string $page, array $twigVariableBag): string;
}
