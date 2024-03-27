<?php 
    $sql = "SELECT * FROM note WHERE id_user = :id";
    $result = $db->prepare($sql);
    $result->execute([
        'id' => $_SESSION['id']
    ]);
    $sql2 = "SELECT * FROM feedback WHERE id_user = :id";
    $result2 = $db->prepare($sql2);
    $result2->execute([
        'id' => $_SESSION['id']
    ]);
    if ($result->rowCount() > 0) {}
    elseif($result2->rowCount()>0){}
    else {
        echo "<h1> Veuillez participer à un Quizz pour obtenir vos résultats </h1>";
    }
?>