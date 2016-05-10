<?php
    require_once ("data/data.php");
//    var_dump($_GET);

    // CHERCHE l'ID DANS L'URL
    $forfait_id = 0;                                // défini un id de base
    if(array_key_exists("forfait_id", $_GET )){     // cherche dans l'URL si l'élément "forfait_id" existe
        $forfait_id = $_GET["forfait_id"];          // change l'id en fonction de la valeur de l'élément cherché dans l'URL
    }

    $forfaits = $data[$forfait_id];                 // associe l'id cherché dans l'URL, à la clé du tableau des forfaits

?>


<?php require_once ("views/page_top.php"); ?>

    <main>
        <div>
            <p> <?php echo $forfaits['forfait'] ?>, <span><?php echo $forfaits['prix'] ?></span></p>
            <img src="<?php echo $forfaits['photo'] ?>" alt="<?php echo $forfaits['description'] ?>" />
        </div>
    </main>

<?php require_once ("views/page_bottom.php"); ?>