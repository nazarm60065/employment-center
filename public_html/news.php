<?php
$pageConfig = [
    'metaTitle' => 'Новости',
    'title' => 'Новости',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-form/bundle-form.css',
        '/local/assets/local/bundle-news/bundle-news.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-form/bundle-form.js',
        '/local/assets/local/bundle-news/bundle-news.js',
    ],
    'main_class' => 'news',
    'isMainPage' => false,
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>

    <div class="container">
        <?= $mustache->render('breadcrumbs', include $_SERVER['DOCUMENT_ROOT'] . '/context/news/breadcrumbs.php') ?>
    </div>
    <div class="container">
        <h1 class="page__title">Новости</h1>
    </div>
    <?= $mustache->render('news-sections', include $_SERVER['DOCUMENT_ROOT'] . '/context/news/sections.php') ?>
    <div class="container">
        <?= $mustache->render('news-list', include $_SERVER['DOCUMENT_ROOT'] . '/context/homepage/news/list.php') ?>
    </div>

<? include 'include/footer.php';

