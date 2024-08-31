<?php
/*
Template Name: Contact Success Page
*/
get_header(); ?>

<div class="container">
    <div class="contact-success-body">
        <p class="contact-success-title">送信完了しました。</p>
        <p class="mb-20">入力して頂きました内容の送信が完了しました。</p>
        <div class="mt-20 mb-20">
            <p>この度は、お問い合わせありがとうございました。 </p>
            <p>なお、5営業日以内にこちらよりご連絡させて頂きます。</p>
            <p>よろしくお願いいたします。</p>
        </div>
        <div class="text-center submit-btn">
            <button class="btn btn-primary mt-20 mb-20 position-relative" onclick="window.location.href='<?php echo home_url(); ?>'">
                <span>戻る</span>
            </button>
        </div>
    </div>
</div>

<?php get_footer(); ?>
