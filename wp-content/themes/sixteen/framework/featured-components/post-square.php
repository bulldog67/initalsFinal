<?php if ( get_theme_mod('sixteen_square_enable') && is_front_page() ) : ?>
    <div id="square">
        <div class="container-fluid square">
        <?php if(get_theme_mod('sixteen_square_title')): ?>
            <h2 id="page-title"><?php echo esc_html( get_theme_mod('sixteen_square_title',__('Trending','sixteen')) ) ?></h2>
        <?php endif; ?>

            <div class="grid">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'cat'  => esc_html( get_theme_mod('sixteen_square_cat',0) ),
                        'ignore_sticky_posts' => 1,
                    );
                    $loop = new WP_Query( $args );
                    while ( $loop->have_posts() ) :

                        $loop->the_post();

                        if ( has_post_thumbnail() ) :
                            $image_data = wp_get_attachment_image_src( get_post_thumbnail_id( $loop->post->ID), 'sixteen-pop-thumb',array(  'alt' => trim(strip_tags( $post->post_title ))) );
                            $image_url = $image_data[0];
                        else:

                            $image_url = get_template_directory_uri()."/assets/images/dthumb.jpg";
                        endif;

                        ?>

                            <figure class="effect-honey">
                                <a href="<?php echo get_permalink( $loop->post->ID ) ?>" title="<?php echo esc_attr($loop->post->post_title ? $loop->post->post_title : $loop->post->ID); ?>">
                                    <img src="<?php echo $image_url; ?>">
                                    <figcaption>
                                        <h3><?php the_title(); ?></h3>
                                    </figcaption>
                                </a>
                            </figure>
<!--                            <div class="excerpt">-->
<!--                                --><?php //echo substr(get_the_excerpt(), 0, 100).(get_the_excerpt() ?  "..." : ""); ?>
<!--                            </div>-->
                    <?php endwhile; ?>
                    <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
<?php endif; ?>