<div id="tourisme-sorties">

    <br>

    <label class="tourisme-grand-titre">TOURISME</label>

    <br>
    <br>

    <div class="barre-array-rouge"></div>
    <div class="arrow-down-rouge"></div>
    <div class="barre-array-rouge"></div>

    <br>
    <br>

    <label class="tourisme-titre">SORTIES DÉTENTES</label>

    <br>
    <br>
    <br>

    <div class="tourisme-bloc-flex">
        <?php 
					$count = 0;
					$classeCSS = 'tourisme-flex-blanche';
					$cote = '';
					foreach($sorties as $sortie):
						$count++;
						
						$classeCSS = ($count % 4 == 0 || $count % 4 == 1) ? 'tourisme-flex-beige' : 'tourisme-flex-blanche';

						if($cote=='gauche'){ $cote = 'droite'; } else { $cote = 'gauche'; }

					echo '<div class=" '. $classeCSS .' ">';
						echo '<div class="tourisme-contenu-'.$cote.'">';
							echo '<img class="tourisme-img-'.$cote.'" src="pics/'. $sortie['image'].'">';
							echo '<div class="tourisme-table-'.$cote.'">';
								echo '<div class="tourisme-cell-gauche"><label class="tourisme-sous-titre">'. $sortie['nom'].'</label></div>';
								echo '<div class="tourisme-cell-droite"><a target="_blank" href="'. $sortie['lien'].' ">> SITE</a></div>';
							echo '</div>';
							echo '<label class="tourisme-label-gauche">'. $sortie['description'].'</label>';
						echo '</div>';


					if ($count % 2 == 0) {
						echo '</div><div class="tourisme-bloc-flex">';
					} else {
						echo '</div>';
					}
					
					endforeach; ?>

    </div>



    <div id="tourisme-monuments">
        <div class="arrow-down-blanche-seule"></div>

        <br>

        <label class="tourisme-titre-blanc">MONUMENTS À VISITER</label>

        <br>
        <br>

        <div class="tourisme-bloc-flex">
            <?php 
					$count = 0;
					$classeCSS = 'tourisme-flex-rouge';
					$cote = '';
					foreach($monuments as $monument):
						$count++;

						$classeCSS = ($count % 4 == 0 || $count % 4 == 1) ? 'tourisme-flex-rougeclair' : 'tourisme-flex-rouge';
						if($cote=='gauche'){ $cote = 'droite'; } else { $cote = 'gauche'; }

					echo '<div class=" '. $classeCSS .' ">';
						echo '<div class="tourisme-contenu-'.$cote.'">';
							echo '<img class="tourisme-img-'.$cote.'" src="pics/'. $monument['image'].'">';
							echo '<div class="tourisme-table-'.$cote.'">';
								echo '<div class="tourisme-cell-gauche"><label class="tourisme-sous-titre-blanc">'. $monument['nom'].'</label></div>';
								echo '<div class="tourisme-cell-droite-blanc"><a target="_blank" href="'. $monument['lien'].' ">> SITE</a></div>';
							echo '</div>';
							echo '<label class="tourisme-label-gauche-blanc">'. $monument['description'].'</label>';
						echo '</div>';


					if ($count % 2 == 0) {
						echo '</div><div class="tourisme-bloc-flex">';				
					} else {
						echo '</div>';
					}
					endforeach; ?>

        </div>

        <div id="tourisme-image-hotel">
            <img src="pics/tourisme/visuelbanctourisme.png">
        </div>

        <div id="tourisme-villes" style="width: 100%;">
            <label></label>
            <!-- style effacé, voir sur code source page tourisme -->

            <div class="arrow-down-blanche-seule"> </div>

            <br>

            <label class="tourisme-titre-blanc">VILLES À DÉCOUVRIR</label>

            <br>
            <br>

            <div class="villes-flex">
                <?php foreach($villes as $ville): ?>
                <div class="villes-bloc">
                    <img class="villes-img" src="pics/<?php echo $ville['image']; ?>">
                    <a href="<?php echo $ville['lien']; ?>" target="_blank"
                        class="villes-decouvrir"><?php echo $ville['nom']; ?></a>
                </div>
                <?php endforeach; ?>

            </div>
            <br>
        </div>