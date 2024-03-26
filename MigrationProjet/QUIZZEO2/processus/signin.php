<?php

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
$user = json_decode( file_get_contents('php://input'));

    include "./database.php";
    
            $u = $user->username;
            $e = $user->email;
            $p = $user->password;
      
        echo $p;
        $ph = password_hash($p, PASSWORD_DEFAULT); 
        $sql = $db->prepare("INSERT INTO user(pseudo, mail, password) VALUES ( :Username, :Email, :mdp);");
        $sql -> execute([
            'Username' => $u,
            'Email' => $e,
            'mdp' => $ph
        ])
    
    

?>

    