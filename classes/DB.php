<?php

class DB
{
    private $dbh;

    public function __construct()
    {
       $this->dbh = new PDO('mysql:dbname=test;host=localhost', 'root', '');

    }

    public function query($sql, $params = []){

        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_OBJ);
    }

    /*
    public function queryOne($sql, $class = 'stdClass')
    {

        return $this->query($sql, $class)[0];
    }

    public function Get_insert($sql)
    {

        return $insert = mysql_query($sql);
    }
    */
}

?>