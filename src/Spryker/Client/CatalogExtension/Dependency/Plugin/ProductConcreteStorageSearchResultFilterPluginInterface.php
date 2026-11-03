<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\CatalogExtension\Dependency\Plugin;

use Generated\Shared\Transfer\ProductConcreteCriteriaFilterTransfer;

/**
 * Filters the concrete products found by the storage-based concrete product search,
 * for the criteria that the abstract-level catalog search cannot apply per concrete product.
 */
interface ProductConcreteStorageSearchResultFilterPluginInterface
{
    /**
     * Specification:
     * - Receives the concrete products found by the storage search and the original search criteria.
     * - Returns the concrete products that match the criteria, preserving their order.
     * - Executed only for storage search results under the `ProductConcreteCatalogSearchResultFormatterPlugin` result key.
     *
     * @api
     *
     * @param array<\Generated\Shared\Transfer\ProductConcretePageSearchTransfer> $productConcretePageSearchTransfers
     *
     * @return array<\Generated\Shared\Transfer\ProductConcretePageSearchTransfer>
     */
    public function filter(
        array $productConcretePageSearchTransfers,
        ProductConcreteCriteriaFilterTransfer $productConcreteCriteriaFilterTransfer
    ): array;
}
