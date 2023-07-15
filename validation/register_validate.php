<?php
include('Validate.php');
include('../server/connect.php');

use Input\Validation\Validate;

class Register extends Validate
{

    function __construct($name, $email, $password, $number)
    {
        $this->name = $name;
        parent::__construct($name, $email, $number, $password);
    }
}


$input_name = $_POST['name'] ?? '';
$input_email = $_POST['email'] ?? '';
$input_password = $_POST['password'] ?? '';
$input_number = $_POST['number'] ?? '';

$date = date("Y/m/d");

if ($_SERVER['REQUEST_METHOD'] == "POST") {

    $register = new Register($input_name, $input_email, $input_password, $input_number);

    $name = $register->validate_name();
    $email = $register->validate_email();
    $number = $register->validate_number();
    $password = $register->password_hash();
    $user_id = $name.rand(0,25);

    //SQL Query

    try {
        $sql = "INSERT INTO user_info(users_id,users_name,users_email,users_password,date_created) VALUES(?,?,?,?,?)";

        $input = $conn->prepare($sql);
        $input->bind_param('sssss', $user_id ,$name, $email, $password, $date);
        $result = $input->execute();
        if ($result) {
            header('Location:login_page.php');
        }
        throw new Exception("You are already a user");
    } catch (Throwable $error) {
        // echo $error->getMessage();
        if($error->getMessage() == "Duplicate entry '{$email}' for key 'users_email'"){
            echo "You are already a user ";
            echo "click <a href='../user/login_page.php'>here</a> to login";
        }
    }

}

$conn->close();



?>