
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta property="fb:admins" content="100001590293635"/>

    <!-- Favicon -->
    <link rel="icon" href="/img/favicon.png?v=1.2" type="image/x-icon">
    <link rel="shortcut icon" href="/img/favicon.png?v=1.2" type="image/x-icon">
    <link rel="apple-touch-icon" href="/img/favicon.png?v=1.2">

    <!-- social network metas -->
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="AdminLTE - Installation"/>
    <meta property="og:url" content="https://adminlte.io/docs/2.4/installation"/>
    <meta property="image" content="https://adminlte.io/img/AdminLTE2.1.png"/>
    <meta property="og:image" content="https://adminlte.io/img/AdminLTE2.1.png"/>
    <meta property="site_name" content="Almsaeed Studio"/>
    <meta property="description"
          content="Best open source admin dashboard &amp; control panel theme. Built on top of Bootstrap 3, AdminLTE provides a range of responsive, reusabale, and commonly used components."/>

    <title>AdminLTE - Installation</title>

    <link rel="stylesheet" href="/themes/AdminLTE/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="/themes/AdminLTE/dist/css/AdminLTE.min.css?version=2.4">
    <link rel="stylesheet" href="/themes/AdminLTE/dist/css/skins/_all-skins.min.css?version=2.4">
    <link rel="stylesheet" href="/css/docs.css?version=2.4">

<!-- Fonts -->
    <link rel="stylesheet"
          href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
          crossorigin="anonymous">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="//oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="//oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
        (function (i, s, o, g, r, a, m) {
            i['GoogleAnalyticsObject'] = r;
            i[r] = i[r] || function () {
                    (i[r].q = i[r].q || []).push(arguments);
                }, i[r].l = 1 * new Date();
            a = s.createElement(o),
                m = s.getElementsByTagName(o)[0];
            a.async = 1;
            a.src   = g;
            m.parentNode.insertBefore(a, m);
        })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');
        ga('create', 'UA-46680343-1', 'auto');
        ga('send', 'pageview');
        ga('send', 'event', {
            eventCategory: 'Documentation',
            eventAction  : 'Visit'
        });
    </script>
</head>
<body class="hold-transition skin-black-light sidebar-mini">
<div class="wrapper">

<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>A</b>LT</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Admin</b>LTE Docs</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="btn-group">
            <a href="#" class="btn btn-primary navbar-btn dropdown-toggle" data-toggle="dropdown">
                2.4 <b class="caret"></b>
            </a>
            <ul class="dropdown-menu dropdown-menu-xs">
                                    <li><a href="/docs/2.4/installation">2.4</a></li>
                                <li><a href="/themes/AdminLTE/documentation/index.html"><= 2.3</a></li>
            </ul>
        </div>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li><a href="/">AdminLTE.IO</a></li>
                <li><a href="/premium">Premium Templates</a></li>
            </ul>
        </div>
    </nav>
</header><!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- search form -->
        <form method="get" class="sidebar-form" id="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..." id="search-input">
                <span class="input-group-btn">
                    <button type="submit" name="search" id="search-btn" class="btn btn-flat">
                        <i class="fa fa-search"></i>
                    </button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">TABLE OF CONTENTS</li>
            <li class="active">
                <a href="/docs/2.4/installation"><i class="fa fa-microchip"></i> <span>Installation</span></a>
            </li>
            <li>
                <a href="/docs/2.4/dependencies"><i class="fa fa-handshake-o"></i>
                    <span>Dependencies & plugins</span></a></li>
            <li>
                <a href="/docs/2.4/layout"><i class="fa fa-files-o"></i> <span>Layout</span></a></li>
            <li class="treeview ">
                <a href="#"><i class="fa fa-th"></i> <span>Components</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/docs/2.4/main-header"><i class="fa fa-circle-o"></i> Main Header</a>
                    </li>
                    <li>
                        <a href="/docs/2.4/sidebar"><i class="fa fa-circle-o"></i> Sidebar</a>
                    </li>
                    <li>
                        <a href="/docs/2.4/control-sidebar"><i class="fa fa-circle-o"></i> Control Sidebar</a>
                    </li>
                    <li>
                        <a href="/docs/2.4/boxes"><i class="fa fa-circle-o"></i> Box</a>
                    </li>
                    <li>
                        <a href="/docs/2.4/info-box"><i class="fa fa-circle-o"></i> Info Box</a>
                    </li>
                    <li>
                        <a href="/docs/2.4/direct-chat"><i class="fa fa-circle-o"></i> Direct Chat</a>
                    </li>
                </ul>
            </li>
            <li class="treeview ">
                <a href="#"><i class="fa fa-code"></i> <span>JavaScript</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li>
                        <a href="/docs/2.4/js-layout"><i class="fa fa-circle-o"></i> Layout</a>
                    </li>
                    <li>
                        <a href="/docs/2.4/js-push-menu"><i class="fa fa-circle-o"></i> Push Menu</a>
                    </li>
                    <li>
                        <a href="/docs/2.4/js-tree"><i class="fa fa-circle-o"></i> Tree</a>
                    </li>
                    <li>
                        <a href="/docs/2.4/js-control-sidebar"><i class="fa fa-circle-o"></i> Control Sidebar</a>
                    </li>
                    <li>
                        <a href="/docs/2.4/js-box-widget"><i class="fa fa-circle-o"></i> Box Widget</a>
                    </li>
                    <li>
                        <a href="/docs/2.4/js-box-refresh"><i class="fa fa-circle-o"></i> Box Refresh</a>
                    </li>
                    <li>
                        <a href="/docs/2.4/js-todo-list"><i class="fa fa-circle-o"></i> Todo List</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="/docs/2.4/browser-support"><i class="fa fa-chrome"></i><span>Browser Support</span></a>
            </li>
            <li>
                <a href="/docs/2.4/upgrade-guide"><i class="fa fa-hand-o-up"></i><span>Upgrade Guide</span></a>
            </li>
            <li>
                <a href="/docs/2.4/implementations"><i class="fa fa-bookmark-o"></i><span>Implementations</span></a>
            </li>
            <li>
                <a href="/docs/2.4/faq"><i class="fa fa-question-circle-o"></i> <span>FAQ</span></a>
            </li>
            <li>
                <a href="/docs/2.4/license"><i class="fa fa-file-text-o"></i> <span>License</span></a>
            </li>
        </ul>
        <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>


<!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <article>
            <!-- Content Header (Page header) -->
            <header class="content-header container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <h1 class="content-max-width">Installation</h1>
                    </div>
                </div>
            </header>

            <!-- Main content -->
            <div class="content container-fluid">
                <div class="row">
                    <div class="col-lg-8">
                        <section class="content-max-width">
                                    <section id="installation">
        <p>
            AdminLTE can be installed using multiple methods. Pick your favorite method from the list below.
            Please be sure to check the <a href="/adminlte-docs/{v}/dependencies">dependencies section</a>
            before continuing.
        </p>

        <h3>Download</h3>

        <h4>From Github</h4>
        <p>Visit the <a href="https://github.com/almasaeed2010/AdminLTE/releases">releases section on Github</a> and
            download the latest release.</p>
        <p>
            <a href="https://github.com/almasaeed2010/AdminLTE/releases" class="btn btn-primary" target="_blank">
                Download Latest Release
            </a>
        </p>

        <h3>Command Line</h3>

        <h4>Via NPM</h4>
        <p>
        <pre><code>npm install admin-lte --save</code></pre>
        </p>

        <h4>Via Bower</h4>
        <p>
        <pre><code>bower install admin-lte</code></pre>
        </p>
	<p>If bower asks which version of jQuery to use, choose version 3 or above.</p>

        <h4>Via Composer</h4>
        <p>
        <pre><code>composer require "almasaeed2010/adminlte=~2.4"</code></pre>
        </p>

        <h4>Via Git</h4>
        <ul>
            <li>Fork the repository (<a href="https://help.github.com/articles/fork-a-repo/">guide</a>).</li>
            <li>
                Clone to your machine.
                <pre><code>git clone https://github.com/YOUR_USERNAME/AdminLTE.git</code></pre>
            </li>
        </ul>
    </section>
                        </section>
                    </div>
                    <div class="col-lg-4">
                        <div class="box box-solid limit-p-width">
    <div class="box-body affiliate">
        <div class="heading">
            PREMIUM TEMPLATE
        </div>
        <a href="https://themequarry.com/theme/webadmin-responsive-admin-dashboard-template-ASFEDAA8">
            <img src="https://themequarry.com/storage/images/approved/ASFEDAA8_v1.2.0_595b0b787d2e5.png"
                 alt="Webadmin"
                 class="img-responsive">
        </a>

        <div class="caption">
            <h3>Webadmin &HorizontalLine; $18</h3>

            <p>Responsive Admin Dashboard</p>

            <p>
                <a href="https://themequarry.com/demo/webadmin-responsive-admin-dashboard-template-ASFEDAA8"
                   class="btn btn-primary" role="button">
                    Preview
                </a>
                <a href="https://themequarry.com/theme/webadmin-responsive-admin-dashboard-template-ASFEDAA8"
                   class="btn btn-success" role="button">
                    Buy Now
                </a>
            </p>
            <p><i class="fa fa-shopping-cart margin-r5"></i> 32+ purchases</p>
        </div>

    </div>
</div>                    </div>
                </div>
            </div>
            <!-- /.content -->
        </article>
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
<footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
        AdminLTE Documentation
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2017 <a href="/">AdminLTE.IO</a>.</strong> All rights reserved.
</footer></div>
<!-- ./wrapper -->

<!-- Scripts -->
<script src="/themes/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<script src="/themes/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="/themes/AdminLTE/dist/js/adminlte.min.js"></script>
<script src="/js/docs.js"></script>
    <script>
        $(function () {
            $('#sidebar-form').on('submit', function (e) {
                e.preventDefault();
            });

            $('.sidebar-menu li.active').data('lte.pushmenu.active', true);

            $('#search-input').on('keyup', function () {
                var term = $('#search-input').val().trim();

                if (term.length === 0) {
                    $('.sidebar-menu li').each(function () {
                        $(this).show(0);
                        $(this).removeClass('active');
                        if ($(this).data('lte.pushmenu.active')) {
                            $(this).addClass('active');
                        }
                    });
                    return;
                }

                $('.sidebar-menu li').each(function () {
                    if ($(this).text().toLowerCase().indexOf(term.toLowerCase()) === -1) {
                        $(this).hide(0);
                        $(this).removeClass('pushmenu-search-found', false);

                        if ($(this).is('.treeview')) {
                            $(this).removeClass('active');
                        }
                    } else {
                        $(this).show(0);
                        $(this).addClass('pushmenu-search-found');

                        if ($(this).is('.treeview')) {
                            $(this).addClass('active');
                        }

                        var parent = $(this).parents('li').first();
                        if (parent.is('.treeview')) {
                            parent.show(0);
                        }
                    }

                    if ($(this).is('.header')) {
                        $(this).show();
                    }
                });

                $('.sidebar-menu li.pushmenu-search-found.treeview').each(function () {
                    $(this).find('.pushmenu-search-found').show(0);
                });
            });
        });
    </script>

</body>
</html>
