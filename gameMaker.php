<?php require_once("head.php"); ?>
<?php
function gameType($dxV)
{
	if ($dxV < 7) {
		 //Type cards
		 //d8 On each turn, the player...
		 $playersTurn = [
			 "plays a card from his or her hand face up or face down on the table",
			 "draws one or more cards from a personal deck",
			 "draws one card from a community deck",
			 "draws a card from a community deck if he or she has no other plays",
			 "places a card from his or her hand into the discard pile",
			 "lays down a pair, a three or four of a kind, or a straight on the table",
			 "lays down a card to build threes and fours of a kind or straights on the table",
			 "draws one or more cards from a personal deck"
			];
		 $pTD8 = Roller($playersTurn);

		 //d8 To win the game, a player must...
		 $winCondition = [
			 "play all the cards in his or her hand",
			 "be holding the highest score at the end of the hand",
			 "be holding the score closest to a target score",
			 "hold all the cards in the deck",
			 "win the most tricks over the course of a round",
			 "be holding the lowest score at the end of the hand",
			 "bluff and bet their way to having the lowest scoring hand",
			 "bluff and bet there way to being the highest scoring hand"
			];
			 $wCD8 = Roller($winCondition);

		 //d8 The highest card or hand is called...
		 $highestCard = [
			 "the dragon",
			 "the lord",
			 "the crown",
			 "the queen",
			 "the alchemist",
			 "the knight",
			 "the champion",
			 "the eagle"
			];
			 $hCD8 = Roller($highestCard);

		 //d8 The lowest card or hand is called...
		 $lowestCard = [
			 "the worm",
			 "the beggar",
			 "the rat",
			 "the fool",
			 "the crone",
			 "the devil",
			 "the villain",
			 "the pigeon"
		  ];
			 $lCD8 = Roller($lowestCard);

			 $type =' is a card game where on each turn players '.$pTD8.' tring to '.$wCD8.' to win. In this game the highest card is called '.$hCD8.' and the lowest '.$lCD8;
			 return $type;

	 } elseif ($dxV > 6 && $dxV < 10) {
		 //Type dice
		 //d8 On each turn, the player...
		 $playersTurn = [
			 "rolls once",
			 "rolls twice, keeping the better results",
			 "rolls once or twice, keeping the second result on a reroll",
			 "rolls at the same time as other players",
			 "rolls and hides the results from other players",
			 "rolls and hides the results from him- or herself and from other players",
			 "rolls and hides the results from him- or herself but not from the other players",
			 "rolls and waits for an arbiter to make a ruling"
		  ];
		 	$pTD8 = Roller($playersTurn);

		 //d8 To win the game, a player must...
		 $winCondition = [
			 "have rolled the highest score in play",
			 "roll the highest possible score",
			 "roll the lowest possible score",
			 "have rolled the lowest score in play",
			 "achieve a target score over the succession of many rolls",
			 "outscore his or her opponents over the succession of many rolls",
			 "bluff and bet their way to having the lowest remaining score",
			 "bluff and bet there way to being the highest remaining score"
		 ];
		 $wCD8 = Roller($winCondition);

		 //d8 The highest card or hand is called...
		 $highestCard = [
			 "the dragon",
			 "the keep",
			 "the warship",
			 "the maiden",
			 "the thunder",
			 "the shark",
			 "the tower",
			 "the sorcerer"
		 ];
		 $hCD8 = Roller($highestCard);

		 //d8 The lowest card or hand is called...
		 $lowestCard = [
			 "the snake",
			 "the thief",
			 "the dinghy",
			 "the hag",
			 "the ghost ship",
			 "the tuna",
			 "the pits",
			 "the demon"
		 ];
		 $lCD8 = Roller($lowestCard);

			 $type =' is a dice game where on each turn players '.$pTD8.' tring to '.$wCD8.' to win. In this game the highest roll is called '.$hCD8.' and the lowest '.$lCD8;
			 return $type;

	 } elseif ($dxV > 9) {
		 //Type board
		 //d8 On each turn, the player...
		 $playersTurn = [
			 "moves one of his or her pieces on the board",
			 "places a piece on the board",
			 "moves two or more of his or her pieces on the board",
			 "places two or more pieces on the board",
			 "removes one or more of his or her opponent's pieces by encircling it or flanking it",
			 "halts his or her opponent's progress by encircling or flanking one or more of the opponent's pieces",
			 "converts one or more of his or her opponent's pieces by encircling it or flanking it",
			 "moves his or her piece closer to a destination space on the board"
		 ];
		 $pTD8 = Roller($playersTurn);

		 //d8 To win the game, a player must...
		 $winCondition = [
			 "capture all of his or her opponents pieces",
			 "kill all of his or her opponents pieces",
			 "race his or her opponent's pieces through a labyrinth of obstacles",
			 "maneuver pieces to the far side of his or her opponent's territory",
			 "capture his or her opponent's headquarters",
			 "kill his or her opponent's commanding piece",
			 "score points while navigating pieces through a labyrinth",
			 "claim territorial positions with pieces before his or her opponent does"
		 ];
		 $wCD8 = Roller($winCondition);

		 //d8 The highest card or hand is called...
		 $highestCard = [
			 "the dragon",
			 "the warhorse",
			 "the warlord",
			 "the mastermind",
			 "the queen",
			 "the dark lord",
			 "the treasure chest",
			 "the sword"
		 ];
		 $hCD8 = Roller($highestCard);

		 //d8 The lowest card or hand is called...
		 $lowestCard = [
			 "the minion",
			 "the foot soldier",
			 "the goblin",
			 "the goon",
			 "the guard",
			 "the skeleton",
			 "the trap",
			 "the club"
		 ];
		 $lCD8 = Roller($lowestCard);

			 $type =' is a board game where on each turn players '.$pTD8.' tring to '.$wCD8.' to win. In this game the strongest piece is called '.$hCD8.' and the weakest piece is '.$lCD8;
			 return $type;

	 };
}

function randGame($value=''){

 //Name Generator
 $nameGeneration1 = ["Floping","Flaming","Steaming","Loosing",""];
 $nameGeneration2 = ["Dragon","Horse","Milk","Theeth","Invation",""];
 $nameGeneration3 = ["Master","of mud","","","",""];
	$nG1 = Roller($nameGeneration1);
	$nG2 = Roller($nameGeneration2);
	$nG3 = Roller($nameGeneration3);
 $nGfull = $nG1.' '.$nG2.' '.$nG3;

 // d12 You play with...
 $playWith = [
	 "a deck of over 100 cards",
	 "a deck of 53 cards","a deck of 52 cards",
	 "a deck of 24 cards","a deck of 22 cards",
	 "a deck with a variable number of cards",
	 "a pair of dice",
	 "several dice",
	 "several dice, pencils, and paper",
	 "one or two dice and a board with pieces",
	 "a board with sets of matching pieces",
	 "a board with sets of individual pieces"
 ];
 $d12a = rand(0,(count($playWith)-1));
 $pWD12 = $playWith[$d12a];

 // d12 In this game...
 $inThisGame = [
	 "players have the opportunity to bet once on each player's turn",
	 "players have several opportunities to bet on each player's turn",
	 "players have several opportunities to bet each round",
	 "players must bet before the round is played",
	 "players must bet before the game begins",
	 "spectators bet as often as players do",
	 "spectators typically place bets before the game begins",
	 "spectators often place bets while the game is in progress",
	 "cheating is extremely rare or impossible",
	 "cheating is difficult,and often occurs with the help of someone else in the room",
		"cheating is common",
		"cheating is encouraged"
	];
 $iTGD12 = Roller($inThisGame);

 //d12 This game is known for...
 $isKnown4 = [
	 "high stakes gambling",
	 "low stakes, social gambling",
	 "its simple set of rules",
	 "its complicated set of rules",
	 "the ease with which anyone can learn to play",
	 "its class of expert players and their elaborate strategies",
	 "a celebrated instance of cheating that launched a war",
	 "a celebrated instance of cheating that prevented a war",
	 "a legendary match involving a king or queen",
	 "a legendary match involving a witch or wizard",
	 "a storied bet where the loser faced a ",
	 "a storied bet in which the winner took from the loser a "
 ];
 $iK4D12 = Roller($isKnown4);
 $ext = "";
 	if ($iK4D12 == "a storied bet where the loser faced a ") {
 		$extD0 = [
			"aberration with many eyes",
			"dragon",
			"demon",
			"devil",
			"elemental",
			"kraken",
			"lich",
			"vampire"
			];
			 $ext = Roller($extD0);
 	} elseif ($iK4D12 == "a storied bet in which the winner took from the loser a ") {
 		$extD0 = [
			"airship",
			"ancient text",
			"castle",
			"keys to the city",
			"magic sword",
			"magic wand",
			"princess",
			"treasure hoard"
		];
		 $ext = Roller($extD0);
 	}
	$iK4D12 .= $ext ;

 //d12 The game is popular among...
 $isPopular4 = [
		"sailors and pirates",
		"fishermen and dockworkers",
		"thieves and knaves",
		"knights and lords",
		"peasants",
		"dwarves",
		"miners and smiths",
		"goblins and hobgoblins",
		"elves",
		"noblewomen",
		"masons and stonecutters",
		"mages and priests"
	];
 	$iP4d12 = Roller($isPopular4);

 //d12 The game originated...
 $gameOrig = [
		"long ago in this region",
		"long ago in a foreign land",
		"long ago in an unknown location",
		"in the recent past in this region",
		"in the recent past in this very room",
		"in the recent past in a foreign land",
		"down along the docks of a bustling port city",
		"in a quaint country inn",
		"in rough-and-tumble urban tavern",
		"along a trade route to an exotic land",
		"in the court of a mighty king or queen",
		"in the mind of a half-mad wizard"
	];
 $gOD12 = Roller($gameOrig);

 //if por tipo de juego
 $type = gameType($d12a);

	 echo "<br>";
	 echo "<h3><b>".$nGfull."</b></h3>";
	 echo "<br>";
	 echo '<p><b>'.$nGfull.'</b> is a game played with '.$pWD12.' where '.$iTGD12.'. <b>'.$nGfull.'</b> is known for '.$iK4D12.' and is popular with '.$iP4d12.'. <b>'.$nGfull.'</b> was created '.$gOD12.'.<br> <b>'.$nGfull.'</b>'.$type
	 .'.<p><br>';
}
?>

					<h1>Inn Game Generator</h1>
					<h2>This tool generates an inn game with a detailed description</h2>
					<line></line><!-- separation line -->
					<b><?=randGame()?></b><br>
					<input type='button' class="button" onclick='location.reload();' value='Generate New' /><br>
					<!-- <a href="#" class="button">Generate New</a><br> -->
					<line></line><!-- separation line -->
          <date>Published: 17 april 2017 - v0.9b</date>
				</text>
				<line></line>
					<?php require_once("social.html"); ?>
				<line></line>
				</div><!-- animation -->
				<?php require_once ("footer.html"); ?>
