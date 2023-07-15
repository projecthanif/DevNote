<?php
include('Validate.php');
include('../server/connect.php');

use Input\Validation\Validate;


class Login extends Validate
{
    public $input_password;
    function __construct($email, $password)
    {
        $this->email = $email;
        $this->input_password = $password;
    }
    function validate_password($password_hash)
    {
        $form_password = $this->input_password;
        $verify_password = password_verify($form_password, $password_hash);
        return $verify_password;

    }
}

$input_email = $_POST['email'] ?? '';
$input_password = $_POST['password'] ?? '';


if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $login = new Login($input_email, $input_password);

    $email = $login->validate_email();

    //SQL Query

    $sql = "SELECT * FROM user_info WHERE users_email = '$email'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {

        while ($output = $result->fetch_assoc()) {

            $password_hash = $output['users_password'];
            $password = $login->validate_password($password_hash);

            if ($password) {

                session_start();

                $_SESSION['name'] = $out['users_id'];
                $_SESSION['email'] = $out['users_email'];

                header("Location: ../index.php");

            } else {
                echo "Wrong password";
            }
        }
    } else {
        echo "You don't have an account click <a href='../user/register_page.php'>here</a> to create an account";
    }

}


$conn->close();






?>