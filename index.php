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
            #wrap{
                width: 97%;
                height: 200px;
                position: relative;
                margin: 100px auto;
                overflow: hidden;
            }
            #list{
                position: absolute;
                left: 0;
                top: 0;
                margin: 0;
                padding: 0;
                -webkit-animation: 20s move infinite linear;
                width: 200%;
            }
            #list li {
                list-style: none;
                width: 320px;
                height: 240px;
                border: 1px solid #fff;
                background: #000;
                color: #fff;
                font: 50px/98px Arial;
                text-align: center;
                float: left;
            }
            @-webkit-keyframes move{
                0% {
                    left: 0;
                }
                100% {
                    left: -1000px;
                }
            }
            @keyframes move {
                0% {
                    left: 0;
                }
                100% {
                    left: -1000px;
                }
            }
            #wrap:hover #list {
                -webkit-animation-play-state: paused; /*动画暂停播放*/
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
						<li class="m_right_10 current"><a href="#" class="default_t_color">首页<i class="fa fa-angle-right d_inline_middle m_left_10"></i></a></li>

					</ul>
				</div>
			</section>
			<!--content-->
            <div class="m_top_20 container">
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

                            </div>
                            <div class="footer-banner" style="width:728px; margin:0 auto"></div>
                        </div>
                        <!--blog post-->
                        <figure class="widget shadow r_corners wrapper m_bottom_30 m_top_5">
                            <figcaption>
                                <h3 class="color_light">最新文章</h3>
                            </figcaption>
                            <hr class="divider_type_3 m_bottom_30">
                            <article class="m_bottom_20 clearfix">
                                <a href="#" class="photoframe d_block d_xs_inline_b f_xs_none wrapper shadow f_left m_right_20 m_bottom_10 r_corners">
                                    <img src="/pic/article/0725.png" style="width: 320px; height: 240px" class="tr_all_long_hover" alt="">
                                </a>
                                <div class="mini_post_content">
                                    <h4 class="m_bottom_5"><a href="article.php?menu_id=5&list_id=4&article_id=72" class="color_dark fw_medium">市驾培处在南京谷峰驾校会议室，召开年底扶贫驾培开班仪式并组织座谈</a></h4>
                                    <p class="f_size_medium m_bottom_10">2019-09-10, <a href="#" class="color_dark">驾驶培训</a></p>
                                    <hr>
                                    <hr class="m_bottom_15">
                                    <p class="m_bottom_10">8月10日（星期五），市驾培处在南京谷峰驾校会议室，召开年底扶贫驾培开班仪式并组织座谈。六合区张国飞、江宁区张红燕，受市、区扶贫"三会"委托代表"三会"系统的学习参加仪式，并作了发言。下面是现场部分图片。 </p>
                                    <a href="article.php?menu_id=5&list_id=4&article_id=72" class="tt_uppercase f_size_large">详情</a>
                                </div>
                            </article>
                            <hr class="divider_type_3 m_bottom_30">
                            <article class="m_bottom_20 clearfix">
                                <a href="#" class="photoframe d_block d_xs_inline_b f_xs_none wrapper shadow f_left m_right_20 m_bottom_10 r_corners">
                                    <img src="/pic/article/10902.png" style="width: 320px; height: 240px" class="tr_all_long_hover" alt="">
                                </a>
                                <div class="mini_post_content">
                                    <h4 class="m_bottom_5"><a href="article.php?menu_id=6&list_id=2&article_id=109" class="color_dark fw_medium">“碧桂园沪苏一对一帮扶基金”2018年度助学金发放仪式在南通举行</a></h4>
                                    <p class="f_size_medium m_bottom_10">2019-06-01, <a href="#" class="color_dark">助学扶贫</a></p>
                                    <hr>
                                    <hr class="m_bottom_15">
                                    <p class="m_bottom_10">8月15日上午，由共青团南通市委、南通市希望工程办公室联合主办的“砥砺青春 圆梦大学”2018希望工程爱心助学公益活动暨“碧桂园沪苏一对一帮扶基金”2018年度助学金发放仪式在南通举行。江苏省扶贫“三会”理事长丁解民、副理事长陈贵希、张益新，省希望工程办公室负责人、省青少年发展基金会负责人薛保刚，南通市委宣传部常务副部长陈慧宇.</p>
                                    <a href="article.php?menu_id=6&list_id=2&article_id=109" class="tt_uppercase f_size_large">详情</a>
                                </div>
                            </article>
                            <hr class="divider_type_3 m_bottom_30">
                            <article class="m_bottom_20 clearfix">
                                <a href="#" class="photoframe d_block d_xs_inline_b f_xs_none wrapper shadow f_left m_right_20 m_bottom_10 r_corners">
                                    <img src="/pic/article/11501.png" style="width: 320px; height: 240px" class="tr_all_long_hover" alt="">
                                </a>
                                <div class="mini_post_content">
                                    <h4 class="m_bottom_5"><a href="article.php?menu_id=6&list_id=2&article_id=115" class="color_dark fw_medium">淮阴区扶贫协会在省淮海中学举行“滴水筑梦”助学金发放仪式</a></h4>
                                    <p class="f_size_medium m_bottom_10">2019-09-10, <a href="#" class="color_dark">助学扶贫</a></p>
                                    <hr>
                                    <hr class="m_bottom_15">
                                    <p class="m_bottom_10">最11月20日,淮安市淮阴区扶贫开发协会在省淮海中学举行2018年度“滴水筑梦”助学金发放仪式。现场向该校100名家庭贫困学生发放助学金20万元。这批助学金由江苏银行捐助,是在去年已经捐赠20万元的基础上的第二次捐款。</p>
                                    <a href="article.php?menu_id=6&list_id=2&article_id=115" class="tt_uppercase f_size_large">详情</a>
                                </div>
                            </article>

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
                                $results = $db->query("select * from menu_article where menu_id=1 and list_id=3 order by date DESC limit 3 ");
                                $count = 0;
                                while ($v = $results->fetchArray()) {
                                    ++$count;
                                    $title = $v['title'];
                                    $date = $v['date'];
                                    $article_id = $v['article_id'];
                                    ?>
                                    <article class="clearfix m_bottom_5">
                                        <a href="article.php?menu_id=<?=$menu_id?>&list_id=<?=$list_id?>&article_id=<?=$article_id?>" class="color_dark d_block bt_link p_vr_0"><?= $title ?></a>
                                        <p class="m_top_5 f_size_medium"><?= $date ?></p>
                                    </article>
                                <?php
                                    if ($count < 3) {
                                        ?>
                                        <hr class="m_bottom_15">
                                        <?php
                                    }
                                }
                                ?>

                            </div>
                        </figure>


                        <figure class="widget shadow r_corners wrapper m_bottom_30">
                            <figcaption>
                                <h3 class="color_light">扶贫要闻</h3>
                            </figcaption>
                            <div class="widget_content">
                                <?php
                                $results = $db->query("select * from menu_article where menu_id=1 and list_id=1 order by date DESC limit 3 ");
                                $count = 0;
                                while ($v = $results->fetchArray()) {
                                    ++$count;
                                    $title = $v['title'];
                                    $date = $v['date'];
                                    $article_id = $v['article_id'];
                                    ?>
                                    <article class="clearfix m_bottom_5">
                                        <a href="article.php?menu_id=<?=$menu_id?>&list_id=<?=$list_id?>&article_id=<?=$article_id?>" class="color_dark d_block bt_link p_vr_0"><?= $title ?></a>
                                        <p class="m_top_5 f_size_medium"><?= $date ?></p>
                                    </article>
                                    <?php
                                    if ($count < 3) {
                                        ?>
                                        <hr class="m_bottom_15">
                                        <?php
                                    }
                                }
                                ?>

                            </div>
                        </figure>

                        <figure class="widget shadow r_corners wrapper m_bottom_30">
                            <figcaption>
                                <h3 class="color_light">工作动态</h3>
                            </figcaption>
                            <div class="widget_content">
                                <?php
                                $results = $db->query("select * from menu_article where menu_id=1 and list_id=2 order by date DESC limit 3 ");
                                $count = 0;
                                while ($v = $results->fetchArray()) {
                                    ++$count;
                                    $title = $v['title'];
                                    $date = $v['date'];
                                    $article_id = $v['article_id'];
                                    ?>
                                    <article class="clearfix m_bottom_5">
                                        <a href="article.php?menu_id=<?=$menu_id?>&list_id=<?=$list_id?>&article_id=<?=$article_id?>" class="color_dark d_block bt_link p_vr_0"><?= $title ?></a>
                                        <p class="m_top_5 f_size_medium"><?= $date ?></p>
                                    </article>
                                    <?php
                                    if ($count < 3) {
                                        ?>
                                        <hr class="m_bottom_15">
                                        <?php
                                    }
                                }
                                ?>

                            </div>
                        </figure>

                        <figure class="widget shadow r_corners wrapper m_bottom_30">
                            <figcaption>
                                <h3 class="color_light">办事指南</h3>
                            </figcaption>
                            <div class="widget_content">
                                <?php
                                $results = $db->query("select * from menu_article where menu_id=7 order by date DESC limit 3 ");
                                $count = 0;
                                while ($v = $results->fetchArray()) {
                                    ++$count;
                                    $title = $v['title'];
                                    $date = $v['date'];
                                    $article_id = $v['article_id'];
                                    ?>
                                    <article class="clearfix m_bottom_5">
                                        <a href="article.php?menu_id=<?=$menu_id?>&list_id=<?=$list_id?>&article_id=<?=$article_id?>" class="color_dark d_block bt_link p_vr_0"><?= $title ?></a>
                                        <p class="m_top_5 f_size_medium"><?= $date ?></p>
                                    </article>
                                    <?php
                                    if ($count < 3) {
                                        ?>
                                        <hr class="m_bottom_15">
                                        <?php
                                    }
                                }
                                ?>

                            </div>
                        </figure>

                    </aside>

                    <div id="wrap">
                        <ul id="list">
                            <li><img src="/pic/hp/l1.png"  style="width: 320px;height: 240px" alt=""></li>
                            <li><img src="/pic/hp/l2.png"  style="width: 320px;height: 240px" alt=""></li>
                            <li><img src="/pic/hp/l3.png"  style="width: 320px;height: 240px" alt=""></li>
                            <li><img src="/pic/hp/l4.png"  style="width: 320px;height: 240px" alt=""></li>
                            <li><img src="/pic/hp/l5.png"  style="width: 320px;height: 240px" alt=""></li>
                            <li><img src="/pic/hp/l6.jpg"  style="width: 320px;height: 240px" alt=""></li>
                            <li><img src="/pic/hp/l7.jpg"  style="width: 320px;height: 240px" alt=""></li>
                            <li><img src="/pic/hp/l8.jpg"  style="width: 320px;height: 240px" alt=""></li>
                        </ul>
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



		<script src="js/owl.carousel.min.js"></script>

		<script src="js/waypoints.min.js"></script>

		<script src="js/camera.min.js"></script>

        <script src="myjs/foot.js"></script>
        <script src="myjs/head.js"></script>
		<script src="js/scripts.js"></script>

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