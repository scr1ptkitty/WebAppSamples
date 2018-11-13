<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // collect value of input fields
	$num1 = htmlspecialchars($_REQUEST['num1']);
    if (empty($num1)) {
        echo "Number 1 is empty";
	
	$num2 = htmlspecialchars($_REQUEST['num2']);
    if (empty($num2)) {
        echo "Number 2 is empty";
	
	$num3 = htmlspecialchars($_REQUEST['num3']);
    if (empty($num3)) {
        echo "Number 3 is empty";
	
	$num4 = htmlspecialchars($_REQUEST['num4']);
    if (empty($num4)) {
        echo "Number 4 is empty";
	
	// create display function
	function display()
	{
		echo "Number 1: " . $num1 . "<br>";
		echo "Number 2: " . $num2 . "<br>";
		echo "Number 3: " . $num3 . "<br>";
		echo "Number 4: " . $num4 . "<br>";
	}
	// create maxNum function
	function maxNum($n1, $n2, $n3, $n4)
	{
		if ($n1 > $n2 && $n1 > $n3 && $n1 > $n4)
		{
			$max = $n1;
		}
		else if ($n2 > $n1 && $n2 > $n3 && $n2 > $n4)
		{
			$max = $n2;
		}
		else if ($n3 > $n1 && $n3 > $n2 && $n3 > $n4)
		{
			$max = $n3;
		}
		else
		{
			$max = $n4;
		}
		
		return $max;
	}
	
	// create minNum function
	function minNum($n1, $n2, $n3, $n4)
	{
		if ($n1 < $n2 && $n1 < $n3 && $n1 < $n4)
		{
			$min = $n1;
		}
		else if ($n2 < $n1 && $n2 < $n3 && $n2 < $n4)
		{
			$min = $n2;
		}
		else if ($n3 < $n1 && $n3 < $n2 && $n3 < $n4)
		{
			$min = $n3;
		}
		else
		{
			$min = $n4;
		}
		
		return $min;
	}
	
	// create avgNum function
	function avgNum($n1, $n2, $n3, $n4)
	{
		$avg = ($n1 + $n2 + $n3 + $n4) / 4;
		return $avg;
	}
	
	display();
	echo "Maximum: " . maxNum($num1, $num2, $num3, $num4) . "<br>";
	echo "Minimum: " . minNum($num1, $num2, $num3, $num4) . "<br>";
	echo "Average: " . avgNum($num1, $num2, $num3, $num4) . "<br>";
}
?>