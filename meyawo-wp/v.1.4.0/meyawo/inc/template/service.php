<!-- service section -->
<section class="section" id="service">
    <div class="container text-center">
        <p class="section-subtitle">What I Do ?</p>
        <h6 class="section-title mb-6">Service</h6>
        <!-- row -->
        <div class="row">
            <?php
$service_query = new WP_Query(array(
    'post_type' => 'service',
));
if ($service_query->have_posts()) {
    while ($service_query->have_posts()) {
        $service_query->the_post();
        ?>
                <div class="col-md-6 col-lg-3">
                <div class="service-card">
                <a href="<?php the_permalink();?>">
                <div class="body">
                    <?php
if (has_post_thumbnail()) {
            the_post_thumbnail('icon', array(
                'class' => 'icon',
            ));
        } else {
            ?>
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/no-image.jpg" class="icon" height="55" width="55"/>

                <?php
}
        ?>
                        <h6 class="title"><?php the_title();?></h6>
                        <p class="subtitle"><?php echo strip_tags(get_the_excerpt()); ?></p>
                    </div>
                    </a>
                </div>
            </div>
                    <?php
}
} else {
    echo '<p>Empty Portfolio</p>';
}
wp_reset_postdata();
?>
        </div><!-- end of row -->
    </div>
</section><!-- end of service section -->