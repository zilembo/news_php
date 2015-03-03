<?php

class NewsController
{

    public function actionAll()
    {
        $items = News::getAll();
        $view = new View();
        $view->assign('items',$items);
        $view->display('News/all.php');
        return $items;
    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $item = News::getOne($id);
        include __DIR__ . '/../views/News/one.php';
    }
}