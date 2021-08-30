<?php ${(require_once('SimpleAuth.php'))}->protectme(); ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta name="description" content="Neon Admin Panel" />
	<meta name="author" content="" />

	<link rel="icon" href="assets/images/favicon.ico">

	<title>Copywriterr - The #1 AI Content Generator</title>

	<link rel="stylesheet" href="assets/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css">
	<link rel="stylesheet" href="assets/css/font-icons/entypo/css/entypo.css">
	<link rel="stylesheet" href="//fonts.googleapis.com/css?family=Noto+Sans:400,700,400italic">
	<link rel="stylesheet" href="assets/css/bootstrap.css">
	<link rel="stylesheet" href="assets/css/neon-core.css">
	<link rel="stylesheet" href="assets/css/neon-theme.css">
	<link rel="stylesheet" href="assets/css/neon-forms.css">
	<link rel="stylesheet" href="assets/css/custom.css">
<link rel="stylesheet" href="assets/css/skins/blue.css">

	<script src="assets/js/jquery-1.11.3.min.js"></script>

	<!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->


</head>
<body class="page-body boxed-layout" data-url="http://neon.dev">

<div class="page-container"><!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->
	
	<div class="sidebar-menu">

		<div class="sidebar-menu-inner">
			
			<header class="logo-env">


				<!-- logo -->
				<div class="logo">
					<a href="index.php">
						<img src="assets/images/logo2x.png" width="195" alt="" />
					</a>
				</div>

			
			</header>

<div class="sidebar-user-info">

				<div class="sui-normal">
					<a href="#" class="user-link">
						<img src="assets/images/thumb-1@2x.png" width="55" alt="" class="img-circle" />

						<span>Welcome,</span>
						<strong><?php echo $simpleAuthInstance->getLogin(); ?></strong>
					</a>
				</div>
</div>
			
									
			<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li>
					<a href="index.php">
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>
				
				</li>
				
<li>
					<a href="paragraph-writer.php">
						<i class="entypo-menu"></i>
						<span class="title"><b>Paragraph Writer</b></span>
					</a>
				</li>
				<li    class="opened active">
					<a href="article-writer.php" >
						<i class="entypo-monitor"></i>
						<span class="title"><b>Article Writer</b></span>
					</a>
				</li>
<li>
					<a href="blog-writer.php">
						<i class="entypo-flow-tree"></i>
						<span class="title"><b>Blog Post Writer</b></span>
					</a>
				</li>
			<li>
					<a href="website-content-writer.php" >
						<i class="entypo-newspaper"></i>
						<span class="title"><b>Website Content Writer</b></span>
					</a>
				</li>
			
				<li>
					<a href="product-review-writer.php">
						<i class="entypo-star"></i>
						<span class="title"><b>Product Review Writer</b></span>
					</a>
			
				</li>
				<li>
					<a href="product-features-writer.php">
						<i class="entypo-list"></i>
						<span class="title"><b>Product Features Writer</b></span>
					</a>
			
				</li>
				<li>
					<a href="story-writer.php">
						<i class="entypo-smashing"></i>
						<span class="title">Story Writer</span>
					</a>
				</li>
					<li>
				    <a href="essay-writer.php">
						<i class="entypo-book-open"></i>
						<span class="title"><b>Essay Writer</b></span>
					</a>
				    </li>
					<li>
					<a href="tutorials.php">
						<i class="entypo-video"></i>
						<span class="title">Tutorials</span>
					</a>
				</li>
<li>
					<a href="support.php">
						<i class="entypo-mail"></i>
						<span class="title">Support Desk</span>
					
					</a>
					
				</li>
			
				
			</ul>
			
		</div>

	</div>

	<div class="main-content">
				
		<div class="row">
		
			<!-- Profile Info and Notifications -->
			<div class="col-md-6 col-sm-8 clearfix">
		
				<ul class="user-info pull-left pull-none-xsm">
		
					<!-- Profile Info -->
					
		
						<ul class="dropdown-menu">
		
							<!-- Reverse Caret -->
							<li class="caret"></li>
		
							<!-- Profile sub-links -->
							
		
							<li>
								
							</li>
		
						
						</ul>
					</li>
		
				</ul>
				
				<ul class="user-info pull-left pull-right-xs pull-none-xsm">
		
					<!-- Raw Notifications -->
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-attention"></i>
							<span class="badge badge-info">1</span>
						</a>
		
						<ul class="dropdown-menu">
							<li class="top">
								<p class="small">
									
									You have <strong>1</strong> new notifications.
								</p>
							<a href=""><b><u>Welcome to Copywriterr - Start generating content now!</b></u></a>
							</li>
							
							<li>
								<ul class="dropdown-menu-list scroller">
									<li class="unread notification-success">
									
									</li>
									
									<li class="notification-secondary">
									
									</li>
									
									
								</ul>
							</li>
							
							
						</ul>
		
					</li>
		
					
		
					<!-- Task Notifications -->
					<li class="notifications dropdown">
		
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
							<i class="entypo-list"></i>
							<span class="badge badge-warning"></span>
						</a>
		
						<ul class="dropdown-menu">
							<li class="top">
								<p>Server Performance</p>
							</li>
							
							<li>
								<ul class="dropdown-menu-list scroller">
								
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Processing Speed</span>
												<span class="percent">91%</span>
											</span>
											
											<span class="progress">
												<span style="width: 91%;" class="progress-bar progress-bar-success">
													<span class="sr-only">12 Seconds</span>
												</span>
											</span>
										</a>
									</li>
									
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Campaign Success Rate</span>
												<span class="percent">98%</span>
											</span>
											
											<span class="progress progress-striped">
												<span style="width: 98%;" class="progress-bar progress-bar-info">
													<span class="sr-only">98% Success</span>
												</span>
											</span>
										</a>
									</li>
									<li>
										<a href="#">
											<span class="task">
												<span class="desc">Backup Progress</span>
												<span class="percent">100%</span>
											</span>
											
											<span class="progress progress-striped">
												<span style="width: 100%;" class="progress-bar progress-bar-important">
													<span class="sr-only">100% Backed Up</span>
												</span>
											</span>
										</a>
									</li>
								</ul>
							</li>
							
							
						</ul>
		
					</li>
		
				</ul>
		
			</div>
		
		
			<!-- Raw Links -->
			<div class="col-md-6 col-sm-4 clearfix hidden-xs">
		
				<ul class="list-inline links-list pull-right">
		
					<!-- Language Selector -->
					<li class="dropdown language-selector">
		
						Language: &nbsp;
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-close-others="true">
							<img src="assets/images/flags/flag-uk.png" width="16" height="16" />
						</a>
		
						<ul class="dropdown-menu pull-right">
						
							<li class="active">
								<a href="#">
									<img src="assets/images/flags/flag-uk.png" width="16" height="16" />
									<span>English</span>
								</a>
							</li>
						
						</ul>
		
					</li>
		
					<li class="sep"></li>
		
					
					<li>
						<a href="support.php" >
							<i class="entypo-chat"></i>
							Support
		
							<span class="badge badge-success chat-notifications-badge is-hidden">0</span>
						</a>
					</li>
		
					<li class="sep"></li>
		
					<li>
						<a href="?simple_auth_action=logout">
							Log Out <i class="entypo-logout right"></i>
						</a>
					</li>
				</ul>
		
			</div>
		
		</div>
		
		<hr />
		<br>
				<img src="assets/images/bi.png" width="40%"></img>
		<br />

        
		        <p>Content:</p>
		<div style="width:50%">
			<textarea id="content"></textarea>
		</div>
        <br>
		<div style="width:50%" class="center">
			<input type="button" id="generate" value="Generate">
		</div>
        <br>
        Result:
        <br>
        <div id="result"></div>
		<script>
			$(function () {
				$('#generate').on('click', function () {
					var content = $('#content').val();
					$('#result').html('<img style="width:100px; height:100px" src="https://c.tenor.com/5o2p0tH5LFQAAAAi/hug.gif">')
					$.ajax({
						method: "POST",
						url: 'https://thecontentranker.herokuapp.com/generate',
						data: {
							"context": content,
							"config": 2,
							"specific": ""
						},
						dataType : 'json'
					}).done(function( msg ) {
						$('#result').html(msg['text'].replaceAll('\n', '<br>'));
					});;
				});
			});
		</script>
		
		
		
	
		<!-- Footer -->
		<footer class="main">
			
			Copyrights &copy; 2021 - <strong>Powered By</strong> <a href="https://copywriterr.co" target="_blank"><b style="color:orange">Copywriterr</b></a>
		
		</footer>
	</div>

		
	<div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1" data-max-chat-history="25">
	
		<div class="chat-inner">
	
	
			<h2 class="chat-header">
				<a href="#" class="chat-close"><i class="entypo-cancel"></i></a>
	
				<i class="entypo-users"></i>
				Chat
				<span class="badge badge-success is-hidden">0</span>
			</h2>
	

	
		</div>
	
		<!-- conversation template -->
		<div class="chat-conversation">
	
			<div class="conversation-header">
				<a href="#" class="conversation-close"><i class="entypo-cancel"></i></a>
	
				<span class="user-status"></span>
				<span class="display-name"></span>
				<small></small>
			</div>
	
			<ul class="conversation-body">
			</ul>
	
			<div class="chat-textarea">
				<textarea class="form-control autogrow" placeholder="Type your message"></textarea>
			</div>
	
		</div>
	
	</div>
	
	
	<!-- Chat Histories -->
	<ul class="chat-history" id="sample_history">
		
	</ul>
	
	
	
	
	<!-- Chat Histories -->
	<ul class="chat-history" id="sample_history_2">
	
	</ul>

	
</div>




	<!-- Bottom scripts (common) -->
	<script src="assets/js/gsap/TweenMax.min.js"></script>
	<script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/joinable.js"></script>
	<script src="assets/js/resizeable.js"></script>
	<script src="assets/js/neon-api.js"></script>


	<!-- Imported scripts on this page -->
	<script src="assets/js/neon-chat.js"></script>


	<!-- JavaScripts initializations and stuff -->
	<script src="assets/js/neon-custom.js"></script>


	<!-- Demo Settings -->
	<script src="assets/js/neon-demo.js"></script>

</body>
</html>