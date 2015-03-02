<?php

class NewsController
{

    public function actionAll()
    {
        $items = News::getAll();
        include __DIR__ . '/../views/News/all.php';
        return $items;
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        include __DIR__ . '/../views/News/one.php';
    }
}