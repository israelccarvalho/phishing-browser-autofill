<?php
$ausgabe=$_POST['latitude'].":".$_POST['longitude'];
$datum=date("d.m.Y, H:i:s");
$array = file("location.log"); // Datei in ein Array einlesen
array_unshift($array, "".$datum." ".$ausgabe."\n");
$string = implode("", $array);
file_put_contents("location.log", $string);

echo json_encode(array("success"=>"true"));
?>
