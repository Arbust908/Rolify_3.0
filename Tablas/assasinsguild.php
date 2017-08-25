<?php require_once("math.php"); ?>

<?php
//Random Assassins' Guilds

//d12 The guild’s symbol is...
$symbolD12 = [
  "a skull",
  "an eye",
  "a flame",
  "a dagger",
  "a scythe",
  "an arrow",
  "a fish",
  "a crow",
  "a rat",
  "a scorpion",
  "a spider",
  "a snake"
  ];
   $symbol = Roller($symbolD12);

//d20 The guild’s preferred method of execution is...
$executionD20 = [
  "ingested poison",
  "allergic reaction",
  "exposure to deadly (but not highly contagious) disease",
  "contact poison applied to a weapon",
  "arrow/bolt from range",
  "knife in the back",
  "knife in the chest",
  "multiple stab wounds",
  "slitting throats",
  "gutting",
  "eviscerating",
  "flaying ",
  "scalping",
  "beheading",
  "strangulation",
  "hanging",
  "burying alive",
  "drowning",
  "boiling alive",
  "throwing off a roof",
  "submersion in acid",
  "pouring acid",
  "fiery explosion",
  "burning alive",
  "feeding to animals"
  ];
   $execution = Roller($executionD20);

//d12 Guildmembers typically arm themselves with...
$armedD12 = [
  "poisoned daggers and shortswords",
  "throwing knives",
  "over-sized daggers",
  "serrated daggers",
  "daggers and crossbows",
  "axes and knives",
  "bows and arrows",
  "shortswords and crossbows",
  "sickles and scythes",
  "garrotes and daggers",
  "exotic blades and blowguns",
  "bolas and poisoned projectiles"
  ];
   $armed = Roller($armedD12);

//d6 Guildmembers typically operate...
$operateD6 = [
  "alone",
  "in pairs",
  "in small groups",
  "by infiltrating an organization",
  "by impersonating a specific individual",
  "in plain sight"
  ];
  $operates = Roller($operateD6);

//d6 Guildmembers typically know...
$knowD6 = [
  "very few other guildmembers",
  "several other guildmembers",
  "the details of the guild’s organization",
  "nothing about the guild’s leadership",
  "the names of the guild’s leaders, though they’ve never any of them",
  "one of the guild’s leading members and no other guildmembers"
  ];
  $know = Roller($knowD6);

//d12 The guild’s leader is...
$leaderD12 = [
  "a dangerous megalomaniac",
  "a charismatic demagogue",
  "a mysterious foreigner",
  "a talented thief",
  "a well-known public figure",
  "a ruthless killer",
  "a femme fatale",
  "a charming rogue",
  "a dashing swashbuckler",
  "a brutish thug",
  "a religious fanatic",
  "a veteran soldier"
  ];
  $leader = Roller($leaderD12);

//d6 The guild’s goals include (leadership and rank-and-file members could have different goals)...
$goalsD6 = [
  "expanding the client base",
  "corrupting and influencing the politics of the city or region",
  "eliminating a rival assassins’ guild in the same city or region",
  "eliminating a rival assassins’ guild in a foreign city or region",
  "intimidating the masses",
  "instigating rebellion among the masses"
  ];
  $goals = Roller($goalsD6);

//d8 The guild refuses to take contracts to kill...
$refuseD8 = [
  "women",
  "young children",
  "nobles and prominent citizens",
  "priests and monks",
  "peasants and poor folk",
  "foreigners and travelers",
  "members of the client’s family",
  "fellow criminals"
  ];
  $refuses = Roller($refuseD8);

//d8 Guildmembers typically strike with...
$strikeD8 = [
  "hit-and-run tactics",
  "ambush tactics",
  "diversionary tactics",
  "a precisely planned attack strategy",
  "a well-planned escape strategy",
  "the element of surprise",
  "announcing their presence",
  "no thought of escape"
  ];
  $strike = Roller($strikeD8);

//d8 Guildmembers typically plan their attacks for...
$timeD8 = [
  "just after sunrise",
  "high noon",
  "just after sunset",
  "well into the night",
  "the toll of midnight",
  "after midnight",
  "the wee hours of the morning",
  "just before sunrise"
  ];
  $time = Roller($timeD8);

//d12 The guild’s headquarters is hidden in or near...
 $whereD2 = ["hidden in","near"];
$hqD12 = [
  "the residence of the leader",
  "the residence of the a guildmember",
  "an artisan's shop",
  "a merchant's office",
  "a tavern",
  "a brothel",
  "a warehouse or shipyard",
  "a temple complex",
  "the city's sewers",
  "the town hall",
  "an abandoned guildhall or warehouse",
  "an barracks",
  "an armory",
  "the residence of a prominent citizen",
  "the residence of a wealthy individual"
  ];
  $hq = (Roller($whereD2))." ".(Roller($hqD12));

//d12 The guild is feared or respected by...
$fameD12 = [
  "fishermen and sailors",
  "beggars and orphans",
  "merchants and moneychangers",
  "nobles and rulers",
  "politicians and magistrates",
  "guards and sheriffs",
  "soldiers and warriors",
  "thieves and criminals",
  "servants and slaves",
  "priests and sages",
  "women and children",
  "other assassins"
  ];
  $feared = "are feared by ".(Roller($fameD12));
  $respected = "respected by ".(Roller($fameD12));

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TE | Tables</title>
  </head>
  <body>
    <h2> Assasins Guild </h2>
    <p>
      This guild symbol is <?=$symbol?> and it's leader is <?=$leader?> whos goals incude <?=$goals?>.<br>
      Guildmembers are usually armed with <?=$armed?>, operate <?=$operates?> and they typically know <?=$know?>.<br>
      There MO is to strike with <?=$strike?> and are planned for <?=$time?> and there execution style is <?=$execution?>. Still they refuse to kill <?=$refuses?>.<br>
      The guild is located <?=$hq?> and they <?=$feared?> and <?=$respected?>.<br>
    </p><br>
  </body>
</html>
