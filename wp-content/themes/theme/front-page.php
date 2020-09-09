<!-- Headear-->
<?php get_header();?>

<!--Banner -->
<?php $banner = get_field('banner');?>
		
			<section id="banner">
				<div class="inner">
					<header>
						<h1><?php echo $banner['title'];?></h1>
						<p><?php echo $banner['subtitle'];?></p>
					</header>
					<a href="<?php echo $banner['button_link'];?>" class="button big scrolly"><?php echo $banner['button_text'];?></a>
				</div>
			</section>
            
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

<?php $section3 = get_field('section3');?>

    <section class="wrapper style1">
        <div class="inner">
            <header class="align-center">
                <h2><?php echo $section3['title'];?></h2>
                <p><?php echo $section3['subtitle']?></p>
            </header>
            <div class="flex flex-3">
                <div class="col align-center">
                    <div class="image round fit">
                        <img src="<?php echo $section3['area1']['image'];?>" alt="" />
                    </div>
                    <p><?php echo $section3['area1']['subtitle'];?> </p>
                    <a href="<?php echo $section3['area1']['button_link'];?>" class="button"><?php echo $section3['area1']['button_text'];?></a>
                </div>
                <div class="col align-center">
                    <div class="image round fit">
                        <img src="<?php echo $section3['area2']['image'];?>" alt="" />
                    </div>
                    <p><?php echo $section3['area2']['subtitle'];?></p>
                    <a href="<?php echo $section3['area2']['button_link'];?>" class="button"><?php echo $section3['area2']['button_text'];?></a>
                </div>
                <div class="col align-center">
                    <div class="image round fit">
                        <img src="<?php echo $section3['area3']['image'];?>" alt="" />
                    </div>
                    <p><?php echo $section3['area3']['subtitle'];?></p>
                    <a href="<?php echo $section3['area3']['button_link'];?>" class="button"><?php echo $section3['area3']['button_text'];?></a>
                </div>
            </div>
        </div>
    </section>

</div>
<!-- Footer -->
<?php get_footer();?>