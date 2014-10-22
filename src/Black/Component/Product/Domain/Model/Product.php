<?php

namespace Black\Component\Product\Domain\Model;

use Black\DDD\DDDinPHP\Domain\Model\Entity;

/**
 * Class Product
 *
 * @author Alexandre Balmes <${COPYRIGHT_NAME}>
 * @license ${COPYRIGHT_LICENCE}
 */
class Product implements Entity
{
    /**
     * @var ProductId The product identifier, such as ISBN.
     */
    protected $productId;

    /**
     * @var string The name of the item.
     */
    protected $name;

    /**
     * @var string An image of the item.
     */
    protected $image;

    /**
     * @var string The color of the product
     */
    protected $color;

    /**
     * @var string The height of the item
     */
    protected $height;

    /**
     * @var string The width of the item
     */
    protected $width;

    /**
     * @var string The model of the product.
     */
    protected $model;

    /**
     * @var string The Manufacturer Part Number (MPN) of the product
     */
    protected $mpn;

    /**
     * @var string The release date of a product or product model.
     */
    protected $releaseDate;

    /**
     * @var string The Stock Keeping Unit (SKU),
     */
    protected $sku;

    /**
     * @var string The weight of the product
     */
    protected $weight;

    /**
     * @param ProductId $productId
     * @param $name
     * @param $image
     * @param $color
     * @param $height
     * @param $width
     * @param $model
     * @param $mpn
     * @param $releaseDate
     * @param $sku
     * @param $weight
     */
    public function __construct(
        ProductId $productId,
        $name,
        $image,
        $color,
        $height,
        $width,
        $model,
        $mpn,
        \DateTime $releaseDate,
        $sku,
        $weight
    ) {
        $this->productId   = $productId;
        $this->name        = (string) $name;
        $this->image       = (string) $image;
        $this->color       = (string) $color;
        $this->height      = (string) $height;
        $this->width       = (string) $width;
        $this->model       = (string) $model;
        $this->mpn         = (string) $mpn;
        $this->releaseDate = $releaseDate;
        $this->sku         = (string) $sku;
        $this->weight      = (string) $weight;
    }

    /**
     * @return string
     */
    public function getProductId()
    {
        return $this->productId;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     */
    public function getColor()
    {
        return $this->color;
    }

    /**
     * @return mixed
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return mixed
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return mixed
     */
    public function getModel()
    {
        return $this->model;
    }

    /**
     * @return mixed
     */
    public function getMpn()
    {
        return $this->mpn;
    }

    /**
     * @return mixed
     */
    public function getReleaseDate()
    {
        return $this->releaseDate;
    }

    /**
     * @return mixed
     */
    public function getSku()
    {
        return $this->sku;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }
}
