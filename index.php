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
        <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="othercss/nivo-slider.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="othercss/style.css" type="text/css" media="screen" />
        <link rel="stylesheet" href="othercss/init.css" type="text/css"/>
        <style>
            .slider-wrapper {
                /* width: 80%; */
            }
            .top-banner{
                background-color: #333;
            }
        </style>
	</head>
    <?php
        $db = new SQLite3('data/data.db');
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
						<li class="m_right_10 current"><a href="#" class="default_t_color">Home<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>
						<li><a href="#" class="default_t_color">Blog</a></li>
					</ul>
				</div>
			</section>
			<!--content-->
            <div class="container">
                <div class="row clearfix">
                    <section class="col-lg-8 col-md-8 col-sm-8">
                        <div id="wrapper">
                            <div class="slider-wrapper theme-default">
                                <div id="slider" class="nivoSlider">

                                    <a href="city_1.php?city_id=1&city_item_id=1"><img src="pic/hp/滨海县.png" data-thumb="pic/hp/滨海县.png" title="滨海县" /> </a>
                                    <a href="city_1.php?city_id=2&city_item_id=1"><img src="pic/hp/丰县.png" data-thumb="pic/hp/丰县.png" title="丰县" /> </a>
                                    <a href="city_1.php?city_id=5&city_item_id=1"><img src="pic/hp/淮安区.png" data-thumb="pic/hp/淮安区.png" title="淮安区" /> </a>
                                    <a href="city_1.php?city_id=7&city_item_id=1"><img src="pic/hp/涟水县.png" data-thumb="pic/hp/涟水县.png" title="涟水县" /> </a>
                                    <a href="city_1.php?city_id=9&city_item_id=1"><img src="pic/hp/泗洪县.png" data-thumb="pic/hp/泗洪县.png" title="泗洪县" /> </a>
                                    <a href="city_1.php?city_id=10&city_item_id=1"><img src="pic/hp/泗阳县.png" data-thumb="pic/hp/泗阳县.png" title="泗阳县" /> </a>
                                </div>
                                <div id="htmlcaption" class="nivo-html-caption">
                                    <strong>This</strong> is an example of a <em>HTML</em> caption with <a href="#">a link</a>.
                                </div>
                            </div>
                            <div class="footer-banner" style="width:728px; margin:0 auto"></div>
                        </div>
                        <!--blog post-->
                        <figure class="widget shadow r_corners wrapper m_bottom_30 m_top_20">
                            <figcaption>
                                <h3 class="color_light">最新文章</h3>
                            </figcaption>
                            <hr class="divider_type_3 m_bottom_30">
                            <article class="m_bottom_20 clearfix">
                                <a href="#" class="photoframe d_block d_xs_inline_b f_xs_none wrapper shadow f_left m_right_20 m_bottom_10 r_corners">
                                    <img src="images/blog_img_5.jpg" class="tr_all_long_hover" alt="">
                                </a>
                                <div class="mini_post_content">
                                    <h4 class="m_bottom_5"><a href="#" class="color_dark fw_medium">最新文章示例文章1</a></h4>
                                    <p class="f_size_medium m_bottom_10">2019-09-10, <a href="#" class="color_dark">招工信息</a></p>
                                    <hr>
                                    <hr class="m_bottom_15">
                                    <p class="m_bottom_10">最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1 </p>
                                    <a href="#" class="tt_uppercase f_size_large">详情</a>
                                </div>
                            </article>
                            <hr class="divider_type_3 m_bottom_30">
                            <article class="m_bottom_20 clearfix">
                                <a href="#" class="photoframe d_block d_xs_inline_b f_xs_none wrapper shadow f_left m_right_20 m_bottom_10 r_corners">
                                    <img src="images/blog_img_5.jpg" class="tr_all_long_hover" alt="">
                                </a>
                                <div class="mini_post_content">
                                    <h4 class="m_bottom_5"><a href="#" class="color_dark fw_medium">最新文章示例文章1</a></h4>
                                    <p class="f_size_medium m_bottom_10">2019-09-10, <a href="#" class="color_dark">招工信息</a></p>
                                    <hr>
                                    <hr class="m_bottom_15">
                                    <p class="m_bottom_10">最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1 </p>
                                    <a href="#" class="tt_uppercase f_size_large">详情</a>
                                </div>
                            </article>
                            <hr class="divider_type_3 m_bottom_30">
                            <article class="m_bottom_20 clearfix">
                                <a href="#" class="photoframe d_block d_xs_inline_b f_xs_none wrapper shadow f_left m_right_20 m_bottom_10 r_corners">
                                    <img src="images/blog_img_5.jpg" class="tr_all_long_hover" alt="">
                                </a>
                                <div class="mini_post_content">
                                    <h4 class="m_bottom_5"><a href="#" class="color_dark fw_medium">最新文章示例文章1</a></h4>
                                    <p class="f_size_medium m_bottom_10">2019-09-10, <a href="#" class="color_dark">招工信息</a></p>
                                    <hr>
                                    <hr class="m_bottom_15">
                                    <p class="m_bottom_10">最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1 </p>
                                    <a href="#" class="tt_uppercase f_size_large">详情</a>
                                </div>
                            </article>
                            <hr class="divider_type_3 m_bottom_30">
                            <article class="m_bottom_20 clearfix">
                                <a href="#" class="photoframe d_block d_xs_inline_b f_xs_none wrapper shadow f_left m_right_20 m_bottom_10 r_corners">
                                    <img src="images/blog_img_5.jpg" class="tr_all_long_hover" alt="">
                                </a>
                                <div class="mini_post_content">
                                    <h4 class="m_bottom_5"><a href="#" class="color_dark fw_medium">最新文章示例文章1</a></h4>
                                    <p class="f_size_medium m_bottom_10">2019-09-10, <a href="#" class="color_dark">招工信息</a></p>
                                    <hr>
                                    <hr class="m_bottom_15">
                                    <p class="m_bottom_10">最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1最新文章示例文章1 </p>
                                    <a href="#" class="tt_uppercase f_size_large">详情</a>
                                </div>
                            </article>
                            <hr class="divider_type_3 m_bottom_10">
                            <div class="row clearfix m_xs_bottom_30">
                                <div class="col-lg-7 col-md-7 col-sm-7 col-xs-5">
                                    <p class="d_inline_middle f_size_medium">Results 1 - 5 of 45</p>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-5 col-xs-7 t_align_r">
                                    <!--pagination-->
                                    <a role="button" href="#" class="f_size_large button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-left"></i></a>
                                    <ul class="horizontal_list clearfix d_inline_middle f_size_medium m_left_10">
                                        <li class="m_right_10"><a class="color_dark" href="#">1</a></li>
                                        <li class="m_right_10"><a class="scheme_color" href="#">2</a></li>
                                        <li class="m_right_10"><a class="color_dark" href="#">3</a></li>
                                    </ul>
                                    <a role="button" href="#" class="f_size_large button_type_10 color_dark d_inline_middle bg_cs_hover bg_light_color_1 t_align_c tr_delay_hover r_corners box_s_none"><i class="fa fa-angle-right"></i></a>
                                </div>
                            </div>
                        </figure>
                    </section>
                    <aside class="col-lg-4 col-md-4 col-sm-4">
                        <!--widgets-->
                        <figure class="widget shadow r_corners wrapper m_bottom_30">
                            <figcaption>
                                <h3 class="color_light">通知公告</h3>
                            </figcaption>
                            <div class="widget_content">
                                <?php
                                $results = $db->query("select * from menu_article where menu_id=1 and list_id=3 limit 3");
                                while ($v = $results->fetchArray()) {
                                    $title = $v['title'];
                                    $date = $v['date'];
                                    $article_id = $v['article_id'];
                                    ?>
                                    <article class="clearfix m_bottom_15">
                                        <a href="article.php?menu_id=<?=$menu_id?>&list_id=<?=$list_id?>&article_id=<?=$article_id?>" class="color_dark d_block bt_link p_vr_0"><?= $title ?></a>
                                        <p class="f_size_medium"><?= $date ?></p>
                                    </article>
                                    <hr class="m_bottom_15">
                                    <?php
                                }
                                ?>

                            </div>
                        </figure>


                        <a href="#" style="margin-top: 40px" class="d_block d_xs_inline_b r_corners m_bottom_30">
                            <img src="pic/ad.png" alt="">
                        </a>
                        <!--Popular articles-->

                        <figure class="widget shadow r_corners wrapper m_bottom_30">
                            <figcaption>
                                <h3 class="color_light">扶贫要闻</h3>
                            </figcaption>
                            <div class="widget_content">
                                <article class="clearfix m_bottom_15">
                                    <a href="#" class="color_dark d_block bt_link p_vr_0">扶贫要闻示例文章1</a>
                                    <p class="f_size_medium">2019-09-09</p>
                                </article>
                                <hr class="m_bottom_15">
                                <article class="clearfix m_bottom_15">
                                    <a href="#" class="color_dark d_block p_vr_0 bt_link">扶贫要闻示例文章2</a>
                                    <p class="f_size_medium">2019-09-09</p>
                                </article>
                                <hr class="m_bottom_15">
                                <article class="clearfix m_bottom_5">
                                    <a href="#" class="color_dark d_block p_vr_0 bt_link">扶贫要闻示例文章3</a>
                                    <p class="f_size_medium">2019-09-09</p>
                                </article>
                            </div>
                        </figure>

                        <figure class="widget shadow r_corners wrapper m_bottom_30">
                            <figcaption>
                                <h3 class="color_light">工作动态</h3>
                            </figcaption>
                            <div class="widget_content">
                                <article class="clearfix m_bottom_15">
                                    <a href="#" class="color_dark d_block bt_link p_vr_0">工作动态示例文章1</a>
                                    <p class="f_size_medium">2019-09-09</p>
                                </article>
                                <hr class="m_bottom_15">
                                <article class="clearfix m_bottom_15">
                                    <a href="#" class="color_dark d_block p_vr_0 bt_link">工作动态示例文章2</a>
                                    <p class="f_size_medium">2019-09-09</p>
                                </article>
                                <hr class="m_bottom_15">
                                <article class="clearfix m_bottom_5">
                                    <a href="#" class="color_dark d_block p_vr_0 bt_link">工作动态示例文章3</a>
                                    <p class="f_size_medium">2019-09-09</p>
                                </article>
                            </div>
                        </figure>

                        <figure class="widget shadow r_corners wrapper m_bottom_30">
                            <figcaption>
                                <h3 class="color_light">国家政策</h3>
                            </figcaption>
                            <div class="widget_content">
                                <article class="clearfix m_bottom_15">
                                    <a href="#" class="color_dark d_block bt_link p_vr_0">国家政策示例文章1</a>
                                    <p class="f_size_medium">2019-09-09</p>
                                </article>
                                <hr class="m_bottom_15">
                                <article class="clearfix m_bottom_15">
                                    <a href="#" class="color_dark d_block p_vr_0 bt_link">工国家政策示例文章2</a>
                                    <p class="f_size_medium">2019-09-09</p>
                                </article>
                                <hr class="m_bottom_15">
                                <article class="clearfix m_bottom_5">
                                    <a href="#" class="color_dark d_block p_vr_0 bt_link">国家政策示例文章3</a>
                                    <p class="f_size_medium">2019-09-09</p>
                                </article>
                            </div>
                        </figure>

                    </aside>
                    <!--left content column-->
                    <!--right column-->
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



		<script src="js/owl.carousel.min.js"></script>

		<script src="js/waypoints.min.js"></script>

		<script src="js/camera.min.js"></script>
		<script src="js/scripts.js"></script>

		<script src="myjs/foot.js"></script>
		<script src="myjs/head.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
        <script type="text/javascript">

            $(window).load(function() {
                $('#slider').nivoSlider();
            });
        </script>

        <script>
            $(function () {
                $('#menuindex').addClass("current");
            });
        </script>
	</body>
</html>