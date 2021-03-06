<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\MediaContentApi\Api;

use Magento\MediaContentApi\Api\Data\ContentIdentityInterface;

/**
 * Get list of content identifiers for pieces of content that include the specified media asset
 * @api
 */
interface GetContentByAssetIdsInterface
{
    /**
     * Get list of content identifiers for pieces of content that include the specified media asset
     *
     * @param int[] $assetIds
     * @return ContentIdentityInterface[]
     * @throws \Magento\Framework\Exception\IntegrationException
     */
    public function execute(array $assetIds): array;
}
