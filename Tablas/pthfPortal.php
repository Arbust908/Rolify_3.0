<?php require_once("math.php"); ?>

<?php

//Table 7–19: Portal Descriptions
$descriptionD00 = [
  "a cascade of silver and copper coins",
  "a rectangle of deepest blue that ripples like a flag",
  "a carved circular hole in a great dolmen",
  "a circular opening covered by rusted swords that open on demand",
  "a huge mouth with a gale rushing from within",
  "a giant keyhole",
  "a great tome filled with pictures of exotic locations",
  "a shimmering pool of greenish light",
  "a black swirling fog with dancing lights within",
  "a fountain of sparkling motes of light",
  "a fresco",
  "a giant drawer which tugs back strongly",
  "a waterfall of singing angels",
  "a horizontal oval of crystal-clear water",
  "an ornate wardrobe",
  "a curtain of dripping wax",
  "a well that seems to descend forever",
  "a gaping hole that oozes strands of sticky goo",
  "a wicker man",
  "a doorway that disappears if viewed directly",
  "a cave entrance wreathed in moss-covered statues",
  "a curtain of tiny ivory flakes carved to look like snow",
  "a stone arch carved with runes",
  "a triangle that glows and emits the faint odor of fruit",
  "a dancing globe of ball lightning",
  "a shadow of a door that looms tall on a nearby wall",
  "a clockwork puzzle door",
  "a carriage",
  "a magical cabinet that seems impossible to open",
  "a golden haze that smells of baking bread",
  "an ornate mirror held by three stone golems",
  "a table-sized ball of almost blinding light",
  "an opening in an ancient hedgerow",
  "an empty picture frame floating in mid-air",
  "a black whirlpool",
  "an orb that cycles through images of the constellations",
  "a gate made of screaming severed heads",
  "a lighthouse that casts a beam of solid light",
  "an oily black chute with the sound of sobbing below",
  "a pool of frantically waving severed arms",
  "a statue of a yawning, grotesquely bloated old woman",
  "a floating red egg about the size of a rearing horse",
  "an iron tower with only one high window",
  "a vivid, ever-changing landscape",
  "a stone maw of grinding teeth",
  "a giant stylized scroll that matter passes through",
  "a corridor of whirling blades leading to a black slit",
  "a whirlpool of bubbling chocolate",
  "a black rainbow",
  "an iron mouth that snaps shut at irregular intervals"
  ];
   $portal = Roller($descriptionD00);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Portal | Pathfinder | TE</title>
  </head>
  <body>
    <h1>Random Portal</h1>
    <p>The portal is <?=$portal?></p>
  </body>
</html>
