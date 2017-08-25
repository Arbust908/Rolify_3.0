<?php require_once("math.php"); ?>

<?php
//Stealth Mission

//1d100 The PCs need to infiltrate...
$placeD00 = [
  "a giant vehicle",
  "a castle",
  "a cave",
  "a citadel",
  "a city",
  "a crypt",
  "a demiplane",
  "an encampment",
  "a factory",
  "a fortress",
  "a gambling hall",
  "a garden",
  "a hollow tree",
  "a house",
  "an island",
  "a lake",
  "a museum",
  "a prison",
  "a temple",
  "a tomb",
  "a tower",
  "a toy box",
  "a vault",
  "a zoo",
  "a library",
  "a nest",
  "a gargantuan automaton",
  "a cloud",
  "a forest",
  "a giant vehicle",
  "a palace",
  "a cave",
  "a citadel",
  "a city",
  "a grave",
  "a demiplane",
  "an encampment",
  "a factory",
  "a fortress",
  "a gambling hall",
  "a garden",
  "a hollow tree",
  "a manor",
  "an meteorite cluster",
  "a lake",
  "a museum",
  "a prison",
  "a shrine",
  "a tomb",
  "a tower",
  "a toy box",
  "a vault",
  "a zoo",
  "a library",
  "a nest",
  "a gargantuan automaton",
  "a cloud",
  "a forest",
  "a painting",
  "a body",
  "a mirror world",
  "a different realm"
  ];
   $place = Roller($placeD00);
   $ext = "";

  if ($place == "a giant vehicle") {
    $extD00 = [
      "air",
      "land",
      "sea",
      "rails",
      "submarine",
      "digging"
      ];
       $place = "a giant ".(Roller($extD00))." vehicle";
  } elseif ($place == "a mirror world") {
    $ext = " located at ".(Roller($place));
  } elseif ($place == "a painting") {
    $extD00 = [
      "gothic",
      "renaissence",
      "barok",
      "impressionistic",
      "surrealistic",
      "manneristic"
      ];
       $ext = " in ".(Roller($extD00))." style";
  } elseif ($place == "a different realm") {
    $extD00 = [
      "an elemental plane",
      "The Underdark",
      "The Outer Realm",
      "a dream realm"
      ];
       $place = Roller($extD00);
  }
   $place .= $ext;

//1d20 ...to...
$objectiveD20 = [
  "assassinate/destroy",
  "consume/imprint",
  "corrupt/deface",
  "escape with",
  "heal/restore",
  "hide",
  "learn about",
  "negotiate with/for",
  "perform a ritual with/for",
  "photograph/replicate",
  "place/plant",
  "purify",
  "reforge/brainwash",
  "replace",
  "rob grave of/for",
  "sabotage/maim",
  "smuggle",
  "spread rumor for/about",
  "steal/abduct",
  "stop/prevent creation of",
  ];
   $objective = Roller($objectiveD20);

//1d100 ...
$objectiveBD20 = [
  "a book of names",
  "a consumable product",
  "a creature",
  "some creature parts",
  "some creature ingredients",
  "an egg",
  "an explosives",
  "an item piece",
  "a jewel",
  "a ledger",
  "a legend",
  "a magical object",
  "a magical product",
  "a message",
  "an organ",
  "a person",
  "some potential blackmail material",
  "a riddle",
  "a secret document",
  "a seed pod",
  "a song",
  "a source of power",
  "a curse",
  "a spell",
  "a symbol",
  "some trap parts/plans",
  "a treasure hoard",
  "a treasure object",
  "a vehicle/machine",
  "a warning",
  "a weapon",
  "a rune of power",
  "a word of power"
  ];
   $objectiveB = Roller($objectiveBD20);

   $objective .= " ".$objectiveB ;

//1d100 The place is guarded by...
$guardiansD00 = [
  "Aberrations",
  "Beasts",
  "Celestials",
  "Constructs",
  "Dragons",
  "Elementals",
  "Fey",
  "Fiends",
  "Giants",
  "Humanoids",
  "Monstrosities",
  "Oozes",
  "Plants",
  "Undead"
  ];
   $guardians = Roller($guardiansD00);

//1d100 who are...
$areD00 = [
  "alerted that they are coming",
  "aware of their presence",
  "unaware of their presence"
  ];
   $guardians .= " who are ".(Roller($areD00)) ;

//1d10 and will notice their presence by...
$noticeD10 = [
  "a constructed object",
  "a magical object",
  "a magical spell",
  "a special sensing ability",
  "something that makes a noise",
  "something that shows where they are",
  "something that gives off a distinctive smell",
  "something that they can taste",
  "something that they can touch",
  "a special ability",
  ];
   $notice = Roller($noticeD10);

   if ($notice == "a constructed object") {
     $notice .= " with ".Roller($noticeD10);
   } elseif ($notice == "a special ability") {
     $notice = (Roller($noticeD10))." and ".(Roller($noticeD10));
   }

   $notice .= "";

//1d20 The PCs need to do this before...
$timerD20 = [
  "a conflict happens",
  "a creature/person/god does it alone",
  "a detail changes",
  "a great change happens",
  "a transformation is complete",
  "an object is destroyed",
  "damage is irreversible",
  "development is done",
  "something expires",
  "sunrise/sunset",
  "the location is destroyed",
  "the objective changes location",
  "the opposition beats them to it",
  "the PCs change",
  "the personnel make a duty shift/are fed",
  "the planets align",
  "the quest giver changes his/her mind",
  "they are killed",
  "they can't go back",
  "they die"
  ];
   $timer = Roller($timerD20);

//1d12 but it's not that easy because they discover that what/whom they are seeking is...
$twistD12 = [
  "within the belly of a creature that consumed it",
  "decaying once removed from place",
  "encased in glass",
  "fake",
  "guarded by a fierce creature",
  "hidden",
  "located at a physically hazardous area",
  "locked/chained away",
  "magically warded",
  "requires a password",
  "trapped",
  "unstable when it comes into contact"
  ];
   $twist = Roller($twistD12);

//1d20 If they fail, they will be...
$failD20 = [
  "banished",
  "cursed",
  "dead",
  "encased in ice",
  "subjected to cruel experiments",
  "fed to a creature",
  "humiliated",
  "imprisoned",
  "mind wiped",
  "mutated",
  "questioned",
  "forced to repeat their training excercises",
  "replaced",
  "send back in time",
  "send to a demiplane",
  "send to the future",
  "set in an elaborate slow death trap",
  "silenced",
  "tortured",
  "turned into a stone",
  "turned into a tree"
  ];
   $fail = Roller($failD20);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TE | Tables</title>
  </head>
  <body>
    <h2> Stealth Quest </h2>
    <p><b>
      The adventurers must infiltrate <?=$place?> guarded by <?=$guardians?>, to try and <?=$objective?> before <?=$timer?>. They may be descovered because of <?=$notice?><br>
      The thing is that <?=$objectiveB?> is <?=$twist?> and if they fail they will be <?=$fail?><br>
    </b></p>
  </body>
</html>
