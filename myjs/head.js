$(function () {
    let header = `<header role="banner" style="background-image: url(pic/hp/head.jpeg); background-size:cover">
					<section class="h_bot_part container" >
						<div class="clearfix row">
							<div class="col-lg-6 col-md-6 col-sm-4 t_xs_align_c">
								<a href="index.html" class="m_xs_bottom_15 d_xs_inline_b">
									<img src="pic/logo.png" alt="">
								</a>
							</div>
							<div style="margin-top: 24px" class="col-lg-6 col-md-6 col-sm-8 t_align_r t_xs_align_c">
                                    <div class="col-lg-6 col-md-6 col-sm-6">
                                    </div>
                                   <div class="col-lg-6 col-md-6 col-sm-6">
									<form class="relative type_2" role="search" method ="get"  action="search_list.php">
										<input type="text" placeholder="搜索" name="search" class="r_corners f_size_medium full_width">
										<button class="f_right search_button tr_all_hover f_xs_none" type="submit">
											<i class="fa fa-search"></i>
										</button>
									</form>
								</div>
							</div>
						</div>
					</section>
					<!--main menu container-->
					<section class="menu_wrap relative">
						<div class="container clearfix" style="width:1170px">
							<!--button for responsive menu-->
							<button id="menu_button" class="r_corners centered_db d_none tr_all_hover d_xs_block m_bottom_10">
								<span class="centered_db r_corners"></span>
								<span class="centered_db r_corners"></span>
								<span class="centered_db r_corners"></span>
							</button>
							<!--main menu-->
							<nav role="navigation" class="f_left f_xs_none d_xs_none">
								<ul class="horizontal_list main_menu clearfix">
									<li id="menuindex" class="relative f_xs_none m_xs_bottom_5"><a href="index.php" class="tr_delay_hover color_light tt_uppercase"><b>首页</b></a>
									</li>

									<li id="menu0" class="relative  f_xs_none m_xs_bottom_5"><a href="city.php" class="tr_delay_hover color_light tt_uppercase"><b>贫困县(区)</b></a>
									</li>

									<li id="menu1" class="relative  f_xs_none m_xs_bottom_5"><a href="list.php?menu_id=1&list_id=1" class="tr_delay_hover color_light tt_uppercase"><b>最新资讯</b></a>
										<!--sub menu-->
										<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=1&list_id=1">扶贫要闻</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=1&list_id=2">工作动态</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=1&list_id=3">通知公告</a></li>
											</ul>
										</div>
									</li>

									<li id="menu2" class="relative  f_xs_none m_xs_bottom_5 <?php if ($menu_id == 2) echo 'active'?>"><a href="list.php?menu_id=2&list_id=1" class="tr_delay_hover color_light tt_uppercase"><b>政策法规</b></a>
										<!--sub menu-->
										<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=2&list_id=1">国家政策</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=2&list_id=2">江苏省政策</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=2&list_id=3">外省政策</a></li>
											</ul>
										</div>
									</li>

									<li id="menu3" class="relative  f_xs_none m_xs_bottom_5"><a href="list.php?menu_id=3&list_id=1" class="tr_delay_hover color_light tt_uppercase"><b>信息共享</b></a>
										<!--sub menu-->
										<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=3&list_id=1">农副产品信息共享</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=3&list_id=2">生产资料信息共享</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=3&list_id=3">招工信息</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=3&list_id=4">招商引资交流</a></li>
											</ul>
										</div>
									</li>

									<li id="menu4" class="relative  f_xs_none m_xs_bottom_5"><a href="list.php?menu_id=4&list_id=1" class="tr_delay_hover color_light tt_uppercase"><b>经验交流</b></a>
										<!--sub menu-->
										<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=4&list_id=1">专家讲堂</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=4&list_id=2">致富交流</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=4&list_id=3">相关书籍</a></li>
											</ul>
										</div>
									</li>

									<li id="menu5" class="relative  f_xs_none m_xs_bottom_5"><a href="list.php?menu_id=5&list_id=1" class="tr_delay_hover color_light tt_uppercase"><b>技术培训</b></a>
										<!--sub menu-->
										<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=5&list_id=1">种植培训</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=5&list_id=2">养殖培训</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=5&list_id=3">工艺培训</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=5&list_id=4">驾驶培训</a></li>
											</ul>
										</div>
									</li>

									<li id="menu6" class="relative  f_xs_none m_xs_bottom_5"><a href="list.php?menu_id=6&list_id=1" class="tr_delay_hover color_light tt_uppercase"><b>扶贫典型</b></a>
										<!--sub menu-->
										<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=6&list_id=1">产业扶贫</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=6&list_id=2">助学扶贫</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=6&list_id=3">电商扶贫</a></li>
											</ul>
										</div>
									</li>

									<li id="menu7"class="relative  f_xs_none m_xs_bottom_5"><a href="list.php?menu_id=7&list_id=1" class="tr_delay_hover color_light tt_uppercase"><b>办事指南</b></a>
										<!--sub menu-->
										<div class="sub_menu_wrap top_arrow d_xs_none type_2 tr_all_hover clearfix r_corners">
											<ul class="sub_menu">
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=7&list_id=1">小额贷款</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=7&list_id=2">低保户申报</a></li>
												<li><a class="color_dark tr_delay_hover" href="list.php?menu_id=7&list_id=3">精准到户</a></li>
											</ul>
										</div>
									</li>
								</ul>
							</nav>
						</div>
						
					</section>
				</header>`;
    $("#head").append(header);
    var reg = new RegExp("(^|&)"+ "menu_id" +"=([^&]*)(&|$)");
    var r = window.location.search.substr(1).match(reg);
    if(r!=null) {
        var menu_id = unescape(r[2]);
        console.log(menu_id);
        $(`#menu${menu_id}`).addClass("current");
    }

});