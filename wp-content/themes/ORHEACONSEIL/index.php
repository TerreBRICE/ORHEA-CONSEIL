<?php get_template_part('template-parts/header'); ?>

<?php

if (is_page('accueil')) {
    get_template_part('template-parts/accueil');
}

if (is_404()){
    get_template_part('template-parts/404');
}

?>
