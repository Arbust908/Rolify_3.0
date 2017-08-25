<?php require_once("math.php");?>
<?php
//temp
$wepnameD00 = [
  "Dener", "Bheni", "Palegem", "Coldwatcher", "Kez", "Durursk", "Cliffglade", "Mournspire", "Sandovib", "Sokdehr", "Mulbidodye", "Cheveku", "Ang", "Iaom", "Celdunzi", "Jemunzin", "Dista", "Shessa", "Marshglide", "Runestrike", "Sag", "Vaknen", "Alpengrip", "Smartcloud", "Hehrihkehd", "Sanskahr", "Urnotvumu", "Chuthilzi", "Shung", "Siy", "Dugagul", "Irodrar", "Bhamen", "Dhelam", "Warkeep", "Deepbloom", "Kaz", "Sodudz", "Farrowspark", "Ravensnarl", "Muzultruhk", "Rihpikt", "Rirkelmedzi", "Horkira", "Za", "Shai", "Orgiri", "Zildomo", "Zonni", "Zakhod", "Hillgem", "Rumblesworn", "Nev", "Grevrog", "Longsong", "Deepswift", "Mukrehreb", "Fevreb", "Trurkubivri", "Chagyantye", "Ca", "Kiay", "Mozuscu", "Gunzurnis"
	];
 $wepName = Roller($wepnameD00);

//temp

//d12 The weapon is...
$wepTypeD12 = [
  "a longsword",
  "a shortsword",
  "a greatsword",
  "a broadsword",
  "a scimitar",
  "a bastard sword",
  "a spear",
  "a halberd",
  "a scythe",
  "a dagger",
  "a handaxe",
  "a battleaxe",
  "a greataxe",
  "a lighthammer",
  "a mace",
  "a maul",
  "a warhammer"
    ];
   $wepType = Roller($wepTypeD12);
   $wepPre = "";

   if ($wepType == "a lighthammer" || $wepType == "a mace" || $wepType == "a maul" || $wepType == "a warhammer") {
     $wepPre = "head";
   } else {
     $wepPre = "blade";
   }
   $xxx = $wepPre;

//d12 The blade (or head) is made of...
$wepHeadD12 = [
  "obsidian",
  "diamond",
  "simple steel, forged to perfection",
  "iron cooled in demon's blood",
  "steel cooled in dragon's blood",
  "rare metal that is forged to perfection",
  "demon's blood",
  "golem's heart rock",
  "ironbark",
  "adamantium",
  "dragon fang",
  "stone",
  "glass",
  "enchanted wood",
  "bone",
  " ",
    ];
   $wepHead = Roller($wepHeadD12);
   $wepHEXT = "";
   if ($wepHead == " ") {
     $ext = [
       "flame elemental",
       "ice elemental",
       "lightning elemental",
       "wind elemental"
      ];
     $wepHEXT = Roller($ext);
   };
   $wepHead .= $wepHEXT;

//d12 The shaft is made of...
$wepShaftD12 = [
  "polished elm",
  "bone",
  "gold",
  "rough oak",
  "iron",
  "fiend's blood",
  "ironbark",
  "bronze",
  "silver",
  "blackened steel",
  "ancient oak",
  "steel with diamond pattern knurling for grips",
  "steel with leather strips wound for grips",
  "the same material as the weapon, making it one solid piece of ",
  ];
 $wepShaft = Roller($wepShaftD12);

  if ($wepShaft == "the same material as the weapon, making it one solid piece of ") {
    $wepShaft .= $wepHead;
  }

//d12 The maker was...
$makerD12 = [
  "a dwarf",
  "a tiefling",
  "a human",
  "an elf",
  "a dragonborn",
  "a God",
  "an orc",
  "a hobgoblin",
  "a crazy hobo",
  "a gigant by accident",
  "a half-elf",
  "a fiend",
  "a vampire",
  "a vampire with the blood of 300 virgins",
  "a shapeshifter"
  ];
 $maker = Roller($makerD12);

//d12 Who was...
$mWasD12 = [
  "blacksmith","blacksmith","blacksmith",
  "weaponsmith","weaponsmith","weaponsmith",
  "armorer",
  "king",
  "magician",
  "hero",
  "antipaladin",
  "undead",
  "priest",
  "adventurer",
  "warrior",
  "hunter",
  "tyrant",
  "prophet"
  ];
 $was = Roller($mWasD12);

 if ($maker == "a gigant by accident") {
   $was = "";
 } elseif ($maker == "a vampire with the blood of 300 virgins") {
   $maker = "a vampire ".$was." that used the blood of 300 virgins to forged it";
 }
//d10 The weapon is famous because...
$famousD10 = [
  "it slew a mighty beast",
  "it was used to lead a great army",
  "it killed kings",
  "it was build as a gift to a king",
  "its owner stood, alone, against an army, and won",
  "its owner was a paragon of virtue",
  "it was forged as tribute to a God",
  "it killed a god",
  "it was made for show",
  "it killed a great demon",
  "it has slain hundreds of thousands",
  "it slew a dragon",
  "it contains the soul of an ancient hero",
  "it contains the soul of an ancient villain"
  ];
 $famous = Roller($famousD10);

//d10 Other interesting things include...
$otherD10 = [
  "its maker was killed to stop him from making a better weapon",
  "it has fine metal work along the blade",
  "it cannot be sheathed without tasting blood",
  "it was tempered in an icy lake",
  "it was forged in a volcano",
  "it was forged with the fire of a dragon and tempered with the breath of a gigant",
  "it is decorated with symbols where the shaft meets the blade",
  "it was cooled in a full moons light",
  "it can only be wielded by the pure of heart",
  "it can only be wielded by the just",
  "where the shaft meets the blade you find an enchanted "
  ];
 $other = Roller($otherD10);
 $oEXT = "";
  if ($other == "where the shaft meets the blade you find an enchanted ") {
    $oEXTd4 = [
      "diamond", "emerald", "ruby", "sapphire"
    ];
     $oEXT = Roller($oEXTd4);
  }
  $other .= $oEXT;
?>

<?php require_once ("head.html"); ?>
<body>

	<box>
		<div class="row">
			<?php require_once ("menu.html"); ?>
			<div class="large-9 columns">
				<div class="animated fadeIn">
				<text>

					<h1>Legendary Weapon Forger</h1>
					<h2>This tool forges a weapon and it's fabulous tales.</h2>
					<h6><i>name generation is not final. sry</i></h6>
					<line></line><!-- separation line -->
					<h2> <?=$wepName?> </h2>
				    <p><?=$wepName?> is <?=$wepType?> with a <?=$wepHead?> <?=$wepPre?> with a shaft made of <?=$wepShaft?> that was made by <?=$maker?> <?=$was?>. <?=$wepName?> is famous because <?=$famous?> and <?=$other?>.</p>
					<line></line><!-- separation line -->
					<input type='button' class="button" onclick='location.reload();' value='Generate New' /><br>
					<!-- <a href="#" class="button">Generate New</a><br> -->
					<line></line><!-- separation line -->
          <date>Arbust0: 22 april 2017 - v2.0b</date>
				</text>
				<line></line>
					<?php require_once("social.html"); ?>
				<line></line>
				</div><!-- animation -->
				<?php require_once ("footer.html"); ?>
