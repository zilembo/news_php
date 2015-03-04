<?php

abstract class AbstractModel
{

    static protected $table;

    protected $data = [];

    public function __set($k, $v)
    {
        $this->data[$k] = $v;
    }

    public function __get($k)
    {
        $this->data[$k];
    }

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
        return $db->query($sql, [':id' => $id])[0];
    }

    public function insert()
    {
        $cols = array_keys($this->data);
        $data = [];
        foreach ($cols as $col)
        {
            $data[':' . $col] = $this->data[$col];
        }

              $sql = '
              INSERT INTO ' .static::$table . '
              (' . implode(', ', $cols). ')`
              VALUES
              (' . implode(', ', array_keys($data)). ')
              ';

        $db = new DB();
        $db->execute($sql, $data);
        var_dump($db->execute($sql, $data));
        die;
    }

}
