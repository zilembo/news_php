<?php

class NewsController
{

    public function actionAll()
    {

        try
        {
            $article = new NewsModel();
            $article->findAll();
        }
        catch(E404Ecxeption $ex)
        {
            die;

        }



        $news = News::getAll();
        $view = new View();
        $view->assign('items',$news);
        $view->$items = $news;
        $view->display('News/all.php');


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