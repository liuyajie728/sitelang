<ol class=breadcrumb>
  <li><a href="<?php echo base_url(); ?>">首页</a></li>
  <li><a href="<?php echo base_url('ad'); ?>">素材</a></li>
  <li class=active>编辑</li>
</ol>
<div id=content>
	<h2><?php echo $title; ?></h2>
<?php
	$attributes = array('class' => 'form-ad-edit', 'role' => 'form');
	echo form_open(base_url('ad/edit'), $attributes);
?>
		<fieldset>

		</fieldset>
		<button class="btn btn-primary">保存</button>
	</form>
</div>