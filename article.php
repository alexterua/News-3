<?php

require_once __DIR__ . '/autoload.php';
require_once __DIR__ . '/functions.php';

$article = \App\Models\Article::findById($_GET['id'])[0];

require_once __DIR__ . '/templates/article.view.php';