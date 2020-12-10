<?php

namespace FondOfSpryker\Yves\EnhancedEcommerceExtension\Dependency;

use Symfony\Component\HttpFoundation\Request;

interface EnhancedEcommerceDataLayerExpanderPluginInterface
{
    /**
     * @param string $pageType
     * @param Request $request
     * @param array $twigVariableBag
     *
     * @return bool
     */
    public function isApplicable(string $pageType, Request $request, array $twigVariableBag = []): bool;

    /**
     * @param string $page
     * @param Request $request
     * @param array $twigVariableBag
     * @param array $dataLayer
     *
     * @return array
     */
    public function expand(string $page, Request $request, array $twigVariableBag, array $dataLayer): array;
}
