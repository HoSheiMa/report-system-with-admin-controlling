<?php

require './../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Api
{
    public $conn = null;
    public $token = null;
    public $email = null;
    public $role = null;
    public $PHPMailer = null;

    public function error($error, $success = false)
    {
        return json_encode([
            "success" => $success,
            "message" => $error
        ]);
    }

    public function add()
    {
        session_start();
        $mail = $this->PHPMailer;
        $conn = $this->conn;

        $email = $this->email;
        $title = $_POST['title'];
        $type = $_POST['type'];
        $number = $_POST['number'];
        $y = $conn->query("SELECT * FROM `categories` WHERE `name`='$type'");

        $y = $y->fetch_array(MYSQLI_ASSOC);

        $availableForType = json_decode($y['Words']);

        if (!in_array($number, $availableForType)) {
            echo $this->error('Your Have Max Number Word For This Type!');
        }


        $about = $_POST['about'];
        $status = "Processing";
        $today = date("m.d.y");
        $projectTodayDay = (int)$conn->query("SELECT * FROM `project` WHERE `email`='$email' and `date`='$today'")->num_rows;
        $role = $this->role;
        $maxProjectPerDay = $conn->query("SELECT * FROM `members_types` WHERE `name`='$role'");
        $maxProjectPerDay = (int)$maxProjectPerDay->fetch_array(MYSQLI_ASSOC)['create_project_aday'];
        if ($projectTodayDay >= $maxProjectPerDay) {
            echo $this->error("You've reached the maximum projects limit for today!");
        }


        $r = $conn->query("INSERT INTO `project`( `email`, `title`, `type`, `number`, `about`, `status`, `date`) VALUES ('$email', '$title', '$type', '$number', '$about', '$status', '$today')");
        if ($r) echo $this->error('added is success', true);
        if (!$r) {
            echo $this->error('Error');
            return;
        }

        $SendFor = ["iwarrior786@gmail.com", "ahistb2019@gmail.com"];

        foreach ($SendFor as $to) {

            try {
                //Server settings
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                $mail->isSMTP();                                            //Send using SMTP
                $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
                $mail->SMTPAuth = true;                                   //Enable SMTP authentication
                $mail->Username = '';                     //SMTP username
                $mail->Password = '';                               //SMTP password
                $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                //Recipients
                $mail->setFrom('System@system.com', 'Mailer');
                $mail->addAddress($to, 'Admin');     //Add a recipient

                //Content
                $mail->isHTML(true);                                  //Set email format to HTML
                $mail->Subject = 'You have new project "Articles"';
                $mail->Body = 'You have new project "Articles" from ' . $email;
                $mail->AltBody = 'You have new project "Articles"';

                $mail->send();
//    echo 'Message has been sent';
            } catch (Exception $e) {
//    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
            }
        }


    }

    public function show()
    {

        $r = $this->conn->query("SELECT * FROM `project` WHERE `email`='$this->email'");
        $r = $r->fetch_all();

        return json_encode($r);


    }

    public function __construct($conn, $token, $PHPMailer)
    {
        $this->conn = $conn;
        $this->token = $token;
        $this->PHPMailer = $PHPMailer;
        $r = $this->conn->query("SELECT * FROM `users` WHERE `token`='$token'");
        if ($r->num_rows > 0) {
            $r = $r->fetch_assoc();
            $email = $r['email'];
            $role = $r['role'];
            $this->email = $email;
            $this->role = $role;


        } else {
            echo $this->error('Token is not exists in our database.');
        }

    }

}
