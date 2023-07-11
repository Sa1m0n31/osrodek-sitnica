<?php
get_header();
?>

<!-- ENLARGE PRICING -->
<div class="gallery gallery--pricing">
    <button class="btn--gallery btn--galleryClose" onclick="closeGallery()">
        &times;
    </button>

    <figure class="gallery__image">
        <img class="img" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/domek-prostokat.png"; ?>" alt="zdjecie" />
    </figure>
</div>

<!-- PAGE -->
<div class="section section--page w">
    <h1 class="pageHeader">
        Cenniki obowiązujące na sezon 2023 w Ośrodku wypoczynkowym w Sitnicy
    </h1>

    <span class="pricing__disclaimer">
      (kliknij w grafikę, aby powiększyć)
    </span>
    <button class="pricing" onclick="openGallery(0)">
        <img class="img galleryImage" src="<?php echo get_bloginfo("stylesheet_directory") . "/img/cennik.png"; ?>" alt="cennik" />
    </button>
</div>

<?php
get_footer();
?>
