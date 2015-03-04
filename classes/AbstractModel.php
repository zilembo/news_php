<?php

abstract class AbstractModel
{

    static protected $table;

    public static function findAll()

    {
       echo $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DB();
        $db->setClassName($class);
        return $db->query($sql);
    }

    public static function findOne($id)

    {
        $sql = 'SELECT * FROM ' . static::$table.' WHERE id=:id';
        $db = new DB();
        return $db->query($sql, [':id' => $id]);
    }

}
