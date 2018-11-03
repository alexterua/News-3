<?php

namespace App;


class Db
{

    protected $dbh;

    public function __construct()
    {
        $config = (require_once __DIR__ . '/../config.php')['db'];
        $this->dbh = new \PDO('mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'] . '; ',
            $config['user'],
            $config['password']
        );
    }

    public function execute($query, $params = [])
    {
        $sth = $this->dbh->prepare($query);
        return $sth->execute($params);
    }

    public function query($sql, $data = [], $class)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);
    }

    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }
}