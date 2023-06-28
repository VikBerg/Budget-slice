<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && array("search",array_keys($_POST))): ?>
<?php
    //define query
    $query = "
    SELECT
        recept.rätter,
        recept.recept,
        CONCAT(price.name, ' (', CAST(link.mängt AS CHAR), ' ', link.mätetal, ')') AS ingrediens
    FROM recept
    JOIN link ON link.recept_id = recept.id
    JOIN price ON price.id = link.ingredienser_id
    WHERE rätter = ?";

    //define parameters to be sent in the recipe query
    $paramArray = [];
    $param = new DbParamObject();
    $param -> dataType = 's';
    $param -> value = $_POST['search'];
    array_push($paramArray,$param);

    $data = invokeDbQuery($query,$paramArray);
?>
<!--RECEPIES PART-->
<div id="recepiespart" class="part flex-container-row">
    <div id="tips">
        <h4>Tips!</h4>
        <p>Det finns några saker du kan göra för att spara pengar och tid:</p>
        <ul>
            <li>Köp mat en gång för en hel vecka.</li>
            <li>Koka i omgångar: förbered flera portioner och lägg dem i frysen.</li>
            <li>Ta hand om rabatter i din favoritbutik/marknadsplats!</li>
        </ul>
    </div>
    <div id="recepie">
        <div id="recepiebox">
        <?php if (sizeof($data) > 0): ?>
            <h3><?php echo($data[0]['rätter'])?></h3>
            <p><u>Ingredienser (en portion):</u></p>
            <ul>
                <?php
                    foreach ($data as $d) {
                        echo('<li>'. $d['ingrediens'] . '</li>');
                    }
                ?>
            </ul>
            <p><u>Beredning</u><br><?php echo($data[0]['recept'])?></p>
        <?php else: ?>
            <p>Inget recept med detta namn hittades!</p>
        <?php endif ?>
        </div>
    </div>
</div>
<?php endif ?>