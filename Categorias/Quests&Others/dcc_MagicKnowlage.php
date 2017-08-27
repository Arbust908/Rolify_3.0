<?php
require_once ('math.php');

class MagicKnowlage{
  //Table 7-1: Where is spell knowledge found?
  public $found = ["From the whispering lips of the corpse of Thaka-khan, a great wizard buried centuries ago under the desert sands","In the secret library of Alexandria, the only place in the world where more than 50 books can be found in the same room","With the witch-hags of Rahdomir, whose crazed chants bring insanity to all mortals who hear them","From the eldest sphinx","By gazing in the pool in the Hall of the Dragon Kings","In the Necronomicon, of which only seven copies exist, and the provenance of all seven copies is recorded on a scroll in the possession of a queer halfling now living in the forest","By clutching the magic sword Soulstealer, a black-runed, razor-edged warrior’s blade that has not been seen for five hundred years","Carved in the ziggurats in the sunken city of Lemuria","By bargaining with demons on the plane of Asmodeus","In the purest drop of water in the morning dew",
  "By translating the secret language of the dryads","In one’s own soul, when viewed truly in a mirror of unparalleled purity","On the stone tablet of Hammurab","Inscribed on the back of a tombstone in the Necromancers’ Graveyard","From consultation with the last cyclops","On the scroll of Shubteth, now frail with age"];

  //Table 7-2: What is the price of spell knowledge?
  public $price = ["One year of service","100,000 gold pieces","Defeating the greatest enemy of the person who shares the spell","A slice of the wizard’s soul (causes ability score loss)","Marrying an ugly daughter","Sharing similar knowledge of spells unknown to the caster","Retrieving a unique object (the heart of a certain demon lord, the last ray of a dying sun, the rare blue flower of the Amazon, etc.)","Vow of silence","Building a great monument","Wearing hair in a topknot, in the custom of a rare sect of monks"];

  //Table 7-3: What components are required for the spell to function?
  public $component = ["Dragon’s scale","Medusa’s eye","Harpy’s feather","Basilisk’s gaze","Virgin’s pure heart","The blood of an un-dead","A hyena’s bark","A mother’s love for her child","Utterance of a seventh son","The most brilliant diamond"];

  public function MakeMagic(){
    echo Roller($this->found) . " ! " . Roller($this->price) . " ! " . Roller($this->component) . "<br>";
  }
};

  $mK1 = new MagicKnowlage();
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title> Magic knowledge</title>
  </head>
  <body>
    <?=$mK1->MakeMagic()?>
  </body>
</html>
