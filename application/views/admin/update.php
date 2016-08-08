<html>
<head>
	<meta charset="UTF-8">
	<title>添加文章</title>
	<link href="<?php echo base_url().'/style/index/'?>000.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url() ?>org/ueditor/ueditor.all.min.js"></script>
	<script type="text/javascript">
		window.UEDITOR_HOME_URL = "<?php echo base_url() ?>org/ueditor/";
		window.onload = function(){
			window.UEDITOR_CONFIG.initialFrameWidth = 900;
			window.UEDITOR_CONFIG.initialFrameHeight = 600;
			UE.getEditor('content');
		}
	</script>
	<script type="text/javascript" src="<?php echo base_url() ?>org/ueditor/ueditor.config.js"></script>
	<style type="text/css">
		.title b{
			margin-left:350px;
			color:#AE39B0;
		}
		span{
			color:red;
		}
	</style>
</head>
<body>
<form action="<?php echo site_url().'/admin/article/update'?>" method="POST" enctype="multipart/form-data">
<div class="title">
	<b>编辑公告</b>
</div>
<table width="50%" border="1">
  <tr>
    <td width="200">文章标题:</td>
    <td><input type="text" name="title" style="width:400px"value="<?php echo $text[0]['title']?>"//错误出现不删除输入框的内容 />
	<?php echo form_error('title','<span><b>','</b></span>')?>  
	</td>
  </tr>
  <tr>
  	<input type="hidden" name="number" value="<?php echo $text[0]['number']?>">
    <td>文章作者:</td>
    <td><input type="text" name="writer" value="<?php echo $text[0]['writer']?>" /></td>
  </tr>
  <tr>
    <td>置顶:</td>
    <td>
		<input type="radio" name="top" value="0"<?php echo set_radio('type','0',TRUE)?>>置顶
		<input type="radio" name="top" value="1"<?php echo set_radio('type','1')?>>不置顶
	</td>   
  </tr>
  <tr>
    <td>发表时间:</td>
    <td><input type="text" name="time" value="<?php echo $text[0]['time']?>" />
    	<?php echo form_error('time','<span><b>','</b></span>')?></td>
  </tr>
  <tr>
	<td colspan="10">
		<textarea name="content" id="content" style="width:1050px;height:380px;"><?php echo $text[0]['content']?>"</textarea>
		<?php echo form_error('content','<span>','</span>')?>		
	</td>
  </tr>
  <tr>
	<td colspan="10">
		<input type="submit" name="submit"value="提交">
	</td>
  </tr>
</table>
</form>
</body>
</html>