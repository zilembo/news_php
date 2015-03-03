<?php

abstract class AbstractModel
    implements IModel
{

    protected static $table;
    protected static $class;


    public static function getAll()
    {

        $db = new DB;
        $sql = 'SELECT * FROM ' . static::$table;
        return $items = $db->query($sql, static::$class);

    }

    public static function getOne($id)
    {

        $db = new DB;
        $item = $db->queryOne('SELECT * FROM ' . static::$table . ' WHERE id = ' . $id, static::$class);
        return $item;
    }


}