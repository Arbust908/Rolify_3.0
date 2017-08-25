<?php require_once("math.php"); ?>
<?php
$specieD12 = [
  "a dragonborn",
  "a dwarf",
  "a dwarf",
  "a dark elf",
  "a high elf",
  "a wood elf",
  "a gnome",
  "a half-elf",
  "a half-orc",
  "a halfling",
  "a human",
  "a high elf",
  "a wood elf",
  "a gnome",
  "a half-elf",
  "a half-orc",
  "a halfling",
  "a human",
  "a human",
  "a tiefling",
  "a "
  ];
 $d12 = Roll($specieD12);
 $specie = $specieD12[$d12];
 $extraSP = "";
  if ($d12 == 11) {
    $extraSPD20 = [
      "centaur",
      "dryad",
      "duergar",
      "kobold",
      "genasi",
      "goblin",
      "hobgoblin",
      "medusa",
      "minotaur",
      "lizardfolk",
      "ogre",
      "pixie",
      "revenant",
      "satyr",
      "shadar-kai",
      "troll",
      "vampire",
      "werebear",
      "wererat",
      "werewolf"
    ];
    $d20 = Roll($extraSPD20);
    $extraSP = $extraSPD20[$d20];
  };
  $specie .= $extraSP;
?>
<?php
//GENERAL PROPERTIES
//d20 The item appears to be made of...
$materialD20 = [
  "rough leather",
  "fine leather",
  "hemp",
  "linen",
  "heavy paper",
  "silk",
  "burlap",
  "a preserved organ",
  "spider silk",
  "mithril chain",
  "human hair",
  "canvas",
  "dragon scales",
  "woven vines",
  "pressed leaves",
  "an old set of bagpipes",
  "a human skull",
  "a human rib cage",
  "a other race skull ",
  "a other race rib cage",
  "living flesh",
  "cloth of gold",
  "cloth of silver",
  "velvet",
  ];
   $material = Roller($materialD20);
  if ($material == "a other race skull ") {
    $material = "a ".$specie." skull"
  } elseif ($material == "a other race rib cage") {
    $material = "a ".$specie." rib cage"
  }
   $material .= "";
//d10 The item is of ___ origin...
$originD10 = [
  "infernal",
  "celestial",
  "arcane",
  "divine",
  "planar",
  "interdimensional",
  "natural",
  "mundane",
  "miraculous",
  "unknown",
  ];
   $origin = Roller($originD10);
//d10 The item...
$modD10 = [
  "smells strange",
  "is covered in postage stamps/seals",
  "is embossed or embroidered with an ornate design",
  "glows in the dark",
  "has an obvious repair",
  "two different materials",
  "has more than one compartment, both are the same",
  "requires attunement to use",
  "deals one d-eight bludgeoning damage",
  "is always open",
  ];
   $mod = Roller($modD10);
  if ($mod == "two different materials") {
    $material .= " and ". Roller($materialD20);
  }
//d20 Things that are placed into the item...
$thingModD20 = [
  "grow in size over time",
  "shrink in size over time",
  "are cleaned over time",
  "are dirtied over time",
  "rust over time",
  "age unnaturally quickly",
  "age unnaturally slowly",
  "rot",
  "are preserved",
  "are hot to the touch",
  "are cool to the touch",
  "slowly gain sentience",
  "slowly lose intelligence",
  "change color",
  "lose color",
  "are blessed",
  "are cursed",
  "shine in darkness",
  "absorb light",
  "roll Twice",
  ];
   $thingMod = Roller($thingModD20);
  if ($thingMod == "roll Twice") {
    $thingMod =Roller($thingModD20) . " and " . Roller($thingModD20);
  }
//d10 The item's previous owner...
$ownerD10 = [
  "the bag had no previous owner",
  "threw it away",
  "sold it",
  "lost it gambling",
  "had it stolen",
  "gave it to a friend",
  "died suddenly",
  "is looking for it",
  "knows where it is",
  "is the Big Bad",
  ];
   $owner = Roller($ownerD10);
//BAG OF HOLDING DIMENSIONS
//d6 On the outside, the bag is roughly ___ feet in diameter at the mouth...
$diamD6 = [
  "1",
  "1 1/2",
  "2",
  "2 1/2",
  "3",
  "3/12",
  ];
   $diam = Roller($diamD6);
//d6 and ___ feet deep...
$deepD6 = [
  "2 1/2",
  "3",
  "3 1/2",
  "4",
  "4 1/2",
  "5",
  ];
   $deep = Roller($deepD6);
//d6 It can hold up to ___ pounds...
$holdsD6 = [
  "200",
  "350",
  "500",
  "650",
  "800",
  "1000",
  ];
   $holds = Roller($holdsD6);
//d4 Not exceeding a volume of ___ cubic feet...
$volumeD4 = [
  "32",
  "48",
  "64",
  "80",
  ];
   $volume = Roller($volumeD4);
//d4 The bag always weighs ___ pounds regardless of its contents
$fixWeightD4 = [
  "10",
  "15",
  "20",
  "25",
  ];
   $fixWeight = Roller($fixWeightD4);
//--//
//HEWARD'S HANDY HAVERSACK DIMENSIONS
//d4 Each side pouch can hold ___ pounds of material...
// 10
// 15
// 20
// 25
// d4 not exceeding a volume of ___ cubic feet...
// 1
// 1/2
// 2
// 2 1/2
// d6 The large central pouch can hold up to ___ pounds of material...
// 50
// 60
// 70
// 80
// 90
// 100
// d6 or ___ cubic feet...
// 6 1/2
// 7
// 7 1/2
// 8
// 8 1/2
// 9
// d4 The haversack always weighs ___ pound regardless of its contents...
// 2 1/2
// 5
// 7 1/2
// 10
//--//
//ADVENTURE SEEDS
//d20 Congratulations! You found an bag of holding! It contains...
$seed1D20 = [
  "nothing",
  "60ft of rope",
  "a wheel of cheese",
  "a bundle of dried leaves",
  "a mummified bird",
  "a signet ring",
  "thirteen random playing cards",
  "a broken tin whistle",
  "a pair of false teeth",
  "an I.O.U.",
  "a dried-up self-inking quill",
  "a packet of seeds",
  "a brochure from a bank",
  "a knit hat",
  "a handful of diamonds",
  "a single children's shoe",
  "a set of thieves' tools",
  "a half-full thermos of warm tea",
  "the remains of the item's previous owner",
  "another bag of holding",
  ];
   $seed1 = Roller($seed1D20);
//d20 You love your bag of holding! It's great! But suddenly...
$seed2D20 = [
  "the item begins to emit smoke when open",
  "you have a 25% chance to pull a living fish out of the item instead of whatever you were looking for",
  "any gold stored in the item instantly becomes lead",
  "any gold stored in the item is instantly doubled",
  "a contract appears in the item, claiming that your lease is up, and that all contents of the item will be repossessed as soon as you finish reading this sentence",
  "rations appear in the item every sunrise, and if unconsumed, disappear every sunset",
  "the item begins to emit bright light from the opening when open",
  "a black-hilted dagger and a list of names appear in the item",
  "a love letter from an NPC you've encountered in the past appears in the item",
  "a bejeweled mechanical bird appears in the item. If wound, it casts sleep (as a first level spell) once per day, but affects creatures of the DM's choosing",
  "a cool breeze begins to flow through the item, and creatures left in the item do not suffocate",
  "if thrown or dropped, the item begins to fall so that it points toward something specific",
  "a crystal ball appears in the item, and if touched, is filled with the image of a searching eye",
  "a long, thin needle appears in the item that can be used to expand or alter the item's outside dimensions",
  "a book appears in the item that contains a first level spell you do not know. This spell can be cast once a day.",
  "a set of two six sided dice appear in the item. Once per day, as an action they can be rolled, and if their value equals nine or more, you may immediately take an extra turn",
  "the item begins to make an unignorable high-pitched squeal any time it is open",
  "the inside dimensions of your item have changed, and you must reroll them",
  "the contents of your item have been swapped with those of another pocket dimension",
  "you hear voices from inside you item, and you are surprised to find two halflings rummaging through the contents of your item",
  ];
   $seed2 = Roller($seed2D20);
//d20 You're walking down a forest/desert/city road when out of nowhere!...
$seed3D20 = [
  "a bag of holding appears in your hand",
  "a heward's handy haversack appears on your back",
  "a portable hole appears on the ground",
  "you come across a bag of holding the size of a horse",
  "you come across a bag of holding the size of a horsefly",
  "you hear a voice say 'you wanna buy a bag of holding?'",
  "you hear a voice say 'if you've got a bag of holding to sell, I'll make it worth your while...",
  "a desperate individual asks you if you've seen their bag of holding",
  "a fleeing individual thrusts a bag of holding into your hands",
  "a small creature makes eye contact with you, then disappears into a bag of holding",
  "a distraught individual threatens to throw (what they say is) a bag of holding into (what they claim is) a portable hole",
  "a well meaning individual doesn't understand why they can't put their portable hole into a bag of holding",
  "an emaciated individual appears out of nowhere, and claims a member of your party trapped them in a portable hole",
  "a member of your party appears out of nowhere, and claims that a doppelganger trapped them in a portable hole",
  "a merchant tries to sell you the schematics for an 'arrowhead of total destruction'",
  "you come across a plaque commemorating the detonation of an 'arrowhead of total destruction'",
  "you come across a worn blue-painted wooden cabinet with a portable hole on one of the inside walls",
  "an individual who claims to be Heward wants you to fill out a questionnaire about haversacks and their relative handiness",
  "an individual who claims to be Heward asks you to test a new invention he calls Heward's Handsome Hat",
  "you come across what you believe to be bag of holding, but is actually a mimic. Oh no!",
  ];
   $seed3 = Roller($seed3D20);
//d6 You come across a bag of holding the size of a house. The opening is...
$seed4D6 = [
  "open, and you can see inside",
  "open, but dark",
  "open, but barred by a large gate or door",
  "open, but sealed by a wall or rocks",
  "closed, but easily opened",
  "closed, and not easily opened",
  ];
   $seed4 = Roller($seed4D6);
//d20 the inside of the bag is...
$seed5D20 = [
  "a house, complete with chimney, porch and cellar. It is very slightly larger on the inside than is on the outside",
  "full of rations, coins and other mundane items, but much larger than you're used to seeing",
  "full of rations, coins and common magical items, but much larger than you're used to seeing",
  "the entrance to a series of caves and caverns that would otherwise be impossible in the area you're in",
  "a facility for the care and maintenance of pocket dimensions. The interior is seemingly infinite, but the opening is always a few steps away",
  "a small kingdom. The entrance is guarded by individuals in heavy armor",
  "a large shop",
  "seemingly empty",
  "seemingly full, but everything is actually an illusion",
  "smaller on the inside than it is on the outside",
  "another universe, seemingly of equal size and complexity as the one you came from",
  "another universe, but everything is slightly smaller than it is in the one you came from",
  "another universe, but everything is slightly larger than is is in the one you came from",
  "another universe, but everything is wildly disproportionate",
  "full of dinosaurs, swamps, and palm trees",
  "an arid vacuum. In the distance you can see stars, planets and endless darkness",
  "an academy",
  "a desert island in a vast sea",
  "an ornately decorated bedroom",
  "a fully stocked torture chamber",
  ];
   $seed5 = Roller($seed5D20);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Holding Bag | Tables</title>
  </head>
  <body>
    <h2> Random Goblin </h2>
    <p>
    <?=$is?> who <?=$skilled?>, <?=$wields?>, <?php echo $wears ?> and <?=$face?>. He <?=$has?> <?=$looking?>. <br>
    </p><br>
  </body>
</html>
