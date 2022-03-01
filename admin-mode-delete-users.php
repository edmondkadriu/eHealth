<?php
    require './controller/UserController.php';

    $user = new UserController;

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }

    $user->destroy($id);

    header('Location: ./admin-mode-users.php');
?>
