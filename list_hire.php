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
        <link href="css/hire.css" rel="stylesheet">
	</head>
<style>
    .main{ width:980px;border:1px solid #CBCBCB;border-top:none;margin:0 auto; background:url(../images/layout_bg.gif) repeat-y;}
    .left_bot{float: left; background:url(/jshrweb/jszj/resource/images/left_bot.jpg) no-repeat 0 0; width:209px; height:9px;overflow:hidden;}
    .content{ width:738px; float:left;}
    .content h3{ padding-left:15px; width:723px; font-size:14px; color:#000;  line-height:30px; float:left; padding-top:14px; float:left;}
    .con_main{ float:left; background:#fff;}
    .con_top{ background:url(/jshrweb/jszj/resource/images/content_top.jpg) no-repeat; width:738px; height:16px; display:block; float:left;}
    .con_info{ float:left; border-left:1px solid #EFEFEF;border-right:2px solid #EFEFEF; width:708px; padding:0 10px 0 17px;min-height:500px;_height:500px;}
    .con_info h2{float:left;width:100%;height:32px;background:url(/jshrweb/jszj/resource/images/tab_titbg.gif) left top no-repeat;}
    .con_info h2 em{ padding:4px 0 0 18px;height:26px;line-height:26px;display:block;font-size:14px;font-weight:bold;color:#686868;}

    .con_info h3{ background:url(/jshrweb/jszj/resource/images/r_top.jpg) repeat-x 0 0; height:25px; width:100%; padding:0; padding-bottom:7px;}
    .con_info .jbxx{ font-size:14px; color:#656565; float:left; font-weight:bold; padding:0; height:23px; line-height:23px; padding:0 0 0 25px; border-bottom:2px solid #278ec6;}
    .con_box1{ border-top:1px solid #278ec6;}
    .con_box1 table{ width:100%;border:1px solid #278ec6;_padding-top:5px;}

    .btn2{ background:url(/jshrweb/jszj/resource/images/button2.gif) no-repeat; width:67px; height:24px; border:0; color:#fff; font-weight:bold;}
    .con_box2{width:100%; margin-top:13px;color:#0a0a0a;overflow:hidden;}
    .con_box2 table{width:100%;font-size:12px;border-collapse:collapse;}
    .con_box2 table thead th{height:27px;line-height:27px; background:url(/jshrweb/jszj/resource/images/th_bg.gif) repeat-x;text-align:center;border:1px solid #D3D5DB; color:#666; font-weight:bold;}
    .con_box2 table tbody td{height:28px;line-height:28px;text-align:center;border:1px solid #D3D5DB;}


    .btn2{ background:url(/jshrweb/jszj/resource/images/button2.gif) no-repeat; width:67px; height:24px; border:0; color:#fff; font-weight:bold;}
    .con_box2{width:100%; margin-top:13px;color:#0a0a0a;overflow:hidden;}
    .con_box2 table{width:100%;font-size:12px;border-collapse:collapse;}
    .con_box2 table thead th{height:27px;line-height:27px; background:url(/jshrweb/jszj/resource/images/th_bg.gif) repeat-x;text-align:center;border:1px solid #D3D5DB; color:#666; font-weight:bold;}
    .con_box2 table tbody td{height:28px;line-height:28px;text-align:center;border:1px solid #D3D5DB;}
    .yeshu{color:#FF0000; height:13px; text-align:center;}
    .zi{padding:10px 3px 10px; 0;float:right;color:#333333;font-size:12px;}
    .zi a{ color:#333;}
    .con_box3{width:99%; margin:13px 0 20px 0;color:#0a0a0a;overflow:hidden;border:1px solid #D3D5DB; background:#F9F9FF url(../images/flower.jpg) no-repeat  right bottom;}
    .con_box3 table{width:100%;font-size:12px;border-collapse:collapse;}
    .con_box3 table  td{height:33px;line-height:33px;text-align:right;border-right:1px solid #D3D5DB; padding-right:10px;}
    .con_box3 table  td.b_left{ text-align:left; padding-left:15px; color:#666;}

    .footer{font-family:Simsun;width:982px; height:29px;  margin:0 auto; text-align:center; color:#7A7A7A;line-height:29px; }
    /* 职业样式 */
    .zw_sty{width:139px;height:21px;background:url(/jshrweb/jszj/resource/images/zw_bg.gif) no-repeat;border:0;cursor:pointer;font-size:12px;color:#666;}
</style>

	<?php
            $db = new SQLite3('data/data.db');
            $menu_id = 3;
            $list_id = 3;
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
												if ($current_list_id == $list_id) {
										?>

                                                    <li class="active">
                                                        <a href="list.php?menu_id=<?=$menu_id?>&list_id=<?=$current_list_id?>" class="f_size_large color_dark d_block">
                                                            <b><?=$current_list_name?></b>
                                                        </a>
                                                    </li>


										<?php   } else { ?>
                                                    <li>
                                                        <a href="list.php?menu_id=<?=$menu_id?>&list_id=<?=$current_list_id?>" class="f_size_large color_dark d_block">
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
                            <div class="content" style="width: 100%;">
                                <div class="con_main" style="width: 100%;">

                                    <div class="con_box2">
                                        <table border="0" align="left" cellpadding="0" cellspacing="0">
                                            <thead>
                                            <tr>
                                                <th class="text_center">
                                                    序 号
                                                </th>
                                                <th>
                                                    岗位名称
                                                </th>
                                                <th>
                                                    单位名称
                                                </th>
                                                <th>
                                                    发布时间
                                                </th>
                                                <th>
                                                    招聘人数
                                                </th>
                                                <th>
                                                    学历要求
                                                </th>
                                                <th>
                                                    工作地点
                                                </th>
                                            </tr>
                                            </thead>
                                            <tbody id="Records">

                                            <?php
                                                $results = $db->query("select * from job");
                                                while ($v = $results->fetchArray()) {
                                                    ?>

                                                    <tr class="first_line">
                                                        <td class="text_center">
                                                            <?=$v['id']?>
                                                        </td>
                                                        <td>
                                                            <a href="list_hire_article.php?job_id=<?=$v['id']?>" style="cursor:pointer;"><?=$v['job_name']?>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <a style="cursor:pointer;"><?=$v['com_name']?>
                                                            </a>
                                                        </td>
                                                        <td>
                                                            <?=$v['date']?>
                                                        </td>
                                                        <td>
                                                            <?=$v['job_num']?>
                                                        </td>
                                                        <td>
                                                            <?=$v['job_limit']?>
                                                        </td>
                                                        <td>
                                                            <?=$v['job_place']?>
                                                        </td>
                                                    </tr>

                                                    <?php
                                                }
                                            ?>

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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