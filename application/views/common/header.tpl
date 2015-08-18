{assign var="base" value="minavi/"}

<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title>admin</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="">

        <!-- Le styles -->
        <link href="/minavi/common/css/bootstrap.css" rel="stylesheet">
        <link href="/minavi/common/css/bootstrap-responsive.css" rel="stylesheet">
        <link href="/minavi/common/css/bootstrap-custom.css" rel="stylesheet">
        <link href="/minavi/common/css/font-awesome.css" rel="stylesheet">
        <!--[if lt IE 7]>
                <link href="/minavi/common/css/font-awesome-ie7.css" rel="stylesheet">
        <![endif]-->
        <link href="/minavi/common/css/style.css" rel="stylesheet">
        <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
        <!--[if lt IE 9]>
                <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="/minavi/common/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/minavi/common/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/minavi/common/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/minavi/common/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/minavi/common/ico/apple-touch-icon-57-precomposed.png">
        <script src="/minavi/common/js/lib/bootstrap/jquery.js"></script>
        <script src="/minavi/common/js/lib/bootstrap/bootstrap-transition.js"></script>
        <script src="/minavi/common/js/lib/bootstrap/bootstrap-alert.js"></script>
        <script src="/minavi/common/js/lib/bootstrap/bootstrap-modal.js"></script>
        <script src="/minavi/common/js/lib/bootstrap/bootstrap-dropdown.js"></script>
        <script src="/minavi/common/js/lib/bootstrap/bootstrap-scrollspy.js"></script>
        <script src="/minavi/common/js/lib/bootstrap/bootstrap-tab.js"></script>
        <script src="/minavi/common/js/lib/bootstrap/bootstrap-tooltip.js"></script>
        <script src="/minavi/common/js/lib/bootstrap/bootstrap-popover.js"></script>
        <script src="/minavi/common/js/lib/bootstrap/bootstrap-button.js"></script>
        <script src="/minavi/common/js/lib/bootstrap/bootstrap-collapse.js"></script>
        <script src="/minavi/common/js/lib/bootstrap/bootstrap-carousel.js"></script>
        <script src="/minavi/common/js/lib/bootstrap/bootstrap-typeahead.js"></script>
        <script src="/minavi/common/js/common.js"></script>

        <!--openlayers settings-->
        <link rel="stylesheet" href="http://openlayers.org/en/v3.5.0/css/ol.css" type="text/css">
        <script src="http://openlayers.org/en/v3.5.0/build/ol.js" type="text/javascript"></script>
        <script type="text/javascript" src="http://www.openlayers.org/api/OpenLayers.js"></script>

        <script type="text/javascript" src="/minavi/common/js/jquery/zebra-datepicker/zebra_datepicker.js"></script>
        <link href="/minavi/common/css/jquery/zebra-datepicker/zebra_datepicker.css" rel="stylesheet">
    </head
    <body>


        <!-- NAVBAR
        ================================================== -->
        <div class="container navbar-wrapper">
            <div class="navbar navbar-inverse">
                <div class="navbar-inner">
                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <a class="brand" href="#">Project name</a>
                    <div class="nav-collapse collapse">
                        <ul class="nav navbar-text pull-right">
                            <li><a href="#" class="register"><i class="icon-off"></i>ログアウト</a></li>
                        </ul>
                        <p class="navbar-text pull-right">
                            <i class="icon-asterisk"></i>Logged in as <a href="#" class="navbar-link">塩崎</a>
                        </p>
                        <ul class="nav">
                            <li><a href="01.html"><i class="icon-comment"></i>表情＆セリフ</a></li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-map-marker"></i>シーン選択<b class="caret"></b></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-header">Sidebar</li>
                                    <li class="active"><a href="#">シーン1</a></li>
                                    <li><a href="#">シーン2</a></li>
                                    <li><a href="#">シーン3</a></li>
                                    <li><a href="#">シーン4</a></li>
                                    <li class="nav-header">Sidebar</li>
                                    <li><a href="#">hoge</a></li>
                                    <li><a href="#">hoge</a></li>
                                    <li><a href="#">hoge</a></li>
                                    <li><a href="#">hoge</a></li>
                                </ul>
                            </li>
                            <li class="active"><a href="02.html"><i class="icon-collapse"></i>座標入力</a></li>

                        </ul>
                    </div><!--nav-collapse -->
                </div><!--navbar-inner -->
            </div><!--navbar -->
        </div><!--container -->
