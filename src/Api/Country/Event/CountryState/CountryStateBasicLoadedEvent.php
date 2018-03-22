<?php declare(strict_types=1);

namespace Shopware\Api\Country\Event\CountryState;

use Shopware\Api\Country\Collection\CountryStateBasicCollection;
use Shopware\Context\Struct\ShopContext;
use Shopware\Framework\Event\NestedEvent;

class CountryStateBasicLoadedEvent extends NestedEvent
{
    public const NAME = 'country_state.basic.loaded';

    /**
     * @var ShopContext
     */
    protected $context;

    /**
     * @var CountryStateBasicCollection
     */
    protected $countryStates;

    public function __construct(CountryStateBasicCollection $countryStates, ShopContext $context)
    {
        $this->context = $context;
        $this->countryStates = $countryStates;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): ShopContext
    {
        return $this->context;
    }

    public function getCountryStates(): CountryStateBasicCollection
    {
        return $this->countryStates;
    }
}