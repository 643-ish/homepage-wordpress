<?php
/*
Template Name: About Page
*/
get_header(); ?>

<section class="home-video-section">
    <div class="home-video-container">
        <div>
            <video src="<?php echo get_template_directory_uri(); ?>/static/images/video/pexels_videos.mp4" autoplay loop muted playsinline width="100%">
            </video>
        </div>
        <div class="main-slider__content">
            <p class="p1 color-fff">CATCH UP WITH TECHNOLOGY AND LEAD THE INDUSTRY</p>
            <p class="p2 color-fff">エンジニアリングの技術に追いつき、促進し、業界をリードする </p>
        </div>
    </div>
</section>
<!--About One Start-->
<section class="about-one who_we_are">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-6 display-flex align-items-end">
                <div class="slideInLeft wow">
                    <div class="section-title text-left">
                        <p class="company-info-style">
                            <span>会社情報</span>
                        </p>
                        <p class="company-label-style">
                            <span>COMPANY</span>
                        </p>
                        <p class="company-content-style ">「価値あるコード」を作るには、良い価値観を持つエンジニアや企業によって共同で作り出されます。<br> エンジニアと企業が価値あるコードを作れるように支援しています。</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xl-6">
                <div class="about-one__right">
                    <div class="swiper companySwiper">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/static/images/hbg_a1.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/static/images/hbg_a2.png" alt="">
                            </div>
                            <div class="swiper-slide">
                                <img src="<?php echo get_template_directory_uri(); ?>/static/images/hbg_a2.png" alt="">
                            </div>
                        </div>
                        <div class="swiper-pagination"></div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="about-one-more-style">
                    <a href="<?php echo home_url('/company'); ?>" class="about-one__btn thm-btn bg-blue-label-white">
                        <span class="margin-right-30">VIEW MORE</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_w.svg" alt="" class="vertical-align-initial">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->

<!--About One Start-->
<section class="about-one who_we_are">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-xl-3">
                <div class="section-title text-left">
                    <p class="company-info-style">
                        <span>事業内容</span>
                    </p>
                    <p class="company-label-style">
                        <span>SERVICE</span>
                    </p>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-xl-9">
                <div class="about-one__right">
                    <p class="company-content-style ">当社は、経験豊かなITエンジニアと技術を求めている企業をマッチングし、プロジェクト単位の技術支援や開発、サーバー・ネットワーク構築などのインフラ支援、または業務の可視化からIT戦略の立案、DX推進までお客様に寄り添い、サポートします。</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--About One End-->

<!--jobs section Start-->
<section class="jobs-section">
    <div class="container">
        <div class="jobs-title">
            <h3>ITソリューション事業</h3>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card ses-service">
                    <div class="card-body">
                        <p class="label1">IT SOLUTION</p>
                        <p class="label2">SES Service</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 card-right">
                <h2 class="job-title">SESシステムエンジニアリング</h2>
                <p class="job-contents">
                    <span>CarryCodeのエンジニアは、正社員としてお客様先で低コストかつ、高品質な価値あるコードを創造し、お客様の事業を全力で「応援」します</span>
                </p>
                <div class="job-botton">
                    <a href="<?php echo home_url('/service-ses'); ?>" class="about-one__btn thm-btn">
                        <span class="margin-right-30">VIEW MORE</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_blue.svg" alt="" class="vertical-align-initial">
                    </a>
                </div>
            </div>
        </div>
        <br>
        <div class="row row-md">
            <div class="col-lg-6 col-md-12">
                <h2 class="job-title">受託開発サービス</h2>
                <p class="job-contents">
                    <span>キャリーコードでは要件定義、設計、開発、テストまですべて自社で一貫して対応できます。</span>
                </p>
                <div class="job-botton">
                    <a href="<?php echo home_url('/service-development'); ?>" class="about-one__btn thm-btn">
                        <span class="margin-right-30">VIEW MORE</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_blue.svg" alt="" class="vertical-align-initial">
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card contract-development">
                    <div class="card-body">
                        <p class="label1">IT SOLUTION</p>
                        <p class="label2">Contract Development</p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="card lab-development">
                    <div class="card-body">
                        <p class="label1">IT SOLUTION</p>
                        <p class="label2">Lab Development</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 card-right">
                <h2 class="job-title">Lab開発</h2>
                <p class="job-contents">
                    <span>長期にわたって専属チームを安定して確保します。 国際的な水準の技術力と品質を備え、プロダクトに「価値のあるコード」を一緒に考え、それを実現に導きます。</span>
                </p>
                <div class="job-botton">
                    <!-- <a href="" class="about-one__btn thm-btn">
                        <span class="margin-right-30">VIEW MORE</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_blue.svg" alt="" class="vertical-align-initial">
                    </a> -->
                </div>
            </div>
        </div>
        <br>
        <div class="row row-md">
            <div class="col-lg-6 col-md-12">
                <h2 class="job-title">ITコンサルティング</h2>
                <p class="job-contents">
                    <span>当社のITコンサルティングサービスでは、お客様の立場でプロジェクトマネジメントを推進します。 また、業務の可視化からIT戦略の立案、DX推進までお客様に寄り添い、サポートします。</span>
                </p>
                <div class="job-botton">
                    <!-- <a href="" class="about-one__btn thm-btn">
                        <span class="margin-right-30">VIEW MORE</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_blue.svg" alt="" class="vertical-align-initial">
                    </a> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card it-consulting">
                    <div class="card-body">
                        <p class="label1">IT SOLUTION</p>
                        <p class="label2">IT Consulting</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!--jobs section end-->

<!--career section Start-->
<section class="jobs-section career-section">
    <div class="jobs-title">
        <h3>転職サポート事業</h3>
    </div>
    <div class="container">
        <div class="row row-md">
            <div class="col-lg-6 col-md-12">
                <h2 class="job-title">即戦力×IT人材転職</h2>
                <p class="job-contents">
                    <span>IT業界やエンジニアの転職事情に詳しい専任のキャリアコーディネーターが徹底的にサポート。</span>
                </p>
                <div class="job-botton">
                    <!-- <a href="" class="about-one__btn thm-btn">
                        <span class="margin-right-30">VIEW MORE</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_blue.svg" alt="" class="vertical-align-initial">
                    </a> -->
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="card">
                    <div class="card-body">
                        <p class="label1">IT SOLUTION</p>
                        <p class="label2">Career Service</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--career section end-->

<!--recruit section Start-->
<section class="recruit-section mt_50">
    <div class="container">
        <div class="section-title text-left">
            <p class="company-info-style text-center">
                <span>採用情報</span>
            </p>
            <p class="company-label-style text-center">
                <span>RECRUIT</span>
            </p>
        </div>
        <div class="our-team-leader-style">
            <div class="our-team-photos">
                <p class="bg-label">
                    <span>OUR TEAM LEADER</span>
                </p>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide leader1">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/images/members/leader/shihongqiang.png" width="100%" alt="">
                            <div class="lead-container">
                                <p>Hong TEAM</p>
                                <p>Leader</p>
                            </div>
                        </div>
                        <div class="swiper-slide leader2">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/images/members/leader/shiyangbo.png" width="100%" alt="">
                            <div class="lead-container">
                                <p>Yang TEAM</p>
                                <p>Leader</p>
                            </div>
                        </div>
                        <div class="swiper-slide leader3">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/images/members/leader/shilei.png" width="100%" alt="">
                            <div class="lead-container">
                                <p>Lei TEAM</p>
                                <p>Leader</p>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>

            </div>
        </div>
    </div>

</section>
<!--recruit section end-->

<!--our members section Start-->

<section class="our-members-section">
    <div class="our-members-style container">
        <div class="our-members-container row row-md">
            <div class="col-lg-4 col-md-12 col-xl-4">
                <div class="our-members-title">
                    <span>member</span>
                </div>
                <div class="job-botton">
                    <a href="<?php echo home_url('/our-team'); ?>" class="about-one__btn thm-btn bg-blue-label-white">
                        <span class="margin-right-30">VIEW MORE</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_w.svg" alt="" class="vertical-align-initial">
                    </a>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 col-xl-8">

<ul class="clear our-members-ul">
    <?php
    $dir = get_template_directory() . '/static/images/members/';
    $url = get_template_directory_uri() . '/static/images/members/';
    $images = glob($dir . '*@2x.png');

    // 自然排序文件名
    natsort($images);

    // 限制加载的图片数量
    $max_images = 24;
    $count = 0;

    foreach ($images as $image) {
        if ($count >= $max_images) {
            break;
        }
        $image_url = $url . basename($image);
        $count++;
        echo "<li id='member_$count'>
                <div class='hexagon'>
                    <img src='$image_url' alt='' class='hexagon-img' style='display:none;'>
                </div>
                <!-- Loaded image: $image_url -->
              </li>";
    }
    ?>
</ul>
            </div>
        </div>
    </div>
    <div style="clear: both;"></div>
</section>

<script>
document.addEventListener("DOMContentLoaded", function() {
    var hexagons = document.querySelectorAll('.hexagon');
    hexagons.forEach(function(hexagon) {
        var img = hexagon.querySelector('.hexagon-img');
        if (img) {
            hexagon.style.backgroundImage = 'url(' + img.src + ')';
        }
    });
});
</script>

<!-- our members section End -->

<section class="padding-bottom-30">
    <div class="container">
        <div class="pages-container row">
            <div class="col-lg-6 col-md-12 col-xl-6">
                <div class="pages-left" onclick="location='<?php echo get_permalink(get_page_by_path('welfare')); ?>'">
                    <p>
                        <span>WELFARE</span>
                    </p>
                    <p>
                        <span>制度の紹介</span>
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_blue.svg" alt="" class="vertical-align-initial">
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-xl-6">
                <div class="pages-right" onclick="location='<?php echo get_permalink(get_page_by_path('company')); ?>'">
                    <p>
                        <span>COMPANY PROFILE</span>
                    </p>
                    <p>
                        <span>会社概要</span>
                    </p>
                    <img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_blue.svg" alt="" class="vertical-align-initial">
                </div>
            </div>
        </div>
    </div>
</section>




<!--Share The Joy Start-->
<section class="share-the-joy">
    <div class="share-the-joy__inner">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="share-the-joy__left">
                        <p class="text-center">
                            <span class="news">NEWS</span>
                        </p>
                        <div class="row padding-v-20">
                            <div class="col-xl-2 col-ld-2 col-md-12">
                                <span class="color-000 label14 fontWeightNormal">2024年6月</span>
                            </div>
                            <div class="col-xl-10 col-ld-10 col-md-12">
                                <div class="row">
                                    <div class="col-xl-3 col-md-3">
                                        <span class="color-000 label14 fontWeightNormal">プレスリリース</span>
                                    </div>
                                    <div class="col-xl-8 col-md-8">
                                        <span class="color-000 label14 fontWeightNormal">労働者派遣事業許可証取得</span>
                                        <br>
                                        <span class="color-000 label14 fontWeightNormal">有料職業紹介事業許可証取得</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row padding-v-20">
                            <div class="col-xl-2 col-ld-2 col-md-12">
                                <span class="color-000 label14 fontWeightNormal">2024年1月</span>
                            </div>
                            <div class="col-xl-10 col-ld-10 col-md-12">
                                <div class="row">
                                    <div class="col-xl-3 col-md-3">
                                        <span class="color-000 label14 fontWeightNormal">プレスリリース</span>
                                    </div>
                                    <div class="col-xl-8 col-md-8">
                                        <span class="color-000 label14 fontWeightNormal">経営革新計画に係る承認取得</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row padding-v-20">
                            <div class="col-xl-2 col-ld-2 col-md-12">
                                <span class="color-000 label14 fontWeightNormal">2023年6月</span>
                            </div>
                            <div class="col-xl-10 col-ld-10 col-md-12">
                                <div class="row">
                                    <div class="col-xl-3 col-md-3">
                                        <span class="color-000 label14 fontWeightNormal">プレスリリース</span>
                                    </div>
                                    <div class="col-xl-8 col-md-8">
                                        <span class="color-000 label14 fontWeightNormal">本社を「岩本町」に移転</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row padding-v-20">
                            <div class="col-xl-2 col-ld-2 col-md-12">
                                <span class="color-000 label14 fontWeightNormal">2023年10月</span>
                            </div>
                            <div class="col-xl-10 col-ld-10 col-md-12">
                                <div class="row">
                                    <div class="col-xl-3 col-md-3">
                                        <span class="color-000 label14 fontWeightNormal">プレスリリース</span>
                                    </div>
                                    <div class="col-xl-8 col-md-8">
                                        <span class="color-000 label14 fontWeightNormal">資本金を500万円から2100万円に増資</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row padding-v-20">
                            <div class="col-xl-2 col-ld-2 col-md-12">
                                <span class="color-000 label14 fontWeightNormal">2022年3月</span>
                            </div>
                            <div class="col-xl-10 col-ld-10 col-md-12">
                                <div class="row">
                                    <div class="col-xl-3 col-md-3">
                                        <span class="color-000 label14 fontWeightNormal">プレスリリース</span>
                                    </div>
                                    <div class="col-xl-8 col-md-8">
                                        <span class="color-000 label14 fontWeightNormal">CarryCode株式会社</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center mt_50">
                        <a href="<?php echo home_url('/news'); ?>" class="about-one__btn thm-btn bg-blue-label-white">
                            <span class="margin-right-30">VIEW MORE</span>
                            <img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_w.svg" alt="" class="vertical-align-initial">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--Share The Joy End-->


<?php get_footer(); ?>
