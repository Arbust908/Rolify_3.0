<?php require_once("math.php"); ?>

<?php
//Table 7–32: Unique Tavern Traits
$uniqueD00 = [
  "Only opens on public holidays",
  "In a former church",
  "In a former theater",
  "In a farmhouse",
  "In a cellar",
  "Partly ruined",
  "Magical lighting that slowly shifts hues",
  "Full of the owner’s dogs",
  "Previous owner is buried in the cellar",
  "Full of cats",
  "Mounted monster head",
  "Haunted grandfather clock that strikes thirteen",
  "Recently was partially burnt down",
  "Central pit for entertainment",
  "A fortified keep with its own armory",
  "Furniture is made from stone",
  "Drinks delivered by mechanical means",
  "Drinks delivered by magical means",
  "In a lighthouse",
  "Extremely low ceilings",
  "Bar is made from a sunken warship",
  "Stuffed heads and antlers on every wall",
  "Run by five sisters",
  "Haunted",
  "Once run by a succubus",
  "Holds prayers every day",
  "Unusual beverages bubbling behind the bar",
  "Assigns seats at random",
  "Adorned with numerous banners and weapons",
  "Full of small caged animals",
  "Collectively owned by the locals",
  "Pentagram is carved on one wall",
  "Every stranger who arrives must sing to be served",
  "Mummified remains of a local hero are on display",
  "Requires bar tabs signed in blood",
  "Has an unusual mascot",
  "Small, labyrinthine halls and rooms",
  "Permanent recurring illusion",
  "Patrons must spin the wheel to choose their drink",
  "Original owner stuffed and mounted above bar",
  "Home of “endless stew” (kept simmering for 30 years)",
  "Fruit growing just outside is free for the plucking",
  "Obnoxious patrons get thrown off the balcony",
  "Lit with magic lanterns",
  "Lit with bioluminescent creatures",
  "Has a tree growing through the taproom",
  ];
   $unique = Roller($uniqueD00);

//Table 7–33: Random Tavern Name Generator
//First Name
$firstD00 = [
  "Blind",
  "Three",
  "King’s",
  "Black,Fearsome",
  "Yew",
  "Maid",
  "Green",
  "Blasted",
  "Broken",
  "Meg’s",
  "Donkey",
  "Five",
  "Dead",
  "Jolly",
  "Brass",
  "Buxum",
  "Six",
  "Pirate’s",
  "Carrots",
  "Burnt",
  "Deviant",
  "Thrice",
  "Empty",
  "Fearsome",
  "Red",
  "Yellow",
  "Supine",
  "Thirsty",
  "Fat",
  "Thin",
  "Burnt",
  "Queen’s",
  "Captain’s",
  "White",
  "Murdered",
  "Large",
  "Tiny",
  "Round",
  "Hollow",
  "Catapult",
  "Snail",
  "Nag’s",
  "Blunt",
  "Outrageous",
  "Quiet",
  "Noisy",
  "Boozy",
  "Magenta",
  "Stork"
  ];
//Second Name
$secondD00 = [
  "Cat",
  "Fire",
  "with Eight Tails",
  "Cow",
  "Spectacles",
  "Burnt Down",
  "Minotaur",
  "Hag",
  "Nightcap",
  "Ankheg",
  "Chamber",
  "Blind Mice",
  "Ale",
  "Honey",
  "Full Moon",
  "Moon",
  "Rainbow",
  "Storm Clouds",
  "Pipe",
  "Trousers",
  "Waif",
  "Hat",
  "Helmet",
  "Kraken",
  "Giant",
  "Cockerel",
  "Slug",
  "Dryad",
  "Pig",
  "Rack",
  "Iron Maiden",
  "House",
  "Barn",
  "Church",
  "Well",
  "Manticore",
  "Haystack",
  "Hill",
  "Ferret",
  "Lurcher",
  "Lobster",
  "Cliff",
  "Tarragon",
  "Slippers",
  "Witch",
  "Gull",
  "Caravel",
  "Wagon",
  "Carriage",
  "Moose"
  ];
   $name = (Roller($firstD00))." ".(Roller($secondD00));

//Table 7–34: Menu Items
$menuD00 = [
  "Apple cake 2 cp",
  "Aunt Polly’s pudding 1 sp",
  "Boiled eels 2 sp",
  "Boiled rabbit 1 sp",
  "Boiled salmon 3 sp",
  "Boiled trotters 1 sp",
  "Boiled turnips 5 cp",
  "Bread and butter pudding 3 cp",
  "Broiled mackerel 3 sp",
  "Clear soup 2 cp",
  "Crab, whole fresh 3 sp",
  "Crayfish soup 4 cp",
  "Fried cow-heel 8 cp",
  "Fried woodcock with wine sauce 4 sp",
  "Game pie 5 sp",
  "Gosling with damson cheese 5 sp",
  "Grouse with gooseberry jam 4 sp",
  "Haggis 2 sp",
  "Hare soup 6 cp",
  "Hashed mutton 1 sp",
  "Hotch potch 1 sp",
  "Jugged hare 3 sp",
  "Lamb cutlets 3 sp",
  "Leg of mutton 4 sp",
  "Marrow dumplings 8 cp",
  "Meat pie 1 sp",
  "Mutton pudding 1 sp",
  "Oxtail soup 8 cp",
  "Oyster soup 2 sp",
  "Pie 1 sp",
  "Potted partridge 4 sp",
  "Ptarmigan 5 sp",
  "Rissoles of game 4 sp",
  "Roast fowl 6 sp",
  "Roast goose with apple sauce 7 sp",
  "Roast landrail 4 sp",
  "Roast ribs of beef 3 sp",
  "Roast suckling pig 1 gp",
  "Rumpsteak and mushrooms 5 sp",
  "Sausages 1 sp",
  "Simmered gurnet 3 sp",
  "Skate in caper sauce 3 sp",
  "Stew 5 cp",
  "Stewed kidneys 4 sp",
  "Stewed pigeons 2 sp",
  "Trout 3 sp",
  "Turbot with truffles 2 gp",
  "Veal cutlets 1 gp",
  "Vegetable broth 3 cp",
  "Whole local cheese 1 gp"
  ];
  $menu = "";
  $random = rand(2,7);
  for ($i=1; $i <= $random ; $i++) {
    $menu .=$i."_ ".(Roller($menuD00))."<br>";
  }
  $menu .= "";


//Table 7–35: Amenities
// d% Amenity Nightly Cost
$amenitiesD00 = [
  "Bath, cold (hot) 2 cp (6 cp)",
  "Blanket, extra (loan of) 5 cp",
  "Camping/caravan pitch (per tent/wagon) 1 sp",
  "Chamber pot (loan of) 2 cp",
  "Chest hire, with very simple lock 2 sp",
  "Chest hire, with average lock 4 sp",
  "Chest hire, with good lock 8 sp",
  "Chest hire, with superior lock 15 sp",
  "Coach house (coach storage) 5 sp",
  "Cobbling 2% cost of clothing",
  "Companionship 1 gp+",
  "Feather mattress (loan of) 2 sp",
  "Feather pillow (loan of) 1 sp",
  "Fire in room 5 cp",
  "Guard dog (loan of) 2 sp",
  "Guard (1st level warrior) 3 sp",
  "Guide (per day) 3 sp",
  "Hot water, bucket/pan (loan of) 3 cp",
  "Ironing (per item) 2 cp",
  "Lamp (loan of) 1 cp",
  "Massage 1 sp",
  "Meals in room 1 sp",
  "Mirror (loan of) 1 sp",
  "Paddock (per horse) 5 cp",
  "Private room for meetings (per hour) 5 sp+",
  "Room, common 2 sp",
  "Room, shared 5 sp",
  "Room, private 1 gp",
  "Room, private, with very simple lock 15 sp",
  "Room, private, with average lock 2 gp",
  "Room, private, with good lock 4 gp",
  "Room, private, with superior lock 8 gp",
  "Sewing kit (loan of) 1 sp",
  "Sleeping space, floor, away from fire 1 cp",
  "Sleeping space, floor, next to fire 5 cp",
  "Soap (loan of) 1 sp",
  "Stabling, self-service 1 sp",
  "Stabling, part livery (grooming, feeding) 2 sp",
  "Stabling, full livery 5 sp",
  "Suite, small (with good lock, fire) 4 gp",
  "Suite, average (as above but bigger) 8 gp",
  "Suite, good (as above but with superior lock) 16 gp",
  "Suite, luxurious (as above but with servants) 32 gp",
  "Tailoring (per item) 2% cost of clothing",
  "Warming pan (loan of) 5 cp",
  "Washing (per item) 3 cp",
  "Washstand with cold water (hot water) 3 cp (7 cp)",
  ];
  $amenity = "";
  $random = rand(2,7);
  for ($i=1; $i <= $random ; $i++) {
    $amenity .=$i."_ ".(Roller($amenitiesD00))."<br>";
  }
  $amenity .= "";
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pathfinders Inn & Tabern | Pathfinder | TE</title>
  </head>
  <body>
    <h1> Pathfinders Inn & Tabern </h1>
    <h3><?=$name?></h3>
    <p>
      <?=$unique?><br>
      <?=$menu?><br>
      <?=$amenity?><br>
    </p>
  </body>
</html>
