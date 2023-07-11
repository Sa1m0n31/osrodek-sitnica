<?php
get_header();
?>

<div class="section section--page w">
    <h1 class="pageHeader pageHeader--offer">
        Oferta Ośrodka Wypoczynkowego w Sitnicy
    </h1>

    <div class="singleRoom__subheader flex">
        <h2 class="singleRoom__subheader__text">
            Oferujemy różnorodne atrakcje i usługi, które spełnią oczekiwania każdego gościa.
            Zapewniamy niezapomniane imprezy okolicznościowe, wieczory panieńskie i kawalerskie,
            dedykowaną ofertę dla szkół oraz rozwiązania dla firm. Nasza kompleksowa oferta pozwoli
            stworzyć wyjątkowe wydarzenia, dostosowane do indywidualnych preferencji i potrzeb. Zapraszamy
            do skorzystania z naszych usług i cieszenia się niezapomnianymi chwilami w naszym ośrodku.
        </h2>
        <a href="tel:+48123123123" class="singleRoom__subheader__btn center">
            <img class="icon" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/telefon.svg"; ?>" alt="telefon" />
            <span class="desktop">REZERWACJA POD NR TEL.</span> <span>123 123 123</span>
        </a>
    </div>

    <figure class="poster">
        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/plakat-1.png"; ?>" alt="plakat" />
    </figure>
    <figure class="poster">
        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/plakat-2.png"; ?>" alt="plakat" />
    </figure>
    <figure class="poster">
        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/plakat-3.png"; ?>" alt="plakat" />
    </figure>
    <figure class="poster">
        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/plakat-4.png"; ?>" alt="plakat" />
    </figure>

    <div class="form">
        <h4 class="form__header">
            <span>Chcesz wiedzieć więcej?</span>
            <span>Skorzystaj z formularza kontaktowego</span>
        </h4>
        <h5 class="form__subheader">
            Zostaw do siebie kontakt, a my odezwiemy się do Ciebie maksymalnie w ciągu 24h.
            Z chęcią odpowiemy na Twoje pytania i rozjaśnimy wszystkie kwestie.
        </h5>


        <?php
            echo do_shortcode('[contact-form-7 id="20" title="Nienazwane"]');
        ?>
    </div>
</div>

<?php
get_footer();
?>
