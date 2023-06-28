<?php if ($_SERVER['REQUEST_METHOD'] == 'POST' && 
          in_array("meals",array_keys($_POST)) &&
          in_array("budget",array_keys($_POST)) &&
          in_array("preference",array_keys($_POST))): ?>
<?php

    //define query
    if ($_POST['preference'] == 'Vegetarisk') {
        $query = "
        SELECT
            recept.rätter,
            CAST(recept.price AS SIGNED) AS price
        FROM recept
        WHERE class ='Vegetarisk'
        ORDER BY RAND()
        LIMIT ?";
    }
    else {
        $query = "
        SELECT
            recept.rätter,
            CAST(recept.price AS SIGNED) AS price
        FROM recept
        ORDER BY RAND()
        LIMIT ?";
    }

    //define parameters to be sent in the recipe query
    $paramArray = [];
    $param = new DbParamObject();
    $param -> dataType = 'i';
    $param -> value = $_POST['meals'] * 7;
    array_push($paramArray,$param);

    $data = invokeDbQuery($query,$paramArray);

    foreach($data as $row){
        echo "Rätt: " . $row["rätter"]. " Pris: " . $row["price"]. "<br>";
    }
?>
<?php else: ?>
"ERROR - FYLL I PLANERINGSFORMULÄRET PÅ STARTSIDAN"
<?php endif ?>