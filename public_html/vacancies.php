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
                            <a href="#vacancies-modal" class="button button_filled-blue-border vacancies-top__link"
                               data-fancybox>Хочу тут
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
    <section class="vacancies-conditions">
        <div class="container vacancies-conditions-container">
            <div class="vacancies-conditions__title">Условия работы</div>
            <div class="vacancies-conditions-inner">
                <div class="vacancies-conditions-features">
                    <div class="vacancies-conditions-feature">
                        <div class="vacancies-conditions-feature__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none"
                                 viewBox="0 0 12 12">
                                <path stroke="#fff" stroke-linecap="square" stroke-width="2" d="M10 3 4.5 8.5 2 6"/>
                            </svg>
                        </div>
                        <div class="vacancies-conditions-feature__text">Увеличенный ежегодный<br> оплачиваемый отпуск
                        </div>
                    </div>
                    <div class="vacancies-conditions-feature">
                        <div class="vacancies-conditions-feature__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none"
                                 viewBox="0 0 12 12">
                                <path stroke="#fff" stroke-linecap="square" stroke-width="2" d="M10 3 4.5 8.5 2 6"/>
                            </svg>
                        </div>
                        <div class="vacancies-conditions-feature__text">Компенсация стоимости аренды жилья</div>
                    </div>
                    <div class="vacancies-conditions-feature">
                        <div class="vacancies-conditions-feature__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none"
                                 viewBox="0 0 12 12">
                                <path stroke="#fff" stroke-linecap="square" stroke-width="2" d="M10 3 4.5 8.5 2 6"/>
                            </svg>
                        </div>
                        <div class="vacancies-conditions-feature__text">Повышение квалификации за счет работодателя
                        </div>
                    </div>
                    <div class="vacancies-conditions-feature">
                        <div class="vacancies-conditions-feature__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" fill="none"
                                 viewBox="0 0 12 12">
                                <path stroke="#fff" stroke-linecap="square" stroke-width="2" d="M10 3 4.5 8.5 2 6"/>
                            </svg>
                        </div>
                        <div class="vacancies-conditions-feature__text">Компенсация переезда (оплата стоимости проезда,
                            провоза багажа)
                        </div>
                    </div>
                </div>
                <div class="vacancies-image-wrapper">
                    <img src="/local/assets/images/vacancies/cards.png" alt="Условия работы"
                         class="vacancies-image__img"
                         loading="lazy">
                </div>
            </div>
        </div>
    </section>
    <section class="vacancies-possibilities">
        <div class="container vacancies-possibilities-container">
            <div class="vacancies-possibilities__title">Возможности</div>
            <div class="vacancies-possibilities-list">
                <div class="vacancies-possibilities-item">
                    <div class="vacancies-possibilities-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="#005DE9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m12 2 3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2Z"/>
                        </svg>
                    </div>
                    <div class="vacancies-possibilities-item__text">
                        Повышенный размер пенсии с учетом северной надбавки и районного коэффициента
                    </div>
                </div>
                <div class="vacancies-possibilities-item">
                    <div class="vacancies-possibilities-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="#005DE9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m12 2 3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2Z"/>
                        </svg>
                    </div>
                    <div class="vacancies-possibilities-item__text">
                        Бесплатный проезд 1 раз в 2 года до места отдыха по территории Российской Федерации для
                        сотрудника и неработающих членов семьи
                    </div>
                </div>
                <div class="vacancies-possibilities-item">
                    <div class="vacancies-possibilities-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="#005DE9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m12 2 3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2Z"/>
                        </svg>
                    </div>
                    <div class="vacancies-possibilities-item__text">
                        Предоставление членам профсоюза и членам их семей льготных путевок в дома отдыха и санатории
                    </div>
                </div>
                <div class="vacancies-possibilities-item">
                    <div class="vacancies-possibilities-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="#005DE9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m12 2 3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2Z"/>
                        </svg>
                    </div>
                    <div class="vacancies-possibilities-item__text">
                        Обеспечение спецодеждой
                    </div>
                </div>
                <div class="vacancies-possibilities-item">
                    <div class="vacancies-possibilities-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="#005DE9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m12 2 3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2Z"/>
                        </svg>
                    </div>
                    <div class="vacancies-possibilities-item__text">
                        Обязательное государственное личное страхование жизни и здоровья работников за счет работодателя
                    </div>
                </div>
                <div class="vacancies-possibilities-item">
                    <div class="vacancies-possibilities-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="#005DE9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m12 2 3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2Z"/>
                        </svg>
                    </div>
                    <div class="vacancies-possibilities-item__text">
                        При наличии соответствующего стажа работы работникам при увольнении оплачивается проезд и провоз
                        багажа к новому месту жительства
                    </div>
                </div>
                <div class="vacancies-possibilities-item">
                    <div class="vacancies-possibilities-item__icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="#005DE9" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                  d="m12 2 3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2Z"/>
                        </svg>
                    </div>
                    <div class="vacancies-possibilities-item__text">
                        Ускоренное получение надбавок за работу в местностях, приравненных к районам Крайнего Севера для
                        молодых специалистов до 30 лет
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="vacancies-form-wrapper">
        <div class="container vacancies-form-container">
            <div class="vacancies-form-inner">
                <div class="vacancies-form__icon vacancies-form__icon_1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="827" height="327" fill="none"
                         viewBox="0 0 827 327">
                        <path stroke="#E1E1E1" stroke-width="2"
                              d="M825.221 163.396c0 22.177-11.359 43.408-32.124 62.827-20.767 19.42-50.871 36.956-88.155 51.703-74.561 29.492-177.635 47.755-291.538 47.755-113.903 0-216.977-18.263-291.539-47.755-37.283-14.747-67.388-32.283-88.155-51.703-20.765-19.419-32.124-40.65-32.124-62.827 0-22.178 11.359-43.409 32.124-62.828 20.767-19.42 50.872-36.956 88.155-51.703C196.427 19.373 299.501 1.11 413.404 1.11c113.903 0 216.977 18.264 291.538 47.755 37.284 14.747 67.388 32.283 88.155 51.703 20.765 19.419 32.124 40.65 32.124 62.828Z"
                              opacity=".64"/>
                    </svg>
                </div>
                <div class="vacancies-form__icon vacancies-form__icon_2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="827" height="327" fill="none"
                         viewBox="0 0 827 327">
                        <path stroke="#E1E1E1" stroke-width="2"
                              d="M825.221 163.396c0 22.177-11.359 43.408-32.124 62.827-20.767 19.42-50.871 36.956-88.155 51.703-74.561 29.492-177.635 47.755-291.538 47.755-113.903 0-216.977-18.263-291.539-47.755-37.283-14.747-67.388-32.283-88.155-51.703-20.765-19.419-32.124-40.65-32.124-62.827 0-22.178 11.359-43.409 32.124-62.828 20.767-19.42 50.872-36.956 88.155-51.703C196.427 19.373 299.501 1.11 413.404 1.11c113.903 0 216.977 18.264 291.538 47.755 37.284 14.747 67.388 32.283 88.155 51.703 20.765 19.419 32.124 40.65 32.124 62.828Z"
                              opacity=".64"/>
                    </svg>
                </div>
                <div class="vacancies-form-image vacancies-form-image_1">
                    <img src="/local/assets/images/vacancies/image1.jpg"
                         alt="Приезжайте строить карьеру в Амурской области" class="vacancies-form-image__img"
                         loading="lazy">
                </div>
                <div class="vacancies-form-image vacancies-form-image_2">
                    <img src="/local/assets/images/vacancies/image2.jpg"
                         alt="Приезжайте строить карьеру в Амурской области" class="vacancies-form-image__img"
                         loading="lazy">
                </div>
                <div class="vacancies-form-image vacancies-form-image_3">
                    <img src="/local/assets/images/vacancies/image3.jpg"
                         alt="Приезжайте строить карьеру в Амурской области" class="vacancies-form-image__img"
                         loading="lazy">
                </div>
                <div class="vacancies-form-wrapper__title-container">
                    <div class="vacancies-form-wrapper__title">
                        Приезжайте<br>
                        строить карьеру<br>
                        <em>в Амурской области</em>
                    </div>
                    <div class="vacancies-form__heart">
                        <svg xmlns="http://www.w3.org/2000/svg" width="64" height="64" fill="none" viewBox="0 0 64 64">
                            <path fill="#005DE9"
                                  d="M55.573 12.293a14.667 14.667 0 0 0-20.746 0L32 15.12l-2.827-2.827A14.67 14.67 0 0 0 8.427 33.04l2.826 2.827L32 56.613l20.747-20.746 2.826-2.827a14.666 14.666 0 0 0 0-20.747Z"/>
                        </svg>
                    </div>
                </div>
                <div class="vacancies-form-box">
                    <?= $mustache->render('form', include $_SERVER['DOCUMENT_ROOT'] . '/context/vacancies/form.php') ?>
                </div>
            </div>
        </div>
    </section>
    <div class="vacancies-modal" id="vacancies-modal">
        <div class="vacancies-modal-inner">
            <div class="vacancies-modal__title">
                Project manager по внедрению технологий ИИ, Sber AI
            </div>
            <div class="vacancies-modal-content">
                <div class="vacancies-modal-col vacancies-modal-reqs">
                    <div class="vacancies-modal-col-top">
                        <div class="vacancies-modal-col-top__text">Требования</div>
                        <div class="vacancies-modal-col-top__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                 viewBox="0 0 16 16">
                                <path stroke="#005DE9" stroke-width="1.5" d="m4 6 4 4 4-4"/>
                            </svg>
                        </div>
                    </div>
                    <div class="vacancies-modal-col-hidden">
                        <div class="vacancies-modal-list">
                            <div class="vacancies-modal-item">Высшее образование</div>
                            <div class="vacancies-modal-item">Опыт работы в консалтинге</div>
                            <div class="vacancies-modal-item">Полный комплект софтскиллов, особенно умение
                                договариваться
                            </div>
                            <div class="vacancies-modal-item">Умение рисовать красивые презентации: очень много
                                презентаций
                            </div>
                            <div class="vacancies-modal-item">Знание английского: it goes without saying</div>
                            <div class="vacancies-modal-item">Умение работать в команде, целеустремленность,
                                коммуникабельность
                            </div>
                            <div class="vacancies-modal-item">Исключительная самостоятельность и инициативность</div>
                        </div>
                    </div>
                </div>
                <div class="vacancies-modal-col vacancies-modal-resp">
                    <div class="vacancies-modal-col-top">
                        <div class="vacancies-modal-col-top__text">Обязанности</div>
                        <div class="vacancies-modal-col-top__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                 viewBox="0 0 16 16">
                                <path stroke="#005DE9" stroke-width="1.5" d="m4 6 4 4 4-4"/>
                            </svg>
                        </div>
                    </div>
                    <div class="vacancies-modal-col-hidden">
                        <div class="vacancies-modal-list">
                            <div class="vacancies-modal-item">Высшее образование</div>
                            <div class="vacancies-modal-item">Опыт работы в консалтинге</div>
                            <div class="vacancies-modal-item">Полный комплект софтскиллов, особенно умение
                                договариваться
                            </div>
                            <div class="vacancies-modal-item">Умение рисовать красивые презентации: очень много
                                презентаций
                            </div>
                            <div class="vacancies-modal-item">Знание английского: it goes without saying</div>
                            <div class="vacancies-modal-item">Умение работать в команде, целеустремленность,
                                коммуникабельность
                            </div>
                            <div class="vacancies-modal-item">Исключительная самостоятельность и инициативность</div>
                        </div>
                    </div>
                </div>
                <div class="vacancies-modal-col vacancies-modal-poss">
                    <div class="vacancies-modal-col-top">
                        <div class="vacancies-modal-col-top__text">Возможности от организации</div>
                        <div class="vacancies-modal-col-top__icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"
                                 viewBox="0 0 16 16">
                                <path stroke="#005DE9" stroke-width="1.5" d="m4 6 4 4 4-4"/>
                            </svg>
                        </div>
                    </div>
                    <div class="vacancies-modal-col-hidden">
                        <div class="vacancies-modal-list">
                            <div class="vacancies-modal-item">Компенсация переезда для всей семьи</div>
                            <div class="vacancies-modal-item">Компенсация аренды жилья</div>
                            <div class="vacancies-modal-item">Ипотека выгоднее для каждого сотрудника и льготные условия
                                кредитования
                            </div>
                            <div class="vacancies-modal-item">Бесплатная подписка СберПрайм+</div>
                            <div class="vacancies-modal-item">Скидки на продукты компаний-партнеров: Okko, Сбер Маркет,
                                Delivery Club, Самокат, Сбер Еаптека и другие
                            </div>
                            <div class="vacancies-modal-item">ДМС с первого дня и льготное страхование для близких</div>
                            <div class="vacancies-modal-item">Корпоративная пенсионная программа</div>
                            <div class="vacancies-modal-item">Курсы для будущих родителей, материальная поддержка и
                                тематическое сообщество для молодых мам
                            </div>
                            <div class="vacancies-modal-item">Детский отдых и подарки за счет Компании</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="vacancies-modal-bottom">
                <div class="vacancies-modal-price">
                    <div class="vacancies-modal-price__title">Заработная плата</div>
                    <div class="vacancies-modal-price__value">
                        <div class="vacancies-modal-price__value-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="12" height="14" fill="none"
                                 viewBox="0 0 12 14">
                                <path fill="#005DE9"
                                      d="M6.79 8.62H.693V6.885h6.051c.489 0 .89-.077 1.205-.233.318-.155.553-.37.704-.647.156-.277.231-.6.228-.972a1.98 1.98 0 0 0-.228-.977 1.62 1.62 0 0 0-.693-.688c-.307-.17-.697-.255-1.17-.255H4.506V13H2.403V1.364H6.79c.901 0 1.665.163 2.29.488.625.322 1.098.76 1.42 1.313.326.549.489 1.166.489 1.852 0 .712-.165 1.34-.495 1.88-.33.539-.806.96-1.431 1.268-.626.303-1.383.454-2.273.454Zm.267.863v1.733H.693V9.483h6.364Z"/>
                            </svg>
                        </div>
                        <div class="vacancies-modal-price__value-text">
                            от 103 000
                        </div>
                    </div>
                </div>
                <div class="vacancies-modal-button-container">
                    <button class="button button_filled-blue-border vacancies-modal__button" type="button" data-fancybox-close>Откликнуться на вакансию</button>
                </div>
            </div>
        </div>
        <button class="modal-form__close" data-fancybox-close>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none"
                 viewBox="0 0 24 24">
                <path stroke="#C4C4C4" stroke-linejoin="round" stroke-width="1.5"
                      d="M18 6 6 18M6 6l12 12"/>
            </svg>
        </button>
    </div>

<? include 'include/footer.php';

