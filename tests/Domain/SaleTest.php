<?php

namespace Bookstore\Tests\Domain;

use Bookstore\Domain\Sale;
use PHPUnit\Framework\TestCase;

class SaleTest extends TestCase
{
//    public function testCanCreate()
//    {
//        $sale = new Sale();
//    }

    public function testWhenCreatedBookListIsEmpty()
    {
        $sale = new Sale();
        $this->assertEmpty($sale->getBooks());
    }

//    public function testSpecifyAmountBooks()
//    {
//
//    }
}
