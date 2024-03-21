<?php

    session_start();

    include "./database.php";
    
            $u = $_POST["username"];
            $e = $_POST["email"];
            $p = $_POST["pwd"];
      
        echo $p;
        $ph = password_hash($p, PASSWORD_DEFAULT); 
        $sql = $db->prepare("INSERT INTO user(pseudo, mail, password) VALUES ( :Username, :Email, :mdp);");
        $sql -> execute([
            'Username' => $u,
            'Email' => $e,
            'mdp' => $ph
        ])
    
    

?>

    