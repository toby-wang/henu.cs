<html>
<head>
	<meta charset="UTF-8">
	<title>查看文件</title>
	<style type="text/css">
	.title b{
		color:red;
		margin-left: 550px;
	}
	td{
		text-align: center;
	}
	.page{
		float: right;
		margin-right: 200px;
	}
	</style>
</head>
<body>
	<form action="" name="" method="post">
		<div class="title">
			<b>文章列表</b>
		</div>
		<table width="85%" border="1">
			<tr>
				<td width="450">标题</td>
				<td width="200">添加时间</td>
				<td width="200">操作</td>  
			</tr>
			<?php foreach($text as $v):?>
			<tr>
				<td><?php echo $v['title']?></td>
				<td><?php echo $v['time']?></td>
				<td>[<a href="<?php echo site_url('admin/science/delete/'.$v['title'])?>">删除</a>]</td>
			</tr>
			<?php endforeach?>
		</table>
	</form>
	<a href="<?php echo site_url().'/admin/article/index1/'?>">上传文件</a>
</body>
</html>