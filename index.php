<!doctype html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta charset="utf-8">
<title>TimesTable Loops</title>
<link href="css/stylesheet.css" rel="stylesheet" type="text/css">
</head>

<body>
	
<h1>TimesTable Loops</h1>	
	
<?php
$rowtable = 13; //Dynamic number of rows	
$columntable = 13; //Dynamic number of columns
echo "<table class='for-table'>";
echo "<caption>For Loop Table</caption>";//Title of the table
for($i=1; $i <$rowtable; $i++){//Row Creation
	if($i % 2){
		echo "<tr class='odd'>";
	}
	else{
		echo "<tr class='even'>";
	}
	
	if($i == 1){
		echo "<tr class='green-row-and-column'>";
	}
	for($i ,$r=1; $r < $columntable; $r++){//Column Creation 
		$square = $r * $r;
	    if($square == $r * $i){
			echo "<td class='square'>" . $square . "</td>";
		}
		else if($r == 1){
			echo "<td class='green-row-and-column'>" . $i . "</td>";
		}
	else{
		echo '<td>' . $r * $i ."</td>";
	}
	}
	echo "</tr>";
}
	
?>

<?php	
echo "<table class='while-table'><tr>";
echo "<caption>While Loop Table</caption>";//Title of the Table
$a = 1;
	do {
		$b = 1;
		do{
		if($b == $a)
			
			echo "<td class='square'>"."$a x $b = " . $a * $a . "</td>";
		else if($b == 1)
			echo "<td class='green-row-and-column'>" . "$a x $b = " . $a * $b . "</td>";//Top row colour
		else if($a == 1)
			echo "<td class='green-row-and-column'>" . "$a x $b = " . $a * $b . "</td>";//Left row colour
		else{
			echo "<td>" . "$a x $b = " . $a * $b ."</td>";
		}
		$b++;
		}
	while($b <= 12);
	if($a % 2 == 0)
		echo "<tr class='even'>";//Even row colour
	else
		echo "<tr class='odd'>";//Odd row colour
	$a++;
 }
	while($a <= 12);
	echo "</tr></table>";

	
?>	
</body>
</html>