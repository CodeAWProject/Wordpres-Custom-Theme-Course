<?php get_header();?>

<section class="page-wrap">
    <div class="container">

    <h1><?php the_title(); ?></h1>

    <?php if(has_post_thumbnail()):?>

        <img src="<?php the_post_thumbnail_url('blog-large'); ?>" alt="<?php the_title(); ?>" class="img-fluid mb-3 img-thumbnail">

    <?php endif;?>


    <div class="row">
        <div class="col-lg-6">

            <?php get_template_part('includes/section', 'cars');?>
            <?php wp_link_pages(); ?>

        </div>

        <div class="col-lg-6">

        <?php get_template_part('includes/form', 'enquiry'); ?>

            <ul>
                <li>
                    Color: <?php the_field('color'); ?>
                </li>

                <li>
                    Registration: <?php the_field('registration'); ?>
                </li>
                
            </ul>

            <h3>Features</h3>

            <ul>
                <?php if(have_rows('features')):?>
                    <?php while(have_rows('features')): the_row();
                    $feature1 = get_sub_field('feature1');
                    $feature2 = get_sub_field('feature2');
                    $feature3 = get_sub_field('feature3');

                    ?>   

                    <li><?php echo $feature1; ?></li>
                    <li><?php echo $feature2; ?></li>
                    <li><?php echo $feature3; ?></li>

                    <?php endwhile; ?>

                <?php endif; ?>
            </ul>

            <!-- <ul>
            <?php if(have_rows('gallery')):?>
                    <?php while(have_rows('gallery')): the_row();
                    $image1 = get_sub_field('image1');
                    $image2 = get_sub_field('image2');   
                    $image3 = get_sub_field('image3');       
                    ?>   

                    <img src="<?php echo $image1; ?>" class="img-fluid">
                    <img src="<?php echo $image2; ?>" class="img-fluid">
                    <img src="<?php echo $image3; ?>" class="img-fluid">

                    <?php endwhile; ?>

                <?php endif; ?>
            </ul> -->

        </div>
    </div>

        

        
    </div>

</section>

<?php get_footer();?>