<?php require_once("math.php"); ?>
<?php
//Random Cults: Bow Down to the Lord of What?...
//d12 The cultists revere...
$revereD12 = [
  "A dragon",
  "A demon lord",
  "An archdevil",
  "A long-dead ancient hero",
  "A long-dead ancient villain",
  "A dead god",
  "An aberrant creature",
  "An elemental creature",
  "A primordial",
  "Primal spirits",
  "An exarch of a god",
  "The cult’s own leader"
  ];
   $revere = Roller($revereD12);
//d10 The cultists meet in...
$meetD10 = [
  "A secret chamber in a well-known temple",
  "The cellar of a popular tavern",
  "A secret chamber in a well-known guildhall",
  "The cellar of a wealthy merchant's house",
  "The city sewers",
  "Ancient catacombs beneath the city",
  "A cabin in the countryside",
  "A creepy, dark cave",
  "A heavily guarded chamber within a castle",
  "The stacks of a well-stocked library"
  ];
   $meet = Roller($meetD10);
//d20 The cult’s leader is...
$leaderD20 = [
  "A devoted acolyte",
  "A dogmatic teacher",
  "An adept healer",
  "A charismatic preacher",
  "An eccentric scholar",
  "An outspoken zealot",
  "A dangerous megalomaniac",
  "A charismatic demagogue",
  "A mysterious foreigner",
  "A well-known public figure",
  "A ruthless killer",
  "A femme fatale",
  "A charming rogue",
  "A powerful noble",
  "A talented artist",
  "A religious fanatic",
  "A veteran soldier",
  "A humble artisan",
  "An ancient hero reborn",
  "The second coming of a god"
  ];
   $leader = Roller($leaderD20);
//d6 The cult's membership is primarily made up of...
$bodyD6 = [
  "beggars",
  "laborers",
  "servants",
  "slaves",
  "guildmasters",
  "merchants",
  "nobles",
  "royalty",
  "devotees of the sun god",
  "devotees of the earth mother",
  "devotees of the death god",
  "devotees of the huntress",
  "devotees of the goddess of love",
  "devotees of the storm god",
  "devotees of the trickster god",
  "devotees of the war god",
  "blacksmiths",
  "carpenters",
  "farmers",
  "fishermen",
  "miners",
  "soldiers",
  "stonemasons",
  "weavers",
  "dwarves",
  "elves",
  "gnomes",
  "goblins",
  "half-breeds",
  "halflings",
  "humans",
  "orcs",
  "reptilians",
  "any and every one"
  ];
   $body = Roller($bodyD6);
//d8 The cult's practices involve (leadership and believers could adhere to different practices)...
$preacticeD8 = [
  "sacrificing bulls",
  "sacrificing calves",
  "sacrificing cats",
  "sacrificing chickens",
  "sacrificing dogs",
  "sacrificing goats",
  "sacrificing pigeons",
  "sacrificing rabbits",
  "sacrificing rams",
  "sacrificing songbirds",
  "sacrificing children",
  "sacrificing elderly",
  "sacrificing harlots",
  "sacrificing nonbelievers",
  "sacrificing priests and priestesses",
  "sacrificing virgins",
  "self-mutilating their arm",
  "self-mutilating their back",
  "self-mutilating their cheek",
  "self-mutilating their chest",
  "self-mutilating their ear",
  "self-mutilating their eye",
  "self-mutilating their feet",
  "self-mutilating their finger",
  "self-mutilating their genitalia",
  "self-mutilating their nose",
  "offerings of burnt corpses",
  "offerings of burnt rare herbs",
  "offerings of burnt sacred incense",
  "offerings of burnt high-quality meat",
  "offerings of burnt nonbeliever",
  "offerings of burnt prisoners",
  "offerings of gold, gems, and valuables",
  "strange incantations",
  "public beatings",
  "public looting",
  "public murders",
  "public riots",
  "ritualistic sexual bestiality",
  "ritualistic sexual breedings",
  "ritualistic sexual deflowerings",
  "ritualistic sexual orgies"
  ];
   $preactice = Roller($preacticeD8);
//d8 The cult's goals (leadership and believers could have different goals)...
$goalD8 = [
  "domination of the city or region",
  "destruction of the city or region",
  "reincarnation of a long-dead entity",
  "declaration of war against a rival city or nation",
  "rebellion against the city or nation's elite",
  "death to non-believers",
  "opening a portal to another plane",
  "release of a powerful captive entity"
  ];
   $goal = Roller($goalD8);
//d12 The cult’s members must follow a strict rule regarding...
$rulesD12 = [
  "waring the hair a ",
  "wearing on the lapel a",
  "maintaining their personal weapon",
  "treatment of pets",
  "mounting a horse",
  "dressing one’s self for worship",
  "dressing one’s self for day-to-day activities",
  "diet",
  "exercise routines",
  "bathing",
  "styling one’s hair",
  "brushing one’s teeth"
  ];
   $rules = Roller($rulesD12);
   $ext = "";
   if ($rules == "waring the hair a " || $rules == "wearing on the lapel a") {
     $extD = ["lily","orchid","rose","tulip"];
     $ext = Roller($extD);
   }
   $rules .= $ext;
  // Maintaining their personal weapon (d4): 1. club; 2. dagger; 3. handaxe; 4. staff.
//d12 The cult’s members are particularly afraid of or takes special care to avoid...
$whatD2 = ["they are afraid of ","they take care of "];
$specialD12 = [
  "hallowed places",
  "moonlight",
  "sunlight",
  "crossing running water",
  "sharp wooden objects",
  "garlic",
  "silver objects",
  "relics of the gods",
  "sleeping outdoors",
  "milk and cheese",
  "eating meat",
  "sobriety"
  ];
   $peculiar = (Roller($whatD2)).(Roller($specialD12));
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Cult Maker | Tables</title>
  </head>
  <body>
    <h2> Random Cult </h2>
    <p>
      <?=$revere?> is revered by this secret cult lead by <?=$leader?>. They meeting place is <?=$meet?> and the bulk of the cult is made of <?=$body?>, there usual practices involve <?=$preactice?>. The cults goal is <?=$goal?> also they must follow a stric rule regarding <?=$rules?> and <?=$peculiar?>.<br>
    </p><br>
  </body>
</html>
