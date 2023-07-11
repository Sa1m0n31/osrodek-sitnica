<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package sitnica
 */

get_header('home');
?>
        <div class="section w">
            <div class="center flex--column section__headerWrapper">
            <span class="section__header--before">
                Ośrodek wypoczynkowy Sitnica
            </span>
                <h3 class="section__header">
                    Niezapomiane wakacje i wydarzenia.<br/>
                    Co znajdziesz w naszym ośrodku?
                </h3>
                <p class="section__text">
                    Cieszymy się, że odwiedzasz naszą stronę! Jesteśmy ośrodkiem wypoczynkowym
                    i organizatorem imprez, którzy z pasją tworzą wyjątkowe wakacje dla naszych
                    klientów. Oferujemy niezapomniane wrażenia z imprez oraz wypoczynek w pięknych
                    okolicznościach przyrody. W naszej ofercie znajdziesz również domki do wynajęcia,
                    które zapewnią Ci komfortowe i przytulne miejsce na wypoczynek.
                </p>
            </div>

            <div class="offer">
                <a class="offer__item" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/oferta-1.png"; ?>" alt="oferta" />
                    <h4 class="offer__item__header center">
                        Imprezy i koncerty
                    </h4>

                    <span class="offer__item__overlay center flex--column">
                    <span class="offer__item__overlay__header">
                        Imprezy i koncerty
                    </span>
                    <span class="offer__item__overlay__text">
                        Doświadcz niezapomnianych chwil przy naszych imprezach i koncertach - pełne energii,
                        wspaniałe występy artystów oraz niepowtarzalna atmosfera.
                    </span>
                    <span class="offer__item__overlay__button center">
                        Więcej informacji
                    </span>
                </span>
                </a>

                <a class="offer__item" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/oferta-2.png"; ?>" alt="oferta" />
                    <h4 class="offer__item__header center">
                        Sala konferencyjna
                    </h4>

                    <span class="offer__item__overlay center flex--column">
                    <span class="offer__item__overlay__header">
                        Sala konferencyjna
                    </span>
                    <span class="offer__item__overlay__text">
                        Oferujemy wynajem nowoczesnej i w pełni wyposażonej sali
                        konferencyjnej. Sala wyposażona jest w najnowsze urządzenia
                        multimedialne, klimatyzację oraz bezprzewodowe łącze internetowe.
                    </span>
                    <span class="offer__item__overlay__button center">
                        Więcej informacji
                    </span>
                </span>
                </a>

                <a class="offer__item" href="<?php echo get_page_link(get_page_by_title('Domki')->ID); ?>">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/oferta-3.png"; ?>" alt="oferta" />
                    <h4 class="offer__item__header center">
                        Wynajem domków letniskowych
                    </h4>

                    <span class="offer__item__overlay center flex--column">
                    <span class="offer__item__overlay__header">
                        Wynajem domków letniskowych
                    </span>
                    <span class="offer__item__overlay__text">
                        Odkryj idealne miejsce na relaks w naszych komfortowych domkach letniskowych,
                        otoczonych piękną przyrodą - Twoje miejsce odpoczynku na wymarzony urlop.
                    </span>
                    <span class="offer__item__overlay__button center">
                        Więcej informacji
                    </span>
                </span>
                </a>

                <a class="offer__item" href="<?php echo get_page_link(get_page_by_title('Wypożyczalnia')->ID); ?>">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/oferta-4.png"; ?>" alt="oferta" />
                    <h4 class="offer__item__header center">
                        Strzeżone kąpielisko
                    </h4>

                    <span class="offer__item__overlay center flex--column">
                    <span class="offer__item__overlay__header">
                        Strzeżone kąpielisko
                    </span>
                    <span class="offer__item__overlay__text">
                        Zapewnimy Ci spokój i bezpieczeństwo podczas kąpieli na naszym strzeżonym kąpielisku -
                        czysta woda, profesjonalna obsługa i przyjemne warunki dla całej rodziny.
                    </span>
                    <span class="offer__item__overlay__button center">
                        Więcej informacji
                    </span>
                </span>
                </a>

                <a class="offer__item" href="<?php echo get_page_link(get_page_by_title('Wypożyczalnia')->ID); ?>">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/oferta-5.png"; ?>" alt="oferta" />
                    <h4 class="offer__item__header center">
                        Wypożyczalnia sprzętu wodnego
                    </h4>

                    <span class="offer__item__overlay center flex--column">
                    <span class="offer__item__overlay__header">
                        Wypożyczalnia sprzętu wodnego
                    </span>
                    <span class="offer__item__overlay__text">
                        Przygotuj się na niesamowite przygody na wodzie - wynajmij sprzęt wodny z naszej wypożyczalni
                        i ciesz się aktywnością na jeziorze.
                    </span>
                    <span class="offer__item__overlay__button center">
                        Więcej informacji
                    </span>
                </span>
                </a>

                <a class="offer__item" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/oferta-6.png"; ?>" alt="oferta" />
                    <h4 class="offer__item__header center">
                        Strefa gastro
                    </h4>

                    <span class="offer__item__overlay center flex--column">
                    <span class="offer__item__overlay__header">
                        Strefa gastro
                    </span>
                    <span class="offer__item__overlay__text">
                        Przeżyj kulinarne doznania w naszej strefie gastro - szeroki wybór smakowitych dań, przyjazna
                        atmosfera i doskonałe miejsce na spotkania ze znajomymi przy dobrej kawie lub aromatycznym drinku.
                    </span>
                    <span class="offer__item__overlay__button center">
                        Więcej informacji
                    </span>
                </span>
                </a>
            </div>
        </div>

        <div class="section w">
            <div class="center flex--column section__headerWrapper">
            <span class="section__header--before">
                Ośrodek wypoczynkowy Sitnica
            </span>
                <h3 class="section__header">
                    Łatwo znajdziesz<br/>
                    wszystkie nasze atrakcje
                </h3>
                <p class="section__text">
                    Skorzystaj z interaktywnej mapy naszego ośrodka, aby namierzyć wszystkie atrakcje,
                    które są u nas dostępne - teraz bez problemu do nich trafisz.
                </p>
            </div>

            <figure class="interactiveMap">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/mapa-osrodka.png"; ?>" alt="mapa" />
            </figure>
        </div>

        <div class="section w">
            <div class="center flex--column section__headerWrapper">
            <span class="section__header--before">
                Gdzie się znajdujemy
            </span>
                <h3 class="section__header">
                    Jak do nas trafić?
                </h3>
                <p class="section__text section__text--address">
                    Ośrodek Wypoczynkowy Sitnica<br/>
                    Sitnica 30, 87-415 Rogowo<br/>
                    Telefon: 508 508 178
                </p>
            </div>

            <figure id="map" class="interactiveMap">
                <?php echo do_shortcode('[wpgmza id="1"]'); ?>
            </figure>
        </div>

<?php
get_footer();
