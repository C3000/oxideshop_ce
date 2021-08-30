<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\EshopCommunity\Internal\Transition\ShopEvents;

use OxidEsales\Eshop\Application\Model\Basket;
use OxidEsales\Eshop\Application\Model\BasketItem;
use Symfony\Component\EventDispatcher\Event;

/**
 * @stable
 * @see OxidEsales/EshopCommunity/Internal/README.md
 */
class AfterItemAddToBasketEvent extends Event
{
    public const NAME = self::class;

    /** @var Basket */
    private $basket;
    /** @var BasketItem */
    private $basketItem;

    public function __construct(Basket $basket, BasketItem $basketItem)
    {
        $this->basket = $basket;
        $this->basketItem = $basketItem;
    }

    /** @return Basket */
    public function getBasket(): Basket
    {
        return $this->basket;
    }

    /** @return BasketItem */
    public function getBasketItem(): BasketItem
    {
        return $this->basketItem;
    }
}
