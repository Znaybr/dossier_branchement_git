<?php
    require_once ("data/data.php");
?>


<?php require_once ("views/page_top.php"); ?>

    <main>
        <ul> <!--AFFICHAGE DU CATALOGUE-->
            <?php foreach ($data as $numero => $forfaits){ ?>
                 <li>
                     <a href="detail.php?forfait_id=<?php echo $numero ?>"> <!--QUERY STRING : AJOUTE en GET dans l'URL un id  avec le système nom=valeur-->
                         <div>
                             <p> <?php echo $forfaits['forfait'] ?>, <span><?php echo $forfaits['prix'] ?></span></p>
                             <img src="<?php echo $forfaits['photo'] ?>" alt="<?php echo $forfaits['description'] ?>" />
                         </div>
                     </a>
                 </li>
            <?php }; ?>
        </ul>
    </main>

<?php require_once ("views/page_bottom.php"); ?>