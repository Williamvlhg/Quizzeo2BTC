<?php 
    $sql = "SELECT * FROM quizz WHERE id_user = :id";
    $result = $db->prepare($sql);
    $result->execute([
        'id' => $_SESSION['id']
    ]);
    if ($result->rowCount() > 0) {}
    else {
        echo "<h1> Veuillez participer à un Quizz pour obtenir vos résultats </h1>";
    }
?>