<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
$user = json_decode( file_get_contents('php://input'));
        include "./database.php";
        $e = $user->email;
        $password = $user->password;


        $sql = "SELECT * FROM user WHERE mail = :mail"; 
        $result = $db->prepare($sql);
        $result->execute([
                "mail" => $e,
        ]);

        if($result->rowCount() > 0)
        {
                $data = $result->fetchAll();
                if(password_verify($password,$data[0]['password']))
                {
                $_SESSION['id'] = $data[0]['id_user'];
                echo "ok";
                }
                else{
                        echo "Mot de passe incorrect";
                }
        } else {
                echo "E-mail incorrect";
        }
