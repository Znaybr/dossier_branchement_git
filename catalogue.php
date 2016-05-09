<?php
    require_once ("data/data.php");
?>


<?php require_once ("views/page_top.php"); ?>

    <main>
        <ul> <!--AFFICHES DU CATALOGUE-->
            <?php foreach ($data as $numero => $forfaits){ ?>
                 <li>
                     <div>
                         <p> <?php echo $forfaits['forfait'] ?>, <span><?php echo $forfaits['prix'] ?></span></p>
                         <img src="<?php echo $forfaits['photo'] ?>" alt="<?php echo $forfaits['description'] ?>" />
                     </div>
                 </li>
            <?php }; ?>
        </ul>
    </main>

<?php require_once ("views/page_bottom.php"); ?>