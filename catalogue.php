<?php
    require_once ("data/data.php");
?>

<!--AFFICHES DU CATALOGUE-->
<ul>
    <?php
        foreach ($data as $numero => $forfaits){
            echo "<li><div>$forfaits[forfait]</div></li>";
        };
    ?>
</ul>

