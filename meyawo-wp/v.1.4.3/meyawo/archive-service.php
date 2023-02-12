<?php
get_header(); ?>
<section class="section">
<div class="container text-center">

<h1 class="section-title mb-6"><?php echo get_the_archive_title()?></h1>
<!-- row -->
<div class="row gy-5">
    <?php
$service_query = new WP_Query(array(
'post_type' => 'service',
));
if ($service_query->have_posts()) {
while ($service_query->have_posts()) {
$service_query->the_post();
?>
        <div class="col-md-6 col-lg-3 my-2">
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
<div class="container text-center" id="paginate-archive">
            <?php echo paginate_links(); ?>
        </div>
</section>

<?php get_footer(); ?>