<?php

session_start();

include_once 'data/conn.php';


if (isset($_POST['download'])) {
    $id = $_POST['id'];
    $r = $conn->query("select * from `project` WHERE `id`='{$id}'");
    $r = $r->fetch_array(MYSQLI_ASSOC);

    $name = 'downloads/' . rand() . " - Copywriterr Content.txt";
    $myfile = fopen($name, "w");
    fwrite($myfile, 'Project ID' . ": " . $r['id'] . "\n");
    fwrite($myfile, 'Title' . ": " . $r['title'] . "\n");
    fwrite($myfile, 'Writing Type' . ": " . $r['type'] . "\n");
    fwrite($myfile, 'Number of Words' . ": " . $r['number'] . "\n");
    fwrite($myfile, 'User entry' . ": " . $r['about'] . "\n");
    fwrite($myfile, '-----------------------------------------------------' . "\n");
    fwrite($myfile, '' . "\n");
    fwrite($myfile, 'Copywriterr Content: ' . "\n");
    fwrite($myfile, '' . "\n");
    fwrite($myfile, $r['comment'] . "\n");


    header("Content-Description: File Transfer");
    header("Content-Type: application/octet-stream");
    header("Content-Disposition: attachment; filename=\"" . basename($name) . "\"");

    readfile($name);
    exit();
}
