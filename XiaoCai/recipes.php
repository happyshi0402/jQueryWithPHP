<?php require('header.php'); ?>

<div class="main-page">

<header>
	<nav>
		<div class="nav-content">
			<ul>
				<li class="nav-menu"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></li>
				<li class="main-title">食谱</li>
				<li class="search-form"><input type="search" placeholder="食谱 食材 工具 话题" /></li>
			</ul>
		</div>
		<div class="nav-recipe-menu">
			<ul>
				<li id="recipe-material-index">食材检索 <span class="glyphicon glyphicon-triangle-right"></span></li>
				<li>|</li>
				<li id="recipe-material-style">料理风格 <span class="glyphicon glyphicon-triangle-right"></span></li>
			</ul>
		</div>

		<div id="recipe-menu-index" class="recipe-menu-slidedown">
			<ul>
				<li><img src="">美素</li>
				<li><img src="">汤和饮品</li>
				<li><img src="">肉和家禽</li>
			</ul>
			<ul>
				<li><img src="">鱼和海鲜</li>
				<li><img src="">米和面</li>
				<li><img src="">面包和甜品</li>
			</ul>
		</div>
	</nav>
</header>


<section>

	<div class="vip-enjoy">
		<div class="vip-video">
			<video src="movie.ogg" controls="controls">
				您的浏览器不支持 video 标签。
			</video>
			<!--<img src="">-->
		</div>
		<div class="vip-content">
			<div class="vip-title">会员专享标题</div>
			<div class="vip-post">内容标题内容标题内容标题内容标题内容标题内容标题内容标题内容标题</div>
			<div class="vip-menu">
				<ul>
					<li><span class="glyphicon glyphicon-eye-open"></span> 268</li>
					<li><span class="glyphicon glyphicon-heart-empty"></span></li>
					<li><span class="glyphicon glyphicon-link"></span></li>
				</ul>
			</div>
			<div class="teacher-brand">
				ALVIN LEE
			</div>
		</div>
	</div>

	<div class="vip-enjoy">
		<div class="vip-video">
			<video src="movie.ogg" controls="controls">
				您的浏览器不支持 video 标签。
			</video>
			<!--<img src="">-->
		</div>
		<div class="vip-content">
			<div class="vip-title">会员专享标题</div>
			<div class="vip-post">内容标题内容标题内容标题内容标题内容标题内容标题内容标题内容标题</div>
			<div class="vip-menu">
				<ul>
					<li><span class="glyphicon glyphicon-eye-open"></span> 268</li>
					<li><span class="glyphicon glyphicon-heart-empty"></span></li>
					<li><span class="glyphicon glyphicon-link"></span></li>
				</ul>
			</div>
			<div class="teacher-brand">
				ALVIN LEE
			</div>
		</div>
	</div>

	<div class="loading">
		<div class="loading-main"><span class="glyphicon glyphicon-option-horizontal"></span><span class="glyphicon glyphicon-option-horizontal"></span></div>
	</div>

</section>

<footer>
	
</footer>

</div>

<script type="text/javascript">
	$(document).ready(function(){
		
		//食谱上方按钮被单击
		$('.nav-recipe-menu ul li').click(function(){
			var typeClicked=$(this).attr('id').split('-');
			switch(typeClicked[2]){
				case 'index'://食材检索被单击

					break;
				case 'style'://料理风格被单击
					break;
				default:
					break;
			}
		});
	
	});

</script>

<?php require('footer.php'); ?>