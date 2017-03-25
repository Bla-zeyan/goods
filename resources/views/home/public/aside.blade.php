<div class="sidebar">
    {{--侧边栏盒子--}}
    <div class="menu_box">
        <h3 class="menu_head">产品菜单</h3>
        <ul class="menu">
            <li class="item1"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>男</a>
                <ul class="cute">
                    <li class="subitem1"><a href="#">可爱</a></li>
                    <li class="subitem2"><a href="#">可爱1</a></li>
                    <li class="subitem3"><a href="#">可爱2</a></li>
                </ul>
            </li>
            <li class="item2"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>女</a>
                <ul class="cute">
                    <li class="subitem1"><a href="#">可爱3</a></li>
                    <li class="subitem2"><a href="#">可爱4</a></li>
                    <li class="subitem3"><a href="#">可爱5</a></li>
                </ul>
            </li>
            <li class="item3"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>时尚</a>
                <ul class="cute">
                    <li class="subitem1"><a href="#">可爱6</a></li>
                    <li class="subitem2"><a href="#">可爱7</a></li>
                    <li class="subitem3"><a href="#">可爱8</a></li>
                </ul>
            </li>
            <li class="item4"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>孩子们</a>
                <ul class="cute">
                    <li class="subitem1"><a href="#">可爱9</a></li>
                    <li class="subitem2"><a href="#">可爱10</a></li>
                    <li class="subitem3"><a href="#">可爱11</a></li>
                </ul>
            </li>
            <li class="item5"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>牛仔裤</a>
                <ul class="cute">
                    <li class="subitem1"><a href="#">可爱12</a></li>
                    <li class="subitem2"><a href="#">可爱13</a></li>
                    <li class="subitem3"><a href="#">可爱14</a></li>
                </ul>
            </li>
            <li class="item6"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>T恤</a>
                <ul class="cute">
                    <li class="subitem1"><a href="#">可爱12</a></li>
                    <li class="subitem2"><a href="#">可爱13</a></li>
                    <li class="subitem3"><a href="#">可爱14</a></li>
                </ul>
            </li>
            <li class="item7"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>顶级时尚</a>
                <ul class="cute">
                    <li class="subitem1"><a href="#">可爱15</a></li>
                    <li class="subitem2"><a href="#">可爱16</a></li>
                    <li class="subitem3"><a href="#">可爱17</a></li>
                </ul>
            </li>
            <li class="item8"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>夏天控</a>
                <ul class="cute">
                    <li class="subitem1"><a href="#">可爱18</a></li>
                    <li class="subitem2"><a href="#">可爱19</a></li>
                    <li class="subitem3"><a href="#">可爱20</a></li>
                </ul>
            </li>
            <li class="item9"><a href="#"><img class="arrow-img" src="images/f_menu.png" alt=""/>特价</a>
                <ul class="cute">
                    <li class="subitem1"><a href="#">可爱21</a></li>
                    <li class="subitem2"><a href="#">可爱22</a></li>
                    <li class="subitem3"><a href="#">可爱23</a></li>
                </ul>
            </li>
        </ul>
    </div>
    <!--initiate accordion-->
    <script type="text/javascript">
        $(function() {
            var menu_ul = $('.menu > li > ul'),
                menu_a  = $('.menu > li > a');
            menu_ul.hide();
            menu_a.click(function(e) {
                e.preventDefault();
                if(!$(this).hasClass('active')) {
                    menu_a.removeClass('active');
                    menu_ul.filter(':visible').slideUp('normal');
                    $(this).addClass('active').next().stop(true,true).slideDown('normal');
                } else {
                    $(this).removeClass('active');
                    $(this).next().stop(true,true).slideUp('normal');
                }
            });

        });
    </script>
</div>
{{--侧边第二行--}}
<div class="delivery">
    <img src="images/delivery.jpg" class="img-responsive" alt=""/>
    <h3>交付</h3>
    <h4>全球</h4>
</div>
{{--侧边第三行--}}
<div class="twitter">
    <h3>最近的Twitter</h3>
    <ul class="twt1">
        <i class="twt"> </i>
        <li class="twt1_desc"><span class="m_1">@Contrary</span> 与流行的看法,回车键<span class="m_1"> 回车键</span></li>
        <div class="clearfix"> </div>
    </ul>
    <ul class="twt1">
        <i class="twt"> </i>
        <li class="twt1_desc"><span class="m_1">T与流行的看法</span> 与流行的看法,回车键 <span class="m_1">回车键</span></li>
        <div class="clearfix"> </div>
    </ul>
    <ul class="twt1">
        <i class="twt"> </i>
        <li class="twt1_desc"><span class="m_1">T与流行的看法</span> 大赛的将来打算立刻打三角阿加莎的lkj<span class="m_1">大三角达克斯大家啊立刻打</span></li>
        <div class="clearfix"> </div>
    </ul>
</div>
{{--侧边第四行--}}
<div class="clients">
    <h3>大家啊散开了打算看来大家</h3>
    <h4>大家啊肯德基阿克萨德加拉快速的就askdj</h4>
    <ul class="user">
        <i class="user_icon"></i>
        <li class="user_desc"><a href="#"><p>大家啊考四级达拉斯大家啊桑丽卡</p></a></li>
        <div class="clearfix"> </div>
    </ul>
</div>