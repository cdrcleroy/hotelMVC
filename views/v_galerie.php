<div id="index-photos">

    <br>

    <div id="index-photos-titre">
        <label>GALERIE PHOTOS</label>
    </div>
    <br>
    <div class="barre-array-blanche"></div>
    <div class="arrow-down-blanche"></div>
    <div class="barre-array-blanche"></div>
    <br>
    <br>
    <br>
    <br>

    <div id="index-photos-galerie">
        <div class="tablerow">

            <?php foreach($data as $photo): ?>

            <a href="/Fichiers/<?php echo $photo['image']; ?>" class="img-minia zoombox zgallery1">
                <img src="Fichiers/<?php echo $photo['image']; ?>" alt="<?php echo $photo['alt']; ?>"></a>

            <?php endforeach; ?>

        </div>
    </div>

    <br>
    <br>
    <br>
    <br>

</div>