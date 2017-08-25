<?php require_once("math.php"); ?>
<?php
//Random Orkish Clans
//d12 The orcs are...
$areD12 = [
  "nomadic hunters, following game",
  "raiders displaced from their native lands",
  "in exile from their native lands",
  "in the service of a sovereign warlord",
  "a loose confederacy of tribes and families related by blood",
  "degenerate survivors from a broken army",
  "disorganizes; a clan of competing warriors",
  "a tight-knit war band",
  "bent on sowing chaos and mayhem",
  "raiders after supplies and slaves",
  "marching to war under the leadership of a great chief",
  "on an errand for a powerful being",
  "on an errand for an evil wizard"
  ];
   $are = Roller($areD12);
//d12 The orcs value...
$valueD12 = [
  "bravery",
  "strength",
  "wisdom",
  "virility",
  "honoring the gods",
  "honoring their ancestors",
  "battle-scars",
  "survival",
  "kill counts",
  "scalps",
  "scars",
  "steel",
  "meat"
  ];
   $value = Roller($valueD12);
//d4 The orcs’ iconography features...
$deathD10 = ["bats","blood","bones","corpses","crows","flames","ghosts","scorpions","skulls","vultures"];
$heavensD6 = ["clouds","lightning","moon","snow","stars","sun"];
$streangthD6 = ["arrows","axes","fists","spears","stones","swords"];
$beastD8 = ["bears","boars","eagles","horses","lions","owls","snakes","wolves"];
$death = Roller($deathD10);
$heavens = Roller($heavensD6);
$streangth = Roller($streangthD6);
$beast = Roller($beastD8);
$iconography = "This clan sees ".$death." as a symbol of death, the ".$heavens." as a symbol of the heaves and the ".$beast." as a holy beast.";
//d10 The orcs’ chief is...
$bossD10 = [
  "a well-respected chief",
  "a charismatic warlord",
  "a mysterious shaman",
  "a descendent of an honored hero",
  "a ruthless killer",
  "a brutish thug",
  "an impatient young warrior",
  "a wise old chief",
  "a celebrated war hero",
  "a prolific lover"
  ];
   $boss = Roller($bossD10);
//d12 The orcs’ favorite meat comes from...
$meatD12 = [
  "Dwarves and halflings",
  "Beggars and thieves",
  "Merchants and caravan guards",
  "Noblemen",
  "Noblewomen",
  "Priests and priestesses",
  "Slaves",
  "Circusfolk and minstrels",
  "Foreign travelers",
  "Peasant women",
  "Young children",
  "Elves and pixies"
  ];
   $meat = Roller($meatD12);
//d8 The orcs fear...
$fearD8 = [
  "men armored in steel",
  "human women",
  "spellcasters",
  "members ",
  "a ",
  "the Gods",
  "aberrant evils",
  "dragons",
  ];
   $fear = Roller($fearD8);
   $ext = "";
   if ($fear == "members ") {
     $extD00 = ["dwarves","elves","goblinoids","reptilian humanoids"];
     $ext = Roller($extD00);
     $fear = "";
   }elseif ($fear == "a ") {
     $extD00 = ["blizzards","earthquakes","floods","thunderstorms","volcanoes","typhoons"];
     $ext = Roller($extD00);
     $fear = "";
   }
   $fear .= $ext;
//d10 The orcs are notorious for...
$fameD10 = [
  "Never leaving survivors",
  "Feeding prisoners to wild beasts",
  "Tattooing prisoners",
  "Scalping enemies",
  "Flaying enemies",
  "Raiding and burning villages",
  "Plundering merchant caravans",
  "Eating prisoners raw",
  "Claiming prisoners as slaves",
  "Taking prisoners as breeders"
  ];
   $fame = Roller($fameD10);
//d12 The orcs are known for...
$knownD12 = [
  "Screaming and shouting during battle",
  "Convening with ghosts and spirits",
  "Ritual animal sacrifice under the new moon",
  "Ritual humanoid sacrifice deep within the earth",
  "Ritualistic blood-letting",
  "Ritualistic sexual acts under the full moon",
  "Eating unusually-prepared meats",
  "Prolific amounts of drinking",
  "Never cutting their hair",
  "Shaving their heads and bodies",
  "Wearing long dreadlocks",
  "Wearing long braids",
  "Bathing and perfuming their bodies"
  ];
   $known = Roller($knownD12);
//d6 The orcs’ attitude is...
$attitudeD6 = [
  "Rowdy and festive",
  "Joyful and eager to fight",
  "Relaxed and carefree",
  "Frightened and suspicious",
  "Hostile and suspicious",
  "Hostile and eager to fight"
  ];
   $attitude = Roller($attitudeD6);
//d6 The orcs’ goals include (chief and lower-ranking members could have different goals)...
$goalsD6 = [
  "Upheaval of the region’s politics",
  "Disruption of the region’s trade",
  "Revenge against another civilization",
  "Revenge against a rival orkish clan",
  "Spreading chaos and destruction",
  "Possession of a powerful artifact"
  ];
   $goals = Roller($goalsD6);
//d8 The orcs typically fight with...
$fightD8 = [
  "Hit-and-run tactics",
  "Ambush tactics",
  "Unpredictable maneuvers",
  "Lots of screaming and shouting",
  "Kicking and stomping",
  "Lots of head-butting",
  "Lots of biting and scratching",
  "breaks for ",
  ];
   $fight = Roller($fightD8);
   $ext = "";
   if ($fight == "breaks for ") {
     $extD00 = ["eating","looting corpses","re-forming ranks","arguing among themselves"];
     $ext = Roller($extD00);
   }
   $fight .= $ext;
//d6 As guardians or pets, the orcs sometimes keep...
$petD6 = [
  "Boars",
  "Dire rats",
  "Giant lizards",
  "Ogres",
  "Wargs",
  "Wolves"
  ];
   $pet = Roller($petD6);
//d10 As slaves, the orcs keep...
$slavesD10 = [
  "Dwarves",
  "Gnomes",
  "Goblins",
  "Halflings",
  "Humans",
  "Kobolds",
  "Undead servitors",
  "Nothing; the orcs eat any captives they take",
  "Nothing; the orcs leave no survivors",
  "Nothing; the orcs believe in freedom for all beings"
  ];
   $slaves = Roller($slavesD10);
//d12 Most of the orcs are wielding...
$wieldsD12 = [
  "Spears and large hunting knives",
  "Spears and javelins",
  "Exotic, curved blades and several bolas",
  "Huge, curved blades",
  "Exotic, curved blades and blowguns",
  "Pikes and shortswords",
  "Pikes and short bows",
  "Battleaxes and throwing axes",
  "Battleaxes and longbows",
  "Longswords and longbows",
  "Jagged greatswords and shortbows",
  "Greataxes and javelins"
  ];
   $wields = Roller($wieldsD12);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Orc Clans | Tables</title>
  </head>
  <body>
    <h2> The Tales of the Orc Clan </h2>
    <p>
      <?=$value?><br>
      <?=$death?><br>
      <?=$heavens?><br>
      <?=$streangth?><br>
      <?=$beast?><br>
      <?=$iconography?><br>
      <?=$boss?><br>
      <?=$meat?><br>
      <?=$fear?><br>
      <?=$fame?><br>
      <?=$known?><br>
      <?=$attitude?><br>
      <?=$goals?><br>
      <?=$fight?><br>
      <?=$slaves?><br>
      <?=$wields?><br>

    </p><br>
  </body>
</html>
