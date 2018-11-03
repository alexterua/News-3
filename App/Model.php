<?php

namespace App;


abstract class Model
{
    public const TABLE = '';

    public $id;

    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql,
            [],
            static::class
        );
    }

    public static function findById($id)
    {
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        $db = new Db();
        return $db->query($sql, [':id' => $id], static::class);
    }
}