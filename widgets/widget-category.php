<?php
if (!defined('__TYPECHO_ROOT_DIR__')) exit;
/**
 * 分类列表
 *
 * @package widget
 */
?>
<div class="widget box">
  <h4 class="widget-title"><?php _e('Categories'); ?></h4>
  <div class="widget-body">
    <ul class="widget-list">
      <?php $this->widget('Widget_Metas_Category_List')
        ->parse('<li><a href="{permalink}">{name}</a></li>'); ?>
    </ul>
  </div>
</div>