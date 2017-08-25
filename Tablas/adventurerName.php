<?php require_once("math.php"); ?>
<?php
class advName{
  public $aD00 = ["theo","thra","ara","blad","aede","gala","harren","bane","aring","var","dae","mene","ade","hilde","ber","art","mal","hal","wer","neme","riwan","mara","perce","vae","childe","rag",];
  public $bD00 = ["dor","vain","thor","den","wyn","lard","wen","dain","elor","wann","dall","vel","anor","iel","rin","ley","nel","on","agan","lor","bon","ric","din","rix","val","lot",];
  public $titleD00 = ["the Silent Death","the last Gigants Slayer","Dragonborn","Falcon-Eyed","the Black Crow","the Red-Blood","Guardian of the West","SilverHand","the Lost Heir","the Last Crusader","the Colossus","the Undefeted","the Flesh-Eater","the Necromancer","the Tyrants' Plague","the Darness' Lover","the Putrid","Stoneheart","the Reviled Knight","the Son of the Wolves","the Orc Hunter","the Grey Warlock","the Last of his Blood","the Forgotten Hero","the Bloodthirsty","the One-Eyed",];
  //--//
  function rollName(){
    $name = Roller($this->aD00).Roller($this->bD00);
    $title = Roller($this->titleD00);
    $this->checkTitle($title);
    return $name . " " . $title;
  }
  private function checkTitle($t){
    if ($t == "the last Gigants Slayer") {
      $extD00 = ["Gigant","Dragon","Goblin","Bunny","Ghost","Living"];
      $t = "the last " . Roller($extD00) . " Slayer";
    } elseif ($t == "Falcon-Eyed") {
      $extD00 = ["Falcon","Dragon","Bat","Obsidion","Crimson"];
      $t = Roller($extD00) . "-Eyed";
    } elseif ($t == "the Black Crow") {
      $extD00 = ["Crow","Dragon","Knight"];
      $t = "the Black " . Roller($extD00);
    } elseif ($t == "Guardian of the West") {
      $extD00 = ["West","South","North","East","Feylands","Shadow Realm"];
      $t = "Guardian of the " . Roller($extD00);
    } elseif ($t == "Stoneheart") {
      $extD00 = ["Stone","Black","Dragon","Gigant","Dead","Gold","Tiny"];
      $t = Roller($extD00)."heart";
    } elseif ($t == "the Reviled Knight") {
      $extD00 = ["Reviled","Witch","Black","Grey","Crimson","God","Arcane"];
      $t = "the " . Roller($extD00) . " Knight";
    } elseif ($t == "the Son of the Wolves") {
      $extD00 = ["Wolves","Angels","Demons","Sun","Moon","Gods","Coas","Whores"];
      $t = "the Son of the " . Roller($extD00);
    } elseif ($t == "the Orc Hunter") {
      $extD00 = ["Orc","Golem","Goblin","Star","Pixie","Elf"];
      $t = "the " . Roller($extD00) . " Hunter";
    } elseif ($t == "the Grey Warlock") {
      $extD00 = ["Grey","Black","White","Old","Ancient","Fey-Touch","Chosen"];
      $t = "the " . Roller($extD00) . " Warlock";
    }
    return $t;
  }
}

$style='style="text-transform:capitalize"';

$namer = new advName();
?>
<!DOCTYPE html>
<html>
 <head>
   <meta charset="utf-8">
   <title>Legendary Name | Tables</title>
 </head>
 <body>
   <h2> <b <?=$style?>> <?=$namer->rollName()?> </b></h2>
   <i>Mas Nombres! :</i><br>
   <ul>
     <li><b <?=$style?>> <?=$namer->rollName()?> </b></li>
     <li><b <?=$style?>> <?=$namer->rollName()?> </b></li>
     <li><b <?=$style?>> <?=$namer->rollName()?> </b></li>
     <li><b <?=$style?>> <?=$namer->rollName()?> </b></li>
     <li><b <?=$style?>> <?=$namer->rollName()?> </b></li>
   </ul>

 </body>
</html>
