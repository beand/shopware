<?php

namespace Shopware\ProductDetail\Extension;

use Shopware\Context\Struct\TranslationContext;
use Shopware\Framework\Factory\FactoryExtensionInterface;
use Shopware\ProductDetail\Event\ProductDetailBasicLoadedEvent;
use Shopware\ProductDetail\Event\ProductDetailDetailLoadedEvent;
use Shopware\ProductDetail\Event\ProductDetailWrittenEvent;
use Shopware\ProductDetail\Struct\ProductDetailBasicStruct;
use Shopware\Search\QueryBuilder;
use Shopware\Search\QuerySelection;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;

abstract class ProductDetailExtension implements FactoryExtensionInterface, EventSubscriberInterface
{
    public static function getSubscribedEvents()
    {
        return [
            ProductDetailBasicLoadedEvent::NAME => 'productDetailBasicLoaded',
            ProductDetailDetailLoadedEvent::NAME => 'productDetailDetailLoaded',
            ProductDetailWrittenEvent::NAME => 'productDetailWritten',
        ];
    }

    public function joinDependencies(
        QuerySelection $selection,
        QueryBuilder $query,
        TranslationContext $context
    ): void {
    }

    public function getDetailFields(): array
    {
        return [];
    }

    public function getBasicFields(): array
    {
        return [];
    }

    public function hydrate(
        ProductDetailBasicStruct $productDetail,
        array $data,
        QuerySelection $selection,
        TranslationContext $translation
    ): void {
    }

    public function productDetailBasicLoaded(ProductDetailBasicLoadedEvent $event): void
    {
    }

    public function productDetailDetailLoaded(ProductDetailDetailLoadedEvent $event): void
    {
    }

    public function productDetailWritten(ProductDetailWrittenEvent $event): void
    {
    }
}
