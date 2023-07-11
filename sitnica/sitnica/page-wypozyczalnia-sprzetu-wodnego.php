<?php
get_header();
?>

<!-- PAGE -->
<div class="section section--page w">
    <h1 class="pageHeader pageHeader--offer">
        Wypożyczalnia sprzętu wodnego
    </h1>

    <div class="flex flex--images">
        <img class="img img--flex" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/wypozyczalnia1.png"; ?>" alt="wypozyczalnia" />
        <img class="img img--flex" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/wypozyczalnia2.png"; ?>" alt="wypozyczalnia" />
    </div>

    <h2 class="water__header">
        Cennik wypożyczenia sprzędu wodnego:
    </h2>

    <p class="water__text">
        Rower wodny - 45 zł/h
    </p>
    <p class="water__text">
        Kajak - 25 zł/h
    </p>

    <a class="btn--submit center btn--water"
       href="tel:+48123123123">
        <img class="icon" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/telefon.svg"; ?>" alt="telefon" />
        <span class="desktop">Więcej informacji pod nr tel.</span> <span>123 123 123</span>
    </a>
</div>

<?php
get_footer();
?>
