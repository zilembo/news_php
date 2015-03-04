<?php

class NewsController
{

    public function actionAll()
    {

        $article = new NewsModel();
        $article->title = 'Privet 111';
        $article->text = 'Privet, world 111 !';
        return $article->insert();

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