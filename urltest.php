<?php

$test=$_REQUEST['test'];

if($test == 'twonumbers')
{
$data = file_get_contents('https://www.calcatraz.com/calculator/api?c=56%2B98');
echo "<br>56 + 98 =".$data;
}

if($test == 'oneblanknegative')
{
$data = file_get_contents('https://www.calcatraz.com/calculator/api?c=-56%2B');
echo "<br>-56 +  =".$data;
}	

if($test == 'oneblankpositive')
{
$data = file_get_contents('https://www.calcatraz.com/calculator/api?c=%2B99');
echo "<br> + 99 =".$data;
}

if($test == 'positivenegative')
{
$data = file_get_contents('https://www.calcatraz.com/calculator/api?c=200%2B-99');
echo "<br> 200 +(-99) =".$data;
}

if($test == 'negativepositive')
{
$data = file_get_contents('https://www.calcatraz.com/calculator/api?c=11%2B-99');
echo "<br> 11 +(-99) =".$data;
}


if($test == 'samenegative')
{
$data = file_get_contents('https://www.calcatraz.com/calculator/api?c=-55%2B-55');
echo "<br> (-55) + (-55) =".$data;
}

if($test == 'diffnegative')
{
$data = file_get_contents('https://www.calcatraz.com/calculator/api?c=-50%2B-55');
echo "<br> (-50) + (-55) =".$data;
}

if($test == 'negativechar')
{
$data = file_get_contents('https://www.calcatraz.com/calculator/api?c=-50%2Ba');
echo "<br> (-50) + a =".$data;
}

if($test == 'positivechar')
{
$data = file_get_contents('https://www.calcatraz.com/calculator/api?c=50%2Ba');
echo "<br> 50 + a =".$data;
}

if($test == 'nosalpha')
{
$data = file_get_contents('https://www.calcatraz.com/calculator/api?c=a50%2Ba23');
echo "<br> a50 + a23 =".$data;
}

if($test == 'noschr')
{
$data = file_get_contents('https://www.calcatraz.com/calculator/api?c=3%2B%');
echo "<br> 3 + B% =".$data;
}

if($test == 'chr')
{
$data = file_get_contents('https://www.calcatraz.com/calculator/api?c=x%2y');
echo "<br> x + y =".$data;
}

if($test == 'alno')
{
$data = file_get_contents('https://www.calcatraz.com/calculator/api?c=3x%225y');
echo "<br> 3x + 25y =".$data;
}
?>