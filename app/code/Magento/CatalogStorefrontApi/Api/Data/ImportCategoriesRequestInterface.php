<?php
# Generated by the Magento PHP proto generator.  DO NOT EDIT!

/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

declare(strict_types=1);

namespace Magento\CatalogStorefrontApi\Api\Data;

/**
 * Autogenerated description for ImportCategoriesRequest interface
 *
 * @SuppressWarnings(PHPMD.BooleanGetMethodName)
 */
interface ImportCategoriesRequestInterface
{
    /**
     * Autogenerated description for getCategories() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\ImportCategoryDataRequestInterface[]
     */
    public function getCategories(): array;

    /**
     * Autogenerated description for setCategories() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\ImportCategoryDataRequestInterface[] $value
     * @return void
     */
    public function setCategories(array $value): void;

    /**
     * Autogenerated description for getStore() interface method
     *
     * @return string
     */
    public function getStore(): string;

    /**
     * Autogenerated description for setStore() interface method
     *
     * @param string $value
     * @return void
     */
    public function setStore(string $value): void;

    /**
     * Autogenerated description for getParams() interface method
     *
     * @return \Magento\CatalogStorefrontApi\Api\Data\KeyValueInterface|null
     */
    public function getParams(): ?\Magento\CatalogStorefrontApi\Api\Data\KeyValueInterface;

    /**
     * Autogenerated description for setParams() interface method
     *
     * @param \Magento\CatalogStorefrontApi\Api\Data\KeyValueInterface $value
     * @return void
     */
    public function setParams(\Magento\CatalogStorefrontApi\Api\Data\KeyValueInterface $value): void;
}