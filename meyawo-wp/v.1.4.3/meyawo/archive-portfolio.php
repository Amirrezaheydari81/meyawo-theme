<?php get_header(); ?>
<!-- portfolio section -->
 <section class="section" id="portfolio">
        <div class="container text-center">
        <h1 class="section-title mb-6"><?php echo get_the_archive_title()?></h1>
            <!-- row -->
            <div class="row">
<?php
$portfolio_query = new WP_Query(array(
    'post_type' => 'portfolio',
));
if ($portfolio_query->have_posts()) {
    while ($portfolio_query->have_posts()) {
        $portfolio_query->the_post();?>
                <div class="col-md-4 mt-3">
                    <a href="<?php the_permalink();?>" class="portfolio-card">
                    <!-- class="portfolio-card-img" -->
                    <!-- 349*349 -->
                        <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail('portfolio', array(
                                'class' => 'portfolio-card-img rounded',
                            ));
                        } else {
                            ?>
                        <img src="<?php echo get_template_directory_uri();?>/assets/imgs/no-image.jpg" class="portfolio-card-img rounded"/>
                        <?php
                        }
                        ?>
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4><?php the_title();?></h4>
                                <!-- <p class="font-weight-normal">show taxonimy name</p> -->
                            </span>
                        </span>
                    </a>
                </div>
        <?php
}} else {
    echo '<p>Empty Portfolio</p>';
}
wp_reset_postdata();
?>

            </div><!-- end of row -->
        </div><!-- end of container -->
        <div class="container text-center" id="paginate-archive">
            <?php echo paginate_links(); ?>
        </div>
    </section> <!-- end of portfolio section -->

    <?php get_footer(); ?>