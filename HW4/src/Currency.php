<?php

namespace Test\HW4\Source;

class Currency {
    private $isoCode;

    public function __construct($isoCode) {
        $this->setCurrency($isoCode);
    }

    private function validate($isoCode) {
        $currency=[
            'UAH',
            'USD',
            'EUR',
            'GBP',
            'JPY',
            'CHF',
            'CNY'
        ];
        if (!in_array($isoCode, $currency)){
            throw new InvalidArgumentException('Невірно вказано формат валюти');
        }
    }

    private function setCurrency($isoCode) {
        $this->validate($isoCode);
        $this->isoCode=$isoCode;
    }

    public function getCurrency(): string
    {
        return $this->isoCode;
    }

    public function equals(Currency $objectCurrency): bool
    {
        if ($this->isoCode == $objectCurrency->getCurrency($objectCurrency->isoCode)) {
            return true;
        } else return false;
    }
}
