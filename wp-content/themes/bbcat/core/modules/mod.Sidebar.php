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
<!-- SideBar Begin -->
<aside class="sidebar secondary col-md-4" id="sidebar">
    <?php if(is_single()) the_widget('AuthorWidget'); ?>
    <?php dynamic_sidebar(tt_dynamic_sidebar()); ?>
    <div class="widget float-widget-mirror">
    </div>
</aside>