<?php
/*
Template Name: News Page
*/
get_header(); ?>

<div class="container company-profile">
    <section class="history">
        <div class="company-title">
            <p class="font-family-medium">NEWS</p>
            <p>最新ニュース</p>
        </div>
        <div class="news-box">
            <?php
            $args = array('post_type' => 'news', 'posts_per_page' => 10);
            $news_query = new WP_Query($args);
            if ($news_query->have_posts()) :
                while ($news_query->have_posts()) : $news_query->the_post(); ?>
                    <div class="row padding-v-20 news-row">
                        <div class="col-xl-2 col-ld-2 col-md-12">
                            <span class="color-000 label14 fontWeightNormal"><?php the_time('Y年n月'); ?></span>
                        </div>
                        <div class="col-xl-10 col-ld-10 col-md-12">
                            <div class="row">
                                <div class="col-xl-3 col-md-3">
                                    <span class="color-000 label14 fontWeightNormal"><?php echo esc_html(get_post_meta(get_the_ID(), 'news_category', true)); ?></span>
                                </div>
                                <div class="col-xl-8 col-md-8">
                                    <span class="color-000 label14 fontWeightNormal"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
                                    <br>
                                    <span class="color-000 label14 fontWeightNormal"><?php echo get_the_excerpt(); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
                wp_reset_postdata();
            else : ?>
                <p>No news found.</p>
            <?php endif; ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>
