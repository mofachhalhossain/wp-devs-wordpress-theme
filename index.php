<?php get_header(); ?>
        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main">
                    <section class="hero">
                        Hero
                    </section>
                    <section class="services">
                        Services
                    </section>
                    <section class="home-blog">
                    <?php
                    wp_reset_postdata();
                    if( have_posts() ):
                        // query_posts(array('post_type' => 'post', 'posts_per_page' => 5));
                        while( have_posts() ) : the_post(); ?>
                            <article>
                                <h2><?php the_title(); ?></h2>
                                <div class="meta-info">
                                    <p>Post Date: <?php echo get_the_date(); ?></p>
                                    <p>Post By: <?php the_author_posts_link(); ?></p>
                                    <p>Category: <?php the_category( ' ' ); ?></p>
                                    <p>Tags: <?php the_tags( ' ' ); ?></p>
                                </div>
                                <?php the_content(); ?>
                            </article>
                        <?php endwhile;
                    else: ?>
                        <p>Nothing to show</p> 
                    <?php endif; ?> 
                    </section>
                </main>
            </div>
        </div>
<?php get_footer(); ?>