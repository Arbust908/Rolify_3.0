<?php require_once("math.php"); ?>
<?php
//Random Goblin Gangs
//d10 The goblins’ primary “business” involves...
$businessD10 = [
  "Raiding villages and farms",
  "Burglarizing storehouses and shops",
  "Harassing anyone who passes through their territory",
  "Robbing caravans carrying gems, precious metals, and exotic goods",
  "Holding up traders’ ships or wagons",
  "Smuggling a ",
  "Smuggling b ",
  "Serving as muscle for evildoers",
  "Mining and crafting",
  "Pranks and hijinks",
  ];
   $bussiness = Roller($businessD10);
   $ext = "";
   if ($bussiness == "Smuggling a ") {
     $extD = ["smokeleaf", "a hallucinogenic mushroom", "sleepysalt (a downer)", "sharpsugar (an upper)"];
     $bussiness = Roller($extD);
   } elseif ($bussiness == "Smuggling b ") {
     $extD = ["exotic beasts", "foreign harlots", "fugitives", "slaves"];
   }
   $bussiness .= $ext;
//d10 The goblin gang’s symbol is...
$symbolD10 = [
  "a skull",
  "an arrow",
  "a dagger",
  "the moon",
  "a star",
  "a snake",
  "a spider",
  "a rat",
  "a wolf",
  "a bat"
  ];
   $symbol = Roller($symbolD10);
//d20 The goblin gang’s colors are...
$colorD20 = [
  "Black",
  "Dark brown",
  "Crimson",
  "Grey",
  "Gold",
  "Khaki",
  "Dark green",
  "White",
  "Dark green and gold",
  "Black and gold",
  "Dark brown and grey",
  "Grey and white",
  "Black and grey",
  "Black and white",
  "Black and crimson",
  "Dark brown and crimson",
  "Crimson and khaki",
  "Dark brown and khaki",
  "Khaki and dark green",
  "Dark green and crimson"
  ];
  $color = Roller($colorD20);
//d6 The goblins’ lair is located...
$lairD6 = [
  "In a dark and haunted forest",
  "In an enchanted forest",
  "Along a mountain pass",
  "High in the mountains",
  "Beneath a bustling city",
  "Near a quiet farm village"
  ];
   $lair = Roller($lairD6);
//d6 The goblins’ lair is...
$lairIsD6 = [
  "a series of natural caverns",
  "an abandoned mine",
  "a mine in which the goblins are actively digging",
  "an underground fortress",
  "a semi-organized military encampment",
  "a crude encampment"
  ];
   $lairIs = Roller($lairIsD6);
//d20 The goblins are particularly fond of picking on...
$targetD20 = [
  "Fishermen and sailors",
  "Beggars and drunks",
  "Merchants and moneychangers",
  "Young noblemen",
  "Young noblewomen",
  "Old noblewomen",
  "Gamblers and thieves",
  "Priests and monks",
  "Priestesses",
  "Constables and sheriffs",
  "Castle or town guards",
  "Cooks and scullery maids",
  "Barkeeps and barmaids",
  "Harlots and madames",
  "Circus performers",
  "Foreign travelers and peasant girls",
  "Young children",
  "Miners and prospectors",
  "Elves and rangers",
  "Dwarves and gnomes"
  ];
   $target = Roller($targetD20);
//d10 The goblins’ are currently planning a raid on...
$raidD10 = [
  "The residence of the leader or a senior gangmember",
  "An artisan's shop or guildhall",
  "A merchant's office",
  "A tavern or inn",
  "A brothel",
  "A warehouse or shipyard",
  "A temple complex or shrine",
  "The town hall",
  "A shantytown",
  "The residence of a wealthy individual or prominent citizen"
  ];
   $raid = Roller($raidD10);
//d10 The goblins’ boss is...
$bossD10 = [
  "an egotistical goblin warrior",
  "a charismatic goblin rogue",
  "a mysterious goblin shaman",
  "a talented goblin thief",
  "a well-known goblin war hero",
  "a ruthless goblin hexer",
  "a cunning gobliness",
  "a brutal hobgoblin warpriest",
  "a brilliant hobgoblin warlord",
  "a calculating bugbear assassin",
  ];
   $boss = Roller($bossD10);
//d6 The goblins’ goals include (boss and rank-and-file members could have different goals)...
$goalsD6 = [
  "disruption of the region’s politics",
  "disruption of the region’s trade",
  "revenge against a specific organization",
  "revenge against a rival goblin gang",
  "spreading chaos and destruction",
  "possession of a powerful artifact"
  ];
   $goals = Roller($goalsD6);
//d12 The goblins typically fight with...
$fightD12 = [
  "Swarm tactics",
  "Hit-and-run tactics",
  "Ambush tactics",
  "Choreographed maneuvers",
  "Unpredictable maneuvers",
  "Lots of smiles and jokes",
  "Lots of fancy footwork",
  "Lots of screaming and shouting",
  "Kicking and stomping",
  "Lots of head-butting",
  "Lots of biting and scratching",
  "Laying traps"
  ];
   $fight = Roller($fightD12);
//d6 As enforcers or extra muscle, the goblins sometimes hire...
$alliesD6 = [
  "Hobgoblin mercenaries",
  "Bugbear thugs",
  "Ogre savages",
  "Orc berserkers",
  "Trolls",
  "Other goblin gangs"
  ];
   $allies = Roller($alliesD6);
//d6 As guardians or pets, the goblins sometimes keep...
$petsD6 = [
  "Wolves",
  "Wargs",
  "Giant spiders",
  "Boars",
  "Giant bats",
  "Dire rats"
  ];
   $pets = Roller($petsD6);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Goblin Clans | Tables</title>
  </head>
  <body>
    <h2> <?=$color?> <?=$symbol?> </h2>
    <p>
    This clan of goblins are lead by <b><?=$boss?></b> with the goal of <b><?= $goals ?></b> and flyes the clan banner, that is <b><?=$color?></b> with <b><?= $symbol ?></b> on it. They live in <b><?= $lairIs ?></b> that is located <b><?= $lair ?></b>, where they have <b><?= $pets ?></b> as guardians and pets. There usual business involves <b><?= $bussiness ?></b> and target <b><?= $target ?></b> but now they are planning a raid on <b><?= $raid ?></b> with the help of <b><?= $allies ?></b> with <b><?= $fight ?></b>.
    </p><br>
  </body>
</html>
