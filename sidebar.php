<?php if (!defined('__TYPECHO_ROOT_DIR__')) exit; ?>
<?php if (!is_pjax()  && !is_mobile()): ?>
<div id="right-sidebar" class="sidebar floatright" role="complementary">
		<?php if(isset($this->options->rightSidebar)) {
			$widgets = explode("\r\n",$this->options->rightSidebar);
			foreach($widgets as $widget) {
				$this->need(simpx_get_widget($widget));
			}
		} ?>
</div>
<?php endif; ?>