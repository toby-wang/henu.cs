<html>
<head>
	<meta charset="UTF-8">
	<title>上传文件</title>
	<style type="text/css">
	.form table{
		margin-left: 50px;
	}
	</style>
</head>
<body>
	<form action="<?php echo site_url().'/admin/article/index1'?>" name="file" method="post" 
		enctype="multipart/form-data">
		<table border="1" >
			<tr>
				<p><td>上传文件</td></p>
				<p><td><input type="file" name="file" ></td></p>
			</tr>
			<tr>
				<p><td>文件姓名</td></p>
				<p><td><input type="text" name="name" ></td></p>
			</tr>
			<tr>
				<p><td>发布日期</td></p>
				<p><td><input type="text" name="time" ></td></p>
			</tr>
			<tr>
				<td colspan="10">
					<input type="submit" name="submit" value="提交">
				</td>
  			</tr>
		</table>
	</form>
</body>
</html>