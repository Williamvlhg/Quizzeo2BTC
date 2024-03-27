<?php 

include '../header.php'; 
include '../processus/verification.php'; 

?>
<div class="content-wrapper">
    <h1 id="welcome"> Bienvenue <?php echo $username ?>!</h1>
    <nav>
        <a href="#first" class="option"><i class="far fa-user"></i></a>
        <a href="#second" class="option"><i class="fa-regular fa-square-plus"></i></a>
        <a href="#third" class="option"><i class="far fa-file"></i></a>
        <a href="#fourth" class="option"><i class="fa-regular fa-chess-knight"></i></a>
        <a onclick="deconnexion()" class="option"><i class="fa-regular fa-rectangle-xmark"></i></i></a>
    </nav>

    <div class='container'>
        <section id='first'>
            <h1>Votre profil</h1>
            <div class="content">
                <span>modifier votre profil en remplissant le / les champs que vous voulez modifier</span>
                <form id="update-user" name="update-user" onsubmit="return validateForm()" action="../processus/update-user.php" method="POST">
                    <input type="text" name="name" placeholder="<?php echo $username; ?>">
                    <input type="email" name="email" placeholder="<?php echo $mail ?>">
                    <input type="password" name="password" placeholder="**************">
                    <input type="password" name="password-confirm" placeholder="**************">
                    <input type="hidden" name="id" value="<?php echo $id ?>" />
                    <button>Valider</button>
                </form>
                <?php if($api == NULL || $api == ""){?>
                <button class="hidden">Générer une clé API</button>
                <?php } else {?>
                <span> Votre clé API : <?php echo $api ?></span>
                <?php } ?>
                <button class="warning" onclick="deconnexion()">Déconnexion</button>
            </div>
            
        </section>

        <section id='second'>
            <?php include '../processus/display-quizz.php' ?>
           
        </section>

        <section id='third'>
            <div class="content">
                <?php include '../processus/view-result.php'; ?>

            </div>
        </section>

        <section id='fourth'>
            <h1>Effectuer un quizz</h1>
            <div class="content">
                <form method="GET" action="../Play-quizz/">
                    <input type="text" name="quizz" placeholder="ID du Quizz">

                </form>
            </div>
            
        </section>
    </div>
</div>
<?php include '../footer.php'; ?>