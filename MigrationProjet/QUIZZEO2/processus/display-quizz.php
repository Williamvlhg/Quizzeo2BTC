<?php

$sql = "SELECT id_role FROM user WHERE id_user = :id";
$result = $db->prepare($sql);
$result->execute([
    'id' => $_SESSION['id']
]);
if ($result->rowCount() > 0) {
    $data = $result->fetchAll();
    $id_role = $data[0]['id_role'];
}
$sql2 = "SELECT * FROM quizz WHERE id_user = :id"; 
$result2 = $db->prepare($sql2);
$result2->execute([
    'id' => $_SESSION['id']
]);
$quizzResults = $result2->fetchAll(PDO::FETCH_ASSOC);

if ($id_role == 1) {
?>


    <div class="content">
        <h1>Vos quizz</h1>
        <div class="ag-format-container">
            <div class="ag-courses_box">
                <?php foreach($quizzResults as $quizz){ ?>
                <div class="ag-courses_item">
                    <a href="/Question/?id=<?php echo $quizz['id_quizz'] ?>" class="ag-courses-item_link">
                        <div class="ag-courses-item_bg"></div>

                        <div class="ag-courses-item_title">
                            <?php echo $quizz['title']; ?>
                        </div>

                        <div class="ag-courses-item_date-box">
                            <?php echo $quizz['description']; ?>
                            <span class="ag-courses-item_date">
                                <?php echo "Fait le: " . $quizz['date_quizz']; ?>
                            </span>
                        </div>
                    </a>
                </div>
                <?php } ?>
    
            </div>
        </div>
        <button onclick="window.location.href = '/creation/?type=QCM'">Créer un quizz</button>
    </div>





<?php
} else if ($id_role == 2) {
?>

    <div class="content">
        <h1>Vos questionnaires</h1>
        <button onclick="window.location.href = '/creation/?type=Questionnaire'">Créer un questionnaire</button>
    </div>
<?php
} else if ($id_role == 0) {
?>
    <div class="content">
        <h1> Pour créer un Quizz / Questionnaire, veuillez renseigner votre organisation. </h1>
        <div>
            <button class="hidden" name="" onclick="addRoleSchool()">Ecole</button>
            <button class="hidden" name="" onclick="addRoleCompany()">Entreprise</button>
            <br>
        </div>


    </div>
    <script>
        function addRoleSchool() {
            window.location.href = '/processus/add-role.php/?role=school';
        }

        function addRoleCompany() {
            window.location.href = '/processus/add-role.php/?role=company';
        }
    </script>
<?php
}
?>