
<?php
session_start();
include "../database.php";

$e = $_POST["email"];
$password = $_POST['password'];

if (isset($_POST['captcha'])) {
        if ($_POST['captcha'] == $_SESSION['captcha']) {

                $sql = "SELECT * FROM user WHERE mail = :mail";
                $result = $db->prepare($sql);
                $result->execute([
                        "mail" => $e,
                ]);
                if ($result->rowCount() > 0) {
                        $data = $result->fetchAll();
                        if (password_verify($password, $data[0]['password'])) {
                                $_SESSION['id'] = $data[0]['id_user'];
                                echo "Mot de passe vérifié";
                                header("location: /Content");
                        } else {
                                echo "Mot de passe incorrect";
                        }
                } else {
                        echo "E-mail incorrect";
                }
        } else {
                echo "Captcha incorrect";
        }
}
?>

    