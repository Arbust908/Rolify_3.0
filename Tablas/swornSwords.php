<?php require_once("math.php"); ?>
<?php
//Random Sworn Swords
//d20 The knight’s house’s colors are...
$colorsD20 = [
  "black",
  "scarlet",
  "gold",
  "forest green",
  "royal blue",
  "violet",
  "silver",
  "bronze",
  "tan",
  "brown",
  "dark grey",
  "white",
  "maroon",
  "sky blue",
  "navy blue",
  "chocolate",
  "turquoise",
  "yellow",
  "orange",
  "olive green"
  ];
   $colors = Roller($colorsD20) ." with details in ". Roller($colorsD20);

//d8 The knight’s house's symbol is...
$roll = rand(1,8);
$symbol = "";
  if ($roll == 1) {
    $extD0 = ["arrow","axe","dagger","hammer","mace","spear","staff","sword"];
    $symbol = Roller($extD0);
  } elseif ($roll == 2) {
    $extD0 = ["breastplate","gauntlet","helm","shield"];
    $symbol = Roller($extD0);
  } elseif ($roll == 3) {
    $extD0 = ["sun","moon","star","comet"];
    $symbol = Roller($extD0);
  } elseif ($roll == 4) {
    $extD0 = ["apple","barley","briar","fig","grapes","lily","maple","oak","olive","pine","rose","wheat"];
    $symbol = Roller($extD0);
  } elseif ($roll == 5) {
    $extD0 = ["crab","crocodile","frog","fish","octopus","whale"];
    $symbol = Roller($extD0);
  } elseif ($roll == 6) {
    $extD0 = ["badger","bat","beaver","dog","ferret","fox","hedgehog","lizard","rat","scorpion","snake","spider"];
    $symbol = Roller($extD0);
  } elseif ($roll == 7) {
    $extD0 = ["bear","boar","bull","dragon","lion","ox","stag","wolf"];
    $symbol = Roller($extD0);
  } elseif ($roll == 8) {
    $extD0 = ["cardinal","dove","eagle","hawk","mockingbird","owl","pelican","raven","rooster","sparrow","swan","vulture"];
    $symbol = Roller($extD0);
  }
$symbol .= "";
//d6 The knight has sworn to a noble lord or lady to...
$swornD6 = [
  "protect that person from harm",
  "defend that person’s lands",
  "avenge that person’s grievances",
  "protect that person’s loved ones",
  "advance that person’s ideals",
  "advance that person’s faith",
  "ride to war in that person’s name"
  ];
   $sworn = Roller($swornD6);
//d8 Above all else, the knight values...
$valuesD8 = [
  "bravery",
  "honor",
  "righteousness",
  "strength and might",
  "power and tyranny",
  "romantic devotion",
  "romantic conquest",
  "carousing"
  ];
   $values = Roller($valuesD8);
//d4 The knight is armored in...
$armoreD4 = [
  "studded leather armor",
  "chainmail",
  "scale armor",
  "plate armor"
  ];
   $armore = Roller($armoreD4);
//d6 The knight’s armor is...
$armorModD6 = [
  "shiny and new",
  "in excellent condition",
  "obviously repaired, but serviceable",
  "covered in dings and dents",
  "dirty and well-worn",
  "barely held together",
  ];
   $armorMod = Roller($armorModD6);
//d12 The knight is wielding...
$weaponD10 = [
  "longsword",
  "scimitar",
  "handaxe",
  "shortsword",
  "light hammer",
  "sickle",
  "mace",
  "pike",
  "halberd",
  "warhammer",
  "greataxe",
  "greatsword",
  "dagger"
  ];
$weaponExt = [
  "longsword",
  "scimitar",
  "handaxe",
  "shortsword",
  "light hammer",
  "warhammer",
  "shortbow",
  "crossbow",
  "shield",
  "longbow",
  "dagger"
  ];
   $weapon = "a ". Roller($weaponD10)." and a ".Roller($weaponExt);

//d6 The knight’s mount is...
$mountD6 = [
  "a huge destrier",
  "a reliable courser",
  "a snorting charger",
  "a swift garron",
  "a wickering palfrey",
  "a nervous pony",
  "a golden axe beak"
  ];
   $mount = Roller($mountD6);
   $roll = rand(1,100);
   if ($roll == 100) {
     $mount = "aa young dragon";
   } elseif ($roll >= 80) {
     $mount = "a tamed drake";
   }
   $mount .= "";
//d12 The knight is...
$isD12 = [
  "a pompous windbag",
  "a charming hero",
  "a daring swashbuckler",
  "a violent drunk",
  "a brilliant strategist",
  "a religious zealot",
  "a beautiful youth",
  "a brutish thug",
  "a celebrated war hero",
  "a popular tavern patron",
  "a favorite among the ladies",
  "ruggedly handsome",
  ];
   $is = Roller($isD12);
//d12 On the knight’s face is...
$faced12 = [
  "a missing ear",
  "a jagged scar",
  "a hard-set jaw",
  "a friendly grin",
  "a faraway look",
  "a sad look",
  "a pair of piercing eyes",
  "a broken nose",
  "bushy eyebrows",
  "unshaven stubble",
  "a neatly-trimmed beard",
  "an extravagant mustache",
  ];
   $face = Roller($faced12);

//d10 The knight carries...
$carriesD10 = [
  "a magnifying lens",
  "a blade with a carved hilt",
  "a blade with beasts sculpted into the steel of the guard",
  "a blade made of blackened steel",
  "an unusual hat",
  "a clue from an unsolved crime",
  "a token from a lost love",
  "props for several disguises",
  "alchemical reference manual",
  "a pocket-sized almanac"
  ];
   $carries = Roller($carriesD10);
   $ext = "";
   if ($carries == "a blade with a carved hilt") {
     $extD0 = ["ivory","jade","soapstone","ebony","mahogany","oak"];
     $ext = " made of " . Roller($extD0);
   } elseif ($carries == "a blade with beasts sculpted into the steel of the guard") {
     $extD0 = ["dragons","lions","scorpions","snakes","spiders","wolves"];
     $carries = "a blade with a " . Roller($extD0) . "sculpted into guard";
   }
   $carries .= $ext;

//RETAINERS
//d12 The servant is...
$sIsD12 = [
  "a squire from a powerful noble house",
  "a squire from a minor noble house",
  "a squire of common birth",
  "a frightened link boy",
  "an long-time valet",
  "a reformed criminal-turned valet",
  "the son of an enemy",
  "a mysterious foreigner",
  "a journeyman smith",
  "a simple-minded stable hand",
  "an expert on horses",
  "a camp follower",
  "a journeyman smith",
  "a camp follower"
  ];
   $sIs = Roller($sIsD12);
//d6 The servant works for...
$worksD6 = [
  "the steady pay",
  "the adventure",
  "the training and advancement opportunies",
  "no reason, other than being told",
  "a chance to escape from life imprisonment",
  "romantic devotion"
  ];
   $works = Roller($worksD6);
//d8 On the servant’s face is...
$sFaceD8 = [
  "a large wart",
  "an unsightly scar",
  "a look of determination",
  "a foolish grin",
  "a stupid stare",
  "a look of confusion",
  "a long, hooked nose",
  "pronounced ears"
  ];
   $sFace = Roller($sFaceD8);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Sworn Swords </title>
  </head>
  <body>
    <h2> Sworn Swords </b> </h2>
    <main>
      The knight’s house’s colors are <b><?=$colors?></b> and his house's symbol is <b><?=$symbol?></b>.<br>
      The knight has sworn to a noble lord or lady to <b><?=$sworn?></b> but above all else, the knight values <b><?=$values?></b>.<br>
      The knight is armored in <b><?=$armore?></b> that is <b><?=$armorMod?></b> and is wielding <b><?=$weapon?></b>.<br>
      The knight’s mount is <b><?=$mount?></b> and carries <b><?=$carries?></b>.<br>
      The knight is <b><?=$is?></b>, on his face is <b><?=$face?></b>.<br>
      <h3>RETAINERS</h3><br>
      The servant is <b><?=$sIs?></b> that works for <b><?=$works?></b>.<br>
      On the servant’s face is <b><?=$sFace?></b>.<br>
    </main>
  </body>
</html>
