<?php

if(isset($_REQUEST['id_problema_denuncia']){
$instituci = $_REQUEST['id_problema_denuncia'];
}else{
$instituci ="";
}

$response = array();
require_once __DIR__ . '/db_config.php';

// include db connect class
$conn = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_DATABASE) ;

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

  $sql = "SELECT `id_problema_denuncia`, `problema` FROM `problema_denuncia` where `id`='$instituci' ";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $response["listado"] = array();
        while ($row = mysqli_fetch_array($result)) {
                     $listado = array();
            $listado["id_problema_denuncia"] = $row["id_problema_denuncia"];
            $listado["nombre"] = utf8_encode($row["problema"]);


                       array_push($response["listado"], $listado);
        }
        // success
        $response["success"] = 1;
        echo json_encode($response);
    } else {
        // no products found
        $response["success"] = 0;
        $response["message"] = "USUARIO O CONTRASEÑA INCORRECTO";

        // echo no users JSON
        echo json_encode($response);
    }

 ?>
