<?php

include_once './data/conn.php';


if (isset($_POST['id']) && isset($_POST['permissions'])) {
    $id = $_POST['id'];
    $permissions = json_encode($_POST['permissions']);
    $create_project_aday = $_POST['create_project_aday'];

    $conn->query("UPDATE `members_types` SET `permissions`='$permissions', `create_project_aday`='$create_project_aday' WHERE `id`='{$id}'");

    echo "<script>window.history.back()</script>";
}
