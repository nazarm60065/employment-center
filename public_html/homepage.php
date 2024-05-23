<?php
$pageConfig = [
    'metaTitle' => 'Главная',
    'title' => 'Главная',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-form/bundle-form.css',
        '/local/assets/local/bundle-homepage/bundle-homepage.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-form/bundle-form.js',
        '/local/assets/local/bundle-homepage/bundle-homepage.js',
    ],
    'isMainPage' => true,
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>

    <section class="homepage-top">
        <div class="homepage-top-bg">
            <picture class="homepage-top-bg__picture">
                <source media="(max-width: 767px)" srcset="/local/assets/images/homepage-top/image-mobile.jpg">
                <source media="(max-width: 1279px)" srcset="/local/assets/images/homepage-top/image-tablet.jpg">
                <img src="/local/assets/images/homepage-top/image.jpg"
                     alt="Амурская область — безграничные карьерные возможности" class="homepage-top-bg__img"
                     loading="lazy">
            </picture>
        </div>
        <div class="homepage-top-hint">
            <div class="homepage-top-hint__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" fill="none" viewBox="0 0 16 18">
                    <path stroke="#005DE9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M14 7.667c0 4.666-6 8.666-6 8.666s-6-4-6-8.666a6 6 0 0 1 12 0Z"/>
                    <path stroke="#005DE9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M8 9.666a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                </svg>
            </div>
            <div id="top-hint" class="homepage-top-hint__text">
                Идеальное место для тех, кто  мечтает о переезде в регион  с богатой историей, уникальной культурой и широкими  возможностями для развития
            </div>
            <a href="#top-hint" class="link-as-card homepage-top-hint__link" data-fancybox></a>
        </div>
        <div class="container homepage-top-container">
            <div class="homepage-top-sticky">
                <div class="homepage-top__title">
                    Амурская область — <br>
                    <em>безграничные
                        карьерные<br>
                        возможности</em>
                </div>
                <div class="homepage-top-button-container">
                    <a href="#vacancies" class="homepage-top__button">
                    <span class="homepage-top__button-inner">
                        <span class="homepage-top__button-text">Смотреть все вакансии</span>
                        <span class="homepage-top__button-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                 viewBox="0 0 20 20"><path fill="#005DE9"
                                                           d="M4.167 8.75h-1.25v2.5h1.25v-2.5Zm0 2.5h11.666v-2.5H4.166v2.5Z"/><path
                                        stroke="#005DE9" stroke-linecap="square" stroke-width="2.5"
                                        d="M10 4.167 15.833 10 10 15.834"/></svg>
                        </span>
                    </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-features">
        <div class="container homepage-features-container">
            <div class="homepage-features-inner">
                <div class="homepage-features-top">
                    <div class="homepage-features__title"><em>Уникальный</em> регион России, расположенный на Дальнем Востоке</div>

                </div>
                <?=$mustache->render('homepage-features-tabs', include $_SERVER['DOCUMENT_ROOT'] . '/context/homepage/features/tabs.php')?>
            </div>
        </div>
    </section>

<? include 'include/footer.php';

