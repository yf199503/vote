<?php
	include ("head.php");
?>
<div class="content">
	<p class="sui-text-xxlarge" style="margin-left: 250px;">添加候选人</p>
	<form class="sui-form form-horizontal sui-validate" action="vote-save.php" method="post" enctype="multipart/form-data" style="margin-top: 50px; margin-left: 120px;">
		<div class="control-group">
			<label for="huodong" class="control-label">活动名称:</label>
			<div class="controls">
				<input type="text" id="huodong" name="huodong" class="input-large input-fat" readonly="readonly" value="拉姆·查兰管理实践奖之最受关注奖">
			</div>
		</div>
		<div class="control-group">
			<label for="sName" class="control-label">姓名:</label>
			<div class="controls">
				<input type="text" id="sName" name="sName" class="input-large input-fat"  placeholder="输入姓名" data-rules="required|minlength=2|maxlength=10">
			</div>
		</div>
		<div class="control-group">
			<label for="file" class="control-label">照片：</label>
			<div class="controls">
				<input type="file" name="file" id="file">
			</div>
		</div>
		<div class="control-group">
			<label for="position" class="control-label">职位:</label>
			<div class="controls">
				<input type="text" id="position" name="position" class="input-large input-fat"  placeholder="输入职位" data-rules="required|minlength=2|maxlength=10">
			</div>
		</div>
		<div class="control-group">
			<label for="vitae" class="control-label v-top">个人简历:</label>
			<div class="controls">
				<textarea id="vitae" rows="5" cols="40" name="vitae" placeholder="简历" data-rules="required"></textarea>
			</div>
		</div>
		<div class="control-group">
			<label for="anvitae" class="control-label v-top">案例简历:</label>
			<div class="controls">
				<textarea id="anvitae" rows="5" cols="40" name="anvitae" placeholder="案例简历" data-rules="required"></textarea>
			</div>
		</div>
		<div class="control-group">
			<label for="lianjie" class="control-label">案例链接:</label>
			<div class="controls">
				<input type="text" id="lianjie" name="lianjie" class="input-large input-fat">
			</div>
		</div>
		<div class="control-group">
			<label for="piaoshu" class="control-label">票数:</label>
			<div class="controls">
				<input type="text" id="piaoshu" name="piaoshu" class="input-large input-fat">
			</div>
		</div>
		<div class="control-group">
			<label for="state" class="control-label">有效状态</label>
			<div class="controls">
				<select id="state" name="state">
					<option value="1">正常</option>
					<option value="2">无效</option>
				</select>
			</div>
		</div>
		<div class="control-group">
			<label class="control-label"></label>
			<div class="controls">
				<input type="reset" value="取消" name="" class="sui-btn btn-large ">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="submit" value="提交" name="" class="sui-btn btn-large btn-primary">
			</div>
		</div>
	</div>
	</form>
</div>