<?php
/** @var array $pageConfig */

$mustache = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/local/assets/mustache/'),
));
?>

</main>

<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-bg">
                <div class="footer-bg__map">
                    <svg xmlns="http://www.w3.org/2000/svg" width="914" height="569" fill="none" viewBox="0 0 914 569"><path stroke="#1E78FF" stroke-width="8" d="m877.56 537.856-12.31 11.343-24.614-5.92-20.337-4.926-31.035 3.943h-28.897l-11.771 10.858L716.488 564l-32.107-5.92-13.377-24.167-15.52-14.316s-18.193-9.863-18.193-13.818-20.337-18.744-20.337-18.744l-25.686-3.943-10.705-23.681-24.62-17.761-17.12-15.784-23.547-5.92-8.56-20.721-21.41-8.881-12.843-11.841-42.806-3.954h-22.475l-25.687 12.835-32.107-4.938-24.62 7.898h-26.753l-36.397 24.664-17.12 15.784-15.508-24.652-6.954-12.836h-18.199l-5.349-21.206-9.1-12.836 16.054-8.88v-6.903h-8.56l-14.448-14.304-11.771-1.48 2.671-25.162-6.954-11.355-7.494-19.241-17.12-7.886-12.31 15.784-12.843-4.441-1.073-16.778-8.56-7.886-12.573-3.214-13.113 12.095-6.421 14.801-21.943-5.435-6.954-12.326 12.843-14.801-7.494-11.355-14.449 4.44-18.724-4.44-12.908-12.013L5 206.594l18.719-17.252 20.729-16.026H65.17l9.697-8.94 11.693 10.787 16.041 3.079 7.353-6.779h21.397l8.694 10.479s13.37 1.48 13.37 0 4.007-14.789 4.007-14.789l26.739 4.925 9.356-8.626 19.394-3.7 18.05 7.401 22.726 20.952 17.377-7.389 19.393-4.316 8.689-11.1 14.705 6.163 10.698-9.864h12.034l11.366 10.479 42.44-39.127 23.066 3.386v-13.551l28.75-9.864 20.722 3.7s20.299-11.331 21.39-12.326c1.092-1.006-1.335-20.342-1.335-20.342l34.759-19.111 32.763-24.652 8.502 4.452 13.723-6.323 11.899-13.925 17.159-2.32 14.866-13.706L635.866 5l19.213 10.118-7.321 17.3s1.811 13.492.456 13.492-13.266 16.873-13.266 16.873v30.365l-7.321-.834-5.946 13.492 11.43 17.714v13.492l-12.804 6.755-7.784 16.453 13.73 15.18 26.084 3.374 9.151-7.596 16.921-5.061 29.738 37.12 12.811-10.544 13.267.426 19.669-26.57 20.356-6.962 7.09-6.543-4.572-18.56 5.484-15.6 20.812-3.594 11.212-10.325 11.437-18.56 19.906-1.895 18.527 17.081 5.484 29.951 19.675 12.652-7.783 24.468-34.766 11.805-18.764-.414-8.463 10.74 21.737 20.04.918 13.078-19.213 19.833-2.287 28.679-18.301 15.611-.918 13.493-14.641 16.026 12.811 17.714-10.063 16.873 4.354 39.856 11.661 10.751h10.981l11.899 16.873 9.151-8.43 23.336 2.101 4.116 15.612 20.132 13.493 1.83 13.924 9.151 2.102 11.899 8.443.918 23.622-10.435 3.872 4.784 15.446-4.983 11.657 2.241 21.823-23.047-5.429Z" opacity=".8"/></svg>
                </div>
                <div class="footer-bg__heart">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="21" fill="none" viewBox="0 0 24 21">
                        <path fill="#fff"
                              d="M21.577 2.186A5.95 5.95 0 0 0 19.643.844a5.767 5.767 0 0 0-4.561 0 5.949 5.949 0 0 0-1.934 1.342L12 3.38l-1.148-1.193A5.85 5.85 0 0 0 6.637.374a5.85 5.85 0 0 0-4.214 1.812A6.312 6.312 0 0 0 .678 6.563c0 1.641.628 3.215 1.745 4.376l1.149 1.192L12 20.884l8.428-8.753 1.149-1.192a6.21 6.21 0 0 0 1.292-2.008 6.395 6.395 0 0 0 0-4.737 6.21 6.21 0 0 0-1.292-2.008Z"/>
                    </svg>
                </div>
            </div>
            <div class="footer-top">
                <?= $mustache->render('footer-logo', ['isMainPage' => $pageConfig['isMainPage']]) ?>
                <div class="footer__title">
                    Амурская область —<br>
                    <em>
                        безграничные карьерные<br>
                        возможности
                    </em>
                </div>
            </div>
            <div class="footer-button-container">
                <button class="footer__button" type="button">
                    <span class="footer__button-inner">
                        <span class="footer__button-text">Хочу в регион</span>
                        <span class="footer__button-icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                                 viewBox="0 0 20 20"><path fill="#fff"
                                                           d="M4.167 8.75h-1.25v2.5h1.25v-2.5Zm0 2.5h11.666v-2.5H4.166v2.5Z"/><path
                                        stroke="#fff" stroke-linecap="square" stroke-width="2.5"
                                        d="M10 4.167 15.833 10 10 15.834"/></svg>
                        </span>
                    </span>
                </button>
            </div>
            <?= $mustache->render('footer-contacts', include $_SERVER['DOCUMENT_ROOT'] . '/context/footer/contacts.php') ?>
            <div class="footer-bottom">
                <div class="footer-dev">
                    <!--noindex-->
                    <a href="https://t.me/sturmlaterne" class="footer-dev__item" rel="nofollow" target="_blank">Sturmlaterne</a>
                    <span class="footer-dev__item">×</span>
                    <a href="https://prymery.com/" class="footer-dev__item" rel="nofollow" target="_blank">Prymery</a>
                    <!--/noindex-->
                </div>
                <div class="footer-copyright">
                    © <?=date('Y')?>, Управление занятости населения <br class="desktop-hide">
                    Амурской области (УЗН Амурской области)
                </div>
            </div>
        </div>
    </div>
</footer>

<?
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] . '/../');
$dotenv->load();

if (!empty($_ENV['MODE']) && $_ENV['MODE'] === 'dev') {
    echo "<script src='/local/assets/local/bundle-runtime/bundle-runtime.js'></script>";
}
?>
<? if (!empty($pageConfig['deferJs'])): ?>
    <? foreach ($pageConfig['deferJs'] as $path): ?>
        <script src="<?= $path ?>" defer data-skip-moving="true"></script>
    <? endforeach; ?>
<? endif; ?>
<? if (!empty($pageConfig['asyncJs'])): ?>
    <? foreach ($pageConfig['asyncJs'] as $path): ?>
        <script src="<?= $path ?>" async data-skip-moving="true"></script>
    <? endforeach; ?>
<? endif; ?>
</body>
</html>