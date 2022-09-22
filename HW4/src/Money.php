<?php

namespace Test\HW4\Source;

class Money {
    private $amount;
    private $currency;

    public function __construct(int|float $amount, Currency $currency) {
        $this->setAmount($amount);
        $this->currency=$currency;
        $this->currency->getCurrency();
    }

    private function setAmount(int|float $amount): void
    {
        $this->amount=$amount;
    }

    public function getAmount(): int|float
    {
        return $this->amount;
    }

   /* public function getCurrency(Currency $objectMoney) {
        return $objectMoney->getCurrency($objectMoney);
    }*/

    public function equals(Money $objectMoney): bool
    {
        if ($this->currency == $objectMoney->currency && $this->amount == $objectMoney->getAmount($objectMoney->amount)) {
            return true;
        } else return false;
    }

    public function add(Money $objectMoney): int|float
    {
        if ($this->currency==$objectMoney->getCurrency($objectMoney->currency)) {
            return $sum=$this->amount + $objectMoney->getAmount($objectMoney->amount);
        } else {
            throw new InvalidArgumentException('Валюти відрізняються');
        }
    }

}

