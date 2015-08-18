<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-08-18 09:22:37
         compiled from "C:\xampp\htdocs\minavi\application\views\common\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2871555d19d33219ad0-52570764%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '35b256d715e537148a8c96f1386e240a4e008e3c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\minavi\\application\\views\\common\\header.tpl',
      1 => 1439882364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2871555d19d33219ad0-52570764',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_55d19d3321ea99_88091968',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55d19d3321ea99_88091968')) {function content_55d19d3321ea99_88091968($_smarty_tpl) {?><?php $_smarty_tpl->tpl_vars["base"] = new Smarty_variable("minavi/", null, 0);?>

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
                <?php echo '<script'; ?>
 src="http://html5shim.googlecode.com/svn/trunk/html5.js"><?php echo '</script'; ?>
>
        <![endif]-->

        <!-- Fav and touch icons -->
        <link rel="shortcut icon" href="/minavi/common/ico/favicon.ico">
        <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/minavi/common/ico/apple-touch-icon-144-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/minavi/common/ico/apple-touch-icon-114-precomposed.png">
        <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/minavi/common/ico/apple-touch-icon-72-precomposed.png">
        <link rel="apple-touch-icon-precomposed" href="/minavi/common/ico/apple-touch-icon-57-precomposed.png">
        <?php echo '<script'; ?>
 src="/minavi/common/js/lib/bootstrap/jquery.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/minavi/common/js/lib/bootstrap/bootstrap-transition.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/minavi/common/js/lib/bootstrap/bootstrap-alert.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/minavi/common/js/lib/bootstrap/bootstrap-modal.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/minavi/common/js/lib/bootstrap/bootstrap-dropdown.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/minavi/common/js/lib/bootstrap/bootstrap-scrollspy.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/minavi/common/js/lib/bootstrap/bootstrap-tab.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/minavi/common/js/lib/bootstrap/bootstrap-tooltip.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/minavi/common/js/lib/bootstrap/bootstrap-popover.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/minavi/common/js/lib/bootstrap/bootstrap-button.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/minavi/common/js/lib/bootstrap/bootstrap-collapse.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/minavi/common/js/lib/bootstrap/bootstrap-carousel.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/minavi/common/js/lib/bootstrap/bootstrap-typeahead.js"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 src="/minavi/common/js/common.js"><?php echo '</script'; ?>
>

        <!--openlayers settings-->
        <link rel="stylesheet" href="http://openlayers.org/en/v3.5.0/css/ol.css" type="text/css">
        <?php echo '<script'; ?>
 src="http://openlayers.org/en/v3.5.0/build/ol.js" type="text/javascript"><?php echo '</script'; ?>
>
        <?php echo '<script'; ?>
 type="text/javascript" src="http://www.openlayers.org/api/OpenLayers.js"><?php echo '</script'; ?>
>

        <?php echo '<script'; ?>
 type="text/javascript" src="/minavi/common/js/jquery/zebra-datepicker/zebra_datepicker.js"><?php echo '</script'; ?>
>
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
<?php }} ?>
