<?php
require_once 'configData.php';
require_once 'UserRegistration.php';

class RegistrationProcessor {
    private $userRegistration;

    public function __construct(UserRegistration $userRegistration) {
        $this->userRegistration = $userRegistration;
    }

    public function processRegistration() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name = $_POST['name'];
            $surname = $_POST['surname'];
            $email = $_POST['email'];
            $isAdmin = ($email === 'admin@gmail.com') ? 1 : 0;

            $password = $_POST['password']; 

            $registrationSuccess = $this->userRegistration->registerUser($name, $surname, $email, $password, $isAdmin);

            if ($registrationSuccess) {
                header("Location: Hospital.php");
                exit();
            } else {
                echo "Registration failed!";
            }
        } else {
            header("Location: Register.php");
            exit();
        }
    }
}

$userRegistration = new UserRegistration($databaseConnection);
$registrationProcessor = new RegistrationProcessor($userRegistration);
$registrationProcessor->processRegistration();
?>
