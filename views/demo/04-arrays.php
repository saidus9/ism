<?php
/*
$dog = "Dogs";
$cat = "Cats";
$fish = "Fishes";

$pets = [
  $dog,
  $cat,
  $fish,
];

$pets[1] = "Fish";
$pets[3] = "Geckos";
$pets[] = "Horses";

//unset($pets[4]); // Removes horses from the array
var_dump($pets);
*/

/*
$pets = [];
for ($i = 0; $i < 21; $i++) {
  $pets[] = $i;
}
var_dump($pets);
*/

/*
$numbers = [];
$x = 1;
while ($x < 51) {
  $numbers[] = $x;
  $x++;
}
var_dump($numbers);
*/

/*
$array = [];
$array[] = "Apples";
$array[] = "Oranges";
$array[] = "Apricots";
foreach ($array as $item) {
  echo $item . "<br>";
}
*/

$array = [
  'first_name' => 'Trevor',
  'last_name' => 'Sawler',
  'age' => 21,
];

foreach ($array as $name => $value) {
  echo $name . " = " . $value . "<br>";
}
