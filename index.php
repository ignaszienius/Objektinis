<?php
$a = "ka tu";
//Uzduotis Nr.1
for ($i=200; $i > 0 ; $i = $i - 5) { 
	echo $i .", ";
}
echo "</br>";
//Uzduotis Nr.2
$numbers = ["2", "1", "3", "4"];
echo "</br>";
print_r($numbers);
echo "</br>";
shuffle($numbers);
print_r($numbers);
echo "</br>";
sort($numbers);
print_r($numbers);
echo "</br>";
//Uzduotis Nr.3
echo "</br>";
if (isset($a)) {
	echo $a;
	$a = null;
	echo $a;
}
echo "</br>";
//Uzduotis Nr.4
$a = [1, 25, 11, 3, 7, 0, 2];
$sk = 2;
 
function rask($skaicius,$masyvas) {
    if(array_search($masyvas, $skaicius)) {
        echo "Skaicius yra!";
    } else {
        echo "skaicio nera!";
    }
}
 
rask($a, $sk);

//Uzduotis Nr.4
$plotas = [];

function rastiplota ($r) {
$plotas = pi() * $r * $r;
return $plotas;
}
echo "</br>";
echo round(rastiplota(10));

//Uzduotis Nr.5

$traplotas = [];

function rastitrapota ($a,$b,$h) {
$traplotas = ($a + $b) / 2 * $h;
return $traplotas;
}
echo "</br>";
echo rastitrapota(2,4,5);

//Uzduotis Nr.6

 function get_pallet($aikste,$trinka,$trinkb,$paletsize) {
 	$paletsize =  ceil($aikste / ($trinka * $trinkb));
 	echo $paletsize;
 }
get_pallet(5000,0.3,0.2,500);

//Uzduotis Nr.7

$links = [
['name' => 'Delfi' , 'url' => 'https://www.delfi.lt/'],
['name' => '15min' , 'url' => 'https://www.15min.lt/'],
['name' => 'whatismyip' , 'url' => 'https://www.whatismyip.com/']
];

function showlinks($links) {
	foreach ($links as $link) {
		echo "<a href='" . $link['url'] . "'>" . $link['name'] . "</a> ";
	}
}

showlinks($links);


//Uzduotis Nr.7
echo "</br>";
$nr = [];
function replace($nr) {
	echo str_replace("+370","8",$nr);
}

replace("+37061297966"); 

//Uzduotis Nr.7

echo "</br>";
$christmas = strtotime('25 December 2017');
$now = time();
$timeleft = $christmas-$now;
$daysleft = round((($timeleft/24)/60)/60); //probably...
echo "Iki Kaledu liko $daysleft dienos!";
?>




