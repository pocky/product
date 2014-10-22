<?php

namespace Black\Component\Product\Domain\Model;

use Black\DDD\DDDinPHP\Domain\Model\ValueObject;

class ProductId implements ValueObject
{
    private $productId;

    public function __construct($productId)
    {
        $this->productId = (string) $productId;
    }

    public function getValue()
    {
        return $this->productId;
    }

    public function __toString()
    {
        return sprintf('%s', $this->getValue());
    }

    public function isEqualTo(ProductId $productId)
    {
        return $this->productId === $productId->getValue();
    }
}
