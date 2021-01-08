<?php

namespace FondOfSpryker\Yves\EnhancedEcommerceExtension\Dependency;

interface EnhancedEcommerceDataLayerExpanderInterface
{
    /**
     * @param string $page
     * @param array $twigVariableBag
     * @param array $dataLayer
     *
     * @return array
     */
    public function expand(string $page, array $twigVariableBag, array $dataLayer): array;
}
