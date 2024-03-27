<?php
    include '../database.php';
    if($_POST['name'] != ""){
        $value = $_POST['name'];
        $id = $_POST['id'];
        $sql = "UPDATE user SET pseudo = :pseudo WHERE id_user = :id";
        $result = $db->prepare($sql);
        $result->execute([
            'pseudo' => $value,
            'id' => $id
        ]);
        header('Location: http://localhost:8888/confirmation/?i=La modification');
    } else if ($_POST['email'] != ""){
        $value = $_POST['email'];
        $id = $_POST['id'];
        $sql = "UPDATE user SET mail = :mail WHERE id_user = :id";
        $result = $db->prepare($sql);
        $result->execute([
            'mail' => $value,
            'id' => $id
        ]);
        header('Location: http://localhost:8888/confirmation/?i=La modification');
    } else if($_POST['password'] != "" && $_POST['password-confirm'] != "") {
        $value = $_POST['password'];
        $id = $_POST['id'];
        $value = password_hash($value, PASSWORD_DEFAULT);
        $sql = "UPDATE user SET password = :password WHERE id_user = :id";
        $result = $db->prepare($sql);
        $result->execute([
            'password' => $value,
            'id' => $id
        ]);
        header('Location: http://localhost:8888/confirmation/?i=La modification');
    }

?>