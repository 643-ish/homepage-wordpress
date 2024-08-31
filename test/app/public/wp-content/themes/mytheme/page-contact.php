<?php
/*
Template Name: Contact Page
*/
get_header(); ?>

<div class="container">
    <section class="inquiry-section">
        <div class="inquiry-box">
            <div class="row">
                <div class="col-md-6 inquiry-box-left">
                    <p class="inquiry-title">お問い合わせ</p>
                    <p class="inquiry-subtitle">お気軽にお問い合わせください。</p>
                </div>
                <div class="col-md-6 inquiry-content">
                    <p>本社: 東京都千代田区岩本町1-8-16 アチェロビル 3F</p>
                    <p>平日営業時間:10:00~19:00 ※土日休業</p>
                    <br>
                    <p>TEL: 03-6161-0606</p>
                    <p>FAX: 03-6161-6312</p>
                    <br>
                    <p>E-MAIL : info@carrycode.co.jp</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <form class="row g-3" id="inquiry-form" method="post" action="<?php echo admin_url('admin-post.php'); ?>">
            <input type="hidden" name="action" value="inquiry_form">
            <div class="col-12">
                <label for="name" class="form-label">お名前</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="田中　太郎" required>
            </div>
            <div class="col-12">
                <label for="namekana" class="form-label">フリガナ</label>
                <input type="text" class="form-control" id="namekana" name="namekana" placeholder="タナカ　タロウ" required>
            </div>
            <div class="col-12">
                <label for="companyname" class="form-label">ご会社名</label>
                <input type="text" class="form-control" id="companyname" name="companyname" placeholder="CarryCode株式会社" required>
            </div>
            <div class="col-12">
                <label for="tel" class="form-label">電話番号</label>
                <input type="text" class="form-control" id="tel" name="tel" placeholder="03-6161-0606" required>
            </div>
            <div class="col-12">
                <label for="email" class="form-label">メールアドレス</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="xxxxx@carrycode.com" required>
            </div>
            <div class="col-12">
                <label for="inquirycontent" class="form-label">お問い合わせ内容</label>
                <textarea class="form-control" id="inquirycontent" name="inquirycontent" placeholder="お問い合わせ内容" rows="10" required></textarea>
            </div>
            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <a href="<?php echo home_url('/privacy_policy'); ?>">
                        <span class="color-1786C2">個人情報保護方針</span>
                    </a>
                    <label class="form-check-label" for="invalidCheck">
                        に同意のうえ、送信ボタンを押してください。
                    </label>
                </div>
            </div>
            <div class="col-12 text-center submit-btn">
                <button class="btn btn-primary mt-20 mb-20 position-relative" type="submit">
                    <span>送信</span>
                    <img src="<?php echo get_template_directory_uri(); ?>/static/images/arrow-right-short.svg" class="position-absolute right-1rem width-2rem" alt="">
                </button>
            </div>
        </form>
    </section>
</div>

<?php get_footer(); ?>
