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




    if ($id_role == 1) {
       ?> 
       
       
       <div class="content">
       <h1>Vos quizz</h1>
           <button>Créer un quizz</button>
       </div>
       
       
       
       
       
    <?php
    } else if ($id_role == 2) {
        ?>

       <div class="content">
       <h1>Vos questionnaires</h1>
           <button>Créer un questionnaire</button>
       </div>
       <?php
    } else if ($id_role == 0) {
        ?>
       <div class="content">
            <h1> Voulez-vous créer un quizz / questionnaire ? </h1>
            <button onclick="redirectToProcess()">Créer</button>
            <div class="div-hidden-1" style="display:'none';">
                <form method=POST action="/processus/add-role.php">
                    <button class="hidden" onclick="redirectToProcess()">Ecole</button>
                    <button class="hidden" onclick="">Entreprise</button>
                </form>
                <button class="hidden">Next</button>
            </div>
        </div>
    <script>
        function redirectToProcess() {
            window.location.href = '/processus/add-role.php';
        }
    </script>
     <?php
    }
?>

