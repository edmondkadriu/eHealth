<?php
    require './controller/NewsController.php';

    $news = new NewsController;

    if(isset($_GET['id'])) {
        $id = $_GET['id'];
    }
    $news = $news->destroy($id);

  header("Location: news.php");

  ?>