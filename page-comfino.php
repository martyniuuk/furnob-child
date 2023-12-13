<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comfino</title>
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/comfino/css/comfino-style.css'); ?>">
</head>
<body id="comfino-body">
    <?php get_header(); ?>
    
    <div class="comfino-page">
        <div class="comfino-page__wrapper container">
            <aside>
                <?php the_content(); ?>
            </aside>
            <main>     
                <div class="comfino-wrapper">
                    <header class="comfino-header">
                        <div class="comfino-header-logo">
                            <img src="<?php echo get_theme_file_uri('assets/comfino/images/comfino-logo.png'); ?>" alt="">
                        </div>
                        <div class="comfino-header-title">
                            Poznaj Comfino <span>- bramkę nowoczesnych płatności!</span>
                        </div>
                    </header>
                </div>
                    <section class="comfino-benefits comfino-wrapper">
                        <div class="comfino-benefits-title">
                            Płatności z Comfino - jak to działa?
                        </div>
                        <div class="comfino-benefits-box">
                            <div class="comfino-benefits-box__item">
                                <div class="comfino-benefits-box__item-img">
                                    <img src="<?php echo get_theme_file_uri('assets/comfino/images/benefit_2.png'); ?>" width="143" height="139" alt="">
                                </div>
                                <p>
                                    <strong>Wybierz formę  <br>
                                        płatności z Comfino</strong>
                                </p>
                            </div>
                            <div class="comfino-benefits-box__item">
                                <div class="comfino-benefits-box__item-img">
                                    <img src="<?php echo get_theme_file_uri('assets/comfino/images/benefit_3.png'); ?>" width="143" height="139" alt="">
                                </div>
                                <p>
                                    <strong>Wprowadź <br>
                                        swoje dane</strong>
                                </p>
                            </div>
                            <div class="comfino-benefits-box__item">
                                <div class="comfino-benefits-box__item-img">
                                    <img src="<?php echo get_theme_file_uri('assets/comfino/images/benefit_5.png'); ?>" width="143" height="139" alt="">
                                </div>
                                <p>
                                    <strong>Podpisz umowę<br>
                                        przez SMS</strong>
                                </p>
                            </div>
                            <div class="comfino-benefits-box__item">
                                <div class="comfino-benefits-box__item-img">
                                    <img src="<?php echo get_theme_file_uri('assets/comfino/images/benefit_7.png'); ?>" width="143" height="139" alt="">
                                </div>
                                <p>
                                    <strong>Twoje zamówienie <br>
                                    jest zrealizowane!</strong>
                                </p>
                            </div>
                        </div>
                    </section>
                    <section class="logotypes comfino-wrapper">
                        <div class="logotypes-title">
                            W ramach usługi Comfino finansowania udzielają renomowane banki
                        </div>
                        <div class="logotypes-container">
                            <img src="<?php echo get_theme_file_uri('assets/comfino/images/logotyp_1.png'); ?>" alt="" class="single-logotype">
                            <img src="<?php echo get_theme_file_uri('assets/comfino/images/logotyp_2.png'); ?>" alt="" class="single-logotype">
                            <img src="<?php echo get_theme_file_uri('assets/comfino/images/logotyp_3.png'); ?>" alt="" class="single-logotype">
                            <img src="<?php echo get_theme_file_uri('assets/comfino/images/logotyp_4.png'); ?>" alt="" class="single-logotype">
                            <img src="<?php echo get_theme_file_uri('assets/comfino/images/logotyp_5.png'); ?>" alt="" class="single-logotype">
                        </div>
                    </section>
                    <section class="comfino-icons comfino-wrapper">
                            <div class="comfino-icons__title">
                                Wybierz metodę płatności dopasowaną do Twoich potrzeb
                            </div>
                            <div class="comfino-icons-box">
                                <div class="comfino-icon">
                                    <div class="comfino-icon-img">
                                        <img src="<?php echo get_theme_file_uri('assets/comfino/images/pig_icon.png'); ?>" alt="">
                                    </div>
                                    <p class="comfino-icon-text">
                                        Wygodne raty <br> marżowe (RRSO)
                                    </p>
                                </div>
                                <div class="comfino-icon">
                                    <div class="comfino-icon-img">
                                        <img src="<?php echo get_theme_file_uri('assets/comfino/images/procent_icon.png'); ?>" alt="">
                                    </div>
                                    <p class="comfino-icon-text">
                                        Raty 0%
                                    </p>
                                </div>
                                <div class="comfino-icon">
                                    <div class="comfino-icon-img">
                                        <img src="<?php echo get_theme_file_uri('assets/comfino/images/clock_icon.png'); ?>" alt="">
                                    </div>
                                    <p class="comfino-icon-text">
                                            Płatności odroczone <br>
                                        - kup teraz zapłać za 30 dni
                                    </p>
                                </div>
                                <div class="comfino-icon">
                                    <div class="comfino-icon-img">
                                        <img src="<?php echo get_theme_file_uri('assets/comfino/images/money_icon.png'); ?>" alt="">
                                    </div>
                                    <p class="comfino-icon-text">
                                        Finansowanie <br>
                                        dla firm
                                    </p>
                                </div>
                            </div>
                    </section>
                    <section class="comfino-profits comfino-wrapper">
                            <div class="comfino-profits__title">
                                Możesz nam zaufać
                            </div>
                            <div class="comfino-profits-content">

                                <div class="comfino-profits-content__text">
                                    <ul class="comfino-profits-content__text-list">
                                        <li class="comfino-profits-content__text-list-item"><span>Comfino to część Comperia S.A. -</span> spółki, która jest notowana
                                            <br> na Giełdzie Papierów Wartościowych w Warszawie</li>
                                        <li class="comfino-profits-content__text-list-item">Za obsługę Comfino odpowiada mała instytucja
                                            <br> <span>płatnicza nadzorowana przez KNF</span></li>
                                        <li class="comfino-profits-content__text-list-item">Proces Comfino odbywa się  <span>całkowicie online <br> - bez zbędnych formalności</span> </li>
                                        <li class="comfino-profits-content__text-list-item">Sam decydujesz o długości przyznanego
                                            <br> finansowania - <span>od 21 dni do 48 miesięcy</span> </li>
                                        <li class="comfino-profits-content__text-list-item"><span>Współpracujemy z renomowanymi bankami</span>,
                                            <br> które natychmiast decydują o przyznaniu finansowania</li>
                                    </ul>
                                </div>
                                <img src="<?php echo get_theme_file_uri('assets/comfino/images/profits-image_v2.png'); ?>" class="comfino-profits-content__image">
                            </div>
                    </section>
                    <footer>
                        <div class="social-icons comfino-wrapper">
                            <a href="https://www.facebook.com/comfinopl" target="_blank" class="social-link">
                                <img src="<?php echo get_theme_file_uri('assets/comfino/images/fb-social.png'); ?>" alt="">
                            </a>
                            <a href="https://www.linkedin.com/company/comfino-pl/" target="_blank" class="social-link">
                                <img src="<?php echo get_theme_file_uri('assets/comfino/images/li-social.png'); ?>" alt="">
                            </a>
                        </div>
                    </footer>
                    </div>
            </main>
        </div>
    </div>

<?php get_footer(); ?>
</body>
</html>
