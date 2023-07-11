<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sitnica
 */

?>

<footer class="footer">
    <div class="footer__inner w flex">
        <div class="footer__col">
            <a class="footer__logo" href="<?php echo home_url(); ?>">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo-biale.svg"; ?>" alt="logo" />
            </a>
            <p class="footer__text">
                Nasz ośrodek wypoczynkowy oferuje komfortowe domki letniskowe, basen odkryty,
                plac zabaw dla dzieci, boisko sportowe oraz organizację letnich imprez i koncertów.
            </p>
            <div class="footer__socialMedia flex flex--start">
                Obserwuj nas na:
                <a class="footer__socialMedia__link"
                   href="https://www.facebook.com/SitnicaOsrodek">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/facebook.svg"; ?>" alt="facebook" />
                </a>
                <a class="footer__socialMedia__link"
                   href="https://www.instagram.com/sitnicaosrodek/?hl=pl">
                    <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/instagram.svg"; ?>" alt="instagram" />
                </a>
            </div>
        </div>

        <div class="footer__col">
            <h5 class="footer__header">
                Oferta ośrodka
            </h5>
            <a class="footer__link" href="<?php echo get_page_link(get_page_by_title('Domki')->ID); ?>">
                Wynajem domków letniskowych
            </a>
            <a class="footer__link" href="<?php echo get_page_link(get_page_by_title('Wypożyczalnia')->ID); ?>">
                Wypożyczalnia sprzętu wodnego
            </a>
            <a class="footer__link" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
                Imprezy okolicznościowe
            </a>
            <a class="footer__link" href="<?php echo get_page_link(get_page_by_title('Atrakcje')->ID); ?>">
                Atrakcje
            </a>
        </div>

        <div class="footer__col">
            <h5 class="footer__header">
                Mapa strony
            </h5>
            <a class="footer__link" href="<?php echo home_url(); ?>">
                Strona główna
            </a>
            <a class="footer__link" href="<?php echo get_page_link(get_page_by_title('Atrakcje')->ID); ?>">
                Atrakcje
            </a>
            <a class="footer__link" href="<?php echo get_page_link(get_page_by_title('Cennik')->ID); ?>">
                Cennik
            </a>
            <a class="footer__link" href="<?php echo get_page_link(get_page_by_title('Domki')->ID); ?>">
                Domki do wynajęcia
            </a>
        </div>

        <div class="footer__col">
            <h5 class="footer__header">
                Dane kontaktowe
            </h5>
            <p class="footer__text footer__text--noMarginTop">
                    <span class="bold">
                        Ośrodek wypoczynkowy w Sitnicy
                    </span>
                <span>
                        Sitnica 30, 87-515 Rogowo
                    </span>
                <span class="m-10">
                        tel. 508 508 178
                    </span>
                <span>
                        mail: kontakt@sitnica.pl
                    </span>

                <span class="bold m-10">
                        PKO Bank Polski
                    </span>
                <span>
                        29 1111 0000 4444 9866 1233 1111
                    </span>
            </p>
        </div>
    </div>

    <div class="footer__bottom">
        <div class="footer__bottom__inner flex w">
                <span>
                    &copy; Ośrodek Wypoczynkowy Sitnica
                </span>
            <span>
                    Wykonanie:
                    <a href="https://skylo.pl"
                       rel="noreferrer"
                       target="_blank">
                        Skylo.pl - Software House
                    </a>
                </span>
        </div>
    </div>
</footer>
</div>

<?php wp_footer(); ?>

</body>
</html>
