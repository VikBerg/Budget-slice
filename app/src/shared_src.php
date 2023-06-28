<?php

    //constants
    define("DB_SERVER", "localhost");
    define("DB_USER", "root");
    define("DB_PASSWORD", "");
    define("DB_NAME", "budgetslice");

    //classes (object templates)
    class DbParamObject {
        public $dataType;
        public $value;
    }

    //functions
    function invokeDbQuery ($query,$params) {

        $conn = new mysqli(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);

        if($conn->connect_error) {
            echo 'Error ' . $mysqli->connect_error;
            exit();
        }

        $stmt = $conn->prepare($query);

        foreach($params as $p => $p_value) {
            $stmt->bind_param($p_value->dataType, $p_value->value);
        }

        $stmt->execute();

        $res = $stmt->get_result();
        $data = [];
        while($row = $res->fetch_array(MYSQLI_ASSOC)) {
            array_push($data, $row);
        }

        return $data;
    }
?>