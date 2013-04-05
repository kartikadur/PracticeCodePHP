<?php
$_fr = fopen("php://stdin", "r");
$_fw = fopen("php://stdout", 'w');
/* Enter your code here. Read input from STDIN. Print output to STDOUT */

$input = explode(" ", fgets($_fr));
$N = intval($input[0], 10);
$Diff = intval($input[1], 10);

$vals = explode(" ", fgets($_fr));
sort($vals);
$count = 0;

for($i = 0; $i < count($vals) - 1; $i++) {
	$j = count($vals) - 1;
// 	print("Out: $vals[$i], $Diff, $vals[$j]\n");
	while($vals[$i] + $Diff <= $vals[$j]) {
// 		print("In: $vals[$i], $Diff, $vals[$j]\n");
		if($vals[$i] + $Diff == $vals[$j]) { $count++; }
		$j--;
	}
}

echo $count;
?>