 <!-- portfolio section -->
 <section class="section" id="portfolio">
        <div class="container text-center">
            <p class="section-subtitle">What I Did ?</p>
            <h6 class="section-title mb-6">Portfolio</h6>
            <!-- row -->
            <div class="row">
<?php
$portfolio_query = new WP_Query(array(
    'post_type' => 'portfolio',
));
if ($portfolio_query->have_posts()) {
    while ($portfolio_query->have_posts()) {
        $portfolio_query->the_post();?>
                <div class="col-md-4">
                    <a href="<?php the_permalink();?>" class="portfolio-card">
                    <!-- class="portfolio-card-img" -->
                    <!-- 349*349 -->
                        <?php
                        if(has_post_thumbnail()){
                            the_post_thumbnail('portfolio', array(
                                'class' => 'portfolio-card-img',
                            ));
                        } else {
                            ?>
                        <img src="<?php echo get_template_directory_uri();?>/assets/imgs/no-image.jpg" class="portfolio-card-img"/>
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
    </section> <!-- end of portfolio section -->