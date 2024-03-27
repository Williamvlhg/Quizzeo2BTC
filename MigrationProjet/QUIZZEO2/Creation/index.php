<?php 
include '../header.php';
include '../processus/verification.php'; ?>

<div class="content-wrapper">
    <h1>Créer un quizz</h1>
    <form method="post" action="../processus/create-quizz.php">
        <input type=hidden name='id' value="<?php echo $id; ?>"/>
        <input type=hidden name='type' value="<?php echo $_GET['type'] ?>" >
        <input type=text name='title' placeholder="Titre du Quizz" required>
        <input type=text name='description' placeholder="Description du Quizz">
        <input type="submit" value="Créer">
    </form>
</div>

<?php include '../footer.php'; ?>