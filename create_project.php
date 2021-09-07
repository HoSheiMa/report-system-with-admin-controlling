<?php ${(require_once('SimpleAuth.php'))}->protectme(); ?>
﻿<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
    <meta name="description" content="Neon Admin Panel"/>
    <meta name="author" content=""/>

    <link rel="icon" href="assets/images/favicon1.png">

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


                <!-- logo collapse icon -->
                <div class="sidebar-collapse">
                    <a href="#" class="sidebar-collapse-icon">
                        <!-- add class "with-animation" if you want sidebar to have animation during expanding/collapsing transition -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>


                <!-- open/close menu icon (do not remove if you want to enable menu on mobile devices) -->
                <div class="sidebar-mobile-menu visible-xs">
                    <a href="#" class="with-animation"><!-- add class "with-animation" to support animation -->
                        <i class="entypo-menu"></i>
                    </a>
                </div>

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


            <?php
            include_once 'Links_bar.php';
            ?> </div>

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
                                <a href="create_project.php"><b><u>Welcome to Copywriterr - Start generating unlimited
                                            content
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
        <br>
        <img src="assets/images/newproject.png"></img><br><br><br>
        <form method="post">

            <?php
            //Import PHPMailer classes into the global namespace
            //These must be at the top of your script, not inside a function
            use PHPMailer\PHPMailer\PHPMailer;
            use PHPMailer\PHPMailer\SMTP;
            use PHPMailer\PHPMailer\Exception;

            //Load Composer's autoloader
            require 'vendor/autoload.php';

            //Create an instance; passing `true` enables exceptions
            $mail = new PHPMailer(true);
            include_once './data/conn.php';

            if (isset($_POST['create'])) {
                $email = $_SESSION['simple_auth']['login'];
                $title = $_POST['title'];
                $type = $_POST['type'];

                $number = $_POST['number'];

                $y = $conn->query("SELECT * FROM `categories` WHERE `name`='$type'");

                $y = $y->fetch_array(MYSQLI_ASSOC) ;

                $availableForType = json_decode($y['Words']);

                if (!in_array($number, $availableForType)) {
                        echo
                    '<div class="alert alert-danger" role="alert">
  Your Have Max Number Word For This Type!
</div>';
                        return;
                }


                $about = $_POST['about'];
                $status = "Processing";
                $today = date("m.d.y");
                $projectTodayDay = (int)$conn->query("SELECT * FROM `project` WHERE `email`='$email' and `date`='$today'")->num_rows;
                $role = $_SESSION['role'];
                $maxProjectPerDay = $conn->query("SELECT * FROM `members_types` WHERE `name`='$role'");
                $maxProjectPerDay = (int)$maxProjectPerDay->fetch_array(MYSQLI_ASSOC)['create_project_aday'];
                if ($projectTodayDay >= $maxProjectPerDay) {
                    echo "<div class=\"alert alert-danger\" role=\"alert\">
  You've reached the maximum projects limit for today!
</div>";
                    return;
                }


                $r = $conn->query("INSERT INTO `project`( `email`, `title`, `type`, `number`, `about`, `status`, `date`) VALUES ('$email', '$title', '$type', '$number', '$about', '$status', '$today')");
                if ($r) echo '<div class="alert alert-success" role="alert">
  success!
</div>';
                if (!$r) {
                    echo
                    '<div class="alert alert-danger" role="alert">
  Error!
</div>';
                    return;
                }
				
				$SendFor = ["iwarrior786@gmail.com", "ahistb2019@gmail.com", "qandilafa@gmail.com"];
				
				foreach ($SendFor as $to) {

                try {
                    //Server settings
//    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
                    $mail->isSMTP();                                            //Send using SMTP
                    $mail->Host = 'smtp.gmail.com';                     //Set the SMTP server to send through
                    $mail->SMTPAuth = true;                                   //Enable SMTP authentication
                    $mail->Username = '';                     //SMTP username
                    $mail->Password = '';                               //SMTP password
                    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
                    $mail->Port = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

                    //Recipients
                    $mail->setFrom('System@system.com', 'Mailer');
                    $mail->addAddress($to, 'Admin');     //Add a recipient

                    //Content
                    $mail->isHTML(true);                                  //Set email format to HTML
                    $mail->Subject = 'You have new project "Articles"';
                    $mail->Body = 'You have new project "Articles" from ' . $email;
                    $mail->AltBody = 'You have new project "Articles"';

                    $mail->send();
//    echo 'Message has been sent';
                } catch (Exception $e) {
//    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
                }
				}
            }
            ?>
            <div class="form-group">
                <label for="exampleFormControlInput1"><b><font size="3" style="color:#253A8F">Project
                            Title</font></b></label>
                <input type="TXT" name="title" class="form-control" id="exampleFormControlInput1"
                       placeholder="Give your project a name.." required>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1"><b><font size="3" style="color:#253A8F">Content
                            Type</font></b></label>
                <select onchange="UpdateWords(this)" class="form-control" name="type" id="exampleFormControlSelect1"
                        required>
                    <option value="" disabled selected>Choose Type</option>
                    <?php
                    $c = $conn->query("SELECT * FROM `members_types` WHERE 1");

                    $c = $c ? $c->fetch_all(MYSQLI_ASSOC) : [];
                    $r = $conn->query("SELECT * FROM `categories` WHERE 1");

                    $r = $r ? $r->fetch_all(MYSQLI_ASSOC) : [];

                    $role = $_SESSION['role'];
                    $role_array = [];
                    foreach ($c as $type) {
                        if ($type['name'] == $role) {
                            $role_array = json_decode($type['permissions']);
                        }
                    }
                    foreach ($r as $item) {
                        if (in_array($item['name'], $role_array)) {

                            echo "<option>{$item['name']}</option>";
                        }
                    }

                    ?>

                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect1">
                    <b><font size="3" style="color:#253A8F">Number of Words</font></b></label>
                <select disabled id="words_number" class="form-control" name="number" id="exampleFormControlSelect1"
                        required>
                    <option id="placeHolder" disabled selected>select words number</option>
                    <option>50 words</option>
                    <option>100 words</option>
                    <option>150 words</option>
                    <option>250 words</option>

                </select>
            </div>

            <div class="form-group">
                <label for="exampleFormControlTextarea1"><b><font size="3" style="color:#253A8F">What is your content
                            about?</font></b></label>
                <textarea class="form-control"
                          placeholder=" Write a few words about your topic OR some keywords OR brand name OR product/service description"
                          name="about" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button name="create" class="btn btn-success"><b>GENERATE CONTENT</b></button>
        </form>


    </div>

    <script>
        UpdateWords = (el) => {
            <?php

            $y = $conn->query("SELECT * FROM `categories` WHERE 1");

            $y = $y ? $y->fetch_all(MYSQLI_ASSOC) : [];

            ?>

            let categories = <?php echo json_encode($y);?>;
            let category = []

            let value = el.value;

            for (let i in categories) {
                if (categories[i].name === value) {
                    category = categories[i];
                    break
                }

            }

            let select_words = document.querySelector('#words_number');

            let availableWords = JSON.parse(category.Words);
            select_words.querySelectorAll('option:not([disabled])').forEach((el, parant) => {
                if (!availableWords.includes(el.innerHTML)) {
                    $(el).hide();
                } else {
                    $(el).show();
                }
            })

            select_words.removeAttribute('disabled');

        }
    </script>


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
