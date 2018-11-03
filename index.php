<?php

require_once __DIR__ . '/autoload.php';
require_once __DIR__ . '/functions.php';

/*$config = new \App\Config();
echo $config->data['db']['host'];*/

/*$article = new \App\Models\Article();
$article->id = 33;
$article->delete();*/

/*$article = new \App\Models\Article();
$article->title = 'SAVE заголовок';
$article->content = 'SAVE контент';
$article->image = 'pic01.jpg';
$article->save();*/

/*$_GET['id'] = 33;
$article = new \App\Models\Article();
$article->id = $_GET['id'];
$article->title = 'Update заголовок';
$article->content = 'Update контент';
$article->image = 'pic12.jpg';
$article->update();*/

/*$oneNews = new \App\Models\Article();
$oneNews->title = 'Заголовок новости';
$oneNews->content = 'Содержимое новости';
$oneNews->image = 'pic01.jpg';
$oneNews->insert();*/

$news = \App\Models\Article::findAll();

require_once __DIR__ . '/templates/index.view.php';

