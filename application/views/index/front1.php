<html>
<head>
<meta charset="UTF-8">
<title>河南大学计算机与信息工程学院</title>
<link href="<?php echo base_url().'/style/index/'?>nav.css" type="text/css" rel="stylesheet">
	<script type="text/javascript" src="<?php echo base_url().'/style/index/'?>js/jquery-1.6.4.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url().'/style/index/'?>js/xin.js"></script>
</head>
<body>
	<div class="top">
		<div class="top1">
			<img src="<?php echo base_url().'/style/index/'?>image/headbg.jpg">
			<div class="top2">
				<span>设为主页   |</span>
				<span>加入收藏   |</span>
				<span>院长信箱</span>
			</div>
		</div>
	</div>
<div class="nav0">
	<div class="nav">
		<ul>
			<li><b>首页</b></li>
			<li><b>学院概况</b>
				<ul>
					<li>学院简介</li>
					<li>现任领导</li>
					<li>机构设置</li>
					<li>院务公开</li>
				</ul>
			</li>
			<li><b>党务工作</b>
				<ul>
					<li>组织建设</li>
					<li>工作动态</li>
					<li>理论学习</li>
					<li>相关下载</li>
				</ul>
			</li>
			<li><b>群团组织</b>
				<ul>
					<li>团委工作 </li>
					<li>工会工作</li>
				</ul>
			</li>
			<li><b>师资队伍</b>
				<ul>
					<li>队伍简介</li>
					<li>学者名录</li>
					<li>系室分类</li>
				</ul>
			</li>
			<li><b>教学工作</b>
				<ul>
					<li>本科生教育</li>
					<li>成人教育</li>
					<li>教学资源</li>
					<li>相关文件</li>
					<li>下载中心</li>
				</ul>
			</li>
			<li><b>研究生教育</b>
				<ul>
					<li>培养计划</li>
					<li>日常管理</li>
					<li>规章制度</li>
					<li>导师信息</li>
					<li>下载中心</li>
				</ul>
			</li>
			<li><b><a href="<?php echo site_url().'/index/home/science1'?>">科学研究</a></b>
				<ul>
					<li><a href="<?php echo site_url().'/index/home/science1'?>">科研机构</a></li>
					<li><a href="<?php echo site_url().'/index/home/science2'?>">科研成果</a></li>
					<li><a href="<?php echo site_url().'/index/home/science3'?>">学术交流</a></li>
					<li><a href="<?php echo site_url().'/index/home/science4'?>">重点团队</a></li>
					<li><a href="<?php echo site_url().'/index/home/science'?>">下载中心</a></li>	
				</ul>
			</li>
			<li><b>学生工作</b>
				<ul>
					<li>规章制度</li>
					<li>心理健康</li>
					<li>助学贷款</li>
				</ul>
			</li>
			<li><b>招生就业</b>
				<ul>
					<li>本科生</li>
					<li>研究生</li>
					<li>成人教育</li>
				</ul>
			</li>
			<li><b>信息平台 </b>
				<ul>
					<li>信息平台</li>
				</ul>
			</li>
		</ul>
	</div>
</div>
<div class="content">
	<div class="picture">
		<ul>
		<?php foreach($text as $v):?>
			<li>
				<img src="http://[::1]/CI/uploads/<?php echo $v['title']?>">
			</li>		
		<?php endforeach ?>
<!-- 		<li><img src="<?php echo base_url().'/style/index/'?>image/jd95.jpg"></li>
			<li><img src="<?php echo base_url().'/style/index/'?>image/img5.png"></li>
			<li><img src="<?php echo base_url().'/style/index/'?>image/img2.png"></li>
			<li><img src="<?php echo base_url().'/style/index/'?>image/img3.png"></li> -->
		</ul>
	</div>
	<div class="button">
		<span class="one">1</span>
		<span>2</span>
		<span>3</span>
		<span>4</span>
	</div>
	<div class="menu_left">
		<img src="<?php echo base_url().'/style/index/'?>image/newsbg.jpg">
		<div class="menu_one">
			<ul>
				<?php foreach($text0 as $v):?>
					<li><font><?php echo $v['title']?></li></font>
				<?php endforeach ?>
			</ul>
		</div>
		<div class="menu_one1">
			<div class="menu_one2">
				<img src="<?php echo base_url().'/style/index/'?>image/radio_icon.png">
				<a href="<?php echo site_url().'/index/home/news'?>">阅读更多</a>
			</div>
		</div>
	</div>
	<div class="menu_right">
		<img src="<?php echo base_url().'/style/index/'?>image/gonggaobg.jpg">
		<div class="menu_two">
			<ul>
				<?php foreach($text1 as $v):?>
					<li><font><?php echo $v['title']?></li></font>
				<?php endforeach ?>
			</ul>
		</div>
	    <div class="menu_one1">
			<div class="menu_one2">
				<img src="<?php echo base_url().'/style/index/'?>image/radio_icon.png">
				<a href="<?php echo site_url().'/index/home/announce'?>">阅读更多</a>
			</div>
		</div>
	</div>
</div>
<div class="bottom">
	<div class="bottom1">
		<div class="bottom01">
			<img src="<?php echo base_url().'/style/index/'?>image/1.png"><b>智能技术与系统重点实验室</b>
			<img src="<?php echo base_url().'/style/index/'?>image/2.png"><b><a href="<?php echo site_url().'/index/home/login'?>">教师办公系统</a></b>
			<img src="<?php echo base_url().'/style/index/'?>image/3.png"><b>院友会</b>
			<img src="<?php echo base_url().'/style/index/'?>image/4.png"><b>党的群众路线教育实践活动专题</b>
			<img src="<?php echo base_url().'/style/index/'?>image/5.png"><b>常用链接</b>
		</div>
		<div class="bottom01_right">
			<img src="<?php echo base_url().'/style/index/'?>image/qingnianzhisheng.jpg">
		</div>
	</div>
	<div class="bottom2">
		<div class="bottom02">
			<p><a>【河南大学计算机与信息工程学院】</a> 地址：中国 河南 开封/金明大道 | 邮编：475001/475004</p> 
            <p>版权所有  	&copy 河南大学计算机与信息工程学院 | <a><u>浏览量:<?php echo $v_num;?></u></a></p> 
		</div>
	</div>
</div>
</body>
</html>  