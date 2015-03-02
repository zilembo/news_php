<?php

class AdminController
{
    public function actionAdd()
    {
        $title['title'] = $_POST['title'];
        $text['text'] = $_POST['text'];
        $title = $title['title'];
        $text = $text['text'];

        return News::intOne($title, $text);
    }

}