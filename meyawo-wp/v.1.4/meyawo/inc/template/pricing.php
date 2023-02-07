
    <!-- pricing section -->
    <section class="section" id="pricing">
        <div class="container text-center">
            <p class="section-subtitle">How Much I Charge ?</p>
            <h6 class="section-title mb-6">My Pricing</h6>
            <!-- row -->

            <div class="pricing-wrapper">
    <?php
$pricing_query = new WP_Query(array(
    'post_type' => 'pricing',
)
);
if ($pricing_query->have_posts()) {
    while ($pricing_query->have_posts()) {
        $pricing_query->the_post();
        ?>
            <div class="pricing-card">
                    <div class="pricing-card-header">
                    <?php the_post_thumbnail('pricing', array(
            'class' => 'pricing-card-icon',
        ));
        ?>
                    </div>
                    <div class="pricing-card-body">
                        <h6 class="pricing-card-title"><?php the_title();?></h6>
                        <div class="pricing-card-list">
                            <p>accusamus reprehenderit</p>
                            <p>provident dolorem </p>
                            <p>quos neque</p>
                            <p>fugiat quibusdam</p>
                            <p><i class="ti-close"></i></p>
                            <p><i class="ti-close"></i></p>
                        </div>
                    </div>
                    <div class="pricing-card-footer">
                        <span>$</span>
                        <span>0.00/Month</span>
                    </div>
                    <a href="#" class="btn btn-primary mt-3 pricing-card-btn">Subscribe</a>
                </div>
        <?php
}
}
?>

            </div><!-- end of pricing wrapper -->
        </div> <!-- end of container -->
    </section><!-- end of pricing section -->