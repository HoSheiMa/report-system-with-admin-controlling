<?php
include_once './../../data/conn.php';
include_once './../../classes/api-v1.php';
require './../../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

if (isset($_GET['query']) && isset($_GET['token'])) {

    $query = $_GET['query'];
    $token = $_GET['token'];

    $api = new Api($conn, $token, new PHPMailer(true));

    switch ($query) {
        case 'get':
            echo $api->show();
            break;
        case 'add':
            // requirements
            $requires = ['title', 'type', 'number', 'about'];

            foreach ($requires as $require) {
                if (!isset($_POST[$require])) {
                    echo $api->error($require . ' not exists');
                    break;
                }
            }
            echo $api->add();
            break;
    }

}
