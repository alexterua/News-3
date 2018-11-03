<?php

namespace App;


class Config
{
    public $data;

    public function __construct()
    {
        $config = require_once __DIR__ . '/../config.php';
        $this->data = $config;
    }
}