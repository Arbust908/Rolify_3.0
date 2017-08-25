<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Bestiary.html 5e</title>
<?php
function statCalc($stat)
{
	$mod = floor(($stat -10)/2);
	return $mod;
}
function xpCalc($chal)
{
	$xp = ($chal*200) . "xp";
	return $xp;
}
?>
<style type="text/css">
	header {
		padding: 25px 15px;
		color: white;
		background-color: rgb(0, 107, 196);
	}

	header p.lead {
		color: lightgrey;
	}


	main {
		padding: 10px 15px;
	}

	footer {
		padding: 20px 15px;
		font-size: 90%;
	}


		ul#monsters {
			list-style-type: none;
			padding-left: 0px;
			font-size: 1.1em;
		}

		ul#monsters li {
			padding: 1px;
			cursor: pointer;
		}

		ul#monsters li:hover {
			background: lightgrey;
		}

		ul#monsters li:active {
			color: white;
		}

		ul#monsters li span.source {
			font-size: 0.8em;
		}

		th#name span.source {
			display: inline-block;
			float: right;
			font-weight: 500;
		}

		span.sourceMM {
			color: green;
		}

		span.sourceVGM {
			color: grey;
		}

		span.sourceToD {
			color: orangered;
		}

		span.sourceCoS {
			color: purple;
		}

		span.sourceOotA {
			color: black;
		}

		span.sourceSKT {
			color: darkcyan;
		}

		span.sourcePotA {
			color: blue;
		}

		pan.sourceLMoP {
			color: lightgreen;
		}

		table#stats {
			width: 100%;
			min-width: 200px;
			max-width: 400px;
			background: #fdf1dc;
			font-size: .9em;
			table-layout: fixed;
		}

		table#stats td, table#stats th {
			padding: 1px 0.3em;
			color: #922610;
		}

		th.border {
			height: 10px;
			background: #e69a28;
			border: 1px solid black;
		}

		td.divider div {
			background: #922610;
			height: 4px;
			margin: 4px 0;
		}

		th#name {
			font-size: 1.5em;
			font-family: serif;
		}

		table#stats td#sizetypealignment {
			font-style: italic;
			color: black;
		}

		tr#abilitynames th {
			text-align: center;
			font-weight: bold;
		}

		tr#abilityscores td {
			text-align: center;
			width: 16%;
		}

		span.name {
			font-weight: bold;
		}

		tr.trait td p.spells {
			margin-bottom: 0px;
		}

		tr#actions td, tr#reactions td, tr#legendaries td {
			font-size: 1.5em;
			border-bottom: 1px solid #a8513b;
			vertical-align: bottom!important;
		}

		tr#actions td span, tr#reactions td span, tr#legendaries td span {
			display: block;
			margin-bottom: -0.3em;
			font-weight: 100;
		}

		tr.trait td, tr.action td, tr.reaction td, tr.legendary td {
			padding-bottom: 0.7em!important;
			color: black!important;
		}

		tr.trait:last-of-type td, tr.action:last-of-type td, tr.reaction:last-of-type td, tr.legendary:last-of-type td {
			padding-bottom: 0px!important;
		}

		tr.trait p:first-of-type, tr.action p:first-of-type, tr.reaction p:first-of-type, tr.legendary p:first-of-type {
			margin-top: 1em!important;
		}
	</style>

<?php
	$src = "Padonale";
	$name = "Chochovo";
	$size = "Large";
	$type = "beast";
	$alignment = "unaligned";
	$ac = "11 (natural armor)";
	$hp = "19 (3d10 + 3)";
	$speed = "50ft";
	$str = 14;
	$dex = 12;
	$con = 12;
	$int = 2;
	$wis = 10;
	$cha = 5;
	$senses = "passive Perception 10";
	$lenguages = "-";
	$cr = 1/4;
	$action1 = "<b>Beak</b>. Melee Weapon Attack: +4 to hit, reach 5ft, one target. <b>to Hit</b> 6(1d8+2) slashing damage.";
 ?>

</head>
<body>

	<main class="container bodyContent">
<div class="col-sm-6">
	<div style="height: 100%; max-height: 660px; overflow-y: auto; overflow-x: visible; padding-top: 1em;">
	<table id="stats">
		<tr><th class="border" colspan="6"></th></tr>
		<tr>
			<th id="name" colspan="6"><?=$name?> <span class="source" title="Source book"><?=$src?></source></th>
		</tr>
		<tr>
			<td id="sizetypealignment" colspan="6"><span id="size"><?=$size?></span> <span id="type"><?=$type?></span>, <span id="alignment"><?=$alignment?></span></td>
		</tr>
		<tr><td class="divider" colspan="6"><div></div></td></tr>
		<tr>
			<td colspan="6"><strong>Armor Class</strong> <span id="ac"><?=$ac?></span></td>
		</tr>
		<tr>
			<td colspan="6"><strong>Hit Points</strong> <span id="hp"><?=$hp?></span></td>
		</tr>
		<tr>
			<td colspan="6"><strong>Speed</strong> <span id="speed"><?=$speed?>.</span></td>
		</tr>
		<tr><td class="divider" colspan="6"><div></div></td></tr>
		<tr id="abilitynames">
			<th>STR</th>
			<th>DEX</th>
			<th>CON</th>
			<th>INT</th>
			<th>WIS</th>
			<th>CHA</th>
		</tr>
		<tr id="abilityscores">
			<td id="str"><span class="score"><?=$str?></span> (<span class="mod"><?= statCalc($str) ?></span>)</td>
			<td id="dex"><span class="score"><?=$dex?></span> (<span class="mod"><?= statCalc($dex) ?></span>)</td>
			<td id="con"><span class="score"><?=$con?></span> (<span class="mod"><?= statCalc($con) ?></span>)</td>
			<td id="int"><span class="score"><?=$int?></span> (<span class="mod"><?= statCalc($int) ?></span>)</td>
			<td id="wis"><span class="score"><?=$wis?></span> (<span class="mod"><?= statCalc($wis) ?></span>)</td>
			<td id="cha"><span class="score"><?=$cha?></span> (<span class="mod"><?= statCalc($cha) ?></span>)</td>
		</tr>
		<tr><td class="divider" colspan="6"><div></div></td></tr>
		<tr>
			<td colspan="6"><strong>Saving Throws</strong> <span id="saves"><?= $save=""; ?></span></td>
		</tr>
		<tr>
			<td colspan="6"><strong>Skills</strong> <span id="skills">Perception +0</span></td>
		</tr>
		<tr>
			<td colspan="6"><strong>Damage Vulnerabilities</strong> <span id="dmgvuln">fire</span></td>
		</tr>
		<tr>
			<td colspan="6"><strong>Damage Resistances</strong> <span id="dmgres">cold</span></td>
		</tr>
		<tr>
			<td colspan="6"><strong>Damage Immunities</strong> <span id="dmgimm">lightning</span></td>
		</tr>
		<tr>
			<td colspan="6"><strong>Condition Immunities</strong> <span id="conimm">exhaustion</span></td>
		</tr>
		<tr>
			<td colspan="6"><strong>Senses</strong> <span id="senses"><?= $senses ?></span> passive Perception <span id="pp">10</span></td>
		</tr>
		<tr>
			<td colspan="6"><strong>Languages</strong> <span id="languages"><?= $lenguages ?></span></td>
		</tr>
		<tr>
			<td colspan="6"><strong>Challenge</strong> <span id="cr"><?= $cr ?></span> (<span id="xp"><?= xpCalc($cr) ?></span>)</td>
		</tr>
		<tr id="traits"><td class="divider" colspan="6"><div></div></td></tr>
			<tr class="trait">
				<td colspan="6"><span class="name">Trait.</span> <span class="content">Content.</span></td>
			</tr>
		<tr id="actions"><td><span>Actions</span></td></tr>
			<tr class="action">
				<td colspan="6"><span class="name">Action.</span> <span class="content"><?= $action1 ?></span></td>
			</tr>
		<tr id="reactions"><td><span>Reactions</span></td></tr>
			<tr class="reaction">
				<td colspan="6"><span class="name">Reaction.</span> <span class="content">Content.</span></td>
			</tr>
		<tr id="legendaries"><td colspan="6"><span>Legendary Actions</span></td></tr>
			<tr class="legendary">
				<td colspan="6"><span class="name">Action.</span> <span class="content">Content.</span></td>
			</tr>
		<tr><th class="border" colspan="6"></th></tr>
	</table>
	</div>
</div>
</div>
</main>

<style type="text/css">

</style>
	</body>
	</html>
