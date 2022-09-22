<?php

require_once 'autoload.php';

use \Test\HW4\Source\Currency as Currency;
use \Test\HW4\Source\Money as Money;


$currency1 = new Currency('USD');
$currency2 = new Currency('JPY');
$currency3 = new Currency('USD');


$money1 = new Money(300, $currency1);
$money2 = new Money(500, $currency2);
$money3 = new Money(300, $currency2);
$money4 = new Money(300, $currency3);


$bool1=$currency1->equals($currency2);
$bool2=$currency1->equals($currency3);
var_dump($bool1);
var_dump($bool2);


$bool11=$money1->equals($money2);
$bool12=$money1->equals($money3);
$bool13=$money1->equals($money4);
var_dump($bool11);
var_dump($bool12);
var_dump($bool13);
