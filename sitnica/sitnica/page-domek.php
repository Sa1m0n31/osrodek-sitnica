<?php
get_header();
?>

<!-- GALLERY -->
<div class="gallery">
    <button class="btn--gallery btn--galleryClose" onclick="closeGallery()">
        &times;
    </button>

    <button class="btn--gallery" onclick="galleryPrev()">
        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/prev.svg"; ?>" alt="poprzedni" />
    </button>

    <figure class="gallery__image">
        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/domek-prostokat.png"; ?>" alt="zdjecie" />
    </figure>

    <button class="btn--gallery btn--gallery--next" onclick="galleryNext()">
        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/prev.svg"; ?>" alt="poprzedni" />
    </button>
</div>

<!-- PAGE -->
<div class="section section--page w">
    <h1 class="pageHeader">
        Domek letniskowy kategoria 1
    </h1>
    <div class="singleRoom__subheader flex">
        <h2 class="singleRoom__subheader__text">
            Domek trzyosobowy &middot; Dwa łóżka &middot; Klimatyzacja
        </h2>
        <a href="tel:+48123123123" class="singleRoom__subheader__btn center">
            <img class="icon" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/telefon.svg"; ?>" alt="telefon" />
            <span class="desktop">REZERWACJA POD NR TEL.</span> <span>123 123 123</span>
        </a>
    </div>

    <div class="singleRoom__gallery flex">
        <div class="singleRoom__gallery__big">
            <button class="singleRoom__gallery__item" onclick="openGallery(0)">
                <img class="img galleryImage" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/domek-prostokat.png"; ?>" alt="domek" />
            </button>
        </div>
        <div class="singleRoom__gallery__small">
            <button class="singleRoom__gallery__item" onclick="openGallery(1)">
                <img class="img galleryImage" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/domek-kwadrat-1.png"; ?>" alt="domek" />
            </button>
            <button class="singleRoom__gallery__item" onclick="openGallery(2)">
                <img class="img galleryImage" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/domek-kwadrat-2.png"; ?>" alt="domek" />
            </button>
            <button class="singleRoom__gallery__item" onclick="openGallery(3)">
                <img class="img galleryImage" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/domek-kwadrat-1.png"; ?>" alt="domek" />
            </button>
            <button class="singleRoom__gallery__item" onclick="openGallery(4)">
                <img class="img galleryImage" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/domek-kwadrat-2.png"; ?>" alt="domek" />
            </button>
        </div>
    </div>

    <div class="singleRoom__details flex">
        <div class="singleRoom__details__description">
            <h3 class="singleRoom__details__description__header">
                Opis domku
            </h3>
            <div class="singleRoom__details__description__text">
                Nasz domek letniskowy to doskonałe rozwiązanie dla osób, które chcą spędzić wakacje w przytulnym i komfortowym miejscu. Domek mieści się wśród pięknych krajobrazów i zapewnia ciszę oraz spokój, a jednocześnie jest w pełni wyposażony i zapewnia wysoki standard pobytu.
                Wnętrze domku składa się z dwóch sypialni, w pełni wyposażonej kuchni z jadalnią oraz łazienki z prysznicem. Do dyspozycji gości pozostaje także taras z meblami ogrodowymi i grill, co pozwala na relaks na świeżym powietrzu i spożywanie posiłków w otoczeniu natury.
            </div>
            <a href="tel:+48123123123" class="singleRoom__details__description__btn center">
                Kontakt w sprawie rezerwacji
            </a>
        </div>

        <div class="singleRoom__details__calendar">
            <h4 class="singleRoom__details__description__header">
                Kalendarz
            </h4>
            <div class="calendar">

            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
