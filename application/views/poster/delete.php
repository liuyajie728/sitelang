<ol class=breadcrumb>
  <li><a href="<?php echo base_url(); ?>">首页</a></li>
  <li><a href="<?php echo base_url('poster'); ?>">广告位</a></li>
  <li class=active>删除</li>
</ol>
<div id=content>
	<h2><?php echo $title; ?></h2>
<?php
	$attributes = array('class' => 'form-poster-delete', 'role' => 'form');
	echo form_open(base_url('poster/delete'), $attributes);
?>
		<fieldset>

		</fieldset>
		<button class="btn btn-primary">确定删除</button>
	</form>
</div>