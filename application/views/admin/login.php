<style type="text/css">
*{
	margin:0px;
	padding:0px;
}
.pic image{
	position:absolute;
	z-index:0;
}
.center{
	background:#ADDEEE;
	width:300px;
	height:180px;
	position:absolute;
	z-index:5;
	margin-top:-500px;
	margin-left:600px;
	border-radius:10px;
	border:3px solid #58C8F1;
}
.center a{
	color:#001259;
	font-weight:bold;
}
.center p{
	margin-top:10px;
	color:#3C7FB1;
	text-align:center;
}
.center span{
	margin-left:48px;
	color:#3C7FB1;
}
.yanzhengma{
	margin-top:10px;
	margin-left:0px;
}
.center img{
	margin-left: 190px;
	margin-top: -25px;
}
.top b{
	cursor:pointer;
	position:relative;
	z-index:5;
	margin-top:-760px;
	float:right;
	margin-right:20px;
}
.bott input{
	width:78px;
	height:30px;
}
.center img{}
</style>
<div class="all">
	<div class="pic">
		<img src="<?php echo base_url().'/style/admin/'?>images/123233eubnmcdxdngd3y91.jpg"height="760px"
		width="1583px"/>
	</div>
	<div class="top">
		<b><a href="<?php echo site_url('index/home/look1')?>">返回</a></b>
	</div>
	<div class="center">
		<form action="<?php echo site_url().'/admin/login/login_in/'?>" method="post" name="myform" >
		<a>网站后台管理登录</a>
		<p>管理员：<input type="text" name="user"/></p>
		<p>密码:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="password" name="password"/></p>
		<div class="yanzhengma">
			<span>验证码:&nbsp&nbsp <input id="verify" name="captcha" style="width:65px;height:25px;"/></span>
		</div>	
		<img src="<?php echo base_url('index/home/code/')?>">	
		<div class="bott">
			<p><input type="submit" name="submit" value="登录"></p>
		</div>
		</form>
	</div>
</div>



	

