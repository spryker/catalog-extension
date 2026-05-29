<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\CatalogExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ProductConcreteCriteriaFilterTransfer;

interface ProductConcreteStorageSearchPluginInterface
{
    /**
     * Specification:
     * - Returns true if this plugin handles the given search criteria.
     *
     * @api
     */
    public function isApplicable(ProductConcreteCriteriaFilterTransfer $productConcreteCriteriaFilterTransfer): bool;

    /**
     * Specification:
     * - Performs an exact SKU lookup in storage for the given search criteria.
     * - Returns a formatter-keyed array of ProductConcretePageSearchTransfers on hit, or an empty array on miss.
     *
     * @api
     *
     * @return array<string, array<\Generated\Shared\Transfer\ProductConcretePageSearchTransfer>>
     */
    public function searchProductConcretes(ProductConcreteCriteriaFilterTransfer $productConcreteCriteriaFilterTransfer): array;

    /**
     * Specification:
     * - Receives abstract product search results and hydrates matching concrete products from storage.
     * - Returns a formatter-keyed array of ProductConcretePageSearchTransfers.
     *
     * @api
     *
     * @param array<array<mixed>> $abstractSearchResults
     *
     * @return array<string, array<\Generated\Shared\Transfer\ProductConcretePageSearchTransfer>>
     */
    public function searchProductConcretesByAbstractSearchResults(array $abstractSearchResults): array;
}
