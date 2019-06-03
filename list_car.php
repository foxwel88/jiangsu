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
												if ($menu_id==5 and $current_list_id > 4 and $current_list_id <= 8) {
                                                    $link = 'list_car.php?menu_id=' . $menu_id . '&list_id=' . $current_list_id;
												    if ($list_id == 4 || ($list_id > 4 and $list_id <= 8 and $list_id != $current_list_id)) {
                                                        ?>
                                                        <li class="">
                                                            <a href="<?= $link ?>"
                                                               class="f_size_large color_dark d_block">
                                                                <b>&nbsp&nbsp&nbsp<?= $current_list_name ?></b>
                                                            </a>
                                                        </li>
                                        <?php
                                                    } else if ($list_id > 4 and $list_id <= 8 and $list_id == $current_list_id) {
                                        ?>
                                                        <li class="active">
                                                            <a href="<?=$link?>" class="f_size_large color_dark d_block">
                                                                <b>&nbsp&nbsp&nbsp<?=$current_list_name?></b>
                                                            </a>
                                                        </li>
                                        <?php
                                                    }
												    continue;
                                                }
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
							<div id="pop-article">

                            </div>
						</aside>
						<!--left content column-->
						<section class="col-lg-9 col-md-9 col-sm-9">
                            <section class="portfolio_isotope_container three_columns">
                                <?php
                                $results = $db->query("select * from menu_car where menu_id = '$menu_id' and list_id = '$list_id'");
                                while ($v = $results->fetchArray()) {
                                    ?>
                                    <div class="portfolio_item t_xs_align_c portraits">
                                        <figure class="d_xs_inline_b">
                                            <a href="<?=$v['link']?>"> <div class="photoframe with_buttons relative shadow r_corners wrapper m_bottom_15">
                                                <img href="<?=$v['link']?>" src="pic/article/<?=$v['pic']?>" alt="" class="tr_all_long_hover">
                                            </div></a>
                                            <figcaption class="t_xs_align_l">
                                                <h4 class="m_bottom_3" style="text-align: center"><a href="<?=$v['link']?>" class="color_dark"><b><?=$v['title']?></b></a>
                                                </h4>
                                            </figcaption>
                                        </figure>
                                    </div>
                                    <?php
                                }

                                ?>
                            </section>

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
        <script src="myjs/foot.js"></script>
        <script src="myjs/head.js"></script>
        <script src="myjs/pop.js"></script>
		<script src="js/styleswitcher.js"></script>
		<script src="js/camera.min.js"></script>
		<script src="js/scripts.js"></script>

	</body>
</html>