<?php
    session_start();   
    include "../database.php";
    if(!isset($_SESSION['id'])){
        header("Location: /login");
        exit;
    }
    $sql = "SELECT * FROM user WHERE id_user = :id";
    $result = $db->prepare($sql);
    $result->execute([
            "id" => $_SESSION['id'],
    ]);
    if($result->rowCount() > 0){
        $data = $result->fetchAll();
        $username = $data[0]['pseudo'];
        $mail = $data[0]['mail'];
        $id = $data[0]['id_user'];
        $api = $data[0]['cle_api'];
    }
        

   


?>