<?php
defined('_JEXEC') or die('Restricted access');

/** @var JDocumentHtml $this */

jimport('wisdomfish.components.tool');
jimport('wisdomfish.application.helper.route');
jimport('wisdomfish.application.user_permission');

$tool = new Tool();
$BAST_TEMPLATE_PATH = $this->baseurl . '/templates/' . $this->template;
$TEMPLATE_PATH = '/templates/' . $this->template;
$app = JFactory::getApplication();
$isHome = $_SERVER['REQUEST_URI'] === '/' || $_SERVER['REQUEST_URI'] == '/index.php';
$uri = JUri::getInstance();
$view = JRequest::getString('view');
$templates = JUri::base().'templates/' . $app->getTemplate(true)->template;
$component = $app->input->get('option');
$user = JFactory::getUser();
$isLogin = !empty($user->id);

if($component === 'com_workscloud') {
    if ($view == 'popular' || $view == 'category') {
        $contentClass = 'special_add';
    } else {
        $contentClass = 'school_list';
    }
} else if($component === 'com_search') {
    $contentClass = 'search_result_page';
}
if ($isLogin) {
    JModelLegacy::addIncludePath(JPATH_ROOT . '/components/com_dashboard/models', 'DashboardModel');
    $collectionsModel = JModelLegacy::getInstance("Collections", 'DashboardModel');
    $collections = $collectionsModel->countUser();
}
// 會員權限判斷
$userPermission = new UserPermission();

if (function_exists('apache_request_headers')) {
    $headers = apache_request_headers();
    foreach ($headers as $key => $value) {
        if (strtoupper($key) == strtoupper('HOST')) {
            $httpHost = $value;
            break;
        }
    }
} else {
    $httpHost = $app->input->server->getString('HTTP_HOST');
}
?>
<!DOCTYPE html>
<html lang="<?php echo $this->language; ?>" dir="<?php echo $this->direction; ?>">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no, width=device-width"/>
    <!-- 強制瀏覽器用最新的版本 -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="BAST_TEMPLATE_PATH" value="<?php echo $BAST_TEMPLATE_PATH;?>"/>
    <script>var homeBannerHeight = 339;</script>
    <jdoc:include type="head" />
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/system.css" type="text/css"/>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/system/css/general.css" type="text/css"/>
    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/screen.css" rel="stylesheet"
          type="text/css" media="screen"/>
    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/index.css" rel="stylesheet"
          type="text/css" media="screen"/>
    <link href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/font.css" rel="stylesheet"
          type="text/css" media="screen"/>
    <link rel="stylesheet" href="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/css/main.css" type="text/css"/>
    <style>
        <?php if(!($isHome || $component == 'com_users')) { ?>
        @media screen and (max-width: 1279px){
            .menu_border {
                border-bottom: none!important;
            }
        }
        <?php } ?>
    </style>
    <?php if($component != 'com_virtuemart') { ?>
    <script src="<?php echo $templates; ?>/js/jquery-1.9.1.js"></script>
    <?php } ?>
    <script src="<?php echo $templates; ?>/js/dashboard.js"></script>
</head>
<body>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/jquery.timers-1.1.2.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/screen.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/main.js"></script>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/works_cloud.js"></script>
<script>
    function defaultProfilePicture(img) {
        img.src = '<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/img/edit_img.jpg';
    }


    (function ($) {
        $(function(){

        // 縮字整理
        // real1
            $(".real1_div").addClass('pc_show')
            $(".real2_div").addClass('pc_show')
            var len = 29; // 超過29個字以"..."取代
            $(".real1_div > .detail > .smark").each(function (i) {
                if ($(this).text().length > len) {
                    $(this).attr("title", $(this).text());
                    $(this).text($(this).text().substring(0, len - 1) + "...");
                }
            });
            // real2
            var len2 = 14; // 超過14個字以"..."取代
            $(".real2_div > .detail > .title").each(function (i) {
                if ($(this).text().length > len2) {
                    $(this).attr("title", $(this).text());
                    $(this).text($(this).text().substring(0, len2 - 1) + "...");
                }
            });
            // real4
            var len3 = 22; // 超過22個字以"..."取代
            $(".real4_div .title").each(function (i) {
                if ($(this).text().length > len3) {
                    $(this).attr("title", $(this).text());
                    $(this).text($(this).text().substring(0, len3 - 1) + "...");
                }
            });
            // real6
            var len4 = 14; // 超過14個字以"..."取代
            $(".real6_div .detail .title").each(function (i) {
                if ($(this).text().length > len4) {
                    $(this).attr("title", $(this).text());
                    $(this).text($(this).text().substring(0, len4 - 1) + "...");
                }
            });
            // real1
            $(".real1_div > .detail > .icon_group > .icon_group_in:even").css({"float": "left", "text-align": "left"});
            $(".real1_div > .detail > .icon_group > .icon_group_in:odd").css({"float": "right", "text-align": "right"});
            $(".real1_div > .detail > .icon_group > .icon_group_in:odd").after("<div style='clear:both'></div>")
            // real2
            // 第3個內容 margin-left:0
            $('.real2').each(function() {
                $(this).find(".real2_div:lt(3)").addClass('pc_mt0')
                $(this).find('.real2_div').each(function (i) {
                    if ((i) % 3 == 0) {
                        $(this).addClass('pc_ml0');
                    }
                })
            });

            // real3_pc
            // 一開始　real3_pc_outer_box　內容
            var original_real3_pc_html = $(".real3_pc_outer_box").html();
            // 一開始　real3_pc_outer_box　內容數量
            var original_real3_pc_num = $(".real3_pc_outer_box > .real3_box ").length;
            // 一開始抓電腦版的內容到手機版
            $(".real3_phone_outer_box").append(original_real3_pc_html)
            // real3_pc_outer_box 一開始的寬度
            var original_real3_pc_outer_box = (($(".real3_pc_outer_box > .real3_box").length) * 460) - 25;
            $(".real3_pc_outer_box").css("width", original_real3_pc_outer_box + "px")
            // 電腦版 左右切換
            var real3_pc_run = 0;
            $(".real3_pc_right_btn").click(function () {
                // if(real3_pc_outer_box寬度+real3_pc_outer_box左距-hidden_box左距 < 視窗顯示hidden_box)
                if ((((($(".real3_pc_outer_box > .real3_box").length) * 460) - 25) + $(".real3_pc_outer_box").offset().left - $(".real3> .hidden_box").offset().left) < $(".real3 > .hidden_box").width() + 920) {

                    $(".real3_pc_outer_box").css("width", ((($(".real3_pc_outer_box > .real3_box").length) * 460) - 25) + "px")
                }
                real3_pc_run = real3_pc_run - 460;
                $(".real3_pc_outer_box").stop(true).animate({left: real3_pc_run + 'px'}, 500);

            })
            $(".real3_pc_left_btn").click(function () {
                // if(real3_pc_outer_box寬度+real3_pc_outer_box左距-hidden_box左距 > 小於０)
                if (($(".real3_pc_outer_box").offset().left + $(".real3 > .hidden_box").offset().left - 460) > 0) {
                    $(".real3_pc_outer_box").css("left", 0 - original_real3_pc_outer_box + "px");
                    $(".real3_pc_outer_box").prepend(original_real3_pc_html);
                    $(".real3_pc_outer_box").css("width", ((($(".real3_pc_outer_box > .real3_box").length) * 460) - 25) + "px")
                    real3_pc_run = 0 - original_real3_pc_outer_box - 25;
                }
                real3_pc_run = real3_pc_run + 460;
                $(".real3_pc_outer_box").stop(true).animate({left: real3_pc_run + 'px'}, 500);
            })
            // 手機版 切換
            var real3_phone = 0
            $(".real3_phone_outer_box > .real3_box").removeClass('real3_show')
            $(".real3_phone_outer_box > .real3_box:eq(0)").addClass('real3_show')
            $(".real3_phone_left_btn").click(function (event) {
                real3_phone--;
                if (real3_phone < 0) {
                    real3_phone = (original_real3_pc_num - 1)
                }
                $(".real3_phone_outer_box > .real3_box").removeClass('real3_show')
                $(".real3_phone_outer_box > .real3_box:eq(" + real3_phone + ")").addClass('real3_show')
            });
            $(".real3_phone_right_btn").click(function (event) {
                real3_phone++;
                if (real3_phone >= original_real3_pc_num) {
                    real3_phone = 0
                }
                $(".real3_phone_outer_box > .real3_box").removeClass('real3_show')
                $(".real3_phone_outer_box > .real3_box:eq(" + real3_phone + ")").addClass('real3_show')
            });
            // real5 抓電腦版的內容出來
            $(".real5_div .hidden_box_other .outer_box").each(function () {
                $(this).prepend($(this).parents(".school_right").find(".outer_box").html())
            });

            // 計算每一行other手機版 outer_box寬度
            $(".real5_div .hidden_box_other .outer_box").each(function () {
                $(this).css("width", (($(this).parents(".school_right").children(".hidden_box_pc").find(".box").length) * 255) + "px")

            });
            // 超過第三個隱藏
            $(".real5_div").each(function () {
                $(this).children('.school_right').children('.hidden_box_pc').children('.outer_box').children('.box:gt(2)').hide();
            });
            $('.video-micro-lesson-tab').click(function() {
                var className = $(this).data('showTabs');
                $('.video-micro-lesson-panel').hide();
                $('.' + className).show();
            });
            $('.activity-tab').click(function() {
                var className = $(this).data('showTabs');
                $('.activity-panel').hide();
                $('.' + className).show();
            });

            $("#mobile_profile").click(function(){
                $(this).children('.more2_img').toggleClass('active')
                $(this).parents('.menu').children('.mobile_profile_menu').toggleClass('phone_show')


            })
            $('.menu_top_search').click(function () {
                $('.search-form').submit();
            })
            $('.mobile_search').click(function () {
                $('.mobile-search-from').submit();
            })
        })

    })(jQuery)
</script>
<style>

</style>
<div class="header">
    <div class="inner_center">
        <div class="header_left"><a href="/"><span>首页</span></a>
            <?php if($isLogin) { ?>
            <a href="<?php echo JRoute::_('index.php?option=com_dashboard&view=archive'); ?>"><span>个人仪表板</span></a>
            <?php } else { ?>
            <a href="<?php echo JRoute::_('index.php?option=com_users&view=login'); ?>"><span>用户登录</span></a>
            <?php } ?>
        </div>
        <div class="header_right">
            <?php if(!$isLogin) { ?>
            <!--<a href="<?php echo JRoute::_('index.php?option=com_oauth&task=api_wechat.login');?>">
                <div><img src="<?php echo $BAST_TEMPLATE_PATH; ?>/img/wechat.png">登录</div>
            </a>-->
            <?php } else { ?>
                <form action="<?php echo JRoute::_('index.php', true); ?>" method="post" id="login-form" class="form-vertical">
                    <button class="logout-button">登出</button>
                    <input type="hidden" name="option" value="com_users" />
                    <input type="hidden" name="task" value="user.logout" />
                    <input type="hidden" name="return" value="<?php echo $return; ?>" />
                    <?php echo JHtml::_('form.token'); ?>
                </form>
            <?php } ?>
            <div style="clear:right"></div>
        </div>
        <div style="clear:both"></div>
    </div>
</div>
<div style="width:100%; display: inline-block"><iframe width='100%' height='790' frameborder='0'  scrolling='no' marginheight='0' marginwidth='0' src='/tmp/index.php'></iframe>
<div class="menu">
    <div class="inner_center">
	    <img src="/tmp/index_files/logo.png" width="230" height="50">		
        <div class="menu_right">
            <div class="menu_phone">
                <a><img src="<?php echo $BAST_TEMPLATE_PATH; ?>/img/menu.png" class="menu_btn"></a>
                <?php if ($isLogin) { ?>
                    <a id="mobile_profile">
                        <img src="<?php echo $BAST_TEMPLATE_PATH; ?>/img/member.png" style="margin-left: 0px;">
                    </a>
                <?php } else { ?>
                    <a href="<?php echo JRoute::_('index.php?option=com_users&view=profile&layout=edit')?>">
                        <img src="<?php echo $BAST_TEMPLATE_PATH; ?>/img/member.png" style="margin-left: 0px;">
                    </a>
                <?php } ?>

                <div style="clear:right"></div>
            </div>
            <div class="menu_top">
                <form action="/" method="post" class="form-inline search-form">
                    <input name="searchword" id="mod-search-searchword103" maxlength="200" class="inputbox search-query input-medium" type="search" placeholder="站内快速搜寻">
                    <input type="hidden" name="task" value="search">
                    <input type="hidden" name="option" value="com_search">
                    <img class="menu_top_search" src="<?php echo $BAST_TEMPLATE_PATH; ?>/img/search.png">
                </form>
            </div>
            <div style="clear:right"></div>
            <div class="menu_bottom">
                <a>
                    <div class="menu_pc_btn"><span class="icon_span"
                                                   style="background-image: url(<?php echo $TEMPLATE_PATH; ?>/img/icon6.png)"><div
                                style="display: none;"></div></span>帮助中心
                    </div>
                </a>
                <!--<a href="#">
                    <div class="menu_pc_btn"><span class="icon_span"
                                                   style="background-image: url(<?php echo $TEMPLATE_PATH; ?>/img/icon5.png)"><div>
                                12
                            </div></span>我的购物车
                    </div>-->
                </a>
                <a href="<?php echo JRoute::_('index.php?option=com_dashboard&view=archive'); ?>">
                    <div class="menu_pc_btn"><span class="icon_span"
                                                   style="background-image: url(<?php echo $TEMPLATE_PATH; ?>/img/icon4.png)"><div>
                                <?php echo empty($collections) ? '' : $collections->total; ?>
                            </div></span>我的收藏
                    </div>
                </a>
                <a href="<?php echo JRoute::_('index.php?option=com_dashboard&view=archive&view_type=workscloud'); ?>">
                    <div class="menu_pc_btn">
                        <span class="icon_span" style="background-image: url(<?php echo $TEMPLATE_PATH; ?>/img/icon2.png)">
                            <div style="display: none;"></div></span>我的作品云
                    </div>
                </a>
            </div>
            <div style="clear:right"></div>
        </div>
        <div style="clear:right"></div>
    </div>
    <div class="cover fsc18 mobile_profile_menu">
        <?php if ($isLogin) { ?>
            <div class="li"><a href="<?php echo JRoute::_('index.php?option=com_users&view=profile&layout=edit')?>">我的个人资料</a></div>
            <div class="li"><a href="<?php echo JRoute::_('index.php?option=com_dashboard&view=archive'); ?>">我的收藏</a></div>
            <?php if($userPermission->checkGroup('education')) {?>
                <div class="li"><a href="<?php echo JRoute::_('index.php?option=com_dashboard&view=archive&view_type=education')?>">我的教案</a></div>
            <?php } ?>
            <?php if($userPermission->checkGroup('classes')) {?>
                <div class="li"><a href="<?php echo JRoute::_('index.php?option=com_dashboard&view=archive&view_type=classes')?>">我的课程</a></div>
            <?php } ?>
            <div class="li"><a href="<?php echo JRoute::_('index.php?option=com_dashboard&view=archive&view_type=workscloud'); ?>">我的作品云</a></div>
        <?php } ?>
    </div>
</div>
<?php if($isHome) { ?>
<script src="<?php echo $this->baseurl ?>/templates/<?php echo $this->template; ?>/js/fittext.js"></script>
<div class="banner">
    <div class="inner_center">
        <jdoc:include type="modules" name="banner-slideshow" />
        <div class="banner_adver">
            <jdoc:include type="modules" name="banner-adver" />
        </div>
        <span class="clear"></span>
    </div>
    <div class="pc_hide fsc18">
        <a href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute(14));?>">
            <div><img src="<?php echo $BAST_TEMPLATE_PATH;?>/img/b_icon1.png">活动<span class="fsc11"></span></div>
        </a>
        <a href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute(13));?>">
            <div><img src="<?php echo $BAST_TEMPLATE_PATH;?>/img/b_icon2.png">视频与微课<span class="fsc11"></span></div>
        </a>
        <a href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute(2));?>">
            <div><img src="<?php echo $BAST_TEMPLATE_PATH;?>/img/b_icon4.png">教养专栏<span class="fsc11"></span></div>
        </a>
        <!--<a href="<?php echo JRoute::_('index.php?option=com_dashboard&view=archive&view_type=workscloud&view_type=actives'); ?>">
            <div><img src="<?php echo $BAST_TEMPLATE_PATH;?>/img/b_icon5.png">我的活动<span class="fsc11"></span></div>
        </a>-->
        <a href="<?php echo JRoute::_('index.php?option=com_dashboard&view=archive'); ?>">
            <div><img src="<?php echo $BAST_TEMPLATE_PATH;?>/img/b_icon6.png">我的收藏<span class="fsc11"></span></div>
        </a>
        
    </div>
</div>


<div class="content pb25">
    <div class="inner_center">
        <!-- 第1塊 -->
	    <?php if($this->countModules('activity')): ?>
        <div class="group_item">
            <div class="group_top fsc18">
                <div class="title fsc22">
                    活动
                </div>
                <span class="activity-tab" data-show-tabs="activity-new">今日推荐</span>
<!--                <span class="activity-tab" data-show-tabs="activity-apply">报名最多</span>-->
                <span class="activity-tab" data-show-tabs="activity-attention">高关注度</span>
                <div class="pc_hide">
                    <div class="more2 fs15">
                        <div class="more2_img"></div>
                    </div>
                </div>
                <a href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute(14));?>">
                    <div class="more fs13">更多
                        <div class="more_img"></div>
                    </div>
                </a>
                <div style="clear:right"></div>
            </div>
            <div class="group_in">

                        <jdoc:include type="modules" name="activity" />

                <div class="cover fsc18">
                    <!--<div class="li">抓內容</div>-->
                    <a href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute(14));?>">
                        <div class="li">
                            更多
                            <div class="more_img"></div>
                        </div>
                    </a>

                </div>
            </div>
        </div>
	    <?php endif;?>
		
        <!-- 第2塊 -->
        <div class="group_item">
            <?php if($this->countModules('video-micro-lesson')): ?>
            <div class="group_top fsc18">
                <div class="title fsc22">
                    视频与微课
                </div>
                <span class="video-micro-lesson-tab" data-show-tabs="sort-news">最新发布</span>
                <span class="video-micro-lesson-tab" data-show-tabs="sort-hits">高关注度</span>
                <div class="pc_hide">
                    <div class="more2 fs15">
                        <div class="more2_img"></div>
                    </div>
                </div>
                <a href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute(13));?>">
                    <div class="more fs13">更多
                        <div class="more_img"></div>
                    </div>
                </a>
                <div style="clear:right"></div>
            </div>
            <div class="group_in ">
                <jdoc:include type="modules" name="video-micro-lesson" />
                <div class="cover fsc18">
                    <!--<div class="li">抓內容</div>-->
                    <a href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute(13));?>">
                        <div class="li">
                            更多<span class="more_img"></span>
                        </div>
                    </a>

                </div>
            </div>
            <?php endif; ?>

        </div>
        <?php if($this->countModules('home-product')): ?>
		
        <!-- 第3塊 -->
        <div class="group_item">
            <div class="group_top fsc18">
                <div class="title fsc22">
                    热销产品
                </div>
                <!-- <span></span> -->
                <div class="pc_hide">
                    <div class="more2 fs15"><div class="more2_img"></div> </div>
                </div>
                <a href="<?php echo JRoute::_ ('index.php?option=com_virtuemart');?>"><div class="more fs13">更多<div class="more_img"></div></div></a>
                <div style="clear:right"></div>
            </div>
            <div class="group_in">
                <jdoc:include type="modules" name="home-product" />

            </div>
        </div>
        <?php endif; ?>
        <!-- 第4塊 -->
	    <?php if($this->countModules('education')): ?>
        <div class="group_item">
            <div class="group_top fsc18">
                <div class="title fsc22">
                    教养专栏
                </div>
                <div class="pc_hide">
                    <div class="more2 fs15">
                        <div class="more2_img"></div>
                    </div>
                </div>
                <a href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute(2));?>">
                    <div class="more fs13">更多
                        <div class="more_img"></div>
                    </div>
                </a>
                <div style="clear:right"></div>
            </div>
            <div class="group_in">
                <div class="real">
                    <div class="real4">
                        <jdoc:include type="modules" name="education" />

                        <div class="clear"></div>
                    </div>


                </div>
                <div class="cover fsc18">
                    <a href="<?php echo JRoute::_(ContentHelperRoute::getCategoryRoute(2));?>">
                        <div class="li">
                            更多
                            <div class="more_img"></div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
      <?php endif; ?>
        <!-- 第5塊 -->
        <div class="group_item half index_half1">
            <jdoc:include type="modules" name="works-cloud-campus" />
        </div>
        <!-- 第6塊 -->
        <div class="group_item half index_half2">
            <jdoc:include type="modules" name="works-cloud-children" />
        </div>
         
    </div>

</div>
<?php } else { ?>
    <div class="content <?php echo $contentClass;?>">
        <div class="inner_center">
            <div class="group_item">
                <?php if($component === 'com_workscloud') { ?>
                    <jdoc:include type="component" />
                <?php } else if($component === 'com_dashboard') {  ?>
                    <jdoc:include type="component" />
                <?php } else if($component === 'com_users') {  ?>
                    <jdoc:include type="message" />
                    <jdoc:include type="component" />
                <?php } else if($component === 'com_search') {  ?>
                    <div class="group_top fsc18">
                        <div class="title fsc22">
                            搜寻结果
                        </div>
                        <div class="pc_hide">
                            <div class="more2 fs15">
                                <div class="more2_img"></div>
                            </div>
                        </div>
                        <div style="clear:right"></div>
                    </div>
                    <div class="general_in">
                        <div class="real">
                            <jdoc:include type="component" />
                            <div class="clear"></div>
                        </div>
                    </div>
                <?php } else { ?>
                <div class="group_top fsc18">
                    <div class="title fsc22">
                        <?php echo $tool->getMenuTitle($this->base); ?>
                    </div>
                    <div class="pc_hide">
                        <div class="more2 fs15">
                            <div class="more2_img"></div>
                        </div>
                    </div>
                    <div style="clear:right"></div>
                </div>
                <div class="general_real">
                    <div class="real">
                        <jdoc:include type="modules" name="position-2"/>

                    <?php if($this->countModules('video-top')) { ?>
                        <?php if($view === 'article') { ?>

                        <?php } else { ?>
                        <jdoc:include type="modules" name="video-top"/>

                        <div class="div2 margin_font1">
                            <div class="div2_left_p11">
                                <jdoc:include type="modules" name="video-center"/>
                            </div>
                            <div class="div2_right_p11">
                                <jdoc:include type="modules" name="video-leader-board"/>
                            </div>
                        </div>
                        <?php } ?>
                    <?php } else { ?>
                        <?php if ($this->countModules('video-like') && $view === 'article') { ?>
                            <jdoc:include type="component" />
                            <div class="clear_right"></div>
                            <div class="in_border_4"></div>
                            <jdoc:include type="modules" name="video-like"/>
                        <?php } else { ?>
                            <jdoc:include type="component" />
                        <?php } ?>
                    <?php } ?>
                    <div class="clear"></div>
                    </div>

                </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>

<div class="footer">
<div style="width:100%; display: inline-block">
<iframe width='100%' height='550' frameborder='0'  scrolling='no' marginheight='0' marginwidth='0' src='/tmp/index-1.php'></iframe>
</div>
<div style="width:50%; display: inline-block"><iframe width='99%' height='180' frameborder='0'  scrolling='yes' marginheight='0' marginwidth='0' src='http://maps.google.com.tw/maps?f=q&hl=CN&geocode=&q=上海市普陀区陕西北路1438弄1126号&z=16&output=embed&t='></iframe>
</div><div style="width:50%; display: inline-block;"><iframe width='99%' height='180' frameborder='0'  scrolling='yes' marginheight='0' marginwidth='0' src='http://maps.google.com.tw/maps?f=q&hl=zh-TW&geocode=&q=台北市忠孝東路二段130號&z=16&output=embed&t='></iframe>
</div>
    <div class="inner_center">
        <div class="footer_img"><a href="/"><img src="/tmp/index_files/logo.png" width="240" height="60"></a>            
        </div>
        <div class="footer_special">
            <div class="footer_div1">客服信箱：customer@mail.815kids.cn<br>地　　址：上海市普陀区陕西北路1438弄1126<br>客服电话：400-820-5662
            </div>
            <div class="footer_div2">浏览器版本：建议使用 Google Chrome、Firefox、Microsoft IE 10.0以上<br>最佳解析度：1280×960　上海嘉实信息技术有限公司 版权所有 非经授权禁止转载
                <br>本网站参考时间：GMT +8:00 沪ICP备13041435号-10
            </div>
            <div class="phone_hide" style="clear:both"></div>
            <a>
                <div class="footer_fb"></div>
            </a>
            <div class="left"></div>
        </div>
        <div class="clear"></div>
        <hr>
        <div class="footer_div">
            <a href="<?php echo JRoute::_('index.php?option=com_content&view=article&id=4&catid=15')?>">
                <div>|&nbsp;</div>
                <span>隐私权保护政策&nbsp;|</span>
            </a>
            <a href="<?php echo JRoute::_('index.php?option=com_content&view=article&id=5&catid=15')?>"><span>资讯安全政策&nbsp;|</span></a>
            <div class="pc_hide" style="clear:left"></div>
            <a href="<?php echo JRoute::_('index.php?option=com_content&view=article&id=6&catid=15')?>">
                <div>|&nbsp;</div>
                <span>网站资讯使用声明&nbsp;|</span>
            </a>
            <br><span>Copyright © 2017  OPA. All Rights Reserved</span>
        </div>
    </div>
</div>
<!--Start of Tawk.to Script-->
<script type="text/javascript"> var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date(); (function(){ var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0]; s1.async=true; s1.src='https://embed.tawk.to/5976b2f00d1bb37f1f7a5b02/default'; s1.charset='UTF-8'; s1.setAttribute('crossorigin','*'); s0.parentNode.insertBefore(s1,s0); })(); </script>
<!--End of Tawk.to Script-->
<div class="cover_bg"></div>
<div class="h_content">
    <div class="menu">
        <div class="inner_center">
            <a href="//<?php echo $httpHost;?>/index.php/815kids/11-815home"><img
                    src="<?php echo $BAST_TEMPLATE_PATH; ?>/img/f_logo1.png"></a><a><img
                    src="<?php echo $BAST_TEMPLATE_PATH; ?>/img/close.png" class="h_close"></a>
            <div style="clear:right"></div>
        </div>
    </div>
    <div class="h_li_bg">
        <div class="h_li active">
            <form action="/" method="post" class="form-inline mobile-search-from" >
                <img class="mobile_search" src="<?php echo $BAST_TEMPLATE_PATH; ?>/img/search.png">
                <input name="searchword" id="mod-search-searchword103" maxlength="200" class="inputbox search-query input-medium mobile_search_input" type="text" placeholder="站内快速搜寻">
                <input type="hidden" name="task" value="search">
                <input type="hidden" name="option" value="com_search">
            </form>
           </div>
        <?php if(!$isLogin) { ?>
            <a href="<?php echo JRoute::_('index.php?option=com_users&view=login'); ?>">
                <div class="h_li"><span class="icon_span"
                                        style="background-image: url(<?php echo $BAST_TEMPLATE_PATH; ?>/img/icon1.png)"></span>用户登录
                    / 注册
                </div>
            </a>
        <?php } ?>
        <a href="<?php echo JRoute::_('index.php?option=com_dashboard&view=archive&view_type=workscloud'); ?>">
            <div class="h_li"><span class="icon_span"
                                    style="background-image: url(<?php echo $BAST_TEMPLATE_PATH; ?>/img/icon2.png)"></span>我的作品云
            </div>
        </a>
        </a><a href="<?php echo JRoute::_('index.php?option=com_dashboard&view=archive&view_type=workscloud'); ?>">
            <div class="h_li"><span class="icon_span"
                                    style="background-image: url(<?php echo $BAST_TEMPLATE_PATH; ?>/img/icon4.png)"></span>我的收藏
            </div>
        </a>
        <!--<a href="#">
            <div class="h_li"><span class="icon_span"
                                    style="background-image: url(<?php echo $BAST_TEMPLATE_PATH; ?>/img/icon5.png)"></span>我的购物车
            </div>
        </a>-->
        <a>
            <div class="h_li"><span class="icon_span"
                                    style="background-image: url(<?php echo $BAST_TEMPLATE_PATH; ?>/img/icon6.png)"></span>帮助中心
            </div>
        </a>
        <?php if($isLogin) { ?>
        <div class="h_li">
            <form action="<?php echo JRoute::_('index.php', true); ?>" method="post" id="login-form" class="form-vertical">
                <button class="mobile_logout_button">登出</button>
                <input type="hidden" name="option" value="com_users" />
                <input type="hidden" name="task" value="user.logout" />
                <input type="hidden" name="return" value="<?php echo $return; ?>" />
                <?php echo JHtml::_('form.token'); ?>
            </form></div>
        </div>
        <?php } ?>
    </div>
</div>

<div class="wechat hide">
    <div class="jiathis_style_32x32">
        <a id="jiathis_button_weixin" class="jiathis_button_weixin"></a>
    </div>
    <input type="hidden" id="wechat_share_url">
    <input type="hidden" id="wechat_share_title">
</div>
<div id="bdshare_weixin_qrcode_dialog" class="bd_weixin_popup hide" >
    <div class="bd_weixin_popup_head">
        <span>分享到微信朋友圈</span>
        <a href="#" onclick="return false;" class="bd_weixin_popup_close">×</a>
    </div>
    <div id="bdshare_weixin_qrcode_dialog_qr" class="bd_weixin_popup_main">
        <img id="qr_code_image" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAUAAAAFACAIAAABC8jL9AAAFjUlEQVR4nO3cS24jSRAFweGg739l9QmaSgyzY8JLZlsBYvHjyM1Dvr6+vv4Bmv79vx8A+O8EDGEChjABQ5iAIUzAECZgCBMwhAkYwn69//Pr9Zp5joVubdROPsNte7hbzzz5f57q/efjBIYwAUOYgCFMwBAmYAgTMIQJGMIEDGEChjABQ5iAIeybLfSJbTveE7e2tZMb3eIeePK38TN/h05gCBMwhAkYwgQMYQKGMAFDmIAhTMAQJmAIEzCECRjCLmyhT0zueLftb0/e+63PZ/Ku5hPb7sR+3u/QCQxhAoYwAUOYgCFMwBAmYAgTMIQJGMIEDGEChjABQ9jQFvqptm2Yt70Wf5sTGMIEDGEChjABQ5iAIUzAECZgCBMwhAkYwgQMYQKGMFvoj2y7P3nyHubJ+5z5EycwhAkYwgQMYQKGMAFDmIAhTMAQJmAIEzCECRjCBAxhQ1vop+5mJ7fHJyb30tve+4ltz/M5JzCECRjCBAxhAoYwAUOYgCFMwBAmYAgTMIQJGMIEDGEXttAnm1hmbNs5T+6lf+bv0AkMYQKGMAFDmIAhTMAQJmAIEzCECRjCBAxhAoYwAUPY63k35f5kt/bAk/tkv8BPOIEhTMAQJmAIEzCECRjCBAxhAoYwAUOYgCFMwBAmYAj75l7o4l27t+4r3mZyMzy5qd52B/W2//OeExjCBAxhAoYwAUOYgCFMwBAmYAgTMIQJGMIEDGEChrChe6GL9wNP7qW3vfdbipvqSZ8/sxMYwgQMYQKGMAFDmIAhTMAQJmAIEzCECRjCBAxhAoawb7bQxX3pieJGd9td1re+96d+FzNdOIEhTMAQJmAIEzCECRjCBAxhAoYwAUOYgCFMwBAmYAh74Bb6qdvjE5P75Kd+7y1OYAgTMIQJGMIEDGEChjABQ5iAIUzAECZgCBMwhAkYwn7NvMy2XfG25ylusyef56l3UH/+Wk5gCBMwhAkYwgQMYQKGMAFDmIAhTMAQJmAIEzCECRjChrbQt7ajxf9zYtszF7fZt9z6Tmc+QycwhAkYwgQMYQKGMAFDmIAhTMAQJmAIEzCECRjCBAxhQ1voWyY3w7dMbqq3vfdbz7Pte9+zA3cCQ5iAIUzAECZgCBMwhAkYwgQMYQKGMAFDmIAhTMAQtmgLve2O5W2vdWLb/dLbPp/nbc6dwBAmYAgTMIQJGMIEDGEChjABQ5iAIUzAECZgCBMwhC3aQp/Ydj/wLdv228X/M+nku5j5HTqBIUzAECZgCBMwhAkYwgQMYQKGMAFDmIAhTMAQJmAIe03eyvs8t3a8276FyX1y8d7sWz5/HicwhAkYwgQMYQKGMAFDmIAhTMAQJmAIEzCECRjCBAxh39wLXbyz95Zbm9ht9znvudP4XHHDPMMJDGEChjABQ5iAIUzAECZgCBMwhAkYwgQMYQKGMAFD2Ddb6BPb7jQ+Mbkrfuody5PvfdvOec9v3gkMYQKGMAFDmIAhTMAQJmAIEzCECRjCBAxhAoYwAUPYhS30iafugSd3s3vuIr7rqe9rhhMYwgQMYQKGMAFDmIAhTMAQJmAIEzCECRjCBAxhAoawoS00793aVP/k+663bapnvgsnMIQJGMIEDGEChjABQ5iAIUzAECZgCBMwhAkYwgQMYbbQf11xM/yT77u+9RnO7LedwBAmYAgTMIQJGMIEDGEChjABQ5iAIUzAECZgCBMwhA1toW/tZosm7zSevBf6xOT7mtyBn5jZkzuBIUzAECZgCBMwhAkYwgQMYQKGMAFDmIAhTMAQJmAIu7CF3navL+9N3nu8bQM/uUs/8fnn7ASGMAFDmIAhTMAQJmAIEzCECRjCBAxhAoYwAUOYgCHstW2tCpxzAkOYgCFMwBAmYAgTMIQJGMIEDGEChjABQ9hvgXB/sY2ID4wAAAAASUVORK5CYII=">
    </div>
    <div class="bd_weixin_popup_foot">打开微信，点击底部的“发现”，<br>使用“扫一扫”即可将网页分享至朋友圈。</div>
</div>
<script>
    (function ($) {
        $(function(){
            $('.wechat-share').click(function() {
                var $this = $(this);

                $.ajax({
                    url:'<?php echo JRoute::_('index.php?option=com_oauth')?>',
                    data:{
                        task:'api_wechat.share',
                        url:$this.data('url')
                    }
                }).done(function (data) {
                    $('#bdshare_weixin_qrcode_dialog').css({
                        'top':$(window).height()/2-300 + 'px',
                        'left':$(window).width()/2-100 + 'px'
                    });
                    $('#bdshare_weixin_qrcode_dialog').show();
                    $('#bdshare_weixin_qrcode_dialog #qr_code_image').attr('src', data.data.qrCode)
                });

            })
            $('#bdshare_weixin_qrcode_dialog .bd_weixin_popup_close').click(function () {
                $('#bdshare_weixin_qrcode_dialog').hide();
            })
        });
    })(jQuery);


</script>
<style>
    #bdshare_weixin_qrcode_dialog {
        position: absolute;
        z-index: 10000;
        background-color: #ffffff;
    }
    #bdshare_weixin_qrcode_dialog .bd_weixin_popup_head span {
        margin-left: 10px;
    }
    #bdshare_weixin_qrcode_dialog .bd_weixin_popup_close {
        float: right;
        margin-right: 5px;
        font-size: 25px;
    }
    #bdshare_weixin_qrcode_dialog .bd_weixin_popup_foot {
        margin-left: 10px;
    }
</style>

</body>
</html>