<?php

/**
 * Copyright © OXID eSales AG. All rights reserved.
 * See LICENSE file for license details.
 */

declare(strict_types=1);

namespace OxidEsales\EshopCommunity\Internal\Transition\ShopEvents;

use OxidEsales\Eshop\Application\Model\Basket;
use OxidEsales\Eshop\Core\Session;
use Symfony\Component\EventDispatcher\Event;

/**
 * @stable
 * @see OxidEsales/EshopCommunity/Internal/README.md
 */
class AfterSessionBasketLoadEvent extends Event
{
    public const NAME = self::class;

    /** @var Session */
    private $session;
    /** @var Basket */
    private $basket;


    public function __construct(Session $session, Basket $basket)
    {
        $this->basket = $basket;
        $this->session = $session;
    }

    /** @return Session */
    public function getSession(): Session
    {
        return $this->session;
    }

    /** @return Basket */
    public function getBasket(): Basket
    {
        return $this->basket;
    }
}
