<?php
$legend = array(
	"eyes" => array(
		"black" => "140L98",
		"green" => "140A98",
		"brown" => "140A88",
		"blue" => "140L97"
	),
	"hair" => array(
		"brown" => "HHHKLJ",
		"black" => "HHHKLI",
		"blonde" => "HHLH1L",
		"white" => "HHLH2L"
	),
	"race" => array(
		"asian" => "1HYYYN",
		"hispanic" => "IHYYYN",
		"white" => "IHYYNN"
	),
);

$suspects = array(
	"John Cena" => array(
		"hair" => "black",
		"eyes" => "green",
		"race" => "asian",
	),
	"Vin Diesel" => array(
		"hair" => "blonde",
		"eyes" => "brown",
		"race" => "caucasian",
	),
	"Carl Ericson" => array(
		"hair" => "brown",
		"eyes" => "black",
		"race" => "hispanic"
	),
);

$dnk = "HHHKLJ140L98IHYYYN";

$suspect = [];

foreach($legend as $key => $value){
    foreach($value as $k => $v)
    if (strpos($dnk, $v) !== false) {
		$suspect[$key] = $k;
	}	
}

$suspect_name = "";

foreach ($suspects as $name => $value) {
	$current_name = '';

	foreach ($value as $k => $v){
		if ($suspect[$k] === $v){
			$current_name = $name;
		} else {
			$current_name = '';
		}
	}
	if (!empty($current_name)) {
		$suspect_name = $current_name;
	}

}
echo $suspect_name; 