<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);
include_once './data/conn.php';

if (isset($_POST['create'])) {
    $number = (int)$_POST['number'];
    $permission = $_POST['permission'];
    $emails = [];

    for ($i = 0; $i < $number + 1; $i++) {
        while (true) {
            $username = 'user' .rand(100000, 999999);
            $email = 'user' .rand(100000,999999) . '@user.com';
            $password = rand(10000000,99999999);
            $str =  $username . ', '  . $password;
            // check point should email and username unique
            $r = $conn->query("SELECT * FROM `users` WHERE `username`='$username' AND `email`='$email'")->num_rows;
            if ($r > 0) {
                continue;
            } else {
                $r = $conn->query("INSERT INTO `users`(`username`, `email`, `password`, `role`) VALUES ('$username', '$email', '$password', '$permission')");

                array_push(
                    $emails,
                    $str
                );
            break;
            }
        }
    }
    $r = implode("\n", $emails);
    $name = 'downloads/' . rand() . "emails.txt";
    $myfile = fopen($name, "w");
    fwrite($myfile, $r);


    header("Content-Description: File Transfer");
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"" . basename($name) . "\"");

    readfile($name);
    exit();


}
?>
