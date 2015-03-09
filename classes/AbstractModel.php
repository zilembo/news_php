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
    public function __isset($k)
    {
         return isset($this->data[$k]);
    }

    public static function findAll()
    {
        echo $class = get_called_class();
        $sql = 'SELECT * FROM ' . static::$table;
        $db = new DB();
        $res = $db->setClassName($class);

        if (empty($res))
        {
            $ex = new E404Ecxeption();
            throw $ex;
        }
        return $db->query($sql);
    }

    public static function findOne($id)

    {
        $sql = 'SELECT * FROM ' . static::$table.' WHERE id=:id';
        $db = new DB();
        return $db->query($sql, [':id' => $id])[0];
    }

    public static function findOneByColumn($column, $value)
    {
        $db = new DB();
        $db->setClassName(get_called_class());
        $sql = 'SELECT * FROM ' . static::$table . ' WHERE ' . $column . '=:value';
        return $db->query($sql, [':value' => $value]);
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
              (' . implode(', ', $cols). ')
              VALUES
              (' . implode(', ', array_keys($data)). ')
              ';
        $db = new DB();
        $db->execute($sql, $data);

    }

}
