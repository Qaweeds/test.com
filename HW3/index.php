<?php

class ValueObject {
    private $valueRed;
    private $valueGreen;
    private $valueBlue;


    public function __construct($valueRed, $valueGreen, $valueBlue)
    {
        $this->setRed($valueRed);
        $this->setGreen($valueGreen);
        $this->setBlue($valueBlue);
    }

    private function validate($value) {
        if (!is_int($value)) {
            throw new InvalidArgumentException('Вкажіть ціле число');
        }
        if ($value<0 || $value>255) {
            throw new InvalidArgumentException('Вкажіть число в діапазоні від 0 до 255');
        }
    }

    private function setRed($valueRed) {
        $this->validate($valueRed);
        $this->valueRed=$valueRed;
    }

    private function setGreen($valueGreen) {
        $this->validate($valueGreen);
        $this->valueGreen=$valueGreen;
    }

    private function setBlue($valueBlue) {
        $this->validate($valueBlue);
        $this->valueBlue=$valueBlue;
    }

    public function getRed($valueRed)
    {
        return $this->valueRed;
    }

    public function getGreen($valueGreen)
    {
        return $this->valueGreen;
    }

    public function getBlue($valueBlue)
    {
        return $this->valueBlue;
    }

    public function equals(ValueObject $objectNumber): bool
    {
        if ($this->valueRed == $objectNumber->getRed($objectNumber->valueRed) && $this->valueGreen == $objectNumber->getGreen($objectNumber->valueGreen) && $this->valueBlue == $objectNumber->getBlue($objectNumber->valueBlue)) {
            return true;
        } else {
            return false;
        }
    }

    public static function random(): ValueObject
    {
        return new ValueObject(rand(0, 255), rand(0, 255), rand(0, 255));
    }

    public function variantInt($value) :int
    {
        if(is_float($value)) {
            return round($value);
        } else return $value;
    }

    public function mix(ValueObject $objectNumber): ValueObject {
        $averageValueRed=$this->variantInt(($this->valueRed+$objectNumber->valueRed)/2);
        $averageValueGreen=$this->variantInt(($this->valueGreen+$objectNumber->valueGreen)/2);
        $averageValueBlue=$this->variantInt(($this->valueBlue+$objectNumber->valueBlue)/2);
        return new ValueObject($averageValueRed, $averageValueGreen, $averageValueBlue);
    }
}

/*
$object1=new ValueObject(50, 85, 196);
$object2=new ValueObject(50, 85, 196);
$object3=new ValueObject(53, 254, 128);
$bool1=$object1->equals($object2);
$bool2=$object1->equals($object3);
$rand=ValueObject::random();
$mix=$object1->mix($object3);

echo '<pre>';
var_dump($object1);
var_dump($bool1);
var_dump($bool2);
var_dump($rand);
var_dump($mix);
echo '</pre>';
*/