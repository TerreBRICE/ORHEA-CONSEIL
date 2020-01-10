
<?php
the_title();

if ( have_posts() ) : while ( have_posts() ) : the_post();
    the_content();?>
    <img src="http://localhost:8888/wordpress/wp-content/uploads/2020/01/for-frodo-ricardo-is-immortal-48294414.png" alt="">
    <?php
endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>

<?php endif;

?>

<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolores nam nostrum quae tenetur voluptatibus? Alias architecto, dicta dolorum ea inventore maiores nihil nostrum odit praesentium quas quia rerum sapiente suscipit.</p>

<p><?php

the_field('paragraphe_d_un_article');


?></p>
<img src="<?php the_field('image_article'); ?>" alt="">
