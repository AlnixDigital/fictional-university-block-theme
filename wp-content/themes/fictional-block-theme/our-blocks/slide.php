<?php

if (isset($attributes['themeimage']) and $attributes['themeimage'] != '') {
    $attributes['imgURL'] = get_theme_file_uri('/images/' . $attributes['themeimage']);
}

if (!isset($attributes['imgURL'])) {
    $attributes['imgURL'] = get_theme_file_uri('/images/library-hero.jpg');
}
?>


<div class='hero-slider__slide' style="background-image: url('<?php echo $attributes['imgURL'] ?>')">
    <div class="hero-slider__interior container">
        <div class="hero-slider__overlay t-center"><?= $content ?></div>
    </div>
</div>