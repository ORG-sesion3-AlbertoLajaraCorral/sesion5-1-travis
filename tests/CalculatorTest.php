<?php
use PHPUnit\Framework\TestCase;
require 'Calculator.php';

class CalculatorTest extends TestCase
{
    private $calculator;
 
    protected function setUp(): void
    {
        $this->calculator = new Calculator();
    }
 
    protected function tearDown(): void
    {
        $this->calculator = NULL;
    }
 
    public function testAdd(): void
    {
        $result = $this->calculator->add(1, 2);
        $this->assertEquals(3, $result);
    }

    public function testMultiply(): void
    {
        $result = $this->calculator->multiply(5, 2);
        $this->assertEquals(10, $result);
    }

    public function testDivision(): void
    {
        $result = $this->calculator->division(10, 2);
        $this->assertEquals(5, $result);
    }
	
	public function testEsPar(): void
	{
		//primera prueba
		$result = $this->calculator->esPar(4);
		$this->assertEquals("par", $result);
		
		//segunda prueba
		$result = $this->calculator->esPar(96);
		$this->assertEquals("par", $result);
		
		//tercera prueba
		$result = $this->calculator->esPar(15);
		$this->assertEquals("impar", $result);
		
		//cuarta prueba
		$result = $this->calculator->esPar(1);
		$this->assertEquals("impar", $result);
	}
 
}
