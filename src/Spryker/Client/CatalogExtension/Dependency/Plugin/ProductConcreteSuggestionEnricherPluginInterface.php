<?php

/**
 * Copyright © 2016-present Spryker Systems GmbH. All rights reserved.
 * Use of this software requires acceptance of the Evaluation License Agreement. See LICENSE file.
 */

namespace Spryker\Client\CatalogExtension\Dependency\Plugin;

interface ProductConcreteSuggestionEnricherPluginInterface
{
    /**
     * Specification:
     * - When the completion key is already populated, returns the result unchanged.
     * - Extracts abstract product IDs from suggestion results and loads concrete product IDs via storage.
     * - Filters concrete SKUs containing the search string and populates the completion key.
     * - Used when concrete products are not indexed in the search engine (storage mode enabled).
     *
     * @api
     *
     * @param array<string, mixed> $suggestSearchResult
     * @param string $searchString
     *
     * @return array<string, mixed>
     */
    public function enrichSuggestSearchResultWithCompletion(array $suggestSearchResult, string $searchString): array;
}
