<?php require_once("math.php"); ?>

<?php
//Village Quests

//d6 You've got to help! There is a
$thereD6 = [
  "monster",
  "noble",
  "thief",
  "guard",
  "peasant",
  "cow"
  ];
   $there = Roller($thereD6);

//d6 Who
$whoD6 = [
  "is missing",
  "killed someone",
  "was found dead",
  "stole something",
  "is plotting something",
  "has been lurking about"
  ];
   $who = Roller($whoD6);

//d8 at
$atD8 = [
  "the tavern",
  "the river",
  "the Church",
  "the forest",
  "the Village",
  "the mines",
  "my House",
  "the paddock",
  ];
   $at = Roller($atD8);

//d10 We found
$foundD10 = [
  "blood",
  "a skull",
  "a dagger",
  "a letter",
  "a key",
  "witnesses",
  "an arrow",
  "footprints",
  "a corpse",
  "a sack of gold coins",
  ];
   $found = Roller($foundD10);

//d10 Which we expect involves
$involvesD10 = [
  "the King",
  "the Queen",
  "my wife",
  "the Neighbour",
  "the Barmaid",
  "the Bartender",
  "meddling Kids",
  "demons from another world",
  "the Town Watch",
  "a Cow",
  ];
   $involves = Roller($involvesD10);

//d8 But the
$butD8 = [
  "meddling Kids are",
  "town Watch is ",
  "wife is",
  "neighbours are",
  "cows are",
  "nobles are",
  "rich Man is",
  "scoundrel is",
  ];
   $but = Roller($butD8);

//d8 is stopping us from
$stoppingD8 = [
  "searching the town",
  "leave the town",
  "call for aid",
  "drinking, until this has been resolved",
  "hosting the annual village dance",
  "harvesting our crops",
  "speaking out",
  "asking any questions",
  ];
   $stopping = Roller($stoppingD8);

//d10 Please! If you can help, I'll give you
$rewardD10 = [
  "a pouch of silver",
  "my best pitchfork",
  "a signet ring",
  "the mightiest handshake you'll ever receive",
  "a treasure map",
  "my cow",
  "my brother's name, he's in the big city",
  "my blessing",
  "a gold coin",
  "anything you want",
  ];
   $reward = Roller($rewardD10);

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TE | Tables</title>
  </head>
  <body>
    <h2> </h2>
    <p><b>
      A peasant of the village is running over to you, the group of adventurers. He shouts You've got to help! There is a <?=$there?> who <?=$who?> at <?=$at?>. We found <?=$found?> which we expect involves <?=$involves?> but the <?=$but?> stopping us from <?=$stopping?>. Please! If you can help, I'll give you <?=$reward?>
    </b></p>
  </body>
</html>
