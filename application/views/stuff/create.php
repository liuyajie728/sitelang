<ol class=breadcrumb>
	<li><a href="<?php echo base_url(); ?>">首页</a></li>
	<li><a href="<?php echo base_url('stuff'); ?>">员工</a></li>
	<li class=active>新增</li>
</ol>
<div id=content>
	<h2><?php echo $title; ?></h2>
<?php
	$attributes = array('class' => 'form-stuff-create form-horizontal', 'role' => 'form');
	echo form_open(base_url('stuff/create'), $attributes);
?>
		<fieldset>
			<div class="form-group">
				<label class="col-sm-2 control-label" for=lastname>姓</label>
				<div class="col-sm-10">
					<input class=form-control name=lastname type=text value="<?php echo set_value('lastname'); ?>" placeholder="" required autofocus>
					<?php echo form_error('lastname'); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for=firstname>名</label>
				<div class="col-sm-10">
					<input class=form-control name=firstname type=text value="<?php echo set_value('firstname'); ?>" placeholder="" required>
					<?php echo form_error('firstname'); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for=level>权限</label>
				<div class="col-sm-10">
					<select class=form-control name=level required>
						<option value="0"<?php echo set_select('level', '0'); ?>>未授权</option>
						<option value="1"<?php echo set_select('level', '1'); ?>>员工</option>
						<option value="2"<?php echo set_select('level', '2'); ?>>财务</option>
						<option value="3"<?php echo set_select('level', '3'); ?>>收银</option>
						<option value="4"<?php echo set_select('level', '4'); ?>>经理</option>
						<?php if($this->session->userdata('level') > '5'): ?>
						<option value="5"<?php echo set_select('level', '5'); ?>>门店管理员</option>
						<?php endif;?>
						<?php if($this->session->userdata('level') > '6'): ?>
						<option value="6"<?php echo set_select('level', '6'); ?>>品牌管理员</option>
						<?php endif;?>
						<?php if($this->session->userdata('level') > '7'): ?>
						<option value="7"<?php echo set_select('level', '7'); ?>>公司管理员</option>
						<?php endif;?>
						<?php if($this->session->userdata('level') == '9'): ?>
						<option value="8"<?php echo set_select('level', '8'); ?>>系统管理员</option>
						<option value="9"<?php echo set_select('level', '9'); ?>>超级管理员</option>
						<?php endif;?>
					</select>
					<?php echo form_error('level'); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for=gender>性别</label>
				<div class="col-sm-10">
					<label class="radio-inline"><input type=radio name="gender" value="-"<?php echo set_radio('gender', '-'); ?> required>请选择</label>
					<label class="radio-inline"><input type=radio name="gender" value="0"<?php echo set_radio('gender', '0'); ?> required>女士</label>
					<label class="radio-inline"><input type=radio name="gender" value="1"<?php echo set_radio('gender', '1'); ?> required>先生</label>
					<?php echo form_error('gender'); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for=dob>生日</label>
				<div class="col-sm-10">
					<input class=form-control name=dob type=date value="<?php echo set_value('dob'); ?>" placeholder="YYYY-MM-DD" required>
					<?php echo form_error('dob'); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for=mobile>手机号</label>
				<div class="col-sm-10">
					<input class=form-control name=mobile type=tel value="<?php echo set_value('mobile'); ?>" size=11 pattern="\d{11}" placeholder="手机号" required>
					<?php echo form_error('mobile'); ?>
				</div>
			</div>
			<div class="form-group">
				<label class="col-sm-2 control-label" for=email>Email（选填）</label>
				<div class="col-sm-10">
					<input class=form-control name=email type=email value="<?php echo set_value('email'); ?>" placeholder="Email（选填）">
					<?php echo form_error('email'); ?>
				</div>
			</div>
		</fieldset>
		<button class="btn btn-primary">确定</button>
	</form>
</div>
<script>
	$(function(){
		$('input[type=date]').datepicker(
			{minDate: "-80Y", maxDate: "-16Y"}
		);
		$('form').submit(function(){
			var gender = $('input[name=gender]').val();
			if(gender == '-')
			{
				alert('请选择性别');
				return false;
			}
		});
	});
</script>