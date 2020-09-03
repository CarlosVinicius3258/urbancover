<!-- Headear-->
<?php get_header();?>
<!-- Main -->
<div id="main">

<!-- Section -->
<?php $section1 = get_field('section1');?>

    <section class="wrapper style1">
        <div class="inner">
            <!-- 2 Columns -->
                <div class="flex flex-2">
                    <div class="col col1">
                        <div class="image round fit">
                            <a href="<?php echo $section1['image_link'];?>" class="link"><img src="<?php echo $section1['image'];?>" alt="" /></a>
                        </div>
                    </div>
                    <div class="col col2">
                        <h3><?php echo $section1['title'];?></h3>
                        <p><?php echo $section1['text'];?></p>
                        <a href="<?php echo $section1['button_link'];?>" class="button"><?php echo $section1['button_text'];?></a>
                    </div>
                </div>
        </div>
    </section>

<!-- Section -->
<?php $section2 = get_field('section2');?>
    <section class="wrapper style2">
        <div class="inner">
            <div class="flex flex-2">
                <div class="col col2">
                    <h3><?php echo $section2['title'];?></h3>
                    <p><?php echo $section2['text'];?></p>
                    <a href="<?php echo $section2['button_link'];?>" class="button"><?php echo $section2['button_text'];?></a>
                </div>
                <div class="col col1 first">
                    <div class="image round fit">
                        <a href="<?php echo $section2['image_link'];?>" class="link"><img src="<?php echo $section2['image'];?>" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- Section -->
    <section class="wrapper style1">
        <div class="inner">
            <header class="align-center">
                <h2>Aliquam ipsum purus dolor</h2>
                <p>Cras sagittis turpis sit amet est tempus, sit amet consectetur purus tincidunt.</p>
            </header>
            <div class="flex flex-3">
                <div class="col align-center">
                    <div class="image round fit">
                        <img src="<?php bloginfo('template_directory');?>/images/pic03.jpg" alt="" />
                    </div>
                    <p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
                    <a href="#" class="button">Learn More</a>
                </div>
                <div class="col align-center">
                    <div class="image round fit">
                        <img src="<?php bloginfo('template_directory');?>/images/pic05.jpg" alt="" />
                    </div>
                    <p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
                    <a href="#" class="button">Learn More</a>
                </div>
                <div class="col align-center">
                    <div class="image round fit">
                        <img src="<?php bloginfo('template_directory');?>/images/pic04.jpg" alt="" />
                    </div>
                    <p>Sed congue elit malesuada nibh, a varius odio vehicula aliquet. Aliquam consequat, nunc quis sollicitudin aliquet. </p>
                    <a href="#" class="button">Learn More</a>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- Footer -->
<?php get_footer();?>