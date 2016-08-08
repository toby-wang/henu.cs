<html>
<head>
	<meta charset="UTF-8">
	<title>查看文章</title>
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
				<td width="200">置顶</td>
				<td width="200">添加时间</td>
				<td width="200">操作</td>  
			</tr>

			<?php foreach($text as $v):?>
			<tr>
				<td><?php echo $v['title']?></td>
				<td>
					<?php
					
					$location1=site_url()."/admin/article/top/".$v['number'];
					$location2=site_url()."/admin/article/untop/".$v['number'];
					if($v['type']==0)
						echo "<a href=$location1>设为置顶</a>";
					else
						echo "<a href=$location2>取消置顶</a>";
					?>	
				 	
				</td>
				<td><?php echo $v['time']?></td>
				<td>[<a href="<?php echo site_url('admin/article/update_cate/'.$v['number'])?> ">编辑</a>]
					[<a href="<?php echo site_url('admin/article/delete/'.$v['number'])?>">删除</a>]</td>
			</tr>
			<?php endforeach?>
		</table>
	</form>
	<a href="<?php echo site_url().'/admin/article/add_cate0/'.$v['top']?>">添加新闻</a>
	<div class="page">
		<?php echo $links ?>
	</div>
</body>
</html>