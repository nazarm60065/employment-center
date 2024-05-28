<?php
$pageConfig = [
    'metaTitle' => 'Новости',
    'title' => 'Новости',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-form/bundle-form.css',
        '/local/assets/local/bundle-vacancies/bundle-vacancies.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-form/bundle-form.js',
        '/local/assets/local/bundle-vacancies/bundle-vacancies.js',
    ],
    'main_class' => 'vacancies',
    'isMainPage' => false,
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>

    <div class="container">
        <?= $mustache->render('breadcrumbs', include $_SERVER['DOCUMENT_ROOT'] . '/context/vacancies/breadcrumbs.php') ?>
    </div>
    <section class="vacancies-top">
        <div class="vacancies-top-wrapper">
            <div class="container vacancies-top-container">
                <div class="vacancies-top-inner">
                    <div class="vacancies-top-counter-and-image">
                        <div class="vacancies-top-counter">
                            <div class="vacancies-top-counter__value">329</div>
                            <div class="vacancies-top-counter__text">вакансий <br>в этой сфере</div>
                        </div>
                        <div class="vacancies-top-image-wrapper">
                            <div class="vacancies-top-bg">
                                <svg xmlns="http://www.w3.org/2000/svg" width="238" height="133" fill="none"
                                     viewBox="0 0 238 133">
                                    <path stroke="#C4C4C4" stroke-width="1.5"
                                          d="M235.587 19.696c2.462 6.153 1.687 13.348-1.975 21.162-3.662 7.816-10.184 16.181-19.081 24.592-17.792 16.819-44.964 33.71-77.305 46.651-32.341 12.943-63.665 19.46-88.147 19.558-12.243.049-22.736-1.507-30.78-4.639-8.04-3.13-13.565-7.804-16.027-13.957C-.191 106.91.584 99.716 4.246 91.902 7.91 84.086 14.431 75.72 23.328 67.309 41.119 50.492 68.291 33.6 100.633 20.66 132.974 7.715 164.297 1.198 188.779 1.1c12.244-.049 22.736 1.508 30.78 4.64 8.041 3.13 13.566 7.804 16.028 13.956Z"/>
                                </svg>
                            </div>
                            <img src="/local/assets/images/vacancies/image.jpg" alt="329 вакансий в этой сфере"
                                 class="vacancies-top-image__img" loading="lazy">
                        </div>
                    </div>
                    <div class="vacancies-top-content">
                        <h1 class="vacancies-top__title">Информационные технологии,связь</h1>
                        <div class="vacancies-top__text">
                            Сфера информационных технологий и связи в Амурской области активно развивается и предлагает
                            множество
                            возможностей для специалистов. Здесь вы найдёте перспективные проекты, инновационные решения
                            и интересные задачи
                        </div>
                        <div class="vacancies-top-link-container">
                            <a href="#" class="button button_filled-blue-border vacancies-top__link">Хочу тут
                                работать!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vacancies-list-wrapper">
        <div class="container">
            <div class="vacancies-list__title">Вакансии</div>
            <?= $mustache->render('vacancies-list', include $_SERVER['DOCUMENT_ROOT'] . '/context/vacancies/list.php') ?>
            <div class="vacancies-list-link-container">
                <a href="#" class="button button_linear-blue vacancies-list__link">Смотреть все вакансии</a>
            </div>
        </div>
    </section>

<? include 'include/footer.php';

