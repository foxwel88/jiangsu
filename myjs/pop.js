$(function () {
    let poper = `
                <figure class="widget shadow r_corners wrapper m_bottom_30">
                    <figcaption>
                        <h3 class="color_light">热门文章</h3>
                    </figcaption>
                    <div class="widget_content">
                        <article class="clearfix m_bottom_15">
                            <a href="article.php?menu_id=1&list_id=1&article_id=3" class="color_dark d_block bt_link p_vr_0">全省农业农村局长会议召开</a>
                            <p class="f_size_medium">2019-03-12</p>
                        </article>
                        <hr class="m_bottom_15">
                        <article class="clearfix m_bottom_15">
                            <a href="article.php?menu_id=1&list_id=1&article_id=1" class="color_dark d_block p_vr_0 bt_link">江苏“土专家”“田秀才”香起来</a>
                            <p class="f_size_medium">2019-05-10</p>
                        </article>
                        <hr class="m_bottom_15">
                        <article class="clearfix m_bottom_5">
                            <a href="article.php?menu_id=1&list_id=2&article_id=11" class="color_dark d_block p_vr_0 bt_link">响水聚合要素发力脱贫攻坚</a>
                            <p class="f_size_medium">2019-05-05</p>
                        </article>
                    </div>
                </figure>`;
    $("#pop-article").append(poper);
});