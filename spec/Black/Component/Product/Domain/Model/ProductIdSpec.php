<?php

namespace spec\Black\Component\Product\Domain\Model;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;
use Black\Component\Product\Domain\Model\ProductId;

class ProductIdSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Black\Component\Product\Domain\Model\ProductId');
        $this->shouldImplement('Black\DDD\DDDinPHP\Domain\Model\ValueObject');
    }

    public function let()
    {
        $this->beConstructedWith(12345);
    }

    public function it_should_have_a_value()
    {
        $this->getValue()->shouldBeEqualTo('12345');
    }

    public function it_sould_have_a_magic_toString()
    {
        $this->__toString()->shouldBeEqualTo('12345');
    }

    public function it_should_be_equal()
    {
        $object2 = new ProductId('12345');

        $this->isEqualTo($object2)->shouldReturn(true);
    }

    public function it_should_not_be_equal()
    {
        $object2 = new ProductId('1');

        $this->isEqualTo($object2)->shouldReturn(false);
    }
}
