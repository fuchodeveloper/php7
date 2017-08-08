<?php

namespace Bookstore\Tests\Domain\Customer;

use Bookstore\Domain\Customer\Basic;
use Bookstore\Domain\Customer\CustomerFactory;
use PHPUnit\Framework\TestCase;

class CustomerFactoryTest extends TestCase
{
    public function testFactoryBasic()
    {
        $customer = CustomerFactory::factory('basic', 1, 'han', 'solo', 'han@solo.com');

        $this->assertInstanceOf(Basic::class, $customer, 'basic should be a Customer\Basic object');

        $expectedCustomer = new Basic(1, 'han', 'solo', 'han@solo.com');
        $this->assertEquals($customer, $expectedCustomer, 'Customer object is not as expected');
    }
}