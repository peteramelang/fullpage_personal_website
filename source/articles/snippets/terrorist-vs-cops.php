<!DOCTYPE html>
<html>
<head>
	<title>A loop of your own</title>
	<link type='text/css' rel='stylesheet' href='style.css'/>
</head>
<body>
<?php
//Add while loop below
$terroristAlive = true;
$killedCops = 0;
$cops = 0;
$strikeCount = 1;
$bulletsTaken = 0;
$currentKilledCops = 0;
$newCops = 0;

echo "The terrorist killed <b>" . $innocentKilled = rand(0,100) . "</b> innocent people.<br><br>";

$killedCops .= $innocentKilled;

do {
	if($cops > 0) {
		$maxKilledCops = $cops;
		$bulletsTaken += rand(1, 10+16*$cops);

		if(rand(0,1000+($cops) > 500)){
			echo "The terrorist got arrested by <b>$cops</b> cop(s).";
			$terroristAlive = false;
			break;
		} elseif($bulletsTaken >= 100) {
			echo "The terrorist got killed by <b>$bulletsTaken</b> bullets.";
			$terroristAlive = false;
			break;
		} else {
			$terroristAlive = true;
		}

		$newCops = rand(1,14);
	} else {
		$maxKilledCops = 1;
		$terroristAlive = true;
		$newCops += 1;
	}

	$currentKilledCops = rand(0, $maxKilledCops);
	$killedCops += $currentKilledCops;
	$cops = $cops - $currentKilledCops + $newCops;

	echo "--------- Strike: $strikeCount ---------<br>"; $strikeCount += 1;
	echo "<b>$newCops</b> new cop(s) push forward.<br>";
	echo "Terrorist killed <b>$currentKilledCops</b> cop(s). (Total: $killedCops people)<br>";
	echo "<b>$cops Cop(s)</b> are chasing him.<br>";
	echo "He took <b>$bulletsTaken</b> bullets in his body.<br><br>";
} while ($terroristAlive == true);
?>
</body>
</html>