
<?php 
    session_start();
 ?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href='https://fonts.googleapis.com/css?family=Allerta' rel='stylesheet'>
      <title>Document</title>
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
      <link rel="stylesheet" href="index.css">
  </head>
  <body><center>
      <h4>
      <?php if (isset($_COOKIE['email'])){
          echo "Vous êtes connecté en tant que : ". $_COOKIE['email'];
          header('location: ../PageListing/index.php');
          ?> <form method="post">
      <h4> 
          <br>
          <button type="submit"  class="btn btn-danger" name='deconnexion' value="Déconnexion">Déconnexion</button>       
         
          </form> <?php
          }
          else
          { ?> 
                      <h4>Connexion</h4>
      <form  method="post" action="./logger.php" >
      
       <label for="email">E-mail</label>
       <input type="email" name="email"><br>
       <br>
       <label for="pwd">Mot de passe</label>
       <input type="password" name="pwd" ><br>
       <br>
       <button class="btn btn-dark btn-outline-dark" type="submit" name="submit" value="Valider"><h3>VALIDER<h3></button>
       <br>
       </form>
       <h4>Inscription</h4>
      <form  method="post" action="./signin.php" >

      <label>Username</label>
      <input type="text" name="username"><br>
      
       <label for="email">E-mail</label>
       <input type="email" name="email"><br>
       <br>
       <label for="pwd">Mot de passe</label>
       <input type="password" name="pwd" ><br>
       <br>
       <button class="btn btn-dark btn-outline-dark" type="submit" name="submit" value="Valider"><h3>VALIDER<h3></button>
       <br>
       </form>

            
      
 <?php } ?>
  
  


  
  
  
  </body></center>
  </html>  
?>