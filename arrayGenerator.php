<?php

$path = "gen/bandwidth.csv";
$file = fopen($path, "r") or die ("File not found!");
$bandwidth = fread($file,filesize($path));
fclose($file);

$path = "gen/cpu_percentage.txt";
$file = fopen($path, "r") or die ("File not found!");
$cpu_percentage = fread($file,filesize($path));
fclose($file);

$path = "gen/diskspace.csv";
$file = fopen($path, "r") or die ("File not found!");
$diskspace = fread($file,filesize($path));
fclose($file);

$path = "gen/ip.txt";
$file = fopen($path, "r") or die ("File not found!");
$ip = fread($file,filesize($path));
fclose($file);

$path = "gen/memory_usage.csv";
$file = fopen($path, "r") or die ("File not found!");
$memory = fread($file,filesize($path));
fclose($file);

$array = array (
	"bandwidth" => "$bandwidth",
	"cpu_percentage" => "$cpu_percentage",
	"diskspace" => "$diskspace",
	"ip" => "$ip",
	"memory" => "$memory",
	"id" => "idPlaceholder",
);

print_r($array);
	
?>
