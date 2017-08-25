<?php require_once("head.php"); ?>

<?php
function statroll()
{
  $r1 = rand(1,6);
  $r2 = rand(1,6);
  $r3 = rand(1,6);
  $r4 = rand(1,6);
  if ($r4 == 1) {
    $r4 = 6;
  }
  // echo '<span style="color:#34495e">( '.$r1.' )_( '.$r2.' )_( '.$r3.' )_( '.$r4.' ) --> </span>';
  $result = "";
  if ($r1 <= $r2 && $r1 <= $r3 && $r1 <= $r4) {
    $ext = $r1;
    $r1 = '<span style="color:#95a5a6">'.$ext.'</span>';
    $total = ($r4 + $r2 + $r3);
    $result = '<span style="background-color: #8e44ad;color: #ecf0f1;padding: 10px;border-radius: 3px;">'. $total . '</span>' . " (". $r1 . " - " . $r2 . " - " . $r3 . " - " . $r4 . ") " . '<span style="background-color: #e74c3c;color: #ecf0f1;padding: 10px;border-radius: 3px;">' . floor(($total-10)/2) . '</span>';
    //echo "r1 es bajo| ";
  } elseif ($r2 <= $r1 && $r2 <= $r3 && $r2 <= $r4) {
    $ext = $r2;
    $r2 = '<span style="color:#95a5a6">'.$ext.'</span>';
    $total = ($r1 + $r4 + $r3);
    $result = '<span style="background-color: #8e44ad;color: #ecf0f1;padding: 10px;border-radius: 3px;">'. $total . '</span>' . " (". $r1 . " - " . $r2 . " - " . $r3 . " - " . $r4 . ") " . '<span style="background-color: #e74c3c;color: #ecf0f1;padding: 10px;border-radius: 3px;">' . floor(($total-10)/2) . '</span>';
    //echo "r2 es bajo| ";
  } elseif ($r3 <= $r2 && $r3 <= $r1 && $r3 <= $r4) {
    $ext = $r3;
    $r3 = '<span style="color:#95a5a6">'.$ext.'</span>';
    $total = ($r1 + $r2 + $r4);
    $result = '<span style="background-color: #8e44ad;color: #ecf0f1;padding: 10px;border-radius: 3px;">'. $total . '</span>' . " (". $r1 . " - " . $r2 . " - " . $r3 . " - " . $r4 . ") " . '<span style="background-color: #e74c3c;color: #ecf0f1;padding: 10px;border-radius: 3px;">' . floor(($total-10)/2) . '</span>';
    //echo "r3 es bajo| ";
  } elseif ($r4 <= $r2 && $r4 <= $r3 && $r4 <= $r1) {
    $ext = $r4;
    $r4 = '<span style="color:#95a5a6">'.$ext.'</span>';
    $total = ($r1 + $r2 + $r3);
    $result = '<span style="background-color: #8e44ad;color: #ecf0f1;padding: 10px;border-radius: 3px;">'. $total . '</span>' . " (". $r1 . " - " . $r2 . " - " . $r3 . " - " . $r4 . ") " . '<span style="background-color: #e74c3c;color: #ecf0f1;padding: 10px;border-radius: 3px;">' . floor(($total-10)/2) . '</span>';
    //echo "r4 es bajo| ";
  }
  $result .= "";
  return $result;
}

?>
<h1>Statmaker</h1>
<h2>This tool generates an array of stats</h2>
<line></line><!-- separation line -->

<h5> <span style="font-size: 20px;"> STR :</span> <b><?= statroll() ?></b> </h5><br>
<h5> <span style="font-size: 20px;"> DEX :</span> <b><?= statroll() ?></b> </h5><br>
<h5> <span style="font-size: 20px;"> CON :</span> <b><?= statroll() ?></b> </h5><br>
<h5> <span style="font-size: 20px;"> WIS :</span> <b><?= statroll() ?></b> </h5><br>
<h5> <span style="font-size: 20px;"> INT :</span> <b><?= statroll() ?></b> </h5><br>
<h5> <span style="font-size: 20px;"> CHA :</span> <b><?= statroll() ?></b> </h5><br>

<line></line><!-- separation line -->
<input type='button' class="button" onclick='location.reload();' value='Generate New' /><br>
<!-- <a href="#" class="button">Generate New</a><br> -->
<line></line><!-- separation line -->
<date>Published: 16 may 2017 - v1.0b</date>
</text>
<line></line>
<?php require_once("social.html"); ?>
<line></line><!-- separation line -->
</div><!-- animation -->
<?php require_once ("footer.html"); ?>
