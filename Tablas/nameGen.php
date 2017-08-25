<?php require_once("math.php") ?>
<!-- race choice -->
<?php
 $specieD12 = [
  "a dragonborn",
  "a dwarf","a dwarf",
  "a dark elf",
  "a high elf","a high elf","a wood elf","a wood elf",
  "a half-orc","a half-orc",
  "a halfling","a halfling",
  "a gnome", "a gnome",
  "a human","a human","a human",
  "a half-elf","a half-elf",
  "a tiefling",
  "a "
  ];
 $specie = Roller($specieD12);
 $extraSP = "";

  if ($specie == "a ") {
    $extraSPD20 = [
      "centaur",
      "dryad",
      "duergar",
      "kobold",
      "genasi",
      "goblin",
      "hobgoblin",
      "medusa",
      "minotaur",
      "lizardfolk",
      "ogre",
      "pixie",
      "revenant",
      "satyr",
      "shadar-kai",
      "troll",
      "vampire",
      "werebear",
      "wererat",
      "werewolf"
    ];
    $extraSP = Roller($extraSPD20);
  };
  $specie .= $extraSP;
 ?>
<!-- Gender Chooser -->
<?php
 $sexo = rand(0,1);
  if ($sexo == 0) {
    $gender = "Miss";
    $pre = "She";
    $type = "Her";
  } elseif ($sexo == 1) {
    $gender = "Mister";
    $pre = "He";
    $type = "His";
  }
 ?>
<!-- namemaker -->
<?php
 // if ($specie == "a human") {
 //
 //
 if ($specie) {
   if ($sexo == 0) {
    $nameHF = [
      "Atala",
      "Ceidil",
      ];
     $name = Roller($nameHF);
    } elseif ($sexo == 1) {
    $nameHM = [
      "Aseir",
      "Bardeid"
      ];
     $name = Roller($nameHM);
    };
 }
 if ($specie == "a dwarf") {
   if ($sexo == 0) {
    $nameDF = [
      "Amber",
      "Artin",
      "Audhild",
      "Bardryn",
      "Dagnal",
      "Diesa",
      "Eldeth",
      "Falkrunn",
      "Finellen",
      "Gunnloda",
      "Gurdis",
      "Helja",
      "Hlin",
      "Kathra",
      "Kristryd",
      "Ilde",
      "Liftrasa",
      "Mardred",
      "Riswynn",
      "Sannl",
      "Torbera",
      "Torgga",
      "Vistra"
    ];
     $name = Roller($nameDF);
    } elseif ($sexo == 1) {
    $nameDM = [
      "Adrik",
      "Alberich",
      "Baern",
      "Barendd",
      "Brottor",
      "Bruenor",
      "Dain",
      "Darrak",
      "Delg",
      "Eberk",
      "Einkil",
      "Fargrim",
      "Flint",
      "Gardain",
      "Harbek",
      "Kildrak",
      "Morgran",
      "Orsik",
      "Oskar",
      "Rangrim",
      "Rurik",
      "Taklinn",
      "Thoradin",
      "Thorin",
      "Tordek",
      "Traubon",
      "Travok",
      "Ulfgar",
      "Veit",
      "Vandal"
    ];
     $name = Roller($nameDM);
    };
 }

 // if ($specie == "a human") {
 //
 if ($specie == "a dwarf") {
   $surDD00 = [
      "Balderk",
      "Battlehammer",
      "Brawnanvil",
      "Dankil",
      "Fireforge",
      "Frostbeard",
      "Gorunn",
      "Holderhek",
      "Ironfist",
      "Loderr",
      "Lutgehr",
      "Rumnaheim",
      "Strakeln",
      "Torunn",
      "Ungart"
   ];
    $surname = Roller($surDD00);
 }
 if ($specie) {
  $surHD00 = [
   "Basha",
   "Dumein",
   "Jassan",
   "Khalid",
   "Mostana",
   "Pashar",
   "Rein",
   ];
  $surname = Roller($surHD00);
 }
?>

<?php

 echo $specie;
 echo $gender;
 echo $pre;
 echo $name;
 echo $surname;

  return $specie;
  return $gender;
  return $pre;
  return $name;
  return $surname;

?>
