<?php

require_once('../database/database.php');

require_once('../helpers/Utils.php');

if(isset($_POST)){

    $name_piloto = isset($_POST['name_piloto']) ? $_POST['name_piloto'] : false;
    $name_navegante = isset($_POST['name_navegante']) ? $_POST['name_navegante'] : false;
    $email = isset($_POST['email']) ? $_POST['email'] : false;
    $car_type = isset($_POST['car_type']) ? $_POST['car_type'] : false;
    $marca = isset($_POST['marca']) ? $_POST['marca'] : false;
    $modelo = isset($_POST['modelo']) ? $_POST['modelo'] : false;
    $dominio = isset($_POST['dominio']) ? $_POST['dominio'] : false;

    $image = isset($_FILES['file']) ? $_FILES['file'] : false;


    if($name_piloto && $name_navegante && $email && $car_type && $marca && $modelo && $dominio && $image){

        /* Subir imagen */
        $image_name = $_FILES['file']['name'];
        $image_type = $_FILES['file']['type'];
        
        $random_str = Utils::random_str(8);
        $image_name_final = '/assets/uploads/' . $random_str . '-' . $image_name;
            
        if($image_type == 'image/jpeg' || $image_type == 'image/jpg' || $image_type == 'image/png'){
            move_uploaded_file($image['tmp_name'], '../public' . $image_name_final);
        } else {
            Utils::sendErrorMessage();
        }

        /* Generar código */
        $code = Utils::random_str(6);

        $sql = "INSERT INTO inscriptions VALUES (
            NULL,
            '$code',
            '$name_piloto',
            '$name_navegante',
            '$email',
            '$car_type',
            '$marca',
            '$modelo',
            '$dominio',
            '$image_name_final');";

        $result = mysqli_query($db, $sql);

        if(!$result){
            Utils::sendErrorMessage();
        } else {

            $sql = 'SELECT code FROM inscriptions ORDER BY id DESC LIMIT 1;';
            $result = mysqli_query($db, $sql);
            $data = mysqli_fetch_assoc($result);
            $code = $data['code'];

            Utils::sendOkMessage($code);
        }


    } else {

        Utils::sendErrorMessage();
    }
} else {

    Utils::sendErrorMessage();
}