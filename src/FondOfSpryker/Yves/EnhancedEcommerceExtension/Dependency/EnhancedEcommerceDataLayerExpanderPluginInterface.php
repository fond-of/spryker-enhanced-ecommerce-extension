<?php

namespace FondOfSpryker\Yves\EnhancedEcommerceExtension\Dependency;

use Twig\Environment;

interface EnhancedEcommerceDataLayerExpanderPluginInterface
{
    /**
     * @param string $pageType
     * @param array $twigVariableBag
     *
     * @return bool
     */
    public function isApplicable(string $pageType, array $twigVariableBag = []): bool;

    /**
     * @param Environment $twig
     * @param string $page
     * @param array $twigVariableBag
     *
     * @return string
     */
    public function expand(Environment $twig, string $page, array $twigVariableBag): string;
}
