
<a href="home.php" class="button">ET PHONE HOME</a>
<p></p>
<?php


$chocolate = array("Flake","Flake","Milky Way bar","2MiniSnickers","Kinder Bueno","Kinder Bueno white","Milky Way bar","Maltesers","Milky Way bar","Maltesers","Maltesers","Kit Kat Chuncky","Kit Kat Chuncky", "Double Decker","2MiniSnickers", "Rolo","Rolo","Haribo Star Mix", "Haribo SuperMix","Milky Way bar","Fudge","DrumStick Squishies","Minstrels","Double Decker","Starburst");




$chocNum = count($chocolate);
$date = 1;

//echo " Array count is " . $chocNum . "  <br>";

/*do  {
	$num = rand(0,$chocNum);
    echo $num;
    echo($chocolate[$num]);
    unset($chocolate[$num]);  //Attempt one
    array_shift($chocolate);
	$chocNum=-1;

	echo count($chocolate);
	echo "<br>";

} while ( $chocNum > 1); */

/*
while ($chocNum > 1) {
	
$num = rand(0,$chocNum);

echo "Randon number is ". $num. " <br>";

print_r($chocolate);

echo "<br>".($chocolate[$num])."<br>";

unset($chocolate[$num]);

array_values($chocolate);                    //This is the testing version of attempt 2

sort($chocolate);

print_r($chocolate);

echo "<br>".($chocolate[$num])."<br>";

$chocNum= $chocNum-1;

echo "Choc number is now ". $chocNum. " <br>";

} */

while ($chocNum > 1) {
	
$num = rand(0,($chocNum - 1));

echo "<br>".$date.". ".($chocolate[$num])."<br>";

unset($chocolate[$num]);

array_values($chocolate);                    //This is the testing version of attempt 2

sort($chocolate);

$chocNum = $chocNum - 1;

$date = $date + 1;	


}

?>
