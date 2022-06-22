<html>
 <head>
 <style>
  table, td, th {
   border: 1px solid black; 
   width: 35%;
   text-align: center; 
   background-color: lightgray;
  }
  table { margin: auto; } 
  input,p { text-align:right; }
 </style>
</head>

<body>
 <form method="post" action="prog8a.php">
  <table>
  <caption><h2> SIMPLE CALCULATOR </h2></caption>
  <tr>
   <td>First Number:</td><td><input type="text" name="num1" /></td>
   <td rowspan="2"><button type="submit" name="submit" value="calculate">Calculate</td></tr>
  <tr>
   <td>Second Number:</td><td><input type="text" name="num2"/></td>
  </tr>
 </form>
 
 <?php
 if(isset($_POST['submit'])) // it checks if the input submit is filled
 {
  $num1 = $_POST['num1'];
  $num2 = $_POST['num2']; 
  if(is_numeric($num1) and is_numeric($num2) )
  {
   echo "<tr><td> Addition :</td><td><p>".($num1+$num2)."</p></td>"; 
   echo "<tr><td> Subtraction :</td><td><p> ".($num1-$num2)."</p></td>"; 
   echo "<tr><td> Multiplication :</td><td><p>".($num1*$num2)."</p></td>"; 
   echo "<tr><td>Division :</td><td><p> ".($num1/$num2)."</p></td>";
   echo "</table>";
  }
  else
  {
   echo"<script> alert(' ENTER VALID NUMBER');</script>";
  }
 }
 ?>
</body>
</html>
<?php

// This function stores transpose
// of A[][] in B[][]
function transpose(&$A, &$B)
{
	$N = 4;
	for ($i = 0; $i < $N; $i++)
		for ($j = 0; $j < $N; $j++)
			$B[$i][$j] = $A[$j][$i];
}

// Driver code
$A = array(array(1, 1, 1, 1),
		array(2, 2, 2, 2),
		array(3, 3, 3, 3),
		array(4, 4, 4, 4));

$N = 4;

transpose($A, $B);

echo "Result matrix is \n";
for ($i = 0; $i < $N; $i++)
{
	for ($j = 0; $j < $N; $j++)
	{
		echo $B[$i][$j];
		echo " ";
	}
	echo "\n";
}

// This code is contributed
// by Shivi_Aggarwal
?>
<?php
// PHP program to multiply two
// square matrices.

// This function multiplies mat1[][] and
// mat2[][], and stores the result in res[][]
function multiply(&$mat1, &$mat2, &$res)
{
	$N = 4;
	for ($i = 0; $i < $N; $i++)
	{
		for ($j = 0; $j < $N; $j++)
		{
			$res[$i][$j] = 0;
			for ($k = 0; $k < $N; $k++)
				$res[$i][$j] += $mat1[$i][$k] *
								$mat2[$k][$j];
		}
	}
}

// Driver Code
$mat1 = array(array(1, 1, 1, 1),
			array(2, 2, 2, 2),
			array(3, 3, 3, 3),
			array(4, 4, 4, 4));

$mat2 = array(array(1, 1, 1, 1),
			array(2, 2, 2, 2),
			array(3, 3, 3, 3),
			array(4, 4, 4, 4));

multiply($mat1, $mat2, $res);
$N = 4;
echo ("Result matrix is
");
for ($i = 0; $i < $N; $i++)
{
	for ($j = 0; $j < $N; $j++)
	{
		echo ($res[$i][$j]);
		echo(" ");
	}
	echo ("
");
}

// This code is contributed
// by Shivi_Aggarwal
?>
<?php
// This function adds A[][] and
// B[][], and stores the result in C[][]
function add(&$A, &$B, &$C)
{
	$N = 4;
	for ($i = 0; $i < $N; $i++)
		for ($j = 0; $j < $N; $j++)
			$C[$i][$j] = $A[$i][$j] +
						$B[$i][$j];
}

// Driver code
$A = array(array(1, 1, 1, 1),
		array(2, 2, 2, 2),
		array(3, 3, 3, 3),
		array(4, 4, 4, 4));

$B = array(array(1, 1, 1, 1),
		array(2, 2, 2, 2),
		array(3, 3, 3, 3),
		array(4, 4, 4, 4));

$N = 4;
add($A, $B, $C);

echo "Result matrix is \n";
for ($i = 0; $i < $N; $i++)
{
	for ($j = 0; $j < $N; $j++)
	{
		echo $C[$i][$j];
		echo " ";
	}
	echo "\n" ;
}

// This code is contributed
// by Shivi_Aggarwal
?>