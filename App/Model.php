<?php

namespace App;


abstract class Model
{
    public const TABLE = '';

    public $id;

    // READ ALL
    public static function findAll()
    {
        $db = new Db();
        $sql = 'SELECT * FROM ' . static::TABLE;
        return $db->query($sql,
            [],
            static::class
        );
    }

    // READ ONE FROM ID
    public static function findById($id)
    {
        $sql = 'SELECT * FROM ' . static::TABLE . ' WHERE id=:id';
        $db = new Db();
        return $db->query($sql, [':id' => $id], static::class);
    }

    // CREATE
    public function insert()
    {
        $fields = get_object_vars($this);   // return ARRAY

        $cols = [];
        $data = [];

        foreach ($fields as $name => $value) {
            if ($name == 'id') {
                continue;
            }
            $cols[] = $name;
            $data[':' . $name] = $value;
        }

        $sql = 'INSERT INTO ' . static::TABLE . ' (' . implode(', ', $cols) . ') VALUES (' . implode(', ', array_keys($data)) . ')';

        $db = new Db();
        $db->execute($sql, $data);

        $this->id = $db->getLastId();
    }

    // UPDATE
    public function update()
    {
        $fields = get_object_vars($this);   // return ARRAY

        $cols = [];
        $data = [];
        $dataSet = [];

        foreach ($fields as $name => $value) {
//            $cols[] = $name;
            $data[':' . $name] = $value;
            if ($name == 'id') {
                continue;
            }
            $dataSet[] = $name . '=:' . $name;
        }

        $sql = 'UPDATE ' . static::TABLE . ' SET ' . implode(', ', $dataSet) . ' WHERE id=:id';

        $db = new Db();
        $db->execute($sql, $data);
    }

    // SAVE = CREATE OR UPDATE
    public function save()
    {
        if ($this->id !== null) {
            return $this->update();
        } else {
            return $this->insert();
        }
    }

    // DELETE
    public function delete()
    {
        $sql = 'DELETE FROM ' . static::TABLE . ' WHERE id=:id';

        $db = new Db();
        $db->execute($sql, [':id' => $this->id]);
    }
}