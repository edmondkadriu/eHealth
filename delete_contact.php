<?php
    require './controller/ContactController.php';

    $contact = new ContactController;

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $contact = $contact->destroy($id);

  header("Location: kontakti.php");

  ?>