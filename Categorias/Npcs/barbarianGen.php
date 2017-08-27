<?php require_once("math.php"); ?>
<?php
//Random Barbarian Warriors
//d8 The warrior is armored in...
$armorD8 = [
  "Nothing",
  "Tattered leather",
  "Blood-stained leather",
  "Boiled leather",
  "The hides of scaly beasts",
  "The hides of furry beasts",
  "The hides of exotic beasts",
  "A helm and breastplate taken from a fallen enemy",
  ];
   $armor = Roller($armorD8);
//d12 The warrior is wielding...
$wieldsD12 = [
  "A spear and a hunting knife",
  "A spear and a shield",
  "An exotic, curved blade",
  "A huge, curved blade",
  "An over-sized hammer",
  "An enormous club",
  "A greataxe",
  "A battleaxe and a shield",
  "Several handaxes",
  "A greatsword",
  "A pair of long knives",
  "A longspear and hunting knife",
  ];
   $wields = Roller($wieldsD12);
//d8 The warrior is also carrying...
$carriesD8 = [
  "Several throwing spears",
  "Several throwing axes",
  "Many throwing knives",
  "A shortbow",
  "A longbow",
  "A greatbow",
  "A blowgun",
  "Several bolas",
  ];
   $carries = Roller($carriesD8);
//d6 The warrior fights with...
$tacticD6 = [
  "Hit-and-run tactics",
  "Making a mad charge",
  "Relentless repeated blows",
  "Lots of taunts and jeers",
  "Never breaking eye contact",
  "Lots of head-butting",
  ];
   $tactic = Roller($tacticD6);
//d12 The warrior is...
$isD12 = [
  "A practiced hunter",
  "A poorly-trained slave",
  "A veteran of many wars",
  "A mystical shaman",
  "An expert scout",
  "A master weaponcrafter",
  "A superb herbalist",
  "A beast handler",
  "An insufferable braggart",
  "A drunk",
  "A favorite among the men",
  "A favorite among the ladies",
  ];
   $is = Roller($isD12);
//d12 On the warrior’s face is...
$faceD12 = [
  "A bone through a nose piercing",
  "A bone earing",
  "An empty eye socket",
  "A grisly scar",
  "A serious expression",
  "A look of sadness",
  "A carefree grin",
  "A ruined nose",
  "Some terrifying war paint",
  "A frame of long, beautiful long hair",
  "An unruly beard",
  "A long, braided mustache",
  ];
   $face = Roller($faceD12);
//d10 On the warrior’s body is...
$bodyD10 = [
  "A tattoo of a great beast",
  "A tattoo of a skull and some bones",
  "A tattoo of a weapon",
  "A festering wound",
  "A noticeable scar from a blade",
  "A large burn scar",
  "A ceremonial brand",
  "An intimidating amount of muscle",
  "An awful lot of war paint",
  "A whole lot of hair",
  ];
   $body = Roller($bodyD10);
   if ($body == "A tattoo of a great beast") {
     $extD0 = ["bear","boar","dragon","eagle","lion","wolf"];
     $body = "A tattoo of a great ".(Roller($extD0));
   } elseif ($body == "A tattoo of a weapon") {
     $extD0 = ["arrow", "axe", "spear", "sword"];
     $body = "A tattoo of a ".(Roller($extD0));
   }
   $body .= "";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Barbarian | Tables</title>
  </head>
  <body>
    <h2> Barbarian Finder </h2>
    <p>
      The warrior is armored in <b style="text-transform:lowercase"><?=$armor?></b> wielding <b style="text-transform:lowercase"><?=$wields?></b> and carries <b style="text-transform:lowercase"><?=$carries?></b>.<br>
      He is <b style="text-transform:lowercase"><?=$is?></b> and fights with <b style="text-transform:lowercase"><?=$tactic?></b>.<br>
      On the warrior’s face is <b style="text-transform:lowercase"><?=$face?></b> and his body is <b style="text-transform:lowercase"><?=$body?></b>.<br>
    </p><br>
  </body>
</html>
