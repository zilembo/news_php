<?php

class NewsController
{

    public function actionAll()
    {
        $db = new DB;
        $res = $db->query('
            SELECT * FROM news WHERE id=:id',
            [':id' => 23216]
        );
        var_dump($res);
        die;

        /*
        $news = News::getAll();
        $view = new View();
        $view->assign('items',$news);
        $view->$items = $news;
        $view->display('News/all.php');
        */

    }

    public function actionOne()
    {
        $id = $_GET['id'];
        $news = News::getAll();
        $view = new View();
        $view->assign('items',$news);
        $view->$item = $news;
        $view->display('News/all.php');
        return $item;
    }
}