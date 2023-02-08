<?php $tableName = 'pricing'; ?>
<!-- pricing section -->
<section class="section" id="pricing">
    <div class="container text-center">
        <p class="section-subtitle">How Much I Charge ?</p>
        <h6 class="section-title mb-6">My Pricing</h6>
        <!-- row -->

        <div class="pricing-wrapper">
            <?php
            $pricing_query = new WP_Query(
                array(
                    'post_type' => 'pricing',
                )
            );
            if ($pricing_query->have_posts()) {
                while ($pricing_query->have_posts()) {
                    $pricing_query->the_post();
                    ?>
                    <div class="pricing-card">
                        <div class="pricing-card-header">
                            <?php 
                            if(has_post_thumbnail()){
                                the_post_thumbnail(
                                    'pricing',
                                    array(
                                        'class' => 'pricing-card-icon',
                                    )
                                );
                            }else {
                                ?>
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/imgs/no-image.jpg" class="pricing-card-icon" height="55" width="55"/>
                                <?php
                            }
                            ?>
                        </div>
                        <div class="pricing-card-body">
                            <h6 class="pricing-card-title">
                                <?php the_title(); ?>
                            </h6>
                        </div>
                        <div class="pricing-card-footer">
                            <span>$</span>
                            <span><?php echo get_post_meta(get_the_ID(), $tableName . '_sevice', true); ?> / <?php echo get_post_meta(get_the_ID(), $tableName . 'duration_sevice', true); ?></span>
                        </div>
                        <a href="<?php echo get_post_meta( get_the_ID(), $tableName . 'link_button_sevice' , true ); ?>" class="btn btn-primary mt-3 pricing-card-btn"><?php echo get_post_meta( get_the_ID(), $tableName . 'name_purchase_button_sevice' , true ); ?></a>
                    </div>
                    <?php
                }
                
            }else{
                echo '<p>Empty pricing</p>';
            }
            wp_reset_postdata();
            ?>

        </div><!-- end of pricing wrapper -->
    </div> <!-- end of container -->
</section><!-- end of pricing section -->
