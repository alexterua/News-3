<?php

namespace App\Models;


use App\Db;

class Article
{
    public const TABLE = 'news';

    public $id;
    public $title;
    public $content;

    public static function findAll()
    {
        $db = new Db();
        return $db->query('SELECT * FROM ' . self::TABLE, [], Article::class);
    }
}