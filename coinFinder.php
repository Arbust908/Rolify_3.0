<?php require_once("head.php"); ?>

<?php
//Coins
//Random hoards of coins

//D10 Material
$materialD10 = [
  "gold",
  "silver",
  "copper",
  "brass",
  "obsidian",
  "wood",
  "ivory",
  "ceramic",
  "bone",
  "carved clam"
  ];
 $material = Roller($materialD10);

//D10 Size and Shape
$sizeD10 = [
  "thin",
  "fat",
  "tiny",
  "uncomuly big",
  "2 inches long",
  "1 inch across"
  ];
 $size = Roller($sizeD10);
$shapeD10 = [
  "rectangular",
  "square",
  "eight sided",
  "diamond shaped",
  "six sided",
  "round",
  "round with a hole in the center",
  "crescent shaped",
  "irregularly shaped"
  ];
 $shape = Roller($shapeD10);
 $sizeANDshape = $size.' '.$shape;

//D10 Markings
$markD10 = [
  "a face",
  "a flag",
  "a geometric pattern",
  "a slogan",
  "a numerical value",
  "a line for splitting",
  "a crown",
  "a city",
  "a ship",
  "a crest"
  ];
 $mark = Roller($markD10);

//D10 The coins value is defined as...
$valueD10 = [
  "it's weight of metal",
  "a barrel of water",
  "one mile of tolls on the king's road",
  "one deer hide",
  "it's weight in gold",
  "two of a smaller coin",
  "a day's wages for a soldier",
  "a bushel of wheat",
  "an hour of air in an underwater kingdom",
  "a yard of common cloth"
  ];
 $value = Roller($valueD10);

//D10 Age
$ageD10 = [
  "newly minted",
  "current",
  "current, but out of circulation",
  "old",
  "old and corroded",
  "ancient",
  "ancient, and concreted together with other coins",
  "current, but from another plane",
  "old, and from a distant land",
  "ancient, and from a long forgotten empire"
  ];
  $age = Roller($ageD10);

//D10 The coin is valuable for other reasons because...
$otherVD10 = [
  "it is highly valued by collectors",
  "it was only minted during a short time frame",
  "it depicts a famous symbol",
  "it isn't",
  "it is from the reign of the last king",
  "it was minted by a long dead people",
  "it is common in the realm",
  "it is the only remaining trace of a lost empire",
  "it was minted in a distant land",
  "it is made from a material rare in this area"
  ];
 $otherV = Roller($otherVD10);

//D10 A mixed hoard of coins contains...
$hoardD10 = [
  0 => ''.$sizeANDshape.' coins all made of '.$material.' each valuated as '.$value ,
  1 => ''.$size.' coins of all kind of shapes, with '.$mark.' marked on one side and are visualy '.$age ,
  2 => 'rare coins made mostly out of '.$material.' and have '.$mark.' painted on them that are '.$age
  ];
 $hoard = Roller($hoardD10);

[// Coins of various shapes, made of different metals, and with similar markings, likely minted in the same place.
  // Mostly identical copies of the same coin with a handful of others mixed in.
  // Mostly coins with similar markings, with a few foreign coins mixed in.
  // A mixed bag of coins from all over the world.
  // A box of rare coins from far away along with many common coins of the realm.
  // A set of chits with a value in coins redeemable on their face mixed among the coins.
  // A pile of coins corroded over time into one large mass.
  // A charred bag of soot stained coins.
 ]

?>
					<h1>Coin Finder</h1>
					<h2>This tool generates a coin that you found.</h2>
					<line></line><!-- separation line -->
          You found a <?=$sizeANDshape?> coin made of <?=$material?> with <?=$mark?> carved in the center.<br>
          This is not any coin, it is <?=$age?> with value iqual to <?=$value?> in the market but it is also important because <?=$otherV?>.
          <line></line><!-- separation line -->
          <?php
            //not for your eyes
          echo $material = Roller($materialD10);
          echo $size = Roller($sizeD10);
          echo $shape = Roller($shapeD10);
          echo $mark = Roller($markD10);
          echo $value = Roller($valueD10);
          echo $age = Roller($ageD10);
          echo $otherV = Roller($otherVD10);
          echo $hoard = Roller($hoardD10);
           ?>
          <line></line><!-- separation line -->
					<input type='button' class="button" onclick='location.reload();' value='Generate New' /><br>
					<!-- <a href="#" class="button">Generate New</a><br> -->
					<line></line><!-- separation line -->
          <date>Published: 17 april 2017 - v1.0b</date>
				</text>
				<line></line>
					<?php require_once("social.html"); ?>
				<line></line>
				</div><!-- animation -->
				<?php require_once ("footer.html"); ?>
