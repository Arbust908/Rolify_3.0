<?php require_once("math.php"); ?>
<?php
//Table 7–1: Places to Find Dungeons
$placeD00 = [
  "an underground river",
  "an underground river",
  "an underground river",
  "within a river dam",
  "amid the ruble of a ruined citadel",
  "below a graveyard",
  "in an insane asylum",
  "inside an ice floe",
  "in another dimension",
  "within earthquake-plagued caverns",
  "in a hollow mountain",
  "deep in a desert of shifting tunnels",
  "abutting to a secret escape route",
  "in a pyramid",
  "below a mausoleum",
  "within a museum",
  "under a castle",
  "part of a menagerie",
  "in a lighthouse",
  "under a tower",
  "in a prison",
  "within a cathedral",
  "under the docks",
  "in the sewers",
  "amid an underground canal",
  "built into an arena",
  "part of forgotten labyrinth",
  "connecting to a beast’s den",
  "under a tavern",
  "in a cliff village",
  "inside a giant tree",
  "part of a frozen city",
  "inside a painting",
  "in a gigantic statue",
  "under a roc nest",
  "within a sunken ruin",
  "hidden inside a giant egg",
  "formed within a massive fossil",
  "within a river dam",
  "amid the ruble of a ruined citadel",
  "below a graveyard",
  "in an insane asylum",
  "inside an ice floe",
  "in another dimension/demiplane",
  "within earthquake-plagued caverns",
  "in a hollow mountain",
  "deep in a desert of shifting tunnels",
  "abutting to a secret escape route",
  "in a pyramid",
  "below a mausoleum",
  "within a museum",
  "under a castle",
  "part of a menagerie",
  "in a lighthouse",
  "under a tower",
  "in a prison",
  "within a cathedral",
  "under the docks",
  "in the sewers",
  "amid an underground canal",
  "built into an arena",
  "part of forgotten labyrinth",
  "connecting to a beast’s den",
  "under a tavern",
  "in a cliff village",
  "inside a giant tree",
  "part of a frozen city",
  "inside a painting",
  "in a gigantic statue",
  "under a roc nest",
  "within a sunken ruin",
  "hidden inside a giant egg",
  "formed within a massive fossil",
  "amid the rubble of a ruined giant city",
  "inside a crashed space vessel",
  "unearthed by a giant ant nest",
  "grown within a deity’s corpse",
  "on an island in a volcano",
  "inside a "
  ];
   $place = Roller($placeD00);
   $ext = "";
   if ($place == "inside a ") {
     $extD0 = ["moon","star","another planet"];
     $ext = Roller($extD0);
   }
   $place .= $ext;
//Table 7–2: Types of Dungeons
$typeD00 = [
  "a hedge maze",
  "a riverboat",
  "a wizard’s tomb",
  "a bandit lair",
  "a vast former mine now long abandoned",
  "an abandoned casino",
  "an old theater",
  "fog-shrouded dungeon that traps the PCs",
  "chambers where gravity regularly reverses",
  "moving clockwork dungeon",
  "incredibly narrow limestone gorges",
  "planes linked by portals",
  "the belly of a ship-swallowing sea creature",
  "a perilous bog and quicksand-filled mire",
  "a slavers’ headquarters",
  "rapids and river channels sweeping through a valley",
  "a giant tree riddled with many crevices and hollows",
  "a melting iceberg",
  "a monster infested palace of glass",
  "a slowly flooding dungeon",
  "the afterlife",
  "a dream",
  "sunken ancient green byways linking fey lands",
  "a nightmare",
  "an iron obelisk of great size",
  "a floating bog containing sunken tombs",
  "an evil giant’s castle",
  "a partially submerged clock tower",
  "a floating castle that appears only at night",
  "a massive, partially hollow, slowly melting candle",
  "a graveyard of giant skeletons",
  "a glacier of poisoned water",
  "an undead town where life goes on",
  "the massive skull of an ancient dragon",
  "a sunken iron ship below a fenland",
  "a tangled forest of thorny trees",
  "a giant insect-infested temple",
  "a volcanic tomb",
  "a living iron ship",
  "a sinking maze",
  "endless stone bridges across a void of purple fog",
  "a huge web",
  "giant rat tunnels",
  "a colossal walking iron man",
  "a living iron maze",
  "what’s down the plug-hole of a wizard’s sink",
  "a garden of poisonous living fungi",
  "a sentient tomb",
  "a solid storm cloud",
  "a giant hourglass slowly filling with sand"
  ];
   $type = Roller($typeD00);
//Table 7–3: Dungeon Entrances
$entranceD00 = [
  "a well",
  "a mineshaft",
  "a rope-bridge between tidal stacks",
  "in a tavern cellar",
  "a cave shaped like a skull",
  "a chimney",
  "the mouth of a large statue",
  "a slide",
  "a cold, bottomless pit",
  "a ruined road descends into an ivy covered hole",
  "a mausoleum",
  "a knight’s sarcophagus",
  "an ancient door carved with warnings",
  "a stone valve covered in runes",
  "a grinning demon mouth",
  "a portal filled with shimmering green light",
  "an almost-impossible-to-reach cave in a cliff",
  "a bulette skull",
  "heavy rain seeps into a hidden slough",
  "a sunken greenway",
  "an iron puzzle door",
  "a volcano vent",
  "a tidal cave",
  "a church steeple rising out of the ground",
  "an arch of huge thorns",
  "an oven with a collapsed back wall",
  "a large wine barrel clawed open from the inside",
  "a slippery metal ladder nailed behind a waterfall",
  "a fountain that reaches down to an underground river",
  "a door reached via a giant set of scales",
  "a pit of quicksand",
  "a whirlpool",
  "a hole suddenly opens in the city streets",
  "mist",
  "a snapping dragon turtle skull",
  "a mudslide opens up a hidden cave system",
  "hurricane in huge doorway appears once a year",
  "a summoned imp can lead the way to portal",
  "a doorway that can only be summoned by incantation",
  "a building collapses overnight into hidden dungeon",
  "a stone that draws aside at midnight",
  "a maelstrom deep at sea",
  "a catapult that throws person through a portal",
  "a magic mirror",
  "a wall safe opening onto an extradimensional vault",
  "magical wood that, when burned, creates a staircase",
  "a magically animated maw",
  "a lighthouse that casts a solid beam",
  "a bridge made from rainbows",
  "a moonbeam reveals a door in a stone circle"
  ];
   $entrance = Roller($entranceD00);
//Table 7–4: Dungeon Rooms
$roomsD00 = [
  "antechamber",
  "armory",
  "audience chamber",
  "banquet hall",
  "barracks",
  "bestiary/menagerie",
  "choke point (ambushes, controlling flow of invaders)",
  "closet",
  "cold room (storage of perishable goods)",
  "common room",
  "crypt",
  "dining hall",
  "elevator",
  "gallery",
  "garbage pit",
  "great hall",
  "greenhouse",
  "guard room",
  "guest room",
  "infirmary",
  "jail",
  "kennel",
  "kitchen",
  "laboratory",
  "library",
  "living quarters (communal)",
  "living quarters (family)",
  "living quarters (personal)",
  "map room",
  "nursery",
  "observatory",
  "pantry",
  "pool",
  "privy",
  "shrine",
  "slave pit",
  "smithy",
  "spring",
  "stable",
  "storeroom",
  "target range",
  "temple",
  "throne room",
  "torture chamber",
  "training hall",
  "trophy room",
  "vault",
  "well",
  "workroom",
  "workshop"
  ];
//Table 7–5: Mundane Room Characteristics
$mundaneD00 = [
  "slopes (up or down)",
  "dampness on walls/floor",
  "steady drip from ceiling",
  "puddles on floor",
  "covered in bite marks",
  "slippery",
  "chocked with webs",
  "open crevice or pit",
  "littered with bones",
  "full of strange echoes",
  "bridge or plank",
  "littered with broken pottery",
  "curtain",
  "lots of dried blood",
  "filled with droppings",
  "wreathed in strange black ivy",
  "full of unsettling fungi",
  "filthy",
  "infested with vermin",
  "pipes drip slimy brackish water onto floor",
  "covered in lichens",
  "small, rusty-iron section of wall",
  "covered in mold",
  "walls made of curious hexagonal stones",
  "cobbled floor made of gravestones",
  "slimy",
  "very slimy",
  "has butcher’s hooks hanging from ceiling",
  "wall exude yellowish, foul smelling discharge",
  "scratches on walls",
  "covered in graffiti",
  "water can be heard rushing immediately below",
  "chalk warnings appear on walls",
  "half filled with water",
  "full of rusty weapons and skeletons",
  "secret door behind fireplace",
  "burned",
  "cracks across floor",
  "cracks across ceiling",
  "cracks along walls",
  "held up by pit-props that look very weak",
  "has an overbearing smell of rotting fruit",
  "strange tapping sounds heard behind walls",
  "weeping heard occasionally",
  "full of empty gibbets",
  "iron maidens that line the walls are rusted shut",
  "floor moves in one direction",
  "floor drops suddenly by 5 feet for no obvious reason",
  "totally submerged",
  "full of flames"
  ];
//Table 7–6: Exotic Room Characteristics
$exoticD00 = [
  "fresco depicts grisly death of viewer",
  "filled with the sound of sobbing, coming from a crypt",
  "carved with faces depicting different alignments",
  "candelabrum sheds black light from violet candles",
  "statue on rotating pedestal",
  "is a huge trap",
  "walls like a rib cage",
  "crammed with mummified frogs",
  "iron spears rise randomly from a sieve-like floor",
  "fire bursts randomly from a floor covered in holes",
  "covered in pictures of evil peacock eyes",
  "has a huge violet eye fresco in its center",
  "appears to be the roots of some vast tree",
  "boiling mud crossed by very narrow stone bridges",
  "filled with giant spider husks of increasing size",
  "is filled with a huge cage",
  "has doors in the ceiling",
  "fountains carved to resemble hydras",
  "floor appears like a black lake but is actually glass",
  "raised terraces lead to central carving of bat-god",
  "slips sharply into a black pit of nothingness",
  "filled with the sounds of thunder",
  "is a huge shaft crossed by boughs of trees",
  "faceless statues point at one PC upon entry",
  "roof is a stained glass window depicting spiders",
  "black fog appears suddenly",
  "iron weights drop from roof at random times",
  "endless stairway descends in room’s center",
  "waterfall in room’s center powers waterwheel",
  "magical voices sing hymns as the PCs enter",
  "is filled with explosive gas that is otherwise harmless",
  "is completely covered in tentacle carvings",
  "has eight huge bells suspended above the floor",
  "has a carving of a black devil-headed elephant",
  "every inch covered in angels",
  "iron devil statue speaks",
  "goes up and down",
  "entire floor pivots, dropping those who enter",
  "ceiling begins to sink upon entry",
  "archways lead to other places",
  "sculptures of gargoyles tearing apart angels",
  "the walls are covered in mirrors that reflect nothing",
  "rotates faster and faster once entered",
  "gargoyles along ceiling shout abuse",
  "randomly dimension doors those that cross it",
  "altar attacks characters with magic",
  "has a magic pool",
  "is the stomach of a creature",
  "weeps to itself",
  "is alive"
  ];
//d% Minor Objects Major Objects
$minorD00 = [
  "abacus",
  "ashtray",
  "astrolabe",
  "barrel",
  "basin",
  "basket",
  "bellows",
  "blanket",
  "bloodstain",
  "bones",
  "books",
  "boots",
  "bottle",
  "box",
  "broken weapons",
  "brush",
  "bucket",
  "calendar",
  "candle",
  "cane",
  "cards",
  "carrying case",
  "chamber pot",
  "clothing",
  "cobwebs",
  "cosmetics",
  "dice",
  "dishes",
  "dried blood",
  "dust",
  "fan",
  "fire starting kit",
  "fishing rod",
  "flask",
  "food (edible)",
  "food (spoiled)",
  "fungus",
  "game board",
  "glass",
  "globe",
  "gloves",
  "hair",
  "hammer",
  "hand mirror",
  "hat",
  "helm",
  "horseshoe",
  "hourglass",
  "ink",
  "insects",
  "key",
  "knife",
  "kettle",
  "lamp",
  "lantern",
  "letter opener",
  "leash",
  "lock",
  "manacle",
  "model ship",
  "mop",
  "mud",
  "nest",
  "oil",
  "paint",
  "pen/paper",
  "pipe/pouch",
  "plate",
  "pole",
  "portable instrument",
  "pots and pans",
  "pottery fragments",
  "papers",
  "parasol",
  "pouch",
  "prosthetic limb",
  "rope",
  "rusty chain",
  "rusty nails",
  "sack/bag",
  "scissors",
  "scale",
  "shaving kit",
  "shovel",
  "spent torch",
  "straw bedding",
  "ruler",
  "tray",
  "tongs",
  "torch",
  "toy",
  "tuning fork",
  "urn",
  "utensil",
  "vase",
  "wall fixtures",
  "wall markings",
  "wax",
  "wheelbarrow",
  "whistle"
  ];
//d% Minor Objects Major Objects
$majorD00 = [
  "alcove",
  "altar",
  "anvil",
  "archway",
  "balcony",
  "bar",
  "bed",
  "bell/gong",
  "bench",
  "bookcase",
  "brazier",
  "bridge",
  "bunk",
  "cabinet",
  "cage",
  "candelabrum",
  "carpet",
  "casket",
  "cauldron",
  "chair/stool",
  "chair with straps",
  "chandelier",
  "chariot/wagon",
  "chest",
  "chimes",
  "clock",
  "cot",
  "couch",
  "crate",
  "crib",
  "crucible",
  "cupboard",
  "curtain/tapestry",
  "dais",
  "dome",
  "door",
  "divan",
  "dresser",
  "drysink",
  "fetters",
  "file cabinet",
  "fireplace/fire pit",
  "font",
  "forge",
  "fountain",
  "fresco",
  "furnace",
  "gallows/guillotine",
  "gibbet",
  "grindstone",
  "hogshead",
  "hookah",
  "horn",
  "idol",
  "instrument (large)",
  "iron maiden",
  "keg",
  "ladder",
  "loom",
  "mat",
  "millwheel",
  "mirror",
  "mosaics",
  "mounting block",
  "pallet",
  "pedestal",
  "pentagram",
  "pew",
  "pillar",
  "pillory",
  "pit",
  "podium",
  "pool",
  "rack",
  "rubble",
  "saddle",
  "safe",
  "sconce",
  "screen",
  "shelf",
  "shrine",
  "sideboard",
  "spiral stair",
  "stand",
  "statue",
  "steeple",
  "stool",
  "stove",
  "table",
  "tapestry",
  "throne",
  "torture equipment",
  "trunk",
  "tub",
  "tun",
  "urn",
  "washstand",
  "well",
  "winch",
  "wood bench",
  ];
$rooms = "";

for ($j=0; $j < (rand(4,22)) ; $j++) {
  $mundane = "";
  $exotic = "";
  $major = "";

  for ($d=0; $d <= (rand(1,4)) ; $d++) {
    if ($d > 0) {
      $mundane .= ", ".Roller($mundaneD00);
    }
    $mundane .= Roller($mundaneD00);
  };
  if ((rand(0,100) < 15)) {
    $exotic = ", ".Roller($exoticD00);
  };

  $rooms .= "<h3>Room ".($j+1).": ".(Roller($roomsD00))."</h3><br><p> You can see a ".$mundane.$exotic." and ".(Roller($majorD00))."</p><br>";
}
$rooms .= "";
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dungeon Constructor | Pathfinder | TE</title>
  </head>
  <body>
    <h2>Random Dungeon</h2>
    <p>The dungeon is <?=$type?> that is in <?=$place?> that can be entered though <?=$entrance?> with <?=$j?> rooms.<br>
      <?=$rooms?>
    </p>
  </body>
</html>
