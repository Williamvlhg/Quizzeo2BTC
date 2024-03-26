<?php
    include "../database.php";
    
    $u = $_POST['name'];
    $e = $_POST['email'];
    $p = $_POST['password'];
      
    echo $p;
    $ph = password_hash($p, PASSWORD_DEFAULT); 
    $sql = $db->prepare("INSERT INTO user(pseudo, mail, password) VALUES ( :Username, :Email, :mdp);");
    $sql -> execute([
        'Username' => $u,
        'Email' => $e,
        'mdp' => $ph
    ]);
    header('Location: http://localhost:8888/Login/');
?>

    