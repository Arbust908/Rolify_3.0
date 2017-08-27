<?php require_once("head.php"); ?>

          <?php
            // Variables
            $dias = ["Granja","Luna","Cielo","Tierra","Mar","Rey","Dios"];
            $semana = ["Escudero","Caballero","Baron","Conde","Duke"];
            $mes = ["Nacimiento","Sanacion","Recuerdo","Sabiduria","Cuchillas","Victoria","Gloria","Sangre","Derrota","Intranquilidad"];
            $era = ["Creacion","Naturaleza","Civilicacion","Plaga","Reconstruccion","Torre"];

            //Ingles
            $day = ["Farmday","Moonday","Skyday","Earthday","Seaday","Kingday","Godsday"];
            $week = ["Squire's","Knight's","Baron's","Earl's","Duke's"];
            $month = ["Rising","Healing","Remebrance","Wisdom","Blades","Victory","Glory","Blood","Defeat","Restlessness"];
            $age = ["Creation","Nature","Civilization","Plage","Reconstruction","Tower"];

            // Function
            function CrearFecha($d_1,$w_2,$m_3,$a_4)
            {
              $v1 = $w_2[rand(0,4)];
              $v2 = $d_1[rand(0,6)];
              $v3 = $m_3[rand(0,9)];
              $v4 = $a_4[rand(0,5)];
              // echo $v1."<br>". $v2."<br>".$v3."<br>".$v4."<br>";
              // echo 'Hoy es '.$v1.' de/del '.$v2.' en '.$v3.' en la era de la '.$v4.'<br>';
              echo '<b>Today is '.$v1.' '.$v2.' of '.$v3.' on the Age of '.$v4.'</b><br>';
            }
           ?>
					<h1>Date Maker</h1>
					<h2>This tool generates a date in the Panodale Cronology</h2>
					<line></line><!-- separation line -->
					<h4><b><?=CrearFecha($day, $week, $month, $age)?></b></h4><br>
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
