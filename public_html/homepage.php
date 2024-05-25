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
                Идеальное место для тех, кто мечтает о переезде в регион с богатой историей, уникальной культурой
                и широкими возможностями для развития
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
                    <div class="homepage-features__title">
                        <em>Уникальный</em> регион России, расположенный на Дальнем Востоке
                        <a href="#map" class="homepage-features__title-icon" data-fancybox>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                 viewBox="0 0 24 24">
                                <path stroke="#005DE9" stroke-linecap="round"
                                      stroke-linejoin="round" stroke-width="2"
                                      d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10Z"/>
                                <path
                                        stroke="#005DE9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M12 18a6 6 0 1 0 0-12 6 6 0 0 0 0 12Z"/>
                                <path stroke="#005DE9"
                                      stroke-linecap="round"
                                      stroke-linejoin="round"
                                      stroke-width="2"
                                      d="M12 14a2 2 0 1 0 0-4 2 2 0 0 0 0 4Z"/>
                            </svg>
                        </a>
                    </div>
                    <div class="homepage-features-map" id="map">
                        <button class="homepage-features-map__close" data-fancybox-close>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                 viewBox="0 0 24 24">
                                <path stroke="#C4C4C4" stroke-linejoin="round" stroke-width="1.5"
                                      d="M18 6 6 18M6 6l12 12"/>
                            </svg>
                        </button>
                        <img src="/local/assets/images/homepage-top/map.png" alt="карта"
                             class="homepage-features-map__img"
                             loading="lazy">
                    </div>
                </div>
                <?= $mustache->render('homepage-features-tabs', include $_SERVER['DOCUMENT_ROOT'] . '/context/homepage/features/tabs.php') ?>
                <?= $mustache->render('homepage-features-slider', include $_SERVER['DOCUMENT_ROOT'] . '/context/homepage/features/slider.php') ?>
                <div class="homepage-features-hint">
                    <div class="homepage-features-hint__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="19" height="20" fill="none" viewBox="0 0 19 20">
                            <path fill="#C4C4C4"
                                  d="M17.612 10.67a.465.465 0 0 0-.26-.348c-3.081-1.962-4.896-2.36-6.204-2.708l-.503-.118-.419-4.784C10.263 1.63 9.445.757 8.331.687a1.922 1.922 0 0 0-2.058 1.86l.033.036-.091 2.772-.257 6.792-.726-.565c-.658-.563-1.491-.963-2.335-1.024-.879-.03-1.669.318-2.263.94-.21.197-.22.467-.058.71a24.372 24.372 0 0 0 3.192 3.759 16.218 16.218 0 0 0 3.466 2.65 9.472 9.472 0 0 0 4.322 1.328l.067.002c1.893.062 3.4-.497 4.454-1.682 2.32-2.63 1.528-7.393 1.535-7.595Zm-2.425 6.856c-.841.92-2.041 1.388-3.561 1.305l-.068-.003c-2.739-.056-5.313-2.035-7.02-3.648a21.142 21.142 0 0 1-2.804-3.205c.312-.227.69-.383 1.06-.337a2.78 2.78 0 0 1 1.668.73l.033.036 1.614 1.305c.232.176.57.188.782-.076.104-.098.109-.233.145-.333l.293-7.875.091-2.772a.837.837 0 0 1 .873-.817.837.837 0 0 1 .818.873l-.003.068.405 5.19a.588.588 0 0 0 .39.486c.268.077.603.155.94.234 2.014.473 3.95 1.28 5.672 2.42.139.918.394 4.48-1.327 6.42Z"/>
                        </svg>
                    </div>
                    <div class="homepage-features-hint__text">
                        Листайте, чтобы<br>
                        увидеть все карточки
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-career">
        <div class="container homepage-career-container">
            <div class="homepage-career-inner">
                <div class="homepage-career-top">
                    <div class="homepage-career__title">
                        <em>Амурская область —</em><br>
                        безграничные
                        карьерные<br class="mobile-hide tablet-show"> возможности
                    </div>
                    <div class="homepage-career-count">
                        <div class="homepage-career-count__bg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="372" height="180" fill="none"
                                 viewBox="0 0 372 180">
                                <path stroke="#fff" stroke-width="2"
                                      d="M369.826 39.175c2.693 9.737.3 20.492-6.544 31.677-6.845 11.187-18.095 22.715-32.927 33.907-29.66 22.38-73.473 43.287-124.412 57.372-50.938 14.084-99.268 18.655-136.212 14.69-18.475-1.982-34.05-6.093-45.67-12.174-11.617-6.08-19.195-14.079-21.887-23.816-2.693-9.737-.3-20.493 6.544-31.677 6.845-11.187 18.095-22.715 32.927-33.907 29.66-22.38 73.473-43.287 124.412-57.372C216.995 3.791 265.325-.78 302.269 3.185c18.475 1.982 34.049 6.093 45.669 12.174 11.618 6.08 19.196 14.079 21.888 23.816Z"
                                      opacity=".32"/>
                            </svg>
                        </div>
                        <div class="homepage-career-count__title">более</div>
                        <div class="homepage-career-count-content">
                            <div class="homepage-career-count__value">14 000</div>
                            <div class="homepage-career-count__text">актуальных вакансий
                                в регионе
                            </div>
                        </div>
                    </div>
                </div>
                <div class="homepage-career-expander">
                    <div class="homepage-career-expander-hidden">
                        <?= $mustache->render('homepage-career-list', include $_SERVER['DOCUMENT_ROOT'] . '/context/homepage/career/list.php') ?>
                    </div>
                    <div class="homepage-career-expander-toggle-container">
                        <button class="button button_filled-white-border homepage-career-expander__toggle"
                                type="button">
                            <span class="homepage-career-expander__toggle-text">Смотреть все сферы</span>
                        </button>
                    </div>
                </div>
                <div class="homepage-career-link-container">
                    <a href="/vacncies/" class="homepage-career__link">
                        <span class="homepage-career__link-text">Смотреть все вакансии</span>
                        <span class="homepage-career__link-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                 viewBox="0 0 24 24"><g stroke="#fff" stroke-width="1.5" clip-path="url(#a)"><path
                                            stroke-linecap="round" stroke-linejoin="round"
                                            d="M19.071 19.071c3.905-3.905 3.905-10.237 0-14.142-3.905-3.905-10.237-3.905-14.142 0-3.905 3.905-3.905 10.237 0 14.142 3.905 3.905 10.237 3.905 14.142 0Z"/><path
                                            stroke-linecap="square"
                                            d="M14.828 14.829V9.172H9.171M9.171 14.828l5.657-5.657"/></g><defs><clipPath
                                            id="a"><path fill="#fff" d="M0 0h24v24H0z"/></clipPath></defs></svg>
                        </span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="homepage-support">
        <div class="container homepage-support-container">
            <div class="homepage-support-inner">
                <div class="homepage-support__bg">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1057" height="654" fill="none"
                         viewBox="0 0 1057 654">
                        <path fill="#E4EAEF"
                              d="m1020.24 623.412-14.39 13.272-28.784-6.927-23.779-5.763-36.288 4.613h-33.788l-13.763 12.704L831.906 654l-37.542-6.927-15.64-28.274-18.147-16.748s-21.272-11.539-21.272-16.166c0-4.627-23.779-21.929-23.779-21.929l-30.033-4.614-12.517-27.706-28.787-20.779-20.017-18.466-27.533-6.927-10.009-24.242-25.033-10.39-15.017-13.853-50.051-4.627H470.25l-30.034 15.017-37.541-5.777-28.787 9.24h-31.28l-42.558 28.856-20.017 18.466-18.133-28.842-8.131-15.017h-21.28l-6.254-24.811-10.639-15.016 18.771-10.39v-8.076h-10.009l-16.894-16.735-13.763-1.731 3.124-29.438-8.132-13.285-8.762-22.511-20.017-9.226-14.394 18.466-15.017-5.195-1.254-19.63-10.009-9.226-14.701-3.761-15.332 14.151-7.508 17.316-25.657-6.358-8.131-14.421 15.017-17.316-8.763-13.285-16.893 5.194-21.895-5.194L.286 249.763 0 235.854l21.887-20.183 24.237-18.751h24.23l11.337-10.459 13.673 12.62 18.756 3.602 8.597-7.931h25.018l10.166 12.26s15.633 1.732 15.633 0c0-1.731 4.685-17.302 4.685-17.302l31.265 5.763 10.94-10.092 22.675-4.329 21.106 8.658 26.572 24.513 20.318-8.644 22.675-5.05 10.159-12.987 17.194 7.21 12.509-11.539h14.071l13.29 12.26 49.623-45.778 26.97 3.963v-15.855l33.615-11.54 24.229 4.329s23.734-13.257 25.011-14.421c1.276-1.177-1.562-23.8-1.562-23.8l40.643-22.358 38.307-28.842 9.942 5.209 16.045-7.398 13.913-16.29 20.062-2.716 17.382-16.035L737.638 0l22.466 11.838-8.56 20.239s2.117 15.785.533 15.785-15.512 19.74-15.512 19.74v35.527l-8.56-.977-6.952 15.786 13.364 20.724v15.785l-14.971 7.903-9.101 19.249 16.053 17.76 30.5 3.948 10.699-8.887 19.785-5.922 34.771 43.429 14.979-12.336 15.512.499 22.999-31.087 23.801-8.145 8.289-7.654-5.345-21.715 6.412-18.251 24.334-4.204 13.11-12.08 13.372-21.715 23.276-2.216 21.658 19.983 6.42 35.041 23 14.802-9.1 28.627-40.649 13.812-21.939-.485-9.896 12.564 25.416 23.447 1.073 15.3-22.465 23.204-2.673 33.552-21.398 18.265-1.074 15.786-17.119 18.75 14.979 20.724-11.766 19.74 5.091 46.629 13.635 12.579h12.839l13.913 19.741 10.7-9.864 27.283 2.459 4.82 18.265 23.53 15.786 2.14 16.291 10.7 2.459 13.92 9.877 1.07 27.637-12.2 4.53 5.59 18.071-5.82 13.638 2.62 25.531-26.95-6.352Z"
                              opacity=".8"/>
                    </svg>
                </div>
                <div class="homepage-support-top">
                    <div class="homepage-support__title">
                        Оказываем <em>меры поддержки</em> специалистам, решившим переехать в Амурскую область
                    </div>
                    <div class="homepage-support__subtitle">
                        Мы ценим квалифицированные кадры и хотим, чтобы<br class="mobile-hide tablet-show">
                        вы чувствовали себя комфортно и уверенно в своём
                        выборе
                    </div>
                </div>
                <div class="homepage-support-hint homepage-support-hint_1">
                    <div class="homepage-support-hint__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 40 40">
                            <circle cx="20" cy="20" r="20" fill="#005DE9"/>
                            <path stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"
                                  d="M26.25 13.125v.313a1.563 1.563 0 0 1-3.125 0v-.313h-6.25v.313a1.563 1.563 0 0 1-3.125 0v-.313h-3.125v13.75h18.75v-13.75H26.25ZM21.875 18.125h5m-5 2.5h5m-5 2.5h2.5"/>
                            <path stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"
                                  d="M16.25 20.625a1.875 1.875 0 1 0 0-3.75 1.875 1.875 0 0 0 0 3.75ZM16.25 20.625a3.157 3.157 0 0 0-3.125 3.219v.531h6.25v-.531a3.157 3.157 0 0 0-3.125-3.219Z"/>
                        </svg>
                    </div>
                    <div class="homepage-support-hint__title">Социальная поддержка</div>
                    <div class="homepage-support-hint-hidden" id="hint1">
                        <button class="homepage-support-map__close" data-fancybox-close>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                 viewBox="0 0 24 24">
                                <path stroke="#C4C4C4" stroke-linejoin="round" stroke-width="1.5"
                                      d="M18 6 6 18M6 6l12 12"/>
                            </svg>
                        </button>
                        <div class="homepage-support-hint-hidden-inner">
                            <div class="homepage-support-hint__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none"
                                     viewBox="0 0 40 40">
                                    <circle cx="20" cy="20" r="20" fill="#005DE9"/>
                                    <path stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"
                                          d="M26.25 13.125v.313a1.563 1.563 0 0 1-3.125 0v-.313h-6.25v.313a1.563 1.563 0 0 1-3.125 0v-.313h-3.125v13.75h18.75v-13.75H26.25ZM21.875 18.125h5m-5 2.5h5m-5 2.5h2.5"/>
                                    <path stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"
                                          d="M16.25 20.625a1.875 1.875 0 1 0 0-3.75 1.875 1.875 0 0 0 0 3.75ZM16.25 20.625a3.157 3.157 0 0 0-3.125 3.219v.531h6.25v-.531a3.157 3.157 0 0 0-3.125-3.219Z"/>
                                </svg>
                            </div>
                            <div class="homepage-support-hint-content">
                                <div class="homepage-support-hint__title">Социальная поддержка</div>
                                <div class="homepage-support-hint__text">
                                    Короткий текст про материальную поддержку, примерно вот такой по объему. Короткий
                                    текст
                                    про материальную поддержку, примерно вот такой по объему.
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#hint1" class="homepage-support-hint__link link-as-card" data-fancybox></a>
                </div>
                <div class="homepage-support-hint homepage-support-hint_2">
                    <div class="homepage-support-hint__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none" viewBox="0 0 40 40">
                            <circle cx="20" cy="20" r="20" fill="#005DE9"/>
                            <path stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"
                                  d="M23.125 16.875a6.25 6.25 0 1 1-6.25 6.25"/>
                            <path stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"
                                  d="M16.875 23.125a6.25 6.25 0 1 0 0-12.5 6.25 6.25 0 0 0 0 12.5Z"/>
                            <path fill="#fff" fill-rule="evenodd"
                                  d="M24.258 20.271a8.07 8.07 0 0 0 .397-1.045c.42.147.851.382 1.181.77.353.415.539.943.539 1.567 0 .672-.217 1.229-.614 1.65-.381.405-.875.63-1.34.76-.59.165-1.25.206-1.796.215v.375H25v1.5h-2.375v1.125h-1.5v-1.125h-.5v-1.5h.5v-.762a8.163 8.163 0 0 0 1.427-1.113c.498-.006 1.017-.034 1.465-.16.316-.088.525-.208.652-.343.11-.117.206-.294.206-.622 0-.309-.085-.482-.181-.595-.108-.127-.285-.242-.557-.334l.121-.363Z"
                                  clip-rule="evenodd"/>
                            <path stroke="#fff" stroke-width="1.5"
                                  d="M15.625 12.813v8.124m0-7.5c1.25 0 3.75-.125 3.75 1.875s-2.5 1.876-3.75 1.876m-1.25 1.875h4.375"/>
                        </svg>
                    </div>
                    <div class="homepage-support-hint__title">Материальная поддержка</div>
                    <div class="homepage-support-hint-hidden" id="hint2">
                        <button class="homepage-support-map__close" data-fancybox-close>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                                 viewBox="0 0 24 24">
                                <path stroke="#C4C4C4" stroke-linejoin="round" stroke-width="1.5"
                                      d="M18 6 6 18M6 6l12 12"/>
                            </svg>
                        </button>
                        <div class="homepage-support-hint-hidden-inner">
                            <div class="homepage-support-hint__icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="none"
                                     viewBox="0 0 40 40">
                                    <circle cx="20" cy="20" r="20" fill="#005DE9"/>
                                    <path stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"
                                          d="M23.125 16.875a6.25 6.25 0 1 1-6.25 6.25"/>
                                    <path stroke="#fff" stroke-miterlimit="10" stroke-width="1.5"
                                          d="M16.875 23.125a6.25 6.25 0 1 0 0-12.5 6.25 6.25 0 0 0 0 12.5Z"/>
                                    <path fill="#fff" fill-rule="evenodd"
                                          d="M24.258 20.271a8.07 8.07 0 0 0 .397-1.045c.42.147.851.382 1.181.77.353.415.539.943.539 1.567 0 .672-.217 1.229-.614 1.65-.381.405-.875.63-1.34.76-.59.165-1.25.206-1.796.215v.375H25v1.5h-2.375v1.125h-1.5v-1.125h-.5v-1.5h.5v-.762a8.163 8.163 0 0 0 1.427-1.113c.498-.006 1.017-.034 1.465-.16.316-.088.525-.208.652-.343.11-.117.206-.294.206-.622 0-.309-.085-.482-.181-.595-.108-.127-.285-.242-.557-.334l.121-.363Z"
                                          clip-rule="evenodd"/>
                                    <path stroke="#fff" stroke-width="1.5"
                                          d="M15.625 12.813v8.124m0-7.5c1.25 0 3.75-.125 3.75 1.875s-2.5 1.876-3.75 1.876m-1.25 1.875h4.375"/>
                                </svg>
                            </div>
                            <div class="homepage-support-hint-content">
                                <div class="homepage-support-hint__title">Материальная поддержка</div>
                                <div class="homepage-support-hint__text">
                                    Короткий текст про материальную поддержку, примерно вот такой по объему. Короткий
                                    текст
                                    про материальную поддержку, примерно вот такой по объему.
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="#hint2" class="homepage-support-hint__link link-as-card" data-fancybox></a>
                </div>
                <div class="homepage-support-gallery">
                    <div class="homepage-support-item">
                        <img src="/local/assets/images/homepage-support/image1.jpg" alt="Меры поддержки"
                             class="homepage-support-item__img" loading="lazy">
                    </div>
                    <div class="homepage-support-item">
                        <img src="/local/assets/images/homepage-support/image2.jpg" alt="Меры поддержки"
                             class="homepage-support-item__img" loading="lazy">
                    </div>
                    <div class="homepage-support-item">
                        <img src="/local/assets/images/homepage-support/image3.jpg" alt="Меры поддержки"
                             class="homepage-support-item__img" loading="lazy">
                    </div>
                    <a href="#" class="button button_filled-white-border homepage-support__link">
                        Хочу в регион!
                    </a>
                </div>
            </div>
        </div>
    </section>

<? include 'include/footer.php';

