<?php require_once("math.php"); ?>
<?php
//BEHOLDER BODY DIAMETER
$bodyDim2D6 = [
  "4 feet",
  "4 1/2 feet",
  "5 feet",
  "5 1/2 feet",
  "4 1/2 feet",
  "5 feet",
  "5 1/2 feet",
  "6 feet"
  ];
  $bodyDim = Roller($bodyDim2D6);
//BEHOLDER SKIN COLOR
$skinColorD12 = [
  "brown",
  "brown-yellow",
  "gray",
  "green",
  "pinkish",
  "purple-blue",
  "mottled",
  "shaded",
  ];
   $skinColor = Roller($skinColorD12);
  $skinextD0 = ["brown","yellow","gray","green","pink","purple",];
  if ($skinColor == "mottled") {
    $skinColor = "mottled between " . Roller($skinextD0) ." and ". Roller($skinextD0);
  } elseif ($skinColor == "shaded") {
    $skinColor = Roller($skinextD0) . " shaded " . Roller($skinextD0);
  }
   $skinColor .= "";
//BEHOLDER SKIN TEXTURE
$skinTextureD10 = [
  "pebbled",
  "pebbled",
  "pitted",
  "plated",
  "plated",
  "scaled",
  "smooth",
  "smooth",
  "warty",
  "wrinkled",
  ];
   $skinTexture = Roller($skinTextureD10);
//BEHOLDER EYE COLOR
$eyeColorD10 = [
  "red",
  "orange",
  "yellow",
  "green",
  "blue",
  "violet",
  "pink",
  "brown",
  "black",
  "metallic",
  ];
   $eyeColor = Roller($eyeColorD10);
   $eyeColorExtD0 = ["red","orange","yellow","green","blue","violet"];
   if ($eyeColor == "metallic") {
     $eyeColor = $eyeColor . " " . Roller($eyeColorExtD0);
   }
   $eyeColor .= "";
//BEHOLDER IRIS SHAPE
$irisShapeD20 = [
  "circle",
  "slit",
  "crescent",
  "square",
  "hourglass",
  "string-of-pearls",
  "irregular",
  "triangle",
  "keyhole",
  "wave",
  "oval",
  "circle",
  "slit",
  "Triangle",
  "oval",
  ];
   $irisShape = Roller($irisShapeD20);
   $roll = rand(1,20);
   if ($roll == 7) {
     $irisShape .= " and " . Roller($irisShapeD20);
   }
   $irisShape .="";
//BEHOLDER EYE SIZE
$eyeSize2D6 = [
  "tiny",
  "small","small","small",
  "normal","normal","normal","normal","normal","normal",
  "big","big","big",
  "huge",
  ];
   $bigEye = Roller($eyeSize2D6);
   $smallEyes = Roller($eyeSize2D6);
//BEHOLDER EYESTALK TEXTURE
$eyeStalkD6 = [
  "smooth",
  "ridged earthworm-like",
  "segmented insectile-like",
  ];
   $eysStalk = Roller($eyeStalkD6);
//BEHOLDER EYESTALK SHAPE
$eyeStalkShapeD4 = [
  "thick and short",
  "thin and short",
  "thick and long",
  "thin and long",
  ];
   $eyeStalkShape = Roller($eyeStalkShapeD4);
//BEHOLDER MOUTH SHAPE AND SIZE
$mouthShapeD6 = [
  "small/narrow",
  "normal","normal","normal",
  "large/wide",
  ];
   $mouthShape = Roller($mouthShapeD6);
//BEHOLDER TEETH SHAPE
$teethShapeD10 = [
  "thick and pointed",
  "humanlike",
  "fanged vampiric-like",
  "thin and needle-like",
  ];
   $teethShape = Roller($teethShapeD10);
   $roll = rand(1,10);
  if ($roll == 7) {
    $teethShape .= " and a second row of " . Roller($teethShapeD10);
  }
   $teethShape .= "";
//BEHOLDER PERSONALITY TRAITS
$personalityD8 = [
  "i enjoy lording my superiority over others",
  "cold, emotionless logic is the way I defeat my foes",
  "i determine if a creature is worth keeping alive within the first minute of speaking to it",
  "i frequently dream of ",
  "i pretend to be insaneso my enemies underestimate me",
  "i am weary of frequent interruptions",
  "assassination attempts are the only events that quell my feelings of loneliness",
  "i sometimes fear that I am a flawed abomination",
  ];
   $personality = Roller($personalityD8);
  if ($personality == "i frequently dream of ") {
    $baseD8 = ["goblins","hobgoblins","kobolds","orcs","lizardfolk","ogres","bugbears","gnolls"];
    $personality .= Roller($baseD8) . "and am certain it is trying to manipulate me";
  }
   $personality .= "";
//BEHOLDER IDEALS
$idealD6 = [
  'Creed</i>. My trophies are proof of my success. (Evil)',
  'Community</i>. My hierarchy of minions keeps me safe. (Lawful)',
  'Intolerance</i>. All other beholders are imperfect and must be destroyed. (Evil)',
  'Stability</i>. I must maintain the current balance of power in the region. (Lawful)',
  'Perfection</i>. Although I am perfect as I am, I can strive to be even better. (Neutral)',
  'Power</i>. I will be secure when I rule over all. (Evil)',
  ];
   $ideal = '<i style="font-variant: small-caps;font-weight: bolder;font-style: normal;">' . Roller($idealD6);
//BEHOLDER BONDS
$bondD6 = [
  "my followers are all spying on me, and I seek motivated, powerful allies to destroy them",
  "i miss the kinship of my identical twin, who disappeared years ago",
  "i must recover an artifact that was stolen from me",
  "i have foreseen the moment of my death and know what will kill me. I hope to curry favor with my slayer to forestall my end",
  "i was lucky to escape my enemy, and I worry that I might be discovered again before I am ready",
  "i scheme endlessly to recover an ancient tome that contains the secret of creating perfect, obedient clones of myself",
  ];
   $bond = Roller($bondD6);
//BEHOLDER FLAWS
$flawD6 = [
  "i usually ignore advice from my minions",
  "i enjoy taunting rivals with hints of my plans",
  "i am very quick to take offense",
  "i frequently have terrifying dreams",
  "i often take out my frustrations on my minions",
  "i sometimes forget that others don't have access to all of my knowledge",
  ];
   $flaw = Roller($flawD6);
//BEHOLDER NAMES
$nameD20 = [
  "Barixis",
  "Orox",
  "Chelm",
  "Qualnus",
  "Derukoskai",
  "Ralakor",
  "Eddalx",
  "Selthdrych",
  "Famax",
  "Sokhalsh",
  "Irv",
  "Thimnoll",
  "Jantroph",
  "Velxer",
  "Khoa",
  "Xeo",
  "Lanuhsh",
  "Zalshox",
  "Nagish",
  "Zirlarq",
  ];
   $name = Roller($nameD20);

   //BEHOLDER LESSER MINIONS
  $lesserMinions = '';
  $roll = rand(1,100);
   if ($roll <= 4) {
     $lesserMinions = (Dicer(10,10)) + 50 . ' bandits and ' . ( Dicer(6,3) ) . 'bandit captains';
   } elseif ($roll <= 8) {
     $lesserMinions = (Dicer(6,10)) . ' bugbears and ' . (Dicer(3,1)) . 'bugbear chiefs';
   } elseif ($roll <= 12) {
     $lesserMinions = (Dicer(10,10)) . ' cultists and ' . (Dicer(6,4)) . ' cult fanatics';
   } elseif ($roll <= 14) {
     $lesserMinions = (Dicer(6,10)) . ' duergar';
   } elseif ($roll <= 22) {
     $lesserMinions = (Dicer(10,10)) + 50 . ' goblins and ' . (Dicer(4,3)) . ' goblin bosses';
   } elseif ($roll <= 25) {
     $lesserMinions = (Dicer(10,10)) + 50 . ' grimlocks';
   } elseif ($roll <= 35) {
     $lesserMinions = (Dicer(10,10)) . ' hobgoblins and ' . (Dicer(4,2)) . ' hobgoblin captains';
   } elseif ($roll <= 43) {
     $lesserMinions = (Dicer(10,10)) + 50 . ' kobolds, ' . (Dicer(4,2)) . ' kobold inventors and ' . (Dicer(6,2)) . ' kobold scale sorcerers';
   } elseif ($roll <= 48) {
     $lesserMinions = (Dicer(10,10)) + 50 . ' lizardfolk';
   } elseif ($roll <= 56) {
     $lesserMinions = (Dicer(10,10)) . ' orcs and ' . (Dicer(6,1)) . '  orc war chiefs';
   } elseif ($roll <= 59) {
     $lesserMinions = (Dicer(6,6)) . ' quaggoths';
   } elseif ($roll <= 65) {
     $lesserMinions =(Dicer(10,10)) + 50 . ' troglodytes';
   } elseif ($roll <= 100) {
     $lesserMinions = (Dicer(10,10)) . ' orcs and ' . (Dicer(6,10)) . ' quaggoths';
   }
  $lesserMinions .= '';

  //BEHOLDER GREATER MINIONS
  $greaterMinions = '';
  $roll = rand(1,100);
  if ($roll <= 3) {
    $greaterMinions = (Dicer(4,2)) . ' barlguras';
  } elseif ($roll <= 10) {
    $greaterMinions = (Dicer(12,1)) . ' ettins';
  } elseif ($roll <= 20) {
    $greaterMinions = (Dicer(2,1)) . 'fire giants, ' . (Dicer(3,1)) . ' frost giants and ' . (Dicer(4,2)) . ' hill giants.';
  } elseif ($roll <= 25) {
    $greaterMinions = (Dicer(6,3)) . ' hook horrors';
  } elseif ($roll <= 32) {
    $greaterMinions = (Dicer(6,3)) . ' manticores';
  } elseif ($roll <= 40) {
    $greaterMinions = (Dicer(6,3)) . ' minotaurs';
  } elseif ($roll <= 55) {
    $greaterMinions = (Dicer(6,6)) . ' ogres';
  } elseif ($roll <= 70) {
    $greaterMinions = (Dicer(4,2)) . ' trolls';
  } elseif ($roll <= 75) {
    $greaterMinions = (Dicer(6,3)) . ' wights';
  } elseif ($roll <= 100) {
    $greaterMinions = (Dicer(6,1)) . ' stone giants and ' . (Dicer(6,1)) . '  fire giants chiefs';
  }
 $greaterMinions .= '';

//BEHOLDER PETS
  $pets = '';
  $roll = rand(1,100);
  if ($roll <= 10) {
    $pets = (Dicer(3,1)) . ' basilisks';
  } elseif ($roll <= 13) {
    $pets = (Dicer(3,1)) . ' beholder zombies';
  } elseif ($roll <= 22) {
    $pets = (Dicer(3,1)) . ' chimeras';
  } elseif ($roll <= 26) {
    $pets = (Dicer(4,3)) . ' flesh golems';
  } elseif ($roll <= 29) {
    $pets = (Dicer(6,3)) . ' gazers';
  } elseif ($roll <= 37) {
    $pets = (Dicer(6,3)) . ' hell hounds';
  } elseif ($roll <= 41) {
    $pets = (Dicer(6,2)) . ' nothics';
  } elseif ($roll <= 53) {
    $pets = (Dicer(4,2)) . ' otyughs';
  } elseif ($roll <= 66) {
    $pets = (Dicer(4,2)) . ' ropers';
  } elseif ($roll <= 75) {
    $pets = (Dicer(6,1)) . ' wyverns';
  } elseif ($roll <= 100) {
    $pets = (Dicer(6,1)) . ' chimeras and ' . (Dicer(6,1)) . '  fire wyverns';
  }
  $pets .= '';
?>
<?php
$randColorD0 = [
  "#16a085",
  "#2980b9",
  "#8e44ad",
  "#2c3e50",
  "#d35400",
  "#c0392b",
];
$randColor = $randColorD0[rand(0,5)];
$sty = 'style="color:' . $randColor . ';"';
?>

<html>
  <head>
    <meta charset="utf-8">
    <title> Beholder Dreamer </title>
  </head>
  <body>
    <hr><br>
    <div class="" style="background-color:<?=$randColor?>;color:white;padding:2%;">
      <b><?=$name?> the <?=$skinColor?> beholder</b>.<br>
    </div>
    <hr><br>
    <div style="overflow: hidden; clear: both;">
      <b <?=$sty?> ><?=$name?></b> is a beholder with <b <?=$sty?> ><?=$skinColor?></b> <b <?=$sty?>  ><?=$skinTexture?></b> skin that is roughly <b <?=$sty?> > <?= $bodyDim?></b> in diameter.
      Its eyes are <b <?=$sty?> ><?=$eyeColor?></b> with a <b <?=$sty?> ><?=$irisShape?></b> iris; Its center eye is <b <?=$sty?> ><?=$bigEye?></b> and from its <b <?=$sty?> ><?=$eyeStalkShape?></b> <b <?=$sty?> ><?=$eysStalk?></b> tendrils come out 11 <b <?=$sty?> ><?=$smallEyes?></b> eyes.
      Below its center eye you can find its <b <?=$sty?> ><?=$mouthShape?></b> mouth full of <b <?=$sty?> ><?=$teethShape?></b> teeth.<br>
      <hr><br>
      <b <?=$sty?> ><?=$name?></b> is => <br>
      personality: <b <?=$sty?> ><?=$personality?></b><br>
      ideal: <b <?=$sty?> ><?=$ideal?></b><br>
      bond: <b <?=$sty?> ><?=$bond?></b><br>
      flaw: <b <?=$sty?> ><?=$flaw?></b><br>
      <hr><br>
      <b <?=$sty?> ><?=$lesserMinions?> inhabite the lair.</b><br>
      <hr><br>
      <b <?=$sty?> ><?=$greaterMinions?> also inhabite the lair.</b><br>
      <hr><br>
      <b <?=$sty?> ><?=$pets?> also inhabite the lair.</b><br>
    </div>
    <hr><br>
    <hr><br>
  </body>
</html>
