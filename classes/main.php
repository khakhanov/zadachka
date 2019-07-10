<?php
    require_once "classes/User.php";
    require_once "classes/db_connector.php";
    $data = $_POST;
//проверить данные валидатором
    dataParser($data);
    echo $name, $surname, $email, $gender, $gang, $score, $date_of_birth, $city;


    //createUser()

