<?php
class Calculator
{
 
    public function add($a, $b): float
    {
        return $a + $b;
    }

    public function multiply($a, $b): float
    {
        return $a * $b;
    }

    public function division($a, $b): float
    {
        return $a / $b;
    }
	
	
	function esPar($numero) {
		if($numero % 2 == 0)
		{
			return "par";
		} 
		else 
		{
			return "impar";
		}
}


}
