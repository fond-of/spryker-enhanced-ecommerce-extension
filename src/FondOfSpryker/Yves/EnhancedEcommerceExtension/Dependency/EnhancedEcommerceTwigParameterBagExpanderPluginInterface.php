<?php

namespace FondOfSpryker\Yves\EnhancedEcommerceExtension\Dependency;

interface EnhancedEcommerceTwigParameterBagExpanderPluginInterface
{
    /**
     * @param string $pageType
     * @param array $twigVariableBag
     *
     * @return bool
     */
    public function isApplicable(string $pageType, array $twigVariableBag = []): bool;

    /**
     * @param array $twigVariableBag
     *
     * @return array
     */
    public function expand($twigVariableBag): array;
}
