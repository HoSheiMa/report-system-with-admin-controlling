<?php

include_once './data/conn.php';


if (isset($_POST['id']) && isset($_POST['email'])) {
    $id = $_POST['id'];
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $permission = mysqli_real_escape_string($conn, $_POST['permission']);
    $password = isset($_POST['password']) && !empty($_POST['password']) ? ", `password`='" . $_POST['password'] . "'" : '';
    $sql  ="UPDATE `users` SET `email`='$email', `username`='$username',`role`='$permission' $password WHERE `id`='{$id}'";

    $conn->query($sql);

    //echo $sql;

    echo "<script>window.history.back()</script>";
}
