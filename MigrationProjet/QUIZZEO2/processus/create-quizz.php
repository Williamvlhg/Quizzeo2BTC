<?php
include "../database.php";
function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, strlen($characters) - 1)];
    }
    return $randomString;
}

$randomLink = generateRandomString(10);
$id = $_POST['id'];
$type = $_POST['type'];
$title = $_POST['title'];
$description = $_POST['description'];
$sql = $db->prepare("INSERT INTO quizz(title, description, id_user, type_quizz, url_id, status, date_quizz) VALUES ( :title, :description, :id_user, :type, :url_id, :status, :date_quizz);");
    $sql -> execute([
        'title' => $title,
        'description' => $description,
        'id_user' => $id,
        'type' => $type,
        'url_id' => $randomLink,
        'status' => "En cours",
        'date_quizz' => date("Y-m-d")
        
    ]);
    header("Location: /Confirmation/?i=L'ajout du nouveau quizz");

