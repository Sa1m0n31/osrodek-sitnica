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
            <?php
                echo get_field('wyposazenie');
            ?>
        </h2>
        <a href="tel:+48123123123" class="singleRoom__subheader__btn center">
            <img class="icon" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/telefon.svg"; ?>" alt="telefon" />
            <span class="desktop">REZERWACJA POD NR TEL.</span> <span>123 123 123</span>
        </a>
    </div>

    <div class="singleRoom__gallery flex">
        <div class="singleRoom__gallery__big">
            <button class="singleRoom__gallery__item" onclick="openGallery(0)">
                <img class="img galleryImage" src="<?php echo get_field('zdjecie_glowne'); ?>" alt="domek" />
            </button>
        </div>
        <div class="singleRoom__gallery__small">
            <button class="singleRoom__gallery__item" onclick="openGallery(1)">
                <img class="img galleryImage" src="<?php echo get_field('zdjecie_1'); ?>" alt="domek" />
            </button>
            <button class="singleRoom__gallery__item" onclick="openGallery(2)">
                <img class="img galleryImage" src="<?php echo get_field('zdjecie_2'); ?>" alt="domek" />
            </button>
            <button class="singleRoom__gallery__item" onclick="openGallery(3)">
                <img class="img galleryImage" src="<?php echo get_field('zdjecie_3'); ?>" alt="domek" />
            </button>
            <button class="singleRoom__gallery__item" onclick="openGallery(4)">
                <img class="img galleryImage" src="<?php echo get_field('zdjecie_4'); ?>" alt="domek" />
            </button>
        </div>
    </div>

    <div class="singleRoom__details flex">
        <div class="singleRoom__details__description">
            <h3 class="singleRoom__details__description__header">
                Opis domku
            </h3>
            <div class="singleRoom__details__description__text">
                <?php
                    echo get_field('opis');
                ?>
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
                <?php
                    echo the_content();
                ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();
?>
