<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title>Flatastic - Blog</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<!--meta info-->
		<meta name="author" content="">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<link rel="icon" type="image/ico" href="images/fav.ico">
		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<!--font include-->
		<link rel="icon" type="image/ico" href="images/fav.ico">
		<link rel="stylesheet" type="text/css" media="all" href="css/camera.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">
		<!--font include-->
		<link href="css/font-awesome.min.css" rel="stylesheet">
	</head>
	<?php
        $db = new SQLite3('data/data.db');
        $menu_id = $_GET['menu_id'];
        $list_id = $_GET['list_id'];
        $article_id = $_GET['article_id'];

        $results = $db->query("select * from menu where father='$menu_id' and son='$list_id'");
        $v = $results->fetchArray();
        $menu_name = $v['fathername'];
        $list_name = $v['name'];

        $results = $db->query("select * from menu_article where article_id = '$article_id'");
        $v = $results->fetchArray();
        $title = $v['title'];
        $date = $v['date'];
    ?>
	<body>
		<!--wide layout-->
		<div class="wide_layout relative">

			<div id="head">

			</div>
			<!--breadcrumbs-->
            <section class="breadcrumbs">
                <div class="container">
                    <ul class="horizontal_list clearfix bc_list f_size_medium">
                        <li class="m_right_10 current"><a href="index.php" class="default_t_color">首页<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
                        <li><a href="list.php?menu_id=<?=$menu_id?>&list_id=1" class="default_t_color"><?=$menu_name?><i class="fa fa-angle-right d_inline_middle m_left_10 m_right_10"></i></a></li>
                        <li><a href="list.php?menu_id=<?=$menu_id?>&list_id=<?=$list_id?>" class="default_t_color"><?=$list_name?></a></li>
                    </ul>
                </div>
            </section>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<div class="row clearfix">
						<section class="col-lg-12 col-md-12 col-sm-12">
                            <article class="m_bottom_15" style="">
                                <div class="row clearfix m_bottom_15">
                                    <div class="">
                                        <h2 class="m_bottom_5 color_dark fw_medium m_xs_bottom_10" style="text-align: center;"><?=$title?></h2>

                                        <hr class="divider_type_3 m_top_20 m_bottom_10 ">
                                        <p class="f_size_medium" style="text-align: center;"><?=$date?></p>
                                    </div>
                                    <div class="m_top_20 article" style="margin-left: 10px; margin-right: 10px">
                                        <?php
                                            for ($x=1; $x<=20; $x++) {
                                                $html_id = 'html' . $x;
                                                $current_html = $v[$html_id];

                                                if ($current_html[0] == '<') {
                                        ?>
                                                <div align="center"><?=$current_html?></div>
                                        <?php
                                                } else if ($current_html[0] == 'p') {
                                                    $current_html = substr($current_html, 1);
                                        ?>

                                                    <a align='center' class="d_block m_bottom_15 m_top_20">
                                                        <img style="width: 60%; position:center" src="pic/article/<?= $current_html ?>">
                                                    </a>
                                        <?php
                                                } else if ($current_html[0] == 'r') {
                                                    $current_html = substr($current_html, 1);
                                                    $current_html=str_replace("\n", "<p/><p style=\"text-align: right\">", $current_html);
                                                    $current_html = '<p style="text-align: right">' . $current_html . '</p>';
                                        ?>
                                                    <text style="font-size: 16px; font-family:SimSun,serif; line-height:27px; text-align:justify; text-justify:inter-ideograph; "><?= $current_html ?></text>
                                        <?php
                                                } else if ($current_html[0] == 'm') {
                                                    $current_html = substr($current_html, 1);
                                                    $current_html=str_replace("\n", "<p/><p style=\"text-align: center\">", $current_html);
                                                    $current_html = '<p style="text-align: center">' . $current_html . '</p>';
                                                    ?>
                                                    <text style="font-size: 16px; font-family:SimSun,serif; line-height:27px; text-align:justify; text-justify:inter-ideograph; "><?= $current_html ?></text>

                                        <?php
                                                } else if ($current_html[0] == 'l') {
                                                    $current_html = substr($current_html, 1);
                                                    $current_html=str_replace("\n", "<p/><p>", $current_html);
                                                    $current_html = '<p>' . $current_html . '</p>';

                                        ?>
                                                    <text style="font-size: 16px; font-family:SimSun,serif; line-height:27px; text-align:justify; text-justify:inter-ideograph; "><?= $current_html ?></text>
                                        <?php

                                                } else {
                                                    $current_html = str_replace("　", "", $current_html);
                                                    $current_html=str_replace("\n", "<p/><p>", $current_html);
                                                    $current_html = '<p>' . $current_html . '</p>';
                                        ?>
                                                    <text style="text-indent:25px; font-size: 16px; font-family:SimSun,serif; line-height:27px; text-align:justify; text-justify:inter-ideograph; "><?= $current_html ?></text>
                                        <?php
                                                }
                                            }
                                        ?>
                                    </div>
                                </div>
                            </article>

                            <hr class="divider_type_3 m_bottom_10">

						</section>
					</div>
				</div>
			</div>
			<!--markup footer-->
			<div id="myfoot">

			</div>
		</div>


		<button class="t_align_c r_corners tr_all_hover type_2 animate_ftl" id="go_to_top"><i class="fa fa-angle-up"></i></button>
		<!--scripts include-->
		<script src="js/jquery-2.1.0.min.js"></script>
		<script src="js/jquery-ui.min.js"></script>
		<script src="js/jquery-migrate-1.2.1.min.js"></script>
		<script src="js/jquery.isotope.min.js"></script>
		<script src="js/jquery.tweet.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/jquery.custom-scrollbar.js"></script>


		<script src="js/retina.js"></script>

		<script src="js/owl.carousel.min.js"></script>

		<script src="js/waypoints.min.js"></script>

		<script src="js/styleswitcher.js"></script>
		<script src="js/camera.min.js"></script>
		<script src="js/scripts.js"></script>

		<script src="myjs/foot.js"></script>
		<script src="myjs/head.js"></script>
	</body>
</html>