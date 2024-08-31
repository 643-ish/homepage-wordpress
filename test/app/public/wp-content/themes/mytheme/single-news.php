<?php get_header(); ?>

<div class="container company-profile">
    <section class="history">
        <div class="company-title">
            <p class="font-family-medium">NEWS</p>
            <p>最新ニュース</p>
        </div>
        <div class="news-box">
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post(); ?>
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
                                    <span class="color-000 label14 fontWeightNormal"><?php the_title(); ?></span>
                                    <br>
                                    <span class="color-000 label14 fontWeightNormal"><?php the_content(); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endwhile;
            endif;
            ?>
        </div>
    </section>
</div>

<?php get_footer(); ?>
