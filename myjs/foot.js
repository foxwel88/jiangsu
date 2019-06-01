$(function () {
    let footer = `
                <footer id="footer">
                <div class="footer_top_part">
					<div class="container">
						<div class="row clearfix">
							<div class="col-lg-4 col-md-4 col-sm-4 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">关于</h3>
								<p class="m_bottom_25">江苏省贫困县信息服务网是xxxx待补充简介</p>
							</div>

							<div class="col-lg-1 col-md-1 col-sm-1 m_xs_bottom_30"></div>
							<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">网站地图</h3>
								<ul class="vertical_list">
									<li><a class="color_light tr_delay_hover" href="#">贫困县（区）<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">最新资讯<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">政策法规<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">信息共享<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">经验交流<i class="fa fa-angle-right"></i></a></li>
									<li><a class="color_light tr_delay_hover" href="#">技术培训<i class="fa fa-angle-right"></i></a></li>
								</ul>
							</div>

							<div class="col-lg-1 col-md-1 col-sm-1 m_xs_bottom_30"></div>
							<div class="col-lg-3 col-md-3 col-sm-3 m_xs_bottom_30">
								<h3 class="color_light_2 m_bottom_20">友情链接</h3>
								<div class="custom_select f_size_medium relative d_inline_middle   m_mxs_top_10">
										<div class="select_title r_corners relative color_dark" style="min-width: 210px;">贫困县（区）人民政府网站</div>
										<ul class="select_list d_none" style="display: none;">
										    <li class="tr_delay_hover"><a href="http://binhai.yancheng.gov.cn/">滨海县人民政府</a></li>
										    <li class="tr_delay_hover"><a href="http://www.chinafx.gov.cn/default.htm">丰县人民政府</a></li>
										    <li class="tr_delay_hover"><a href="http://www.guannan.gov.cn/">灌南县人民政府</a></li>
										    <li class="tr_delay_hover"><a href="http://www.guanyun.gov.cn/">灌云县人民政府</a></li>
										    <li class="tr_delay_hover"><a href="http://www.zghaq.gov.cn/">淮安区人民政府</a></li>
										    <li class="tr_delay_hover"><a href="http://www.zghy.gov.cn/">淮阴区人民政府</a></li>
										    <li class="tr_delay_hover"><a href="http://www.lianshui.gov.cn/">涟水县人民政府</a></li>
										    <li class="tr_delay_hover"><a href="http://www.shuyang.gov.cn/zgsy/">沐阳县人民政府</a></li>
										    <li class="tr_delay_hover"><a href="http://www.sihong.gov.cn/">泗洪县人民政府</a></li>
										    <li class="tr_delay_hover"><a href="http://www.siyang.gov.cn/">泗阳县人民政府</a></li>
										    <li class="tr_delay_hover"><a href="http://www.cnsn.gov.cn/">睢宁县人民政府</a></li>
										    <li class="tr_delay_hover"><a href="http://xiangshui.yancheng.gov.cn//">响水县人民政府</a></li>
										   </ul>
								</div>
								
								<div class="custom_select f_size_medium relative d_inline_middle  m_top_20 m_mxs_top_10">
										<div class="select_title r_corners relative color_dark" style="min-width: 210px;">阳光扶贫类网站</div>
										<ul class="select_list d_none" style="display: none;">
										    <li class="tr_delay_hover"><a href="http://ygfp.suqian.gov.cn/main">宿迁阳光扶贫网</a></li>
										    <li class="tr_delay_hover"><a href="http://ygfp.huaian.gov.cn/main">淮安阳光扶贫网</a></li>
										    <li class="tr_delay_hover"><a href="http://ygfp.lyg.gov.cn/main">连云港阳光扶贫网</a></li>
										    <li class="tr_delay_hover"><a href="http://ygfp.wuxi.gov.cn/main">无锡阳光扶贫网</a></li>
										    <li class="tr_delay_hover"><a href="http://ygfp.suzhou.gov.cn/main">苏州阳光扶贫 智慧e农</a></li>
										    <li class="tr_delay_hover"><a href="http://fpjk.nanjing.gov.cn/main">南京阳光扶贫系统</a></li>
										    <li class="tr_delay_hover"><a href="http://www.zjygfp.gov.cn/main">镇江阳光扶贫系统</a></li>
										    <li class="tr_delay_hover"><a href="http://ygfp.nantong.gov.cn/webygcw/ygcw">南通市阳光村务平台</a></li>
										  </ul>
								</div>
								
								<div class="custom_select f_size_medium relative d_inline_middle  m_top_20 m_mxs_top_10">
										<div class="select_title r_corners relative color_dark" style="min-width: 210px;">江苏省综合类扶贫网站</div>
										<ul class="select_list d_none" style="display: none;">
										    <li class="tr_delay_hover"><a href="http://www.jsfpzx.org.cn/">江苏扶贫之窗</a></li>
										    <li class="tr_delay_hover"><a href="http://www.njfpsh.com/www/fpzx/index.htm">南京扶贫之窗</a></li>
										    <li class="tr_delay_hover"><a href="http://www.jsfp.gov.cn/">江苏省政府扶贫工作办公室</a></li>
										    <li class="tr_delay_hover"><a href="http://www.jiangsu.gov.cn/col/col64342/index.html">江苏省人民政府脱贫攻坚共同富裕</a></li>
										    <li class="tr_delay_hover"><a href="http://www.qianlima.com/hot2770015/">江苏省扶贫办</a></li>
										    <li class="tr_delay_hover"><a href="https://www.chinabidding.cn/xzjg_11_fpkfb/">江苏扶贫开发办</a></li>
										  </ul>
								</div>
								
								<div class="custom_select f_size_medium relative d_inline_middle  m_top_20 m_mxs_top_10">
										<div class="select_title r_corners relative color_dark" style="min-width: 210px;">江苏省相关部门</div>
										<ul class="select_list d_none" style="display: none;">
										    <li class="tr_delay_hover"><a href="http://www.jiangsu.gov.cn/">江苏省人民政府</a></li>
										    <li class="tr_delay_hover"><a href="http://nw.jiangsu.gov.cn/">江苏省农业农村厅</a></li>
										    <li class="tr_delay_hover"><a href="http://jsgzw.jiangsu.gov.cn/">江苏省国资委</a></li>
										    <li class="tr_delay_hover"><a href="http://fzggw.jiangsu.gov.cn/">江苏省发改委</a></li>
										    <li class="tr_delay_hover"><a href="http://jyt.jiangsu.gov.cn/">江苏省教育厅</a></li>
										    <li class="tr_delay_hover"><a href="http://kxjst.jiangsu.gov.cn/">江苏省科技厅</a></li>
										    <li class="tr_delay_hover"><a href="http://mzt.jiangsu.gov.cn/">江苏省民政厅</a></li>
										    <li class="tr_delay_hover"><a href="http://czt.jiangsu.gov.cn/">江苏省财政厅</a></li>
										    <li class="tr_delay_hover"><a href="http://jtyst.jiangsu.gov.cn/">江苏省交通运输厅</a></li>
										    <li class="tr_delay_hover"><a href="http://jswater.jiangsu.gov.cn/">江苏省水利厅</a></li>
										    <li class="tr_delay_hover"><a href="http://lyj.jiangsu.gov.cn/">江苏省林业局</a></li>
										  </ul>
								</div>
								
							</div>

						</div>
					</div>
				</div>
				<!--copyright part-->
				<div class="footer_bottom_part">
					<div class="container clearfix t_mxs_align_c">
						<p class="f_left f_mxs_none m_mxs_bottom_10">&copy; 2019 <span class="color_light">江苏省贫困县信息服务网</span>  . All Rights Reserved.</p>
					</div>
				</div>
</footer>`;
    $("#myfoot").append(footer);
});