<!-- Headear-->
<?php get_header();
    echo '<!--Archive.php -->'
?>


<!-- Main -->
<div id="main">
    <?php if(have_posts()): 
        while(have_posts()) :the_post();?>
            <h3><?php the_title();?></h3>
            <?php 
                $content = get_the_content();
                $resumo = substr($content, 0, 450).'[...]';
                echo $resumo;
            ?>
            <a href="<?php the_permalink(); ?>" class="button">Saiba mais</a>

            <br>
    <?php endwhile; 
        
    else: 
        echo '<p>Content not found</p>';

    endif;
    ?>

</div>
<!-- Footer -->
<?php get_footer();?>