<?php
/**
 * Copyright (c) 2019-2025, www.rogenart.cf
 * All right reserved.
 *
 * @since 2.5.0
 * @package BBcat-K
 * @author 洛茛艺术影视在线
 * @date 2019-04-03 10:00
 * @link https://www.rogenart.tk
 */
?>
<?php

// wp_logout(); 包含 do_action( 'wp_logout' )，为了自定义跳转，需删除这个action，因此不使用wp_logout()
wp_destroy_current_session();
wp_clear_auth_cookie();

if ( isset( $_REQUEST['redirect'] ) || isset( $_REQUEST['redirect_to'] ) ){
	$redirect_to = isset($_REQUEST['redirect']) ?  $_REQUEST['redirect'] : $_REQUEST['redirect_to'];
} else {
	$redirect_to = '/';
}
$redirect_to = esc_url($redirect_to);

//wp_safe_redirect( $redirect_to );
//
//exit();

// 引入头部
tt_get_header('simple');
?>
<body class="is-loadingApp action-page signout">
    <?php load_template(THEME_MOD . '/mod.LogoHeader.php'); ?>
    <!--	<div class="bg-layer"></div>-->
    <div class="wrapper container no-aside">
        <div class="main inner-wrap"></div>
    </div>
<?php
// 引入页脚
tt_get_footer('simple');
?>
<script>
    jQuery(function () {
        App.PopMsgbox.alert({
            title: "<?php _e('Sign Out Successfully', 'tt'); ?>",
            text: "<?php echo sprintf(__('You will be redirected to %s in 2s', 'tt'), $redirect_to); ?>",
            timer: 3000,
            showConfirmButton: false
        });
        setTimeout(function () {
            window.location.href = "<?php echo $redirect_to; ?>";
        }, 3000);
    });
</script>