<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTests extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        parent::setUp();
        $this->calculator = new Calculator();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
        parent::tearDown();
    }
 
    public function testdebit1()
    {
        $result = $this->calculator->debit(20, 10);
        $this->assertEquals(2, $result);
    }

    public function testdebit2()
        {
            $result = $this->calculator->debit(30, 10);
            $this->assertEquals(3, $result);
        }

    public function testdebit3()
        {
            $result = $this->calculator->debit(400, 10);
            $this->assertEquals(40, $result);
        }

    public function testdebit4()
        {
            $result = $this->calculator->debit(520, 10);
            $this->assertEquals(52, $result);
        }
    
    public function testdebit5()
        {
            $result = $this->calculator->debit(500, 10);
            $this->assertEquals(50, $result);
        }
        
    public function testdebit6()
        {
            $result = $this->calculator->debit(900, 10);
            $this->assertEquals(90, $result);
        }

    public function testdebit7()
        {
            $result = $this->calculator->debit(1200, 10);
            $this->assertEquals(120, $result);
        }

    public function testdebit8()
        {
            $result = $this->calculator->debit(850, 10);
            $this->assertEquals(85, $result);
        }

    public function testdebit9()
        {
            $result = $this->calculator->debit(550, 10);
            $this->assertEquals(55, $result);
        }

    public function testdebit10()
        {
            $result = $this->calculator->debit(600, 10);
            $this->assertEquals(60, $result);
        }

    public function testdebit11()
        {
            $result = $this->calculator->debit(100, 20);
            $this->assertEquals(5, $result);
        }

    public function testdebit12()
        {
            $result = $this->calculator->debit(200, 20);
            $this->assertEquals(10, $result);
        }

    public function testdebit13()
        {
            $result = $this->calculator->debit(300, 20);
            $this->assertEquals(15, $result);
        }

    public function testdebit14()
        {
            $result = $this->calculator->debit(400, 20);
            $this->assertEquals(20, $result);
        }

    public function testdebit15()
        {
            $result = $this->calculator->debit(500, 20);
            $this->assertEquals(25, $result);
        }

    public function testdebit16()
        {
            $result = $this->calculator->debit(600, 20);
            $this->assertEquals(30, $result);
        }

    public function testdebit17()
        {
            $result = $this->calculator->debit(700, 20);
            $this->assertEquals(35, $result);
        }

    public function testdebit18()
        {
            $result = $this->calculator->debit(800, 20);
            $this->assertEquals(40, $result);
        }

    public function testdebit19()
        {
            $result = $this->calculator->debit(900, 20);
            $this->assertEquals(45, $result);
        }

    public function testdebit20()
        {
            $result = $this->calculator->debit(1000, 20);
            $this->assertEquals(50, $result);
        }

    public function testdebit21()
        {
            $result = $this->calculator->debit(30, 15);
            $this->assertEquals(2, $result);
        }

    public function testdebit22()
        {
            $result = $this->calculator->debit(60, 15);
            $this->assertEquals(4, $result);
        }

    public function testdebit23()
        {
            $result = $this->calculator->debit(75, 15);
            $this->assertEquals(5, $result);
        }

    public function testdebit24()
        {
            $result = $this->calculator->debit(90, 15);
            $this->assertEquals(6, $result);
        }

    public function testdebit25()
        {
            $result = $this->calculator->debit(105, 15);
            $this->assertEquals(7, $result);
        }

    public function testdebit26()
        {
            $result = $this->calculator->debit(120, 15);
            $this->assertEquals(8, $result);
        }

    public function testdebit27()
        {
            $result = $this->calculator->debit(135, 15);
            $this->assertEquals(9, $result);
        }

    public function testdebit28()
        {
            $result = $this->calculator->debit(150, 15);
            $this->assertEquals(10, $result);
        }

    public function testdebit29()
        {
            $result = $this->calculator->debit(165, 15);
            $this->assertEquals(11, $result);
        }

    public function testdebit30()
        {
            $result = $this->calculator->debit(180, 15);
            $this->assertEquals(12, $result);
        }

    public function testdebit31()
        {
            $result = $this->calculator->debit(5, 5);
            $this->assertEquals(1, $result);
        }

    public function testdebit32()
        {
            $result = $this->calculator->debit(10, 5);
            $this->assertEquals(2, $result);
        }

    public function testdebit33()
        {
            $result = $this->calculator->debit(15, 5);
            $this->assertEquals(3, $result);
        }

    public function testdebit34()
        {
            $result = $this->calculator->debit(20, 5);
            $this->assertEquals(4, $result);
        }

    public function testdebit35()
        {
            $result = $this->calculator->debit(25, 5);
            $this->assertEquals(5, $result);
        }

    public function testdebit36()
        {
            $result = $this->calculator->debit(30, 5);
            $this->assertEquals(6, $result);
        }

    public function testdebit37()
        {
            $result = $this->calculator->debit(35, 5);
            $this->assertEquals(7, $result);
        }

    public function testdebit38()
        {
            $result = $this->calculator->debit(40, 5);
            $this->assertEquals(8, $result);
        }

    public function testdebit39()
        {
            $result = $this->calculator->debit(45, 5);
            $this->assertEquals(9, $result);
        }

    public function testdebit40()
        {
            $result = $this->calculator->debit(50, 5);
            $this->assertEquals(10, $result);
        }



 
}