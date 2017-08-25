<?php require_once("math.php"); ?>
<?php
//Random Helms
//d6 Helm material: The helm is made of…
$matD6 = [
  "boiled leather",
  "bronze",
  "copper",
  "iron",
  "steel",
  "valuable metal"
  ];
   $mat = Roller($matD6);
   if ($mat == "valuable metal") {
     $extD00 = [
       "gold-plated steel",
       "silver-plated steel",
       "platinum-plated steel",
       "mithral",
       "adamantine",
       "odium"
        ];
        $mat = Roller($extD00);
   }
   $mat .= "";
//d6 Helm feature: The helm has…
$hasD6 = [
  "several sharp spikes",
  "fur-lined interior",
  "a mesh facemask",
  "a solid facemask with a pair of eye holes",
  "a solid facemask with a single wide eye slit",
  "an open face with a protective nose guard",
  "a couple of horns",
  "a mouth guard",
  "a facemask with lots of slim slits"
  ];
   $has = Roller($hasD6);
//d6 Decorative feature: The helm is adorned with…
$decorationD6 = [
  "ancient runes etched into the surface",
  "a single large feather",
  "several feathers",
  "a horsehair tassel",
  "the likeness of a skull",
  "the likeness of a beast",
  ];
   $decoration = Roller($decorationD6);
//d6 Beast Likeness: The helm is formed in the likeness of a/an...
$preD00 = ["","","","","","","","","","","","","","","","","","","","the eskeletal form of"];
$looksD6 = [
  "a dragon",
  "a tiger",
  "a hound",
  "a bull",
  "an owl",
  "a frog",
  "a dragon",
  "a lion",
  "a wolf",
  "a stag",
  "an eagle",
  "a snake"
  ];
   $looks =(Roller($preD00))." ".(Roller($looksD6));
//d6 Special protection: When properly activated, the helm provides extra protection against...
$protectD6 = [
  "enchantments",
  "illusions",
  "radiant damage",
  "necrotic damage",
  "psychic damage",
  "thunder damage",
  "enchantments",
  "illusions",
  "radiant damage",
  "necrotic damage",
  "psychic damage",
  "thunder damage",
  "enchantments",
  "illusions",
  "radiant damage",
  "necrotic damage",
  "psychic damage",
  "thunder damage",
  "enchantments",
  "illusions",
  "radiant damage",
  "necrotic damage",
  "psychic damage",
  "thunder damage",
  "enchantments",
  "illusions",
  "radiant damage",
  "necrotic damage",
  "psychic damage",
  "thunder damage",
  "enchantments",
  "illusions",
  "radiant damage",
  "necrotic damage",
  "psychic damage",
  "thunder damage",
  "every kind of damage"
  ];
   $protect = Roller($protectD6);
//d6 Special property: The helm...
$specialD6 = [
  "allows the wearer to commune with demonic beings",
  "erupts with a burst of psychic energy when the wearer is hit",
  "enhances the wearer’s senses",
  "allows the wearer to grant resistance to damage an ally",
  "allows the wearer to summon incorporeal undead",
  "allows the wearer to teleport short distances",
  "allows the wearer to commune with dead souls",
  "erupts with a burst of necrotic energy when the wearer is hit",
  "enhances the wearer’s senses",
  "allows the wearer to grant resistance to damage an ally",
  "allows the wearer to summon elementals",
  "allows the wearer to teleport short distances",
  ];
   $specia = Roller($specialD6);
//d6 Activation: The helm’s special protection or special property activates or amplifies…
$activateD6 = [
  "against dragons",
  "against giants",
  "against fiends",
  "against aberrations",
  "against fey",
  "against celestials",
  "when worn by a dwarf",
  "when worn by a genie",
  "when worn by a giant",
  "when worn by a half-dragon",
  "when worn by a human",
  "when worn by an undead",
  "on the Feywild",
  "on the Plane of Air",
  "on the Plane of Earth",
  "on the Plane of Fire",
  "on the Plane of Water",
  "on the Shadowfell",
  "in darkness",
  "in the realm of a particular elemental lord",
  "in places touched by death",
  "in darkness",
  "in the realm of a particular elemental lord",
  "in places touched by death",
  "in darkness",
  "in the realm of a particular arch-fiend",
  "in places touched by death",
  "in darkness",
  "in the realm of a particular elemental lord",
  "in places touched by death",
  "in darkness",
  "in the realm of a particular elemental lord",
  "in places touched by death",
  "in darkness",
  "in the realm of a particular arch-fiend",
  "in places touched by death",
  "at will"
  ];
   $activate = Roller($activateD6);
//d6 Creator: The helm was made by a/an…
$creatorD6 = [
  "severely misunderstood sorcerer",
  "a dwarvish warpriest",
  "a simple blacksmith",
  "a charismatic crusader",
  "a devoted monk",
  "a mad pesant as a gift to its deity",
  "a vengeful God",
  "accident by a group of lizardfolk"
  ];
   $creator = Roller($creatorD6);
//d6 Past wielder: The helm’s most famous wearer was a/an…
$wilderD6 = [
  "a dwarvish battlelord",
  "a legendary elvish hero",
  "a famous dragonslayer",
  "a treacherous knight",
  "a notorious cult leader",
  "a fearsome warlord",
  "a cowarly half-gigant",
  "the sexiest orc maiden",
  "a worthless farmer"
  ];
   $wilder = Roller($wilderD6);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Mystic Helmet | Tables</title>
  </head>
  <body>
    <h2>Random Magic Helmet </h2>
    <p>
      This is a mystic helm made of <b><?= $mat ?></b> in the shape of <b><?= $looks?></b> that has <b><?= $has ?></b> and is adorned with <b><?= $decoration ?></b>. The Helm magicly protects against <b><?= $protect ?></b> and <b><?= $specia ?></b> <b><?= $activate?></b>.<br>
      It was forged by <b><?= $creator?></b> and the most famous wearer was <b><?= $wilder?></b>.
    </p><br>
  </body>
</html>
