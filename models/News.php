<?php

class News
    extends AbstractModel
{
    public $id;
    public $title;
    public $text;

    protected static $table = 'news';
    protected static $class = 'News';

    public static function intOne($title, $text)
    {

        $db = new DB;
        $sql = 'INSERT INTO news' . '(title, text) VALUES ("' . $title . '", "' . $text . '")';
        return $db->Get_insert($sql);

    }

}


?>