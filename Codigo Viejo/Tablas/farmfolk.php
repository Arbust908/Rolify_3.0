<?php require_once("math.php"); ?>
<?php
//Random Farmfolk
//d8 The peasant is...
$isD8 = [
  "an old farmer",
  "a middle-aged farmer",
  "a young farmer",
  "a farm boy",
  "an old farmwife",
  "a tough farmwife",
  "a young maid",
  "a country girl"
  ];
   $is = Roller($isD8);
//d8 The peasant seeks someone to...
$seekD8 = [
  "lend a hand on a laborious task",
  "repair a tool or farming implements",
  "help locate a missing beast",
  "help locate a missing person",
  "help secure an audience with the lord/lady",
  "purchase or distribute crops",
  "purchase some livestock",
  "listen to a tale of woe"
  ];
   $seek = Roller($seekD8);
//d6 The peasant's primary crops and market fare include...
$cropD6 = [
  "grains",
  "meats",
  "fruits",
  "vegetables",
  "dairy",
  "eggs",
  "herbs and spices"
  ];
   $crop = Roller($cropD6);
   $ext = "";
  if ($crop == "grains") {
  $extD0 = ["barley","oats","corn","rice","rye","wheat"];
  $ext = Roller($extD0);
  } elseif ($crop == "meats") {
  $extD0 = ["beef","chicken","duck","goat","goose","pigeon","pork","mutton"];
  $ext = Roller($extD0);
  } elseif ($crop == "fruits") {
  $extD0 = ["apples","blackberries","blueberries","cherries","lemons","pears","plums","raspberries"];
  $ext = Roller($extD0);
  } elseif ($crop == "vegetables") {
  $extD0 = ["beans","beets","broccoli","cabbages","carrots","cauliflower","mushrooms","peas","radishes","squash"];
  $ext = Roller($extD0);
  } elseif ($crop == "dairy") {
  $extD0 = ["cow's milk","goat's milk","sheep's milk","hard cheese","mild cheese","pungent cheese","sharp cheese","soft cheese"];
  $ext = Roller($extD0);
  } elseif ($crop == "eggs") {
  $extD0 = ["eggs","goose eggs","axe beak eggs"];
  $ext = Roller($extD0);
  rand(1,100);
   if (condition) {
     $ext = "drake egg";
   }
  } elseif ($crop == "herbs and spices") {
  $extD0 = ["basil","garlic","ginger","mint","oregano","parsley","pepper","rosemary","sage","thyme"];
  $ext = Roller($extD0);
  }
  $crop .= ", ".$ext." to be more specific"
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Farmfolk </title>
  </head>
  <body>
    <h2>Farmfolk</h2>
    <main>
      The peasant is <b><?= $is ?></b> who seeks someone to <b><?= $seek ?></b>.<br>
      The peasant's primary crops and market fare include <b><?= $crop ?></b>.<br>
    </main>
  </body>
</html>
