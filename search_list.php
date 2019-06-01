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
            $search = $_GET['search'];

            $results = $db->query("select * from menu_article where title like '%$search%' or html1 like '%$search%' or html2 like '%$search%' or html3 like '%$search%' or html4 like '%$search%' or html5 like '%$search%'");
            $v = $results->fetchArray();

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
						<li><a href="#" class="default_t_color">搜索</a></li>
					</ul>
				</div>
			</section>
			<!--content-->
			<div class="page_content_offset">
				<div class="container">
					<div class="row clearfix">
						<section class="col-lg-12 col-md-12 col-sm-12">
                            <article class="m_bottom_10 clearfix">
                                <div><h4 class="m_bottom_5" style="float:left; text-align:left">关于"<?=$search?>"的搜索结果：</h4></div>
                            </article>

                            <?php
                                while ($v = $results->fetchArray()) {
                                    $title = $v['title'];
                                    $date = $v['date'];
                                    $article_id = $v['article_id'];
                                    ?>
                                    <hr class="divider_type_3 m_bottom_10">
                                    <article class="m_bottom_10 clearfix">
                                        <div class="mini_post_content">
                                            <h4 class="m_bottom_5" style="float:left; text-align:left"><a href="article.php?menu_id=<?=$v['menu_id']?>&list_id=<?=$v['list_id']?>&article_id=<?=$article_id?>"  class="color_dark fw_medium"><?= $title ?></a>
                                            </h4>
                                            <h5 class="m_bottom_5" style="float:right; text-align:right"><a href="#"  class="color_dark fw_medium"><?= $date ?></a>
                                            </h5>
                                        </div>
                                    </article>
                                    <?php
                                }
                            ?>

                            <hr class="divider_type_3 m_bottom_10">

							
						</section>
						<!--right column-->
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