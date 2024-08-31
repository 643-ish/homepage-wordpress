<?php
function mytheme_enqueue_styles() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/static/css/bootstrap.min.css');
    wp_enqueue_style('main-css', get_template_directory_uri() . '/static/css/style.css');
    wp_enqueue_style('animate-css', get_template_directory_uri() . '/static/css/animate.min.css');
    wp_enqueue_style('custom-animate-css', get_template_directory_uri() . '/static/css/custom-animate.css');
    wp_enqueue_style('all-css', get_template_directory_uri() . '/static/css/all.min.css');
    wp_enqueue_style('jarallax-css', get_template_directory_uri() . '/static/css/jarallax.css');
    wp_enqueue_style('magnific-popup-css', get_template_directory_uri() . '/static/css/jquery.magnific-popup.css');
    wp_enqueue_style('nouislider-css', get_template_directory_uri() . '/static/css/nouislider.min.css');
    wp_enqueue_style('nouislider-pips-css', get_template_directory_uri() . '/static/css/nouislider.pips.css');
    wp_enqueue_style('odometer-css', get_template_directory_uri() . '/static/css/odometer.min.css');
    wp_enqueue_style('swiper-css', get_template_directory_uri() . '/static/css/swiper.min.css');
    wp_enqueue_style('tiny-slider-css', get_template_directory_uri() . '/static/css/tiny-slider.min.css');
    wp_enqueue_style('stylesheet-css', get_template_directory_uri() . '/static/css/stylesheet.css');
    wp_enqueue_style('owl-carousel-css', get_template_directory_uri() . '/static/css/owl.carousel.min.css');
    wp_enqueue_style('owl-theme-css', get_template_directory_uri() . '/static/css/owl.theme.default.min.css');
    wp_enqueue_style('twentytwenty-css', get_template_directory_uri() . '/static/css/twentytwenty.css');
    wp_enqueue_style('bxslider-css', get_template_directory_uri() . '/static/css/jquery.bxslider.css');
    wp_enqueue_style('bootstrap-select-css', get_template_directory_uri() . '/static/css/bootstrap-select.min.css');
    wp_enqueue_style('vegas-css', get_template_directory_uri() . '/static/css/vegas.min.css');
    wp_enqueue_style('jquery-ui-css', get_template_directory_uri() . '/static/css/jquery-ui.css');
    wp_enqueue_style('timePicker-css', get_template_directory_uri() . '/static/css/timePicker.css');
    wp_enqueue_style('izeetak-css', get_template_directory_uri() . '/static/css/izeetak.css');
    wp_enqueue_style('izeetak-responsive-css', get_template_directory_uri() . '/static/css/izeetak-responsive.css');
    
    // 加载JavaScript文件
    wp_enqueue_script('jquery', get_template_directory_uri() . '/static/js/jquery-3.6.0.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/static/js/bootstrap.bundle.min.js', array(), null, true);
    wp_enqueue_script('jarallax-js', get_template_directory_uri() . '/static/js/jarallax.min.js', array(), null, true);
    wp_enqueue_script('ajaxchimp-js', get_template_directory_uri() . '/static/js/jquery.ajaxchimp.min.js', array(), null, true);
    wp_enqueue_script('appear-js', get_template_directory_uri() . '/static/js/jquery.appear.min.js', array(), null, true);
    wp_enqueue_script('circle-progress-js', get_template_directory_uri() . '/static/js/jquery.circle-progress.min.js', array(), null, true);
    wp_enqueue_script('magnific-popup-js', get_template_directory_uri() . '/static/js/jquery.magnific-popup.min.js', array(), null, true);
    wp_enqueue_script('validate-js', get_template_directory_uri() . '/static/js/jquery.validate.min.js', array(), null, true);
    wp_enqueue_script('nouislider-js', get_template_directory_uri() . '/static/js/nouislider.min.js', array(), null, true);
    wp_enqueue_script('odometer-js', get_template_directory_uri() . '/static/js/odometer.min.js', array(), null, true);
    wp_enqueue_script('swiper-js', get_template_directory_uri() . '/static/js/swiper.min.js', array(), null, true);
    wp_enqueue_script('tiny-slider-js', get_template_directory_uri() . '/static/js/tiny-slider.min.js', array(), null, true);
    wp_enqueue_script('wNumb-js', get_template_directory_uri() . '/static/js/wNumb.min.js', array(), null, true);
    wp_enqueue_script('wow-js', get_template_directory_uri() . '/static/js/wow.js', array(), null, true);
    wp_enqueue_script('isotope-js', get_template_directory_uri() . '/static/js/isotope.js', array(), null, true);
    wp_enqueue_script('countdown-js', get_template_directory_uri() . '/static/js/countdown.min.js', array(), null, true);
    wp_enqueue_script('owl-carousel-js', get_template_directory_uri() . '/static/js/owl.carousel.min.js', array(), null, true);
    wp_enqueue_script('twentytwenty-js', get_template_directory_uri() . '/static/js/twentytwenty.js', array(), null, true);
    wp_enqueue_script('event-move-js', get_template_directory_uri() . '/static/js/jquery.event.move.js', array(), null, true);
    wp_enqueue_script('bxslider-js', get_template_directory_uri() . '/static/js/jquery.bxslider.min.js', array(), null, true);
    wp_enqueue_script('bootstrap-select-js', get_template_directory_uri() . '/static/js/bootstrap-select.min.js', array(), null, true);
    wp_enqueue_script('vegas-js', get_template_directory_uri() . '/static/js/vegas.min.js', array(), null, true);
    wp_enqueue_script('jquery-ui-js', get_template_directory_uri() . '/static/js/jquery-ui.js', array(), null, true);
    wp_enqueue_script('timePicker-js', get_template_directory_uri() . '/static/js/timePicker.js', array(), null, true);
    wp_enqueue_script('izeetak-js', get_template_directory_uri() . '/static/js/izeetak.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_styles');

function create_post_type_news() {
    register_post_type('news',
        array(
            'labels' => array(
                'name' => __('News'),
                'singular_name' => __('News')
            ),
            'public' => true,
            'has_archive' => true,
            'rewrite' => array('slug' => 'news'),
            'supports' => array('title', 'editor', 'excerpt'),
        )
    );
}
add_action('init', 'create_post_type_news');

// 添加自定义元框
function add_custom_meta_boxes() {
    add_meta_box('news_meta_box', 'News Details', 'display_news_meta_box', 'news', 'normal', 'high');
}
add_action('add_meta_boxes', 'add_custom_meta_boxes');

// 显示自定义元框
function display_news_meta_box($post) {
    $news_category = get_post_meta($post->ID, 'news_category', true);
    ?>
    <label for="news_category">Category:</label>
    <input type="text" name="news_category" value="<?php echo esc_attr($news_category); ?>" />
    <?php
}

// 保存自定义字段
function save_news_meta($post_id) {
    if (isset($_POST['news_category'])) {
        update_post_meta($post_id, 'news_category', sanitize_text_field($_POST['news_category']));
    }
}
add_action('save_post', 'save_news_meta');

// 注册导航菜单位置
function register_my_menus() {
    register_nav_menus(
        array(
            'primary' => __('Primary Menu', 'mytheme'),
        )
    );
}
add_action('init', 'register_my_menus');

// 禁用 WordPress 自定义工具样式和脚本
function mytheme_remove_customize_support_scripts() {
    remove_action('wp_head', 'wp_custom_css_cb', 11);
    remove_action('wp_head', 'wp_custom_css_cb', 101);
    remove_action('wp_footer', 'wp_custom_css_cb');
}
add_action('init', 'mytheme_remove_customize_support_scripts');

// 另外一种禁用自定义工具的方法
function mytheme_deregister_scripts() {
    wp_deregister_script('customize-support');
}
add_action('wp_enqueue_scripts', 'mytheme_deregister_scripts', 11);

function create_inquiry_form_table() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'inquiry_form';
    $charset_collate = $wpdb->get_charset_collate();

    $sql = "CREATE TABLE $table_name (
        id mediumint(9) NOT NULL AUTO_INCREMENT,
        name tinytext NOT NULL,
        namekana tinytext NOT NULL,
        companyname tinytext NOT NULL,
        tel tinytext NOT NULL,
        email tinytext NOT NULL,
        inquirycontent text NOT NULL,
        created_at datetime DEFAULT CURRENT_TIMESTAMP NOT NULL,
        PRIMARY KEY (id)
    ) $charset_collate;";

    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql);
}

add_action('after_switch_theme', 'create_inquiry_form_table');

add_action('admin_post_nopriv_inquiry_form', 'handle_inquiry_form');
add_action('admin_post_inquiry_form', 'handle_inquiry_form');

function handle_inquiry_form() {
    // Validate and sanitize form inputs
    $name = sanitize_text_field($_POST['name']);
    $namekana = sanitize_text_field($_POST['namekana']);
    $companyname = sanitize_text_field($_POST['companyname']);
    $tel = sanitize_text_field($_POST['tel']);
    $email = sanitize_email($_POST['email']);
    $inquirycontent = sanitize_textarea_field($_POST['inquirycontent']);

    // Prepare email
    $to = 'info@carrycode.co.jp';
    $subject = 'お問い合わせ内容';
    $message = "お名前: $name\nフリガナ: $namekana\nご会社名: $companyname\n電話番号: $tel\nメールアドレス: $email\nお問い合わせ内容:\n$inquirycontent";
    $headers = array('Content-Type: text/plain; charset=UTF-8');

    // Send email
    wp_mail($to, $subject, $message, $headers);

    // Save form data to database
    global $wpdb;
    $wpdb->insert(
        $wpdb->prefix . 'inquiry_form',
        array(
            'name' => $name,
            'namekana' => $namekana,
            'companyname' => $companyname,
            'tel' => $tel,
            'email' => $email,
            'inquirycontent' => $inquirycontent,
            'created_at' => current_time('mysql')
        )
    );

    // Redirect to success page
    wp_redirect(home_url('/contact-success'));
    exit;
}

add_action('admin_menu', 'add_inquiry_menu');

function add_inquiry_menu() {
    add_menu_page(
        'Inquiries',
        'Inquiries',
        'manage_options',
        'inquiry_list',
        'inquiry_list_page',
        'dashicons-email',
        6
    );
}

function inquiry_list_page() {
    global $wpdb;
    $table_name = $wpdb->prefix . 'inquiry_form';
    $results = $wpdb->get_results("SELECT * FROM $table_name");

    echo '<div class="wrap">';
    echo '<h1 class="wp-heading-inline">Inquiries</h1>';
    echo '<table class="wp-list-table widefat fixed striped">';
    echo '<thead><tr><th>ID</th><th>お名前</th><th>フリガナ</th><th>ご会社名</th><th>電話番号</th><th>メールアドレス</th><th>お問い合わせ内容</th><th>送信時間</th></tr></thead>';
    echo '<tbody>';

    if (!empty($results)) {
        foreach ($results as $row) {
            echo '<tr>';
            echo '<td>' . esc_html($row->id) . '</td>';
            echo '<td>' . esc_html($row->name) . '</td>';
            echo '<td>' . esc_html($row->namekana) . '</td>';
            echo '<td>' . esc_html($row->companyname) . '</td>';
            echo '<td>' . esc_html($row->tel) . '</td>';
            echo '<td>' . esc_html($row->email) . '</td>';
            echo '<td>' . esc_html($row->inquirycontent) . '</td>';
            echo '<td>' . esc_html($row->created_at) . '</td>';
            echo '</tr>';
        }
    } else {
        echo '<tr><td colspan="8">No inquiries found.</td></tr>';
    }

    echo '</tbody>';
    echo '</table>';
    echo '</div>';
}

error_log('Form submitted and function executed.');

?>

