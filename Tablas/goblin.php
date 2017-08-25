<?php require_once("math.php"); ?>
<?php
//Random Goblins
//d20 This goblin is...
$isD20 = [
  "a miner",
  "a forager",
  "a warrior",
  "a scout",
  "a trapmaker",
  "an archer",
  "an assassin",
  "a hexer",
  "a wolf-rider",
  "a sneak",
  "an armorer",
  "a cook",
  "a builder",
  "a beastshifter",
  "a skullcrusher",
  "a thug",
  "a warpriest",
  "a prankster",
  "a blackblade",
  "a worthless nobody"
  ];
   $is = "This goblin is ".Roller($isD20);
//d12 The goblin is particularly skilled at...
$skillD12 = [
  "being sneaky",
  "not being seen",
  "tracking foes",
  "building traps",
  "avoiding traps",
  "repairing traps",
  "foraging for food and water",
  "wrangling beasts",
  "digging tunnels",
  "crafting arms and armor",
  "crushing skulls",
  "cutting throats"
  ];
   $skilled = "is specialy skilled at ".Roller($skillD12);
//d12 The goblin wields...
$wieldsD12 = [
  "a rusty sword",
  "a finely-made sword",
  "a spiked club",
  "a wicked looking axe",
  "a spear decorated with feathers",
  "several polished daggers",
  "a large, serrated dagger",
  "a pair of curved daggers",
  "a cracked wooden shield",
  "a shield, emblazoned with the gangs’ symbol",
  "arrows fletched with crow feathers",
  "arrows fletched with hawk feathers"
  ];
   $wields = "wields ".Roller($wieldsD12);
//d12 The goblin wears...
$wearsD12 = [
  "armor with greasy stains",
  "patched leather armor",
  "piecemeal chain armor",
  "a leather helm",
  "a large skull as a helm",
  "a wolf-face helm",
  "a lanyard of severed ears",
  "a big hoop earring",
  "a shiny silver belt",
  "a wolf skin",
  "a black cloak with a hood",
  "a large belt purse"
  ];
   $wears = "and wears ".Roller($wearsD12);
//d12 The goblin’s face has...
$faceD12 = [
  "blue warpaint",
  "an eyepatch",
  "burn scars",
  "only one ear",
  "no front teeth",
  "an unusal tattoo on the forehead",
  "stitches closing a wound on the jaw",
  "a topknot above it",
  "several muddy smudges",
  "a boil oozing pus",
  "a wisp of a mustache",
  "amazing sideburns"
  ];
   $face = "his face has ".Roller($faceD12);
//d12 The goblin has...
$hasD12 = [
  "an unsettling stare",
  "a lean and hungry look",
  "a maniacal laugh",
  "a mad cackling laugh",
  "a high-pitched twittering laugh",
  "a tendency to snicker at everything",
  "a nervous twitch",
  "a difficult time standing still",
  "a waddle",
  "a limp",
  "an unsavory habit of drooling",
  "a habit of sniffing loudly"
  ];
   $has = "also has ".Roller($hasD12);
//d12 Presently, the goblin is looking to...
$lookingD12 = [
  "find something to eat",
  "find something to drink",
  "find some coins or gems to steal",
  "warn the gang of monster hunters in the area",
  "warn the gang of a savage beast in the area",
  "report to the gang as to where to find treasure",
  "prove its mettle to the gang's boss",
  "avoid notice by the gang's boss",
  "avoid notice by anyone",
  "leave the gang entirely",
  "play a cruel prank",
  "swap distasteful jokes"
  ];
   $looking = "and is looking for ".Roller($lookingD12);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Goblin | Tables</title>
  </head>
  <body>
    <h2> Random Goblin </h2>
    <p>
    <?=$is?> who <?=$skilled?>, <?=$wields?>, <?php echo $wears ?> and <?=$face?>. He <?=$has?> <?=$looking?>. <br>
    </p><br>
  </body>
</html>
