

<!DOCTYPE>
<html>
<head>
<meta charset="utf-8" />
<title>后台管理系统</title>
<link type="text/css" rel="stylesheet" href="<?php echo base_url().'/style/admin/'?>style.css" />
<script type="text/javascript" src="<?php echo base_url().'/style/admin/'?>js/jquery-1.8.3.min.js"></script>
<script type="text/javascript" src="<?php echo base_url().'/style/admin/'?>js/menu.js"></script>
</head>

<body>
<div class="top"></div>
<div id="header">
	<div class="logo">计院后台管理系统</div>
	<div class="navigation">
		<ul>
		 	<li>欢迎您！</li>
			<li><?php echo $this->session->userdata('user');?> </li>
			<li><a href="">修改密码</a></li>
			<li><a href="">设置</a></li>
			<li><a href="<?php echo site_url('admin/login/login_out')?>">退出</a></li>
		</ul>
	</div>
</div>
<div id="content">
	<div class="left_menu">
	<ul id="nav_dot">
      <li>
          <h4 class="M1"><span>●</span>首页</h4>
          <div class="list-item none">
            <a href="<?php echo site_url().'/admin/article/index/'?>" target="chakan">公告通知</a>
            <a href="<?php echo site_url().'/admin/article/index0/'?>" target="chakan">学院新闻</a>
            <a href="">图片新闻</a>
          </div>
        </li>
        <li>
          <h4 class="M2"><span>●</span>学院概况</h4>
          <div class="list-item none">
            <a href=''>学院简介</a>
            <a href=''>现任领导</a>
            <a href=''>机构设置</a>
            <a href=''>院务公开</a>
           </div>
        </li>
        <li>
          <h4 class="M3"><span>●</span>党务工作</h4>
          <div class="list-item none">
            <a href=''>组织建设</a>
            <a href=''>工作动态</a>
            <a href=''>理论学习</a>
            <a href=''>相关下载</a>
          </div>
        </li>
		<li>
          <h4 class="M4"><span>●</span>群团组织</h4>
          <div class="list-item none">
            <a href=''>团委工作</a>
            <a href=''>工会工作</a>
          </div>
        </li>
		<li>
          <h4 class="M5"><span>●</span>师资队伍</h4>
          <div class="list-item none">
            <a href=''>队伍简介</a>
            <a href=''>教师汇总</a>
            <a href=''>学者名录</a>
            <a href=''>系室分类</a>
          </div>
        </li>
		<li>
          <h4  class="M6"><span>●</span>教学工作</h4>
          <div class="list-item none">
            <a href=''>本科生教育</a>
            <a href=''>成人教育</a>
            <a href=''>教学资源</a>
            <a href=''>相关文件</a>
            <a href=''>下载中心</a>
          </div>
        </li>
		<li>
          <h4  class="M7"><span>●</span>研究生教育</h4>
          <div class="list-item none">
            <a href=''>培养计划</a>
            <a href=''>日常管理</a>
            <a href=''>规章制度</a>
            <a href=''>导师信息</a>
            <a href=''>下载中心</a>
          </div>
        </li>
		<li>
          <h4   class="M8"><span>●</span>科学研究</h4>
          <div class="list-item none">
            <a href=''>科研机构</a>
            <a href=''>科研成果</a>
            <a href=''>学术交流</a>
		      	<a href=''>重点团队</a>
            <a href="<?php echo site_url().'/admin/science/look/'?>" target="chakan">下载中心</a>
          </div>
        </li>
				<li>
          <h4 class="M9"><span>●</span>学生工作</h4>
          <div class="list-item none">
            <a href=''>规章制度</a>
            <a href=''>心理健康</a>
            <a href=''>助学贷款</a>
          </div>
        </li>
				<li>
          <h4 class="M10"><span>●</span>招生就业</h4>
          <div class="list-item none">
            <a href=''>本科生</a>
            <a href=''>研究生</a>
            <a href=''>成人教育</a>
          </div>
        </li>
  </ul>
		</div>
		<div class="m-right">
			<div class="right-nav">
				<ul>
					<li><img src="<?php echo base_url().'/style/admin/'?>images/home.png"></li>
					<li style="margin-left:25px;">您当前的位置：</li>
					<li><a href="<?php echo site_url().'/admin/admin/'?>">首页</a></li>
					<li>></li>
					<li><a href="<?php echo site_url().'/admin/article/index0/'?>"  target="chakan">公告通知</a></li>
				</ul>
			</div>
      <div class="main">
        <iframe  frameborder="0" src="<?php echo base_url().'/style/admin/'?>images/welcome.jpg" name="chakan" height="600" width="1250"></iframe>
			</div>
		</div>
</div>
<div class="bottom"></div>
<div id="footer"><p>Copyright©  2016 版权所有 河南大学计算机与信息工程学院</p></div>
<script>navList(12);</script>
</body>
</html>
