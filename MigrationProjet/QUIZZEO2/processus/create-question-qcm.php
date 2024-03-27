<?php
    include '../database.php';
    $sql = $db->prepare("INSERT INTO question(label, date_question, type_question, id_quizz) VALUES ( :label, :date, :type, :id);");
    $sql->execute([
        'label' => $_POST['label'],
        'date' => date("Y-m-d"),
        'type' => 1,
        'id' => $_POST['id']
    ]);
    $idquestion = $db->lastInsertId();
    $answers = $_POST['answer'];
    foreach($answers as $key => $answer) {
        $isGood = ($_POST['good'] == $key+1) ? 1 : 0;
        $sql2 = $db->prepare("INSERT INTO qcm(label, good, id_question) VALUES ( :label, :good, :id);");
        $sql2->execute([
            'label' => $answer,
            'good' => $isGood,
            'id' => $idquestion
        ]);
    }
    header("Location: /Confirmation/?i=L'ajout de la question");

?>