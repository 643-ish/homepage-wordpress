<?php
/*
Template Name: Our Team Page
*/
get_header(); ?>

<div class="container padding-v-20">
    <div class="our-member-page-head">
        <div class="technical-staff">
            <p class="technical-staff-title">TECHNICAL STAFF</p>
            <div class="row">
                <div class="col-md-4">
                    <p class="label12 font-weight-300 mb-0">Front-end</p>
                    <div class="technical-box">
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_html.png" width="100%" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_css.png" width="100%" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_javascript.png" width="100%" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_vue.png" width="100%" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_react.png" width="100%" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_typescript.png" width="100%" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_sass.png" width="100%" alt=""></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="label12 font-weight-300 mb-0">Server Side</p>
                    <div class="technical-box">
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_java.png" width="100%" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_php.png" width="100%" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_c.png" width="100%" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_kotlin.png" width="100%" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_swift.png" width="100%" alt=""></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <p class="label12 font-weight-300 mb-0">Database</p>
                    <div class="technical-box">
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_oracle.png" width="100%" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_mysql.png" width="100%" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_postgresql.png" width="100%" alt=""></div>
                        <div><img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_pogramming/icon_amazonaurora.png" width="100%" alt=""></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="our-team-members-title-box">
            <div class="row">
                <div class="col-md-5">
                    <p class="our-team-members-title">OUR MEMBER’S</p>
                </div>
                <div class="col-md-7">
                    <div class="line-height-150">
                        <span class="badge">20代&nbsp;&nbsp;25%</span>
                        <span class="badge">30代&nbsp;&nbsp;25%</span>
                        <span class="badge">40代&nbsp;&nbsp;25%</span>
                    </div>
                    <div class="line-height-150">
                        <span class="font-family-medium label12">Avarage age</span>
                        <span class="font-family-medium margin-right-30">32</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_gender_man.svg" width="7px" alt="">
                        <span class="font-family-medium margin-right-30">65%</span>
                        <img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_gender_woman.svg" width="8px" alt="">
                        <span class="font-family-medium">35%</span>
                    </div>
                    <div class="line-height-150">
                        <span class="label12 font-weight-300">China/China-Taiwan/Japan/American nationality etc.</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- member photos start-->
<div class="member-list">
    <?php
    $dir = get_template_directory() . '/static/images/members/';
    $url = get_template_directory_uri() . '/static/images/members/';
    $images = glob($dir . '*@2x.png');

    // 自然排序文件名
    natsort($images);

    // 限制加载的图片数量
    $max_images = 24;
    $total_divs = 39; // 总共39个div
    $image_index = 0; // 用于计数加载的图片

    // 预定义插入空白 div 的位置
    $empty_positions = [1, 3, 7, 11, 13, 16, 19, 20, 24, 25, 27, 30, 33, 34, 39, 40];

    // 初始化图片 div 数组
    $divs = [];

    // 将图片插入数组
    foreach ($images as $image) {
        if ($image_index >= $max_images) {
            break;
        }
        $image_url = $url . basename($image);
        $divs[] = "<div class='member-photos' style='background-image: url($image_url); background-color: #fff;' id='member_$image_index'></div>";
        $image_index++;
    }

    // 插入空白 div 到数组的特定位置
    foreach ($empty_positions as $position) {
        array_splice($divs, $position - 1, 0, "<div class='member-photos' style='background-color: #327FE7;'></div>");
    }

    // 输出最终的 div 列表
    foreach ($divs as $div) {
        echo $div;
    }
    ?>
</div>




<!-- member photos end-->
<script>
document.addEventListener("DOMContentLoaded", function() {
    var hexagons = document.querySelectorAll('.member-photos');
    hexagons.forEach(function(hexagon) {
        var img = hexagon.querySelector('.hexagon-img');
        if (img) {
            hexagon.style.backgroundImage = 'url(' + img.src + ')';
        }
    });
});
</script>



<!--member voice start-->
<div class="member-voice-section">
    <div class="photos-swipper-box">
        <div class="swiper photosSwiperUpper">
            <div class="swiper-wrapper">
                <div class="swiper-slide leader1">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/images/active01.png" width="100%" alt="">
                </div>
                <div class="swiper-slide leader2">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/images/active02.png" width="100%" alt="">
                </div>
                <div class="swiper-slide leader3">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/images/active03.png" width="100%" alt="">
                </div>
            </div>
        </div>
        <div class="bubbles-box">
            <div class="voice-title-m">
                <p>MEMBER’S REAL VOICE</p>
                <p>メンバーのリアルボイス</p>
            </div>
            <div class="row">
                <div class="col-6 col-sm-3">
                    <div class="bubble">
                        <p class="voice-content">CarryCodeに入社したきっかけはなんですか？</p>
                        <p class="voice-name">育成・成長仕組み</p>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="bubble">
                        <p class="voice-content">あなたが今、最もコミットしていることは？</p>
                        <p class="voice-name">スキルアップ</p>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="bubble">
                        <p class="voice-content">休日はどんな過ごし方ですか？</p>
                        <p class="voice-name">学習</p>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="bubble">
                        <p class="voice-content">CarryCodeに入社したきっかけはなんですか？</p>
                        <p class="voice-name">成長したいからです</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-2">
                    <div class="bubble">
                        <p class="voice-content">あなたが今、最もコミットしていることは？ </p>
                        <p class="voice-name">スキルアップ・日本語</p>
                    </div>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="bubble">
                        <p class="voice-content">休日はどんな過ごし方ですか？</p>
                        <p class="voice-name">ゲーム</p>
                    </div>
                </div>
                <div class="voice-title col-6 col-sm-2">
                    <p>MEMBER’S</p>
                    <p>REAL VOICE</p>
                </div>
                <div class="col-6 col-sm-3">
                    <div class="bubble">
                        <p class="voice-content">休日はどんな過ごし方ですか？</p>
                        <p class="voice-name">スポーツ・筋トレ</p>
                    </div>
                </div>
                <div class="col-6 col-sm-2">
                    <div class="bubble">
                        <p class="voice-content">休日はどんな過ごし方ですか？</p>
                        <p class="voice-name">スポーツ・映画・学習</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-6 col-sm-4">
                    <div class="bubble">
                        <p class="voice-content">あなたは社会にどんな影響を与えたいですか？ </p>
                        <p class="voice-name">人に頼れ自分の存在価値を証明すること</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4">
                    <div class="bubble">
                        <p class="voice-content">CarryCodeに入社したきっかけはなんですか？</p>
                        <p class="voice-name">モノづくりや新しい技術に興味関心があるからです。</p>
                    </div>
                </div>
                <div class="col-6 col-sm-4">
                    <div class="bubble">
                        <p class="voice-content">CarryCodeに入社したきっかけはなんですか？ </p>
                        <p class="voice-name">若い会社で思いっきり働きたかったからです。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper photosSwiperDown">
            <div class="swiper-wrapper">
                <div class="swiper-slide leader1">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/images/active04.png" width="100%" alt="">
                </div>
                <div class="swiper-slide leader2">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/images/active05.png" width="100%" alt="">
                </div>
                <div class="swiper-slide leader3">
                    <img src="<?php echo get_template_directory_uri(); ?>/static/images/active06.png" width="100%" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
<!--member voice end-->

<div class="leader-section">
    <p class="leader">Leader</p>
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

<?php get_footer(); ?>

<script>


    var ourTeamSwiper = new Swiper(".our-team-photos .mySwiper", {
        slidesPerView: 1,
        spaceBetween: 20,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            767: {
                slidesPerView: 3,
            },
            470: {
                slidesPerView: 2,
            },
            418: {
                slidesPerView: 1,
            }
        }
    });

    var photosSwiperUpper = new Swiper(".photosSwiperUpper", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2500,
            pauseOnMouseEnter: true,
        },
    });

    var photosSwiperDown = new Swiper(".photosSwiperDown", {
        slidesPerView: 3,
        spaceBetween: 20,
        loop: true,
        autoplay: {
            delay: 2500,
            pauseOnMouseEnter: true,
            reverseDirection: true,
        },
    });

</script>
