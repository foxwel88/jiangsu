<!doctype html>
<!--[if IE 9 ]><html class="ie9" lang="en"><![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html lang="en"><!--<![endif]-->
	<head>
		<title>江苏省扶贫县信息服务网</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

		<!--stylesheet include-->
		<link rel="stylesheet" type="text/css" media="all" href="css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.carousel.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/owl.transitions.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/style.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/camera.css">
		<link rel="stylesheet" type="text/css" media="all" href="css/jquery.custom-scrollbar.css">
		<link href="css/font-awesome.min.css" rel="stylesheet">
	</head>

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
						<li><a href="city.php" class="default_t_color">贫困县（区）</a></li>
					</ul>
				</div>
			</section>
			<!--content-->


            <div class="container">
                <div class="d_table full_width d_xs_block">

                </div>
                <!--portfolio isotope-->
                <section class="portfolio_isotope_container four_columns">
                    <?php
                        $db = new SQLite3('data/data.db');
                        $results = $db->query("select * from city");
                        while ($v = $results->fetchArray()) {
                            $current_city_name = $v['name'];
                            $current_pic = $v['pic'];
                            $current_city_id = $v['id'];
                    ?>
                            <div class="portfolio_item t_xs_align_c portraits">
                                <figure class="d_xs_inline_b">
                                    <a href="city_1.php?city_id=<?=$current_city_id?>&city_item_id=1">
                                        <div class="photoframe with_buttons relative shadow r_corners wrapper m_bottom_15">
                                            <img src="pic/city/<?= $current_pic ?>" alt="" class="tr_all_long_hover">
                                        </div>
                                    </a>
                                    <figcaption class="t_xs_align_l">
                                        <h4 class="m_bottom_3" style="text-align: center"><a href="city_1.php?city_id=<?=$current_city_id?>&city_item_id=1" class="color_dark"><b><?= $current_city_name ?></b></a>
                                        </h4>
                                    </figcaption>
                                </figure>
                            </div>
                    <?php
                        }

                    ?>
                </section>
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



		<script src="js/owl.carousel.min.js"></script>

		<script src="js/waypoints.min.js"></script>

		<script src="js/camera.min.js"></script>
		<script src="js/scripts.js"></script>

		<script src="myjs/foot.js"></script>
		<script src="myjs/head.js"></script>

        <script>
            $(function () {
                $('#menu0').addClass("current");
            });
        </script>
	</body>
</html>