<?php
class Dcc_Occupation{
  public $roll = 0;
  public $occupation = ["Alchemist","Animal trainer","Armorer","Astrologer","Barber","Beadle","Beekeeper","Blacksmith","Butcher","Caravan guard","Cheesemaker","Cobbler","Confidence artist","Cooper","Costermonger","Cutpurse","Ditch digger","Dwarven apothecarist","Dwarven blacksmith","Dwarven blacksmith","Dwarven chest-maker","Dwarven herder","Dwarven miner","Dwarven miner","Dwarven mushroom-farmer","Dwarven rat-catcher","Dwarven stonemason","Dwarven stonemason","Elven artisan","Elven barrister","Elven chandler","Elven falconer","Elven forester","Elven forester","Elven glassblower","Elven navigator","Elven sage","Elven sage","Farmer","Farmer","Farmer","Farmer","Farmer","Farmer","Farmer","Farmer","Farmer","Fortune-teller","Gambler","Gongfarmer","Grave digger","Grave digger","Guild beggar","Guild beggar","Halfling chicken butcher","Halfling dyer","Halfling dyer","Halfling glovemaker","Halfling gypsy","Halfling haberdasher","Halfling mariner","Halfling moneylender","Halfling trader","Halfling vagrant","Healer","Herbalist","Herder","Hunter","Hunter","Indentured servant","Jester","Jeweler","Locksmith","Mendicant","Mercenary","Merchant","Miller/baker","Minstrel","Noble","Orphan","Ostler","Outlaw","Rope maker","Scribe","Shaman","Slave","Smuggler","Soldier","Squire","Squire","Tax collector","Trapper","Trapper","Urchin","Wainwright","Weaver","Wizard’s apprentice","Woodcutter","Woodcutter","Woodcutter"];
  public $trainedWeapon = ["Staff","Club","Hammer","Dagger","Razor (as dagger)","Staff","Staff","Hammer","Cleaver (as axe)","Short sword","Cudgel (as staff)","Awl (as dagger)","Dagger","Crowbar (as club)","Knife (as dagger)","Dagger","Shovel (as staff)","Cudgel (as staff)","Hammer","Hammer","Chisel (as dagger)","Staff","Pick (as club)","Pick (as club)","Shovel","Club","Hammer","Hammer","Staff","Quill (as dart)", "Scissors (as dagger)","Dagger","Staff","Staff","Hammer","Bow","Dagger","Dagger","Pitchfork (as spear)","Pitchfork (as spear)","Pitchfork (as spear)","Pitchfork (as spear)","Pitchfork (as spear)","Pitchfork (as spear)","Pitchfork (as spear)","Pitchfork (as spear)","Pitchfork (as spear)","Dagger","Club","Trowel (as dagger)","Shovel (as staff)","Shovel (as staff)","Sling","Sling","Hand axe","Staff","Staff","Awl (as dagger)","Sling","Scissors (as dagger)","Knife (as dagger)","Short sword","Short sword","Club","Club","Club","Staff","Shortbow","Shortbow","Staff","Dart","Dagger","Dagger","Club","Longsword","Dagger","Club","Dagger","Longsword","Club","Staff","Short sword","Knife (as dagger)","Dart","Mace","Club","Sling","Spear","Longsword","Longsword","Longsword","Sling","Sling","Stick (as club)","Club","Dagger","Dagger","Handaxe","Handaxe","Handaxe"];
  public $tradeGoods = ["Oil, 1 flask","Pony","Iron helmet","Spyglass","Scissors","Holy symbol","Jar of honey","Steel tongs","Side of beef","Linen, 1 yard","Stinky cheese","Shoehorn","Quality cloak","Barrel","Fruit","Small chest","Fine dirt, 1 lb.","Steel vial","Mithril, 1 oz.","Mithril, 1 oz.","Wood, 10 lbs.","Sow**","Lantern","Lantern","Sack","Net","Fine stone, 10 lbs.","Fine stone, 10 lbs.","Clay, 1 lb.","Book","Candles, 20","Falcon","Herbs, 1 lb.","Herbs, 1 lb.","Glass beads","Spyglass","Parchment and quill pen","Parchment and quill pen","Hen","Hen","Hen","Hen","Hen","Hen","Hen","Hen","Hen","Tarot deck","Dice","Sack of night soil","Trowel","Trowel","Crutches","Crutches","Chicken meat, 5 lbs.","Fabric, 3 yards","Fabric, 3 yards","Gloves, 4 pairs","Hex doll","Fine suits, 3 sets","Sailcloth, 2 yards","5 gp, 10 sp, 200 cp","20 sp","Begging bowl","Holy water, 1 vial","Herbs, 1 lb.","Herding dog","Deer pelt","Deer pelt","Locket","Silk clothes","Gem worth 20 gp","Fine tools","Cheese dip","Hide armor","4 gp, 14 sp, 27 cp","Flour, 1 lb.","Ukulele","Gold ring worth 10 gp","Rag doll","Bridle","Leather armor","Rope, 100’","Parchment, 10 sheets","Herbs, 1 lb.","Strange-looking rock","Waterproof sack","Shield","Steel helmet","Steel helmet","100 cp","Badger pelt","Badger pelt","Begging bowl","Pushcart","Fine suit of clothes","Black grimoire","Bundle of wood","Bundle of wood","Bundle of wood"];

  function __construct(){
  }

  public function makeRoll()
  {
    $r = rand(0,99);
    return $r;
  }
  public function Lenght()
  {
    echo count($this->occupation) . "<br>";
    echo count($this->trainedWeapon) . "<br>";
    echo count($this->tradeGoods) . "<br>";
  }

  public function Generate($r = "")
  {
    if ($r == "") {
      $r = $this->makeRoll();
      $this->roll = $r;
    } else {
      $this->roll = $r-1;
    }
    // echo "roll: " . $r . " ! ";
    echo $this->occupation[$this->roll]. " | " .$this->trainedWeapon[$this->roll]. " | " .$this->tradeGoods[$this->roll]. " .<br>";
  }
}
$one = new Dcc_Occupation();
$two = new Dcc_Occupation();
$three = new Dcc_Occupation();
 ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> DCC | Occuppation</title>
  </head>
  <body>
    <!-- <i><?=$one->Lenght()?></i><br>
    <hr> -->
    <h2><?=$one->Generate()?></h2>
    <hr>
    <b><?=$two->Generate()?></b><br>
    <b><?=$three->Generate()?></b><br>
    <!-- <b><?=$one->roll?></b><br>
    <b><?=$two->roll?></b><br>
    <b><?=$three->roll?></b><br> -->
  </body>
</html>
