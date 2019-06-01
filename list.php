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
            $results = $db->query("select * from menu where father='$menu_id' and son='$list_id'");
            $v = $results->fetchArray();
            $menu_name = $v['fathername'];
            $list_name = $v['name'];
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
						<aside class="col-lg-3 col-md-3 col-sm-3">
							<!--widgets-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light"><?=$menu_name?></h3>
								</figcaption>

								<ul class="widget_content">
									<ul class="categories_list">

										<?php
											$results = $db->query("select * from menu where father='$menu_id'");
											while ($v = $results->fetchArray()) {
												$current_list_name = $v['name'];
												$current_list_id = $v['son'];
												$link = 'list.php?menu_id=' . $menu_id . '&list_id=' . $current_list_id;
												if ($menu_id==3 and $current_list_id==3) $link= 'list_hire.php';
												if ($current_list_id == $list_id) {
										?>

                                                    <li class="active">
                                                        <a href="<?=$link?>" class="f_size_large color_dark d_block">
                                                            <b><?=$current_list_name?></b>
                                                        </a>
                                                    </li>


										<?php   } else { ?>
                                                    <li>
                                                        <a href="<?=$link?>" class="f_size_large color_dark d_block">
                                                            <b><?=$current_list_name?></b>
                                                        </a>
                                                    </li>
                                        <?php
												}
                                            } ?>

									</ul>
								</ul>
							</figure>

							<!--Popular articles-->
							<figure class="widget shadow r_corners wrapper m_bottom_30">
								<figcaption>
									<h3 class="color_light">热门文章</h3>
								</figcaption>
								<div class="widget_content">
									<article class="clearfix m_bottom_15">
										<img src="images/article_img_1.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block bt_link p_vr_0">热门文章1</a>
										<p class="f_size_medium">50 comments</p>
									</article>
									<hr class="m_bottom_15">
									<article class="clearfix m_bottom_15">
										<img src="images/article_img_2.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block p_vr_0 bt_link">热门文章2</a>
										<p class="f_size_medium">34 comments</p>
									</article>
									<hr class="m_bottom_15">
									<article class="clearfix m_bottom_5">
										<img src="images/article_img_3.jpg" alt="" class="f_left m_right_15 m_sm_bottom_10 f_sm_none f_xs_left m_xs_bottom_0">
										<a href="#" class="color_dark d_block p_vr_0 bt_link">热门文章3</a>
										<p class="f_size_medium">21 comments</p>
									</article>
								</div>
							</figure>
						</aside>
						<!--left content column-->
						<section class="col-lg-9 col-md-9 col-sm-9">
                            <?php
                                $results = $db->query("select * from menu_article where menu_id='$menu_id' and list_id='$list_id'");
                                while ($v = $results->fetchArray()) {
                                    $title = $v['title'];
                                    $date = $v['date'];
                                    $article_id = $v['article_id'];
                                    ?>
                                    <hr class="divider_type_3 m_bottom_10">
                                    <article class="m_bottom_10 clearfix">
                                        <div class="mini_post_content">
                                            <h4 class="m_bottom_5" style="float:left; text-align:left"><a href="article.php?menu_id=<?=$menu_id?>&list_id=<?=$list_id?>&article_id=<?=$article_id?>"  class="color_dark fw_medium"><?= $title ?></a>
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