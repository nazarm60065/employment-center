<?
/** @var array $pageConfig */

include $_SERVER['DOCUMENT_ROOT'] . '/../vendor/autoload.php';

$mustache = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/local/assets/mustache/'),
));

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <? if ($pageConfig['metaTitle']): ?><title><?= $pageConfig['metaTitle'] ?></title><? endif; ?>
    <? if (!empty($pageConfig['inlineCss'])): ?>
        <? foreach ($pageConfig['inlineCss'] as $path) {
            if (file_exists($_SERVER['DOCUMENT_ROOT'] . $path)) {
                echo '<style>' . file_get_contents($_SERVER['DOCUMENT_ROOT'] . $path) . '</style>';
            }
        } ?>
    <? endif; ?>
</head>
<body class="page">
<header class="header<? if ($pageConfig['isMainPage']) echo ' header_homepage' ?>">
    <div class="container header-container">
        <div class="header-inner">
            <?=$mustache->render('header-logo', ['isMainPage' => $pageConfig['isMainPage']])?>
            <div class="header-content">
                <?=$mustache->render('header-menu', include $_SERVER['DOCUMENT_ROOT'] . '/context/header/menu.php')?>
                <?=$mustache->render('header-contacts', include $_SERVER['DOCUMENT_ROOT'] . '/context/header/contacts.php')?>
                <?=$mustache->render('header-toggle')?>
            </div>
        </div>
    </div>
</header>
<div class="header-modal header_homepage">
    <div class="header-modal-overlay"></div>
    <div class="container header-modal-container">
        <div class="header-modal-top">
            <?=$mustache->render('header-logo', ['isMainPage' => $pageConfig['isMainPage']])?>
            <?=$mustache->render('header-toggle')?>
        </div>
        <div class="header-modal-content">
            <?=$mustache->render('header-modal-menu', include $_SERVER['DOCUMENT_ROOT'] . '/context/header/menu.php')?>
            <?=$mustache->render('header-modal-contacts', include $_SERVER['DOCUMENT_ROOT'] . '/context/header/contacts-modal.php')?>
        </div>
    </div>
</div>
<main class="main <?=$pageConfig['main_class']?>">
    <? if (empty($pageConfig['notShowNavChain'])) include 'breadcrumbs.php' ?>

