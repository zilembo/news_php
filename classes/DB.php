<?php

class DB
{
    private $className = 'stdClass';
    private $dbh;

    public function __construct()
    {
       $this->dbh = new PDO('mysql:dbname=test;host=localhost', 'root', '');

    }

    public function setClassName($className)
    {
        $this->className = $className;
    }

    public function query($sql, $params = []){

        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);
        return $sth->fetchAll(PDO::FETCH_CLASS, $this->className);
    }
    public function execute($sql, $params = []){

        $sth = $this->dbh->prepare($sql);
        $sth->execute($params);

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