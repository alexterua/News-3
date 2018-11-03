<?php

require_once __DIR__ . '/autoload.php';
require_once __DIR__ . '/functions.php';


$news = \App\Models\Article::findAll();

require_once __DIR__ . '/templates/index.view.php';

