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

wp_no_robots();


// 提供邮箱输入框
// JS GET /api/v1/users/email:[base64 encode的email]?act=findpass
// 404表示邮箱不存在
// 200以及用户信息则表示ok并后台发送重置链接至邮箱

tt_get_header('simple');

?>
<body class="is-loadingApp action-page findpass">
    <?php load_template(THEME_MOD . '/mod.LogoHeader.php'); ?>
    <div id="content" class="wrapper container no-aside">
        <div class="main inner-wrap">
            <div class="form-findpass">
                <h2 class="mb30"><?php _e('Find Password', 'tt'); ?></h2>
                <p class="form-findpass-heading"><?php _e('Please input your account associated email', 'tt'); ?></p>
                <div class="input-group">
                    <input type="email" id="inputEmail" class="form-control" placeholder="<?php _e('Email', 'tt'); ?>" required="required">
                    <span class="input-group-btn">
                        <button class="btn btn-lg btn-primary btn-block" id="find-pass" type="submit"><?php _e('Submit', 'tt'); ?></button>
                    </span>
                </div>
            </div>
        </div>
    </div>

<?php

tt_get_footer('simple');
