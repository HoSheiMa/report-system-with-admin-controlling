<?php ${(require_once('SimpleAuth.php'))}->protectme(); ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Neon Admin Panel"/>
    <meta name="author" content=""/>

    <link rel="icon" href="assets/images/favicon.ico">

    <title>Copywriterr - Members Area</title>

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

    <!--[if lt IE 9]>
    <script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


</head>
<body class="page-body boxed-layout" data-url="http://neon.dev">

<div class="page-container">
    <!-- add class "sidebar-collapsed" to close sidebar by default, "chat-visible" to make chat appear always -->

    <div class="sidebar-menu">

        <div class="sidebar-menu-inner">

            <header class="logo-env">


                <!-- logo -->
                <div class="logo">
                    <a href="index.php">
                        <img src="assets/images/logo2x.png" width="195" alt=""/>
                    </a>
                </div>


            </header>

            <div class="sidebar-user-info">

                <div class="sui-normal">
                    <a href="#" class="user-link">
                        <img src="assets/images/thumb-1@2x.png" width="55" alt="" class="img-circle"/>

                        <span>Welcome,</span>
                        <strong><?php echo $simpleAuthInstance->getLogin(); ?></strong>
                    </a>
                </div>
            </div>


            <ul id="main-menu" class="main-menu">
                <!-- add class "multiple-expanded" to allow multiple submenus to open -->
                <!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
                	<ul id="main-menu" class="main-menu">
				<!-- add class "multiple-expanded" to allow multiple submenus to open -->
				<!-- class "auto-inherit-active-class" will automatically add "active" class for parent elements who are marked already with class "active" -->
				<li   class="opened active">
					<a href="index.php">
						<i class="entypo-gauge"></i>
						<span class="title">Dashboard</span>
					</a>

				</li>

<li>
					<a href="create_project.php">
						<i class="entypo-menu"></i>
						<span class="title"><b>Create Project</b></span>
					</a>
				</li>

                <li>
					<a href="Projects_view.php">
						<i class="entypo-menu"></i>
						<span class="title"><b>Projects</b></span>
					</a>
				</li>
                           <?php
                $role = $_SESSION['simple_auth']['role'];
                if ($role == "admin") {
                    ?>
                    <li>
                        <a href="Create_user.php">
                            <i class="entypo-menu"></i>
                            <span class="title"><b>Create User</b></span>
                        </a>
                    </li>
                      <li>
                        <a href="categories.php">
                            <i class="entypo-menu"></i>
                            <span class="title"><b>categories</b></span>
                        </a>
                    </li>
                      <li>
                        <a href="members_permissions.php">
                            <i class="entypo-menu"></i>
                            <span class="title"><b>members permissions</b></span>
                        </a>
                    </li>
                    <?php
                }
                ?>


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

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
                            <i class="entypo-attention"></i>
                            <span class="badge badge-info">1</span>
                        </a>

                        <ul class="dropdown-menu">
                            <li class="top">
                                <p class="small">

                                    You have <strong>1</strong> new notifications.
                                </p>
                                <a href=""><b><u>Welcome to Copywriterr - Start generating unlimited content
                                            now!</b></u></a>
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

                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                           data-close-others="true">
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
                            <img src="assets/images/flags/flag-uk.png" width="16" height="16"/>
                        </a>

                        <ul class="dropdown-menu pull-right">

                            <li class="active">
                                <a href="#">
                                    <img src="assets/images/flags/flag-uk.png" width="16" height="16"/>
                                    <span>English</span>
                                </a>
                            </li>

                        </ul>

                    </li>


                    <li class="sep"></li>
                    <li>
                        <a href="support.php">
                            <i class="entypo-chat"></i>
                            Support Desk

                            <span class="badge badge-success chat-notifications-badge is-hidden">0</span>
                        </a>
                    </li>

                    <li class="sep"></li>
                    <li>
                        <a href="tutorials.php">
                            <i class="entypo-video"></i>
                            <span class="title"><b>Tutorials</b></span>
                        </a>
                    </li>
                    <li class="sep"></li>
                    <li>
                        <a href="seotools.php">
                            <i class="entypo-rocket"></i>
                            <span class="title">Marketing Tools</span>
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

        <hr/>


        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                // Sample Toastr Notification
                setTimeout(function () {
                    var opts = {
                        "closeButton": true,
                        "debug": false,
                        "positionClass": rtl() || public_vars.$pageContainer.hasClass('right-sidebar') ? "toast-top-left" : "toast-top-right",
                        "toastClass": "black",
                        "onclick": null,
                        "showDuration": "300",
                        "hideDuration": "1000",
                        "timeOut": "5000",
                        "extendedTimeOut": "1000",
                        "showEasing": "swing",
                        "hideEasing": "linear",
                        "showMethod": "fadeIn",
                        "hideMethod": "fadeOut"
                    };

                    toastr.success("Welcome to CR Dashboard! :)", opts);
                }, 3000);


                // Sparkline Charts
                $('.inlinebar').sparkline('html', {type: 'bar', barColor: '#ff6264'});
                $('.inlinebar-2').sparkline('html', {type: 'bar', barColor: '#445982'});
                $('.inlinebar-3').sparkline('html', {type: 'bar', barColor: '#00b19d'});
                $('.bar').sparkline([[1, 4], [2, 3], [3, 2], [4, 1]], {type: 'bar'});
                $('.pie').sparkline('html', {
                    type: 'pie',
                    borderWidth: 0,
                    sliceColors: ['#3d4554', '#ee4749', '#00b19d']
                });
                $('.linechart').sparkline();
                $('.pageviews').sparkline('html', {type: 'bar', height: '30px', barColor: '#ff6264'});
                $('.uniquevisitors').sparkline('html', {type: 'bar', height: '30px', barColor: '#00b19d'});


                $(".monthly-sales").sparkline([1, 2, 3, 5, 6, 7, 2, 3, 3, 4, 3, 5, 7, 2, 4, 3, 5, 4, 5, 6, 3, 2], {
                    type: 'bar',
                    barColor: '#485671',
                    height: '80px',
                    barWidth: 10,
                    barSpacing: 2
                });


                // JVector Maps
                var map = $("#map");

                map.vectorMap({
                    map: 'europe_merc_en',
                    zoomMin: '3',
                    backgroundColor: '#383f47',
                    focusOn: {x: 0.5, y: 0.8, scale: 3}
                });


                // Line Charts
                var line_chart_demo = $("#line-chart-demo");

                var line_chart = Morris.Line({
                    element: 'line-chart-demo',
                    data: [
                        {y: '', a: 100, b: 90},
                        {y: '', a: 90, b: 85},
                        {y: '', a: 93, b: 82},
                        {y: '', a: 94, b: 86},
                        {y: '', a: 97, b: 90},
                        {y: '', a: 97, b: 91},
                    ],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['On that day, the success rate'],
                    redraw: true
                });

                line_chart_demo.parent().attr('style', '');


                // Area Chart
                var area_chart_demo = $("#area-chart-demo");

                area_chart_demo.parent().show();

                var area_chart = Morris.Area({
                    element: 'area-chart-demo',
                    data: [
                        {y: '5th May', a: 100, b: 90},
                        {y: '12th May', a: 90, b: 85},
                        {y: '19th May', a: 93, b: 82},
                        {y: '26th May', a: 94, b: 86},
                        {y: '3rd June', a: 97, b: 90},
                        {y: 'Today', a: 97, b: 91},

                    ],
                    xkey: 'y',
                    ykeys: ['a', 'b'],
                    labels: ['Series A', 'Series B'],
                    lineColors: ['#303641', '#576277']
                });

                area_chart_demo.parent().attr('style', '');


                // Rickshaw
                var seriesData = [[], []];

                var random = new Rickshaw.Fixtures.RandomData(50);

                for (var i = 0; i < 50; i++) {
                    random.addData(seriesData);
                }

                var graph = new Rickshaw.Graph({
                    element: document.getElementById("rickshaw-chart-demo"),
                    height: 193,
                    renderer: 'area',
                    stroke: false,
                    preserve: true,
                    series: [{
                        color: '#73c8ff',
                        data: seriesData[0],
                        name: 'Language Modelling (AI Processes)'
                    }, {
                        color: '#e0f2ff',
                        data: seriesData[1],
                        name: 'Content Generation (Results)'
                    }
                    ]
                });

                graph.render();

                var hoverDetail = new Rickshaw.Graph.HoverDetail({
                    graph: graph,
                    xFormatter: function (x) {
                        return new Date(x * 1000).toString();
                    }
                });

                var legend = new Rickshaw.Graph.Legend({
                    graph: graph,
                    element: document.getElementById('rickshaw-legend')
                });

                var highlighter = new Rickshaw.Graph.Behavior.Series.Highlight({
                    graph: graph,
                    legend: legend
                });

                setInterval(function () {
                    random.removeData(seriesData);
                    random.addData(seriesData);
                    graph.update();

                }, 500);
            });


            function getRandomInt(min, max) {
                return Math.floor(Math.random() * (max - min + 1)) + min;
            }
        </script>


        <div id="chat" class="fixed" data-current-user="Art Ramadani" data-order-by-status="1"
             data-max-chat-history="25">

            <div class="chat-inner">


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

        <form method="post">

            <?php
            include_once './data/conn.php';

            if (isset($_POST['create'])) {
                $email = $_POST['email'];
                $permission = $_POST['permission'];
                $username = $_POST['username'];
                $password = $_POST['password'];

                $r = $conn->query("INSERT INTO `users`(`username`, `email`, `password`, `role`) VALUES ('$username', '$email', '$password', '$permission')");
                if ($r) echo '<div class="alert alert-success" role="alert">
  success!
</div>';
                if (!$r) echo '<div class="alert alert-danger" role="alert">
  Error!
</div>';
            }
            ?>
            <div class="form-group">
                <label for="exampleFormControlInput1">username</label>
                <input type="TXT" name="username" class="form-control" id="exampleFormControlInput1"
                       placeholder="name@example.com">
            </div>
             <div class="form-group">
                <label for="exampleFormControlInput1">email</label>
                <input type="email" name="email" class="form-control" id="exampleFormControlInput1"
                       placeholder="name@example.com">
            </div>
             <div class="form-group">
                <label for="exampleFormControlInput1">password</label>
                <input type="TXT" name="password" class="form-control" id="exampleFormControlInput1"
                       placeholder="name@example.com">
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">permission</label>
                <select class="form-control" name="permission" id="exampleFormControlSelect1">
                    <option>Basic User</option>
                    <option>Pro User</option>
                    <option>Agency User</option>
                    <option>admin</option>
                </select>
            </div>


            <button name="create">Create</button>
        </form>


    </div>


    <!-- Imported styles on this page -->
    <link rel="stylesheet" href="assets/js/jvectormap/jquery-jvectormap-1.2.2.css">
    <link rel="stylesheet" href="assets/js/rickshaw/rickshaw.min.css">

    <!-- Bottom scripts (common) -->
    <script src="assets/js/gsap/TweenMax.min.js"></script>
    <script src="assets/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/joinable.js"></script>
    <script src="assets/js/resizeable.js"></script>
    <script src="assets/js/neon-api.js"></script>
    <script src="assets/js/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>


    <!-- Imported scripts on this page -->
    <script src="assets/js/jvectormap/jquery-jvectormap-europe-merc-en.js"></script>
    <script src="assets/js/jquery.sparkline.min.js"></script>
    <script src="assets/js/rickshaw/vendor/d3.v3.js"></script>
    <script src="assets/js/rickshaw/rickshaw.min.js"></script>
    <script src="assets/js/raphael-min.js"></script>
    <script src="assets/js/morris.min.js"></script>
    <script src="assets/js/toastr.js"></script>
    <script src="assets/js/neon-chat.js"></script>


    <!-- JavaScripts initializations and stuff -->
    <script src="assets/js/neon-custom.js"></script>


    <!-- Demo Settings -->
    <script src="assets/js/neon-demo.js"></script>

</body>
</html>
