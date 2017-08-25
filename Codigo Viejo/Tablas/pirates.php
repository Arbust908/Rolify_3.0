<?php require_once("math.php"); ?>
<?php
//Random Pirate Crews
//d10 The pirates' ship is...
$shipD10 = [
  "little more than a raft",
  "a galley",
  "a longship",
  "a catamaran",
  "a cog",
  "a hulk",
  "a carrack",
  "a caravel",
  "a schooner",
  "a dreadnought",
  ];
   $ship = Roller($shipD10);
//d8 Presently, the pirates’ ship is...
$shipIsD8 = [
  "Laden with treasure",
  "Full of stolen goods",
  "Well-stocked with provisions",
  "In tip-top shape",
  "“On loan” to some other pirates",
  "In need of repair",
  "Barely staying afloat",
  "Resting beneath the waves"
  ];
   $shipIs = Roller($shipIsD8);
//d20 The ship's banner features...
$bannerD20 = [
  "a skull",
  "a pair of crossed bones",
  "a skull and cross bones",
  "a skeletal hand",
  "a skeletal fish",
  "a flaming skull",
  "a clenched fist",
  "a ghost",
  "a mermaid",
  "a pair of crossed cutlasses",
  "a dagger",
  "a bloody dagger",
  "an albatross",
  "a pelican",
  "a whale",
  "an octopus",
  "a swordfish",
  "a crab",
  "a sea turtle",
  "a big tuna"
  ];
   $banner = Roller($bannerD20);
//d12 The ship's mascot is...
$mascotD12 = [
  "a budgie parrot fond of saying 'Ye scalawags!'",
  "a cockatoo parrot fond of saying 'Pieces of eight!'",
  "a conure parrot fond of saying 'Dead men tell no tales!'",
  "a macaw parrot fond of saying 'Show me the booty!'",
  "a capuchin monkey with an eyepatch",
  "a macaque with a vest",
  "a spider monkey with a bandanna",
  "a tamarin with mustaches",
  "a budgie parrot fond of saying 'Aye, Captain!'",
  "a cockatoo parrot fond of saying 'It's shark week!'",
  "a conure parrot fond of saying 'Ahoy!'",
  "a macaw parrot fond of saying  'Land, ho!'",
  "a capuchin monkey without an eyepatch",
  "a macaque without a vest",
  "a spider monkey without a bandanna",
  "a tamarin without mustaches",
  "an old turtle",
  "a lazy sea-faring cat",
  "a pot-belly pig",
  "a high-energy herding dog"
  ];
   $mascot = Roller($mascotD12);
//d10 The ship's captain is...
$captainD10 = [
  "a dangerous megalomaniac",
  "a charismatic demagogue",
  "a mysterious foreigner",
  "a talented thief",
  "a member of a prominent family",
  "a ruthless killer",
  "a femme fatale",
  "a charming rogue",
  "a dashing swashbuckler",
  "a brutish thug",
  "an old sailor",
  "a celebrated naval hero"
  ];
   $captain = Roller($captainD10);
//d8 The crew's attitude toward their captain is...
$attitudeD8 = [
  "adoring and loyal",
  "friendly and pleased",
  "respectful and business-like",
  "mercenary and eager",
  "terrified and tight-lipped",
  "disappointed and indifferent",
  "restless and rebellious",
  "angry and mutinous"
  ];
   $attitude = Roller($attitudeD8);
//d10 Crewmembers often sport matching...
$uniformD10 = [
  "Puffy shirts",
  "Breeches",
  "Scarves",
  "Vests",
  "Bandannas",
  "Boots",
  "Tattoos",
  "Hats",
  "Scars",
  "Mustaches"
  ];
   $uniform = Roller($uniformD10);
//d8 The crew's goals include (captain and crewmembers could have different goals)...
$crewGoalsD8 = [
  "discovery of a legendary hidden treasure",
  "domination of the region's maritime trade",
  "revenge against a naval hero",
  "revenge against a rival pirate crew",
  "rebellion against the dominant merchant traders",
  "a wealthy and peaceful retirement",
  "violence to slake their bloodlust",
  "drinking all the rum",
  ];
   $crewGoals = Roller($crewGoalsD8);
//d10 Crewmembers typically arm themselves with...
$crewArmsD10 = [
  "belaying pins (wooden clubs)",
  "throwing knives",
  "over-sized daggers",
  "serrated daggers",
  "cutlasses",
  "clubs and daggers",
  "brass knuckles",
  "bare fists",
  "nets and tridents",
  "harpoons"
  ];
   $crewArms = Roller($crewArmsD10);
//d10 The pirate crew typically fights with...
$tacticD10 = [
  "swarm tactics",
  "hit-and-run tactics",
  "ambush tactics",
  "choreographed maneuvers",
  "unpredictable maneuvers",
  "lots of smiles and jokes",
  "lots of fancy footwork",
  "lots of screaming and shouting",
  "kicking and stomping",
  "lots of head-butting",
  ];
   $tactic = Roller($tacticD10);
//d10 The crew's headquarters is hidden in or near...
$whereD2 = ["near","hidden in"];
$where = Roller($whereD2);
$hqD10 = [
  "a rugged seaside cliff",
  "a hidden lagoon",
  "a remote island",
  "a swampy river mouth",
  "a coastal cave",
  "a tavern",
  "a brothel",
  "a warehouse",
  "a shipyard",
  "a poor fishing village",
  "an old lighthouse",
  ];
   $hq = $where." ".(Roller($hqD10));
//d12 The crew is notorious for...
$fameD12 = [
  "never leaving survivors",
  "feeding captives to sharks",
  "tattooing",
  "branding captives",
  "scalping captives",
  "flaying captives",
  "burning seaside villages",
  "plundering the ships of a wealthy tyrant",
  "using a lot of explosives",
  "convening with ghosts",
  "romantic escapades",
  "singing bawdy songs",
  "drinking too much rum",
  ];
   $fame = Roller($fameD12);
//INDIVIDUAL PIRATES
//d12 Tattoo: The pirate has...
$capTatooD12 = [
  "a dagger tattoo",
  "an anchor tattoo",
  "a skull tattoo",
  "a pair of crossed bones tattoo",
  "a snake tattoo",
  "a fish tattoo",
  "a spider web tattoo",
  "an octopus tattoo",
  "a whale tattoo",
  "a lobster tattoo",
  "a mermaid tattoo",
  "a dragon tattoo",
  ];
   $capTatoo = Roller($capTatooD12);
//d12 Distinguishing feature: The pirate has...
$featCapD12 = [
  "a nose ring",
  "shiny leather boots",
  "gold teeth",
  "an oversized dagger in the belt",
  "a heavy gold chain around the neck",
  "a wide-brimmed hat",
  "an eyepatch",
  "a long black beard",
  "a maniacal laugh",
  "a long, hooked nose",
  "an open shirt and a very hairy chest",
  "a extravagant mustache",
  ];
   $featCap = Roller($featCapD12);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>TE | Tables</title>
  </head>
  <body>
    <h2>Pirates</h2>
    <p><b>
      You can see <?=$ship?> that is <?=$shipIs?> and a black banner with <?=$banner?> in the middle, flowing in the wind. The pirate captain is <?=$captain?> that has <?=$capTatoo?>, <?=$featCap?> and as a mascot <?=$mascot?>.<br>
      The crew is     <?=$attitude?> towards the captain. They use matching <?=$uniform?>, arm themselves with <?=$crewArms?> and want <?=$crewGoals?>.<br>
      This pirates fight with <?=$tactic?>, are known for <?=$fame?> and have their headquarters <?=$hq?>.
    </b></p>
  </body>
</html>
