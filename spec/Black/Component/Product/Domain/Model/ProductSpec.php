<?php

namespace spec\Black\Component\Product\Domain\Model;

use Black\Component\Product\Domain\Model\ProductId;
use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class ProductSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\Product\Domain\Model\Product');
        $this->shouldImplement('Black\DDD\DDDinPHP\Domain\Model\Entity');
    }

    function let()
    {
        $productId = new ProductId(12345);
        $releaseDate = new \DateTime('2014-10-22');

        $this->beConstructedWith(
            $productId,
            'name',
            'image',
            'color',
            'height',
            'width',
            'model',
            'mpn',
            $releaseDate,
            'sku',
            'weight'
        );
    }

    function it_should_have_a_productId()
    {
        $this->getProductId()->shouldImplement('Black\Component\Product\Domain\Model\ProductId');
        $this->getProductId()->getValue()->shouldReturn('12345');
    }

    function it_should_have_a_name()
    {
        $this->getName()->shouldBeString();
        $this->getName()->shouldReturn("name");
    }

    function it_should_have_an_image()
    {
        $this->getImage()->shouldBeString();
        $this->getImage()->shouldReturn("image");
    }

    function it_should_have_a_color()
    {
        $this->getColor()->shouldBeString();
        $this->getColor()->shouldReturn("color");
    }

    function it_should_have_an_height()
    {
        $this->getHeight()->shouldBeString();
        $this->getHeight()->shouldReturn("height");
    }

    function it_should_have_a_width()
    {
        $this->getWidth()->shouldBeString();
        $this->getWidth()->shouldReturn("width");
    }

    function it_should_have_a_model()
    {
        $this->getModel()->shouldBeString();
        $this->getModel()->shouldReturn("model");
    }

    function it_should_have_an_mpn()
    {
        $this->getMpn()->shouldBeString();
        $this->getMpn()->shouldReturn("mpn");
    }

    function it_should_have_a_release_date()
    {
        $this->getReleaseDate()->shouldImplement('\DateTime');
        $this->getReleaseDate()->format("Y-m-d")->shouldReturn("2014-10-22");
    }

    function it_should_have_an_sku()
    {
        $this->getSku()->shouldBeString();
        $this->getSku()->shouldReturn("sku");
    }

    function it_should_have_a_weight()
    {
        $this->getWeight()->shouldBeString();
        $this->getWeight()->shouldReturn("weight");
    }
}
