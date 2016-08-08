<div class="content_right">
		<div class="content_right_top">
			<img src="<?php echo base_url().'/style/index/'?>image/ctitlebg6.jpg">
		</div>
		<div class="content_right_bottom">
						<p><a href="<?php echo site_url().'/index/home/look1'?>">首页</a> • <a href="<?php echo site_url().'/index/home/science'?>">下载中心</a></p>
			<div class="blank"></div>
			<ul>
				<?php foreach($text as $v):?>
					<li>
						<img src="<?php echo base_url().'/style/index/'?>image/ullist.png">
						<a href="/CI/uploads/<?php echo $v['title']?>" download=" "><?php echo $v['name']?></a>
						<b><?php echo $v['time']?></b>
					</li>		
				<?php endforeach ?>
		</div>
</div>
</div>