<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sitnica
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div class="container">
    <!-- MENU -->
    <div class="menuDesktop">
        <div class="menuDesktop__inner flex flex--column">
            <div class="menuDesktop__inner__top">
                <div class="menuDesktop__header flex">
                    <span>
                        Menu
                    </span>

                    <button class="menuDesktop__closeBtn"
                            onclick="closeDesktopMenu()">
                        &times;
                    </button>
                </div>

                <a class="menuDesktop__item" href="<?php echo home_url(); ?>">
                    Strona główna
                </a>
                <a class="menuDesktop__item" href="<?php echo get_page_link(get_page_by_title('Domki')->ID); ?>">
                    Wynajem domków
                </a>
                <a class="menuDesktop__item" href="<?php echo get_page_link(get_page_by_title('Atrakcje')->ID); ?>">
                    Atrakcje ośrodka
                </a>
                <a class="menuDesktop__item" href="<?php echo get_page_link(get_page_by_title('Cennik')->ID); ?>">
                    Cennik usług
                </a>
                <a class="menuDesktop__item" href="<?php echo get_page_link(get_page_by_title('Oferta')->ID); ?>">
                    Oferta
                </a>
                <a class="menuDesktop__item" href="<?php echo get_page_link(get_page_by_title('Wypożyczalnia')->ID); ?>">
                    Wypożyczalnia sprzętu wodnego
                </a>
            </div>

            <div class="menuDesktop__inner__bottom">
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
        </div>
    </div>

    <!-- HERO -->
    <div class="hero hero--homepage">
        <img class="hero__background hero__background--desktop" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/sitnica-tlo.png"; ?>" alt="osrodek-sitnica" />
        <img class="hero__background hero__background--mobile" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/sitnica-tlo-mobile.png"; ?>" alt="osrodek-sitnica" />

        <div class="topBarMobile">
            <a class="topBarMobile__item" href="tel:+48123123123">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/telefon.svg"; ?>" alt="telefon" />
                <span class="topBarMobile__item__text">
                    Zadzwoń
                </span>
            </a>
            <div class="topBarMobile__item">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/zegar.svg"; ?>" alt="zegar" />
                <span class="topBarMobile__item__text">
                    Pon. - Czw. 9:00 - 17:00<br/>
                    Pt. - Ndz. 9:00 - 23:00
                </span>
            </div>
            <button class="topBarMobile__item" onclick="openDesktopMenu()">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/menu-biale.svg"; ?>" alt="menu" />
                <span class="topBarMobile__item__text">
                    Menu
                </span>
            </button>
        </div>

        <a class="topBarMobileLogo" href="<?php echo home_url(); ?>">
            <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo-biale.svg"; ?>" alt="logo" />
        </a>

        <div class="topBar w flex">
            <a class="topBar__phoneNumber flex"
               href="tel:+48697099402">
                <img class="icon" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/telefon.svg"; ?>" alt="telefon" />
                tel. 697 099 402
            </a>

            <span class="topBar__hours block flex">
                <img class="icon" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/zegar.svg"; ?>" alt="zegar" />
                Pon. - Czw. 9:00 - 17:00, Pt. - Ndz. 9:00 - 23:00
            </span>
        </div>

        <div class="topNav w flex">
            <a class="topNav__logo"
               href="<?php echo home_url(); ?>">
                <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/logo-biale.svg"; ?>" alt="logo" />
            </a>

            <button class="topNav__menu flex"
                    onclick="openDesktopMenu()">
                MENU
                <img class="topNav__menu__img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/menu-biale.svg"; ?>" alt="menu" />
            </button>
        </div>

        <div class="hero__content">
            <h1 class="hero__content__header">
                Imprezowy raj w otoczeniu przyrody
            </h1>
            <h2 class="hero__content__text">
                Ośrodek Wypoczynkowy w Sitnicy to idealne miejsce na wakacje, weekendy
                i wszelkiego rodzaju imprezy. Nasza malownicza lokalizacja w sercu pięknej
                przyrody oraz komfortowe pokoje sprawiają, że nasi goście czują się u nas
                jak w domu.
            </h2>

            <a class="hero__content__btn center"
               href="<?php echo get_page_link(get_page_by_title('Domki')->ID); ?>">
                Domki do wynajęcia
            </a>
        </div>
    </div>