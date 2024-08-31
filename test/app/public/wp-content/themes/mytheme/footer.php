<footer class="site-footer">
    <div class="site-footer__top">
        <div class="container">
            <div class="site-footer__top-inner">
                <div class="row footer-contact-row">
                    <div class="col-xl-6 col-lg-6 wow fadeInUp site-footer-col site-footer-col-left">
                        <div class="footer-contact-left text-center">
                            <p class="title">
                                <span>お問い合わせ</span>
                            </p>
                            <p class="content">
                                <span>ご依頼·ご相談など、お気軽にご連絡ください。</span>
                            </p>
                            <p class="content">
                                <span>お問い合わせはこちらから。</span>
                            </p>
                            <div class="button">
                                <a href="<?php echo home_url('/contact'); ?>" class="about-one__btn thm-btn bg-blue-label-white">
                                    <span class="margin-right-30">Contact Us</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_w.svg" alt="" class="vertical-align-initial">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp site-footer-col site-footer-col-right">
                        <div class="footer-contact-right text-center">
                            <p class="title">
                                <span>採用のお問い合わせ</span>
                            </p>
                            <p class="content">
                                <span>採用についての応募やご質問など、お気軽にご連絡ください。 </span>
                            </p>
                            <p class="content">
                                <span>お問い合わせはこちらから。</span>
                            </p>
                            <div class="button">
                                <a href="<?php echo home_url('/contact'); ?>" class="about-one__btn thm-btn bg-blue-label-white">
                                    <span class="margin-right-30">Recruit Site</span>
                                    <img src="<?php echo get_template_directory_uri(); ?>/static/images/icon_file.svg" style="width: 15px;" alt="" class="vertical-align-initial">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-logo">
                            <img src="<?php echo get_template_directory_uri(); ?>/static/images/logo_white.png" alt="">
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay="100ms">
                        <div class="footer-menu">
                            <div class="footer-menu-left">
                                <p class="h6">Business</p>
                                <p class="h7">ー ITソリューション事業</p>
                                <p class="h7">ー IT転職事業</p>
                                <p class="h7">ー育成事業</p>
                                <p class="h6">Ourteam</p>
                                <p class="h6">Contact</p>
                            </div>
                            <div class="footer-menu-right">
                                <p class="h6">News</p>
                                <p class="h6">Company</p>
                                <p class="h7">ー 経営基本方針</p>
                                <p class="h7">ー 会社概要</p>
                                <p class="h7">ー 沿革</p>
                                <p class="h6">Recruit</p>
                                <p class="h7">ー 未経験採用</p>
                                <p class="h7">ー経験者採用</p>
                                <p class="h7">ー 制度の紹介</p>
                                <p class="h7">ー Q＆A</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-12">
                        <div class="site-footer__bottom-inner">
                            <div class="site-footer__bottom-left">
                                <p class="site-footer__bottom-text">©Carrycode, Inc. ALL RIGHTS RESERVED.</p>
                            </div>
                            <div class="site-footer__bottom-right">
                                <ul class="list-unstyled site-footer__bottom-menu">
                                    <li><a href="<?php echo home_url('/privacy-policy'); ?>">個人情報保護方針</a></li>
                                    <li><span>/</span></li>
                                    <li><a href="<?php echo home_url('/privacy-policy'); ?>">個人情報に関する公表文</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>

<script>
 var ourTeamSwiper = new Swiper(".our-team-photos .mySwiper", {
     slidesPerView: 1,
     spaceBetween: 20,
     freeMode: true,
     navigation: {
         nextEl: ".swiper-button-next",
         prevEl: ".swiper-button-prev",
     },
     breakpoints: {
         767: {
             slidesPerView: 3,
         },
         // when window width is >= 470px
         470: {
             slidesPerView: 2,
         },
         418: {
             slidesPerView: 1,
         }
     }
 });

 var companySwiper = new Swiper(".companySwiper", {
     slidesPerView: 2,
     spaceBetween: 20,
     freeMode: true,
     pagination: {
         el: ".swiper-pagination",
         clickable: true,
     },
 });

 var mediaSwiper = new Swiper(".mediaSwiper", {
     slidesPerView: 2,
     spaceBetween: 20,
     freeMode: true,
     breakpoints: {
         // when window width is >= 470px
         470: {
             slidesPerView: 3,
         }
     }
 });
 </script>

</body>
</html>
