<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\ReviewsStorefrontApi\Api\Data;

use Magento\Framework\ObjectManagerInterface;

/**
 * Autogenerated description for RatingMetadata class
 *
 * @SuppressWarnings(PHPMD.CouplingBetweenObjects)
 * @SuppressWarnings(PHPMD.CyclomaticComplexity)
 * @SuppressWarnings(PHPMD.UnusedPrivateField)
 * @SuppressWarnings(PHPMD.NPathComplexity)
 * @SuppressWarnings(PHPMD.ExcessiveMethodLength)
 */
final class RatingMetadataArrayMapper
{
    /**
     * @var mixed
     */
    private $data;

    /**
     * @var ObjectManagerInterface
     */
    private $objectManager;

    public function __construct(ObjectManagerInterface $objectManager)
    {
        $this->objectManager = $objectManager;
    }

    /**
    * Convert the DTO to the array with the data
    *
    * @param RatingMetadata $dto
    * @return array
    */
    public function convertToArray(RatingMetadata $dto)
    {
        $result = [];
        $result["id"] = $dto->getId();
        $result["name"] = $dto->getName();
        /** Convert complex Array field **/
        $fieldArray = [];
        foreach ($dto->getValues() as $fieldArrayDto) {
            $fieldArray[] = $this->objectManager->get(\Magento\ReviewsStorefrontApi\Api\Data\RatingValueArrayMapper::class)
                ->convertToArray($fieldArrayDto);
        }
        $result["values"] = $fieldArray;
        return $result;
    }
}
