<?php get_header() ?>

<?php  if (have_posts()) :?>
    
        <?php while (have_posts()) : the_post();?>
           
        <div class="card" style="width: 18rem;">
       
        <div class="card-body">
            <?php the_post_thumbnail() ?>
            <img src="" alt="">
            <h5 class="titre"><?php  the_title();?></h5>

            <p class="auteur"><?php the_author();?></p>
           
            <p class="contenu"><?php the_content();?></p>
            


            <a href="<?php the_permalink() ?>" class="btn btn-primary">Lire plus</a>
        </div>
        </div>

        <?php endwhile ?>
    
<?php else: ?>
    <p>Sorry, no posts matched your criteria.</p>

<?php endif; ?>


<?php get_footer() ?>