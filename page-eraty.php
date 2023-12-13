<!DOCTYPE html>
<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>eRaty</title>
    <link rel="shortcut icon" type="image/ico" href="https://www.santanderconsumer.pl/favicon.ico" />
    <link rel="stylesheet" href="<?php echo get_theme_file_uri('assets/eraty/css/eraty-style.css'); ?>">
    <meta name="keywords" content="">
    <meta name="description" content="">
</head>

<body id="eraty-body">
    <?php get_header(); ?>

    <div class="eraty-page">
        <div class="eraty-page__wrapper container">
            <aside>
                <?php the_content(); ?>
            </aside>
            <main>
                <header class="section-header">
                    <div class="header container">
                        <img class="header__logo" src="<?php echo get_theme_file_uri('assets/eraty/images/logo.svg'); ?>">
                        <img class="header__img" src="<?php echo get_theme_file_uri('assets/eraty/images/header-mobile.png'); ?>">
                        <h1 class="heading-primary">
                            <span class="heading-primary--line-red">Zakupy na e-raty</span>
                            <span class="heading-primary--line-black">to więcej korzyści</span>
                            <span class="heading-primary--line-black">niż myślisz!</span>
                        </h1>
                        <h2 class="heading-secondary">RRSO 11,72%</h2>
                    </div>
                </header>

                <section class="section-advantages">
                    <div class="advantages container">
                        <h3 class="heading-tertiary">Minimum formalności</h3>
                        <div class="advantages__card-wrapper">
                            <div class="advantages__card">
                                <img src="<?php echo get_theme_file_uri('assets/eraty/images/document.svg') ?>" />
                                <p class="paragraph">Jasne zasady przyznawania kredytu.</p>
                            </div>

                            <div class="advantages__card">
                                <img src="<?php echo get_theme_file_uri('assets/eraty/images/checklist.svg') ?>" />
                                <p class="paragraph">Szybka decyzja kredytowa 
                                  <sup>1</sup>
                                .</p>
                            </div>

                            <div class="advantages__card">
                                <img src="<?php echo get_theme_file_uri('assets/eraty/images/mobile.svg') ?>" />
                                <p class="paragraph">Możliwość potwierdzenia tożsamości w wybrany przez Ciebie sposób:</p>
                                <ul>
                                    <li>poprzez SMS lub</li>
                                    <li>przelewem (zwrotnym) 1 zł</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-benefits">
                    <div class="benefits container">
                        <h3 class="heading-tertiary">Maksimum korzyści</h3>
                        <div class="benefits__card-wrapper">
                            <div class="benefits__card">
                                <img src="<?php echo get_theme_file_uri('assets/eraty/images/mobile-pc.svg') ?>" />
                                <p class="paragraph">
                                    <strong>Wygoda</strong>
                                    – kredyt bez wychodzenia z domu.
                                </p>
                            </div>

                            <div class="benefits__card">
                                <img src="<?php echo get_theme_file_uri('assets/eraty/images/options.svg') ?>" />
                                <p class="paragraph">
                                    <strong>Elastyczność</strong> 
                                    – rata dopasowana do Twoich możliwości.
                                </p>
                            </div>

                            <div class="benefits__card">
                                <img src="<?php echo get_theme_file_uri('assets/eraty/images/hand.svg') ?>" />
                                <p class="paragraph">
                                    <strong>Dostępność</strong> 
                                    – towary i usługi z ponad 
                                    <strong>3000</strong> 
                                    sklepów internetowych.
                                </p>
                            </div>

                            <div class="benefits__card">
                                <img src="<?php echo get_theme_file_uri('assets/eraty/images/card.svg') ?>" />
                                <p class="paragraph">
                                    <strong>Bez wpłaty</strong> 
                                    własnej
                                    <sup>2</sup>
                                .</p>
                            </div>

                            <div class="benefits__card">
                                <img src="<?php echo get_theme_file_uri('assets/eraty/images/raty.svg') ?>" />
                                <p class="paragraph">
                                    <strong>Okres kredytowania</strong> 
                                    nawet do 
                                    <strong>50 miesięcy</strong>
                                .</p>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="section-instruction">
                    <div class="instruction container">
                        <h3 class="heading-tertiary">Jak kupić na 
                          <span heading-tertiary--line-red>e-raty</span>
                        ?</h3>
                        <div class="instruction__steps-wrapper">

                            <div class="instruction__step">
                                <div class="instruction__step-number">
                                    <span>1</span>
                                </div>
                                <div class="instruction__step-description">
                                    <h4 class="heading-quaternary">Skompletuj koszyk i złóż wniosek</h4>
                                    <p class="paragraph">Dodaj towary i/lub usługi do koszyka i jako formę płatności wybierz eRATY Santander Consumer Banku (Bank).</p>
                                    <p class="paragraph">W e-Wniosku o kredyt na zakup towarów i usług (e-Wniosek) dostosuj do swoich potrzeb <strong>okres kredytowania i wysokość raty</strong>, uzupełnij wymagane przez Bank dane, a następnie <strong>złóż e-Wniosek</strong> i oczekuj na decyzję kredytową Banku.</p>
                                </div>
                            </div>

                            <div class="instruction__step">
                                <div class="instruction__step-number">
                                    <span>2</span>
                                </div>
                                <div class="instruction__step-description">
                                    <h4 class="heading-quaternary">Zapoznaj się i potwierdź warunki Umowy o kredyt</h4>
                                    <p class="paragraph">Po otrzymaniu pozytywynej decyzji kredytowej, Bank udostępni Ci 
                                      <strong>dokumentację kredytową w wersji elektronicznej</strong> 
                                      (pliki PDF). Zapoznaj się z nią i zaakceptuj na stronie e-Wniosku.
                                    </p>
                                </div>
                            </div>

                            <div class="instruction__step">
                                <div class="instruction__step-number">
                                    <span>3</span>
                                </div>
                                <div class="instruction__step-description">
                                    <h4 class="heading-quaternary">Potwierdź swoją tożsamość</h4>
                                    <p class="paragraph">Potwierdź swoją tożsamości w jeden z dostępnych sposobów:</p>
                                    <ul>
                                        <li>kodem SMS lub</li>
                                        <li>przelewem (zwrotnym) 1 zł.</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="instruction__step">
                                <div class="instruction__step-number">
                                    <span>4</span>
                                </div>
                                <div class="instruction__step-description">
                                    <h4 class="heading-quaternary">Dostawa towaru</h4>
                                    <p class="paragraph">
                                        <strong>Po pozytywnej weryfikacji Twoich danych, Bank informuje e-sklep o możliwości wydania zamówionego towaru i/lub realizacji usług.</strong>
                                    </p>

                                    <p class="paragraph">Sprzedawca skontaktuje się z Tobą w celu potwierdzenia warunków dostawy zakupionego towaru i dokonania ewentualnej wpłaty własnej, jeśli taka została przez Ciebie zadeklarowana.</p>

                                    <p class="paragraph">
                                        <span class="paragraph--red">Pamiętaj!</span> 
                                        Warunki dostawy towaru i/lub wykonania usług opisuje Regulamin e-sklepów.
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </section>

                <section class="section-contact">
                    <div class="contact container">
                        <img src="<?php echo get_theme_file_uri('assets/eraty/images/dymek.svg') ?>" />
                        <ul class="contact__list">
                            <li>
                                <strong>Jeśli po podaniu swoich danych kontaktowych e-Wniosek zostanie przerwany</strong> 
                                istnieje możliwość, że skontaktuje się z Tobą konsultant, który pomoże Ci dokończyć wypełnienie e-Wniosku.
                            </li>
                            <li>
                                <strong>Masz pytania?</strong></br>
                                Zadzwoń na 
                                <strong>infolinię Banku</strong></br>
                                pod nr tel.: 
                                <a class="contact__phone-number" href="#">71 773 28 47</a></br>
                                (koszt połączenia wg taryfy operatora)</br>
                                Konsultanci dostępni są:</br>
                                <strong>poniedziałek - piątek</strong> 
                                w godzinach 
                                <strong>8.00 - 21.00</strong></br>
                                <strong>sobota - niedziela</strong> 
                                w godzinach 
                                <strong>9.00 - 21.00</strong></br>
                            </li>
                        </ul>
                    </div>
                </section>

                <section class="section-informations">
                    <div class="informations container">
                        <span class="informations__text">Dla kredytu na zakup towarów i usług, oferowanego przez Santander Consumer Bank S.A. z siedzibą we Wrocławiu, wskazana wartość Rzeczywistej Rocznej Stopy Oprocentowania (RRSO) 11,72% wyliczona została na podstawie przykładu reprezentatywnego na dzień 21.08.2023 r.</span>

                        <span class="informations__text">
                            <sup>1</sup>
                            Czas liczony od momentu uzyskania i potwierdzenia wymaganych danych: o tożsamości, wysokości i źródle dochodów wnioskodawcy, niezbędnych do wydania decyzji kredytowej.
                        </span>

                        <span class="informations__text">
                            <sup>2</sup>
                            Dokonanie wpłaty własnej następuje na zasadach uzgodnionych z e-sklepem – o szczegóły pytaj w e-sklepie.
                        </span>
                    </div>
                </section>

                <footer class="section-footer">
                    <div class="footer container">
                        <hr />
                        <a class="footer__link" href="#">Pliki cookies</a>
                        <a class="footer__link" href="#">Polityka prywatności</a>
                    </div>
                </footer>
            </main>
        </div>
    </div>

    <?php get_footer(); ?>
</body>

</html>
