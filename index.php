<?php

require_once __DIR__. '/autoload.php';
require_once __DIR__ . '/functions.php';


$data = \App\Models\Article::findAll();

dd($data);

require_once __DIR__ . '/templates/index.view.php';

