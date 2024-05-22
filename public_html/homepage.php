<?php
$pageConfig = [
    'metaTitle' => 'Главная',
    'title' => 'Главная',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-homepage/bundle-homepage.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
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
        <div class="container homepage-top-container">

        </div>
    </section>

<? include 'include/footer.php';

