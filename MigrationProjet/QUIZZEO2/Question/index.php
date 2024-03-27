<?php include '../header.php'; 
include '../database.php';
$sql = "SELECT * FROM quizz WHERE id_quizz = :id";
$result = $db->prepare($sql);
$result->execute([
    'id' => $_GET['id']
]);
if ($result->rowCount() > 0) {
    $data = $result->fetchAll();
    $id_quizz = $data[0]['id_quizz'];
    $title = $data[0]['title'];
    $description = $data[0]['description'];
    $date_quizz = $data[0]['date_quizz'];
}


?>  
<div class="content-wrapper" id="content">
    <h1> Création de question pour <?php echo $title; ?></h1>
    <span style="color: white;">Cocher la bonne réponse</span>
    <form id="form-qcm" method="POST" action="/processus/create-question-qcm.php">
        <input type="text" id="label" name="label" placeholder="Libellé de la question" required>
        <fieldset>
            <input type="text" name="answer[]" placeholder="Première réponse" required>
            <input type="radio" name="good" value="1" checked required>
            <input type="text" name="answer[]" placeholder="Deuxième réponse" required>
            <input type="radio" name="good" value="2" required>
            <input type="text" name="answer[]" placeholder="Troisième réponse" required>
            <input type="radio" name="good" value="3" required>
            <input type="text" name="answer[]" placeholder="Quatrième réponse" required>
            <input type="radio" name="good" value="4" required>
            
        </fieldset>
        <input type="hidden" name="id" value="<?php echo $id_quizz ?>" />
        <button type="submit">Envoyer</button>
    </form>
</div>

<?php include '../footer.php'; ?>