<?php

include_once './data/conn.php';


if (isset($_POST['id']) && isset($_POST['permissions'])) {
    $id = $_POST['id'];
    $permissions = json_encode($_POST['permissions']);

    $conn->query("UPDATE `members_types` SET `permissions`='$permissions' WHERE `id`='{$id}'");

    echo "<script>window.history.back()</script>";
}
