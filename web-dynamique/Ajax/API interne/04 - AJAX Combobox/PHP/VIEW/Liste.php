<?php
$liste = RegionsManager::getList(false);
?>
<div class="espaceHor"></div>
<select id="nomRegion">
    <option value="default">Choisissez une region</option>
    <?php
    foreach($liste as $elt)
    {
        echo'<option value="'.$elt->getIdRegion().'">'.$elt->getLibelleRegion().'</option>';
    }
    ?>
</select>
<div class="colonne">
    <div class="departements">
        <div class="dep"></div>
    </div>
</div>