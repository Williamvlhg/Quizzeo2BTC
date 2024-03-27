<?php 
    session_start();
    include '../database.php';
    $sql = "UPDATE user SET id_role = :role WHERE id_user =:id";
    if ($_GET['role'] == 'school') {
        $result = $db->prepare($sql);
        $result->execute([
            'role' =>'1',
            'id' => $_SESSION['id']
        ]);
        header("Location: http://localhost:8888/confirmation/?i=L'ajout du role");
    }
    else if ($_GET['role'] == 'company') {
        $result = $db->prepare($sql);
        $result->execute([
            'role' =>'2',
            'id' => $_SESSION['id']
        ]);
        header("Location: http://localhost:8888/confirmation/?i=L'ajout du role");

    }


?>