<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="index_files/favicon.ico" rel="icon" type="image/x-icon">
  <meta name="description" content="">
  <link rel="stylesheet" href="assets/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/icons-mind/style.css">
  <link rel="stylesheet" href="assets/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assets/et-line-font-plugin/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&subset=latin">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/soundcloud-plugin/style.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/socicon/css/styles.css">
  <link rel="stylesheet" href="assets/dataTables/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/mobirise3-blocks-plugin/css/style.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise-gallery/style.css">
  <link rel="stylesheet" href="assets/wowslider-init/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" id="parent-style-css" href="./index_files/style(2).css" type="text/css" media="all"> 
  <script src="./index_files/js1.js"></script>  
  <link href="css/main.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
  <link rel="stylesheet" href = "assets/wowslider-init/absent/style.css"></link>
  <link rel="stylesheet" href = "index_files/mobile-menu.css"></link>
  <link rel="stylesheet" href = "index_files/menu.css"></link>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js">
 </head>
 
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow').on('click', function(event) {        
             jQuery('#content').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow1').on('click', function(event) {        
             jQuery('#content1').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow2').on('click', function(event) {        
             jQuery('#content2').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow3').on('click', function(event) {        
             jQuery('#content3').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow4').on('click', function(event) {        
             jQuery('#content4').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow5').on('click', function(event) {        
             jQuery('#content5').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow6').on('click', function(event) {        
             jQuery('#content6').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow7').on('click', function(event) {        
             jQuery('#content7').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow8').on('click', function(event) {        
             jQuery('#content8').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow9').on('click', function(event) {        
             jQuery('#content9').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow10').on('click', function(event) {        
             jQuery('#content10').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow11').on('click', function(event) {        
             jQuery('#content11').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow12').on('click', function(event) {        
             jQuery('#content12').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow13').on('click', function(event) {        
             jQuery('#content13').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow14').on('click', function(event) {        
             jQuery('#content14').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow15').on('click', function(event) {        
             jQuery('#content15').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow16').on('click', function(event) {        
             jQuery('#content16').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow17').on('click', function(event) {        
             jQuery('#content17').toggle('show');
        });
    });
</script>
<script>
jQuery(document).ready(function(){
        jQuery('#hideshow18').on('click', function(event) {        
             jQuery('#content18').toggle('show');
        });
    });
</script>
<script>
$(document).ready(function($) {  

// Ancho del ul
function width(li, ul) {
  var ulw = 0;
  $(li).each(function(){
    w = $(this).width();
    ulw = ulw + w + 20;
  });
  $(ul).css('width', ulw);
}
width('.marquesina ul li', '.marquesina ul');
  
// Set interval  
function marquesina(li, ul) {
  var first = $(li).first().width();
  $(ul).animate({
    'marginLeft' : '-' + first}, {
      duration: 1000,
      complete: function() {
        $(this).css('marginLeft', '0');
        one = $(li).first().detach();
        $(li).last().parent().append(one);
      }
  });
}

myInter = setInterval(function() { 
    marquesina('.marquesina ul li', '.marquesina ul'); 
}, 6000);
  
// Stop on hover and then resume
$('.marquesina').hover(function(){
  clearInterval(myInter);
  }, function() {
    myInter = setInterval(function() { 
    marquesina('.marquesina ul li', '.marquesina ul'); 
}, 6000);
  });
  
});
</script>
<style>
* {box-sizing: border-box;}

ul {
  margin: 0;
  padding: 0;
  list-style: none;
}

ul li {
  line-height: 35px;
				font-size: .8em;
				display: inline-block;
}

.marquesina {
  height: 35px;
  overflow: hidden;
  background-color: #fff;
  padding: 0 1em;
}

.colgado {
  text-transform: uppercase; 
  font-size: .8em;
  color: #999;
					display: inline;
}

a {
					text-decoration: none;
					display: inline;
}

li:after {
 
  padding: 0 1em;
}

table, td, th {
    border: 0px solid black;
}

table {    
    border-collapse: collapse;
    width: 100%;
}

td {
    height: 20px;
    vertical-align: bottom;
}

div.item-menu-2 {
    font-size:12px;
    /* To correctly align image, regardless of content height: */
    vertical-align: top;
    display: inline-block;
    /* To horizontally center images and caption */
    text-align: center;
    /* The width of the container also implies margin around the images. */
    width: 65px;
}

.caption-menu-2 {
    /* Make the caption a block so it occupies its own line. */
    display: block;
}
</style>
<body style="overflow-x: hidden; overflow-y: auto;">
<section id="menu-30" data-rv-view="0">
    <nav class="navbar navbar-dropdown transparent bg-color">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        
                        <a class="navbar-caption" href="#"></a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item nav-btn"><a class="nav-link btn btn-white btn-white-outline" href="https://www.123formbuilder.com/form-2764113/Join-Us">Join Member</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>


<section class="engine"><a href="#"></a></section><div id="msg-box3-2h" custom-code="true" data-rv-view="2" class="mbr-after-navbar"><section class="mbr-section article" data-rv-view="396" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">

   
        <div class="row">
            <div class="col-md-8 col-md-offset-2 text-xs-center">
           <div class="div1"><a href="#">  <img src="index_files/logo-3.png" width="174" height="40"> <font face="arial" style="font-size:30px; color: rgb(255, 255, 255);font-weight: bold; vertical-align: middle;">&nbsp;</font></a></div>       
    </div>           </div>
               </section>
</div>

<div id="msg-box3-25" custom-code="true" data-rv-view="3"><section class="mbr-section article" data-rv-view="396" style="background-color: rgb(255, 255, 255); padding-top: 0px; padding-bottom: 0px;">

<div class="row" align="center">
<div class="div1"><a href="#"> <img src="assets/images/w.png" width="45" height="45"><font face="microsoft yahei" style="font-size:14px; color: black ;font-weight: bold; vertical-align: middle;">&nbsp;最新通知</font></a></div> <div class="div2"><a href="#"> <img src="assets/images/x.png" width="45" height="45"><font face="microsoft yahei" style="font-size:14px; color:black;font-weight: bold; vertical-align: middle;">&nbsp;发布需求</font></a></div>  <div class="div3"><a><img type='button' id='hideshow16' src="assets/images/y.png" width="45" height="45"><font face="microsoft yahei" style="font-size:14px; color:black;font-weight: bold; vertical-align: middle;">&nbsp;加入会员</font></a></div>
</div> 

<div align="center">
<div class="item-menu-2">
    <a href="./designers6/index01.html" target="_self"><img type='button' src="index_files/designer-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">23,311</span>
</div>
<div class="item-menu-2">
  <a><img type='button' id='hideshow1' src="index_files/supplier-3.png" width="65" height="65"></a>
  <span class="caption-menu-2">1,950</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow2' src="index_files/news-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">3,609</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow3' src="index_files/activities-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">2,083</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow4' src="index_files/join-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">6,201</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow18' src="index_files/tradeshow-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">648</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow5' src="index_files/files-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">4,057</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow6' src="index_files/video-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">1,180</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow7' src="index_files/go-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">1,310</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow8' src="index_files/top-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">518</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow9' src="index_files/post-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">267</span>
</div>
<div class="item-menu-2">
   <a><img type='button' id='hideshow10' src="index_files/download-3.png" width="65" height="65"></a>
   <span class="caption-menu-2">795</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow11' src="index_files/fabrics-2-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">4,316</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow12' src="index_files/menswear-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">652</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow13' src="index_files/womenswear-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">1,712</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow14' src="index_files/fashionweek-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">891</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow15' src="index_files/buyer-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">10,323</span>
</div>
<div class="item-menu-2">
    <a><img type='button' id='hideshow17' src="index_files/seller-3.png" width="65" height="65"></a>
    <span class="caption-menu-2">14,770</span>
</div>
</div>

<!--<div class="row" align="center">
<a href="./designers6/index01.html" target="_self"><img type='button' src="index_files/designer-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow1' src="index_files/supplier-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow2' src="index_files/news-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow3' src="index_files/activities-3.png" width="65" height="65"></a>
<a href="https://www.123formbuilder.com/form-2764113/Join-Us" target="_self"><img type='button' id='hideshow4' src="index_files/join-3.png" width="65" height="65"></a>
<a href="./events/index.html" target="_self"><img type='button' src="index_files/tradeshow-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow5' src="index_files/files-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow6' src="index_files/video-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow7' src="index_files/go-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow8' src="index_files/top-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow9' src="index_files/post-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow10' src="index_files/download-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow11' src="index_files/fabrics-2-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow12' src="index_files/menswear-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow13' src="index_files/womenswear-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow14' src="index_files/fashionweek-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow15' src="index_files/buyer-3.png" width="65" height="65"></a>
<a href="#" ><img type='button' id='hideshow16' src="index_files/seller-3.png" width="65" height="65"></a>
-->
<div style="display: none" id='content1'>
<div style="padding: 5px 10px;" align="center">
<table cellspacing="0" border="0">
	<colgroup span="2" width="219"></colgroup>
	<colgroup width="202"></colgroup>
	<tr>
		<td height="24" align="left" valign=middle><b><font face="Microsoft YaHei" color="#000000"><span style="font-family: microsoft\ yahei;">时尚纺织机构文档</span></font></b></td>
		<td align="left" valign=middle><b><font face="Microsoft YaHei" color="#000000"><span style="font-family: microsoft\ yahei;">产业文档</span></font></b></td>
		<td align="left" valign=middle><b><font face="Microsoft YaHei" color="#000000"><span style="font-family: microsoft\ yahei;">大宗品文档</span></font></b></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">Adidas</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">环锭纺 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">锦纶DTY </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">Burberry</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">复合面料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">氨纶 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">Cartier</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">功能性面料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">锦纶短纤 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">Channel</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">印花布 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">锦纶FDY </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">Cher</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">数码印花 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">锦纶POY </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">Gucci</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">衬衫面料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">粘胶短纤 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">H&amp;M</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">混纺纱 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">锦纶HOY </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">Hermes</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">腈纶纱 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">涤纶FDY </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">ISPO</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">户外面料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">涤纶POY </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">Louis Vuitton</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">涤棉布 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">腈纶 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">Nike</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">摇粒绒 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">皮棉 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">Puma</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">T/R面料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">丙烯腈 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">Rolex</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">毛纺面料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">纺织化纤 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">TTF</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">半精纺 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">人棉纱 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">Uniqlo </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">平布 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">涤纶短纤 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">Zara</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">色织布 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">棉纱 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">气流纺纱 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">锦纶板块 </font></td>
	</tr>
	<tr>
		<td height="24" align="left" valign=middle><b><font face="Microsoft YaHei" color="#000000"><span style="font-family: microsoft\ yahei;">外贸文档</span></font></b></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">环保面料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">涤纶纱 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">牛仔外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">帽子面料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">涤纶板块 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">亚麻外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">牛仔面料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">毛条 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">服装外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">经编面料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">干茧 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">时装外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">绒布 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">生丝 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">女装外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">紧密纺纱 </font></td>
		<td align="left" valign=middle><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="24" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">童装外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">纺织助剂 </font></td>
		<td align="left" valign=middle><b><font face="Microsoft YaHei" color="#000000"><span style="font-family: microsoft\ yahei;">纺织辅料文档</span></font></b></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">男装外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">竹节纱 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">纺织机械 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">胶鞋外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">麻纺 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">面料印染 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">外贸面料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">沙发布面料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">坯布 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">针织服装外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">蕾丝 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">涤棉纱 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">针织外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">珊瑚绒 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">提花面料 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">家纺外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">色纺纱 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">无纺布 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">棉布外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">新型纤维 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">针织面料 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">棉纱外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">羊绒制品 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">毛纱 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">棉花外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">牛绒制品</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">花边织带 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">坯布外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">麂皮绒面料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">弹力布 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">毛织外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">锦纶长丝 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">针织纱 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">色织布外贸 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">雪纺面料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">特种纱线 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">     </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">仿丝棉填充物 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">人棉布 </font></td>
	</tr>
	<tr>
		<td height="24" align="left" valign=middle><b><font face="Microsoft YaHei" color="#000000"><span style="font-family: microsoft\ yahei;">经销文档</span></font></b></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">电脑绗缝绗绣加工 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">休闲面料 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">女装经销 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">制服工作服 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">阻燃面料 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">休闲服饰经销 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">运动服装 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">新型纱线 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">围巾经销商 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">毛衫 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">纺织印花 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">袜子经销商 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">服饰鞋帽辅料 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">涤粘纱 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">家纺经销商 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">鞋帽经销商 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">装饰面料 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">棉纺经销 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">箱包经销商 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">家纺面料 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">毛毯经销 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">袜子 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">精梳纱 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">男装经销商 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">染色布 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">服装经销 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000"><br></font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000">花式纱 </font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">内衣经销商 </font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000"><br></font></td>
		<td align="left" valign=middle><font color="#000000"><br></font></td>
	</tr>
	<tr>
		<td height="23" align="left" valign=middle><font face="Microsoft YaHei" color="#000000">童装经销商</font></td>
		<td align="left" valign=middle><font face="Microsoft YaHei" color="#000000"><br></font></td>
		<td align="left" valign=middle><font color="#000000"><br></font></td>
	</tr>
</table>
</div>
</div>

<div style="display: none" id='content2'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試2</a></br>
<a href="#">简体中文测试2</a></br>
<a href="#">日本語テキストテスト2</a></br>
<a href="#">한국어 텍스트 테스트2</a></br>
<a href="#">This is my DIV element.2</a>
</div>
</div>
<div style="display: none" id='content3'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試3</a></br>
<a href="#">简体中文测试3</a></br>
<a href="#">日本語テキストテスト3</a></br>
<a href="#">한국어 텍스트 테스트3</a></br>
<a href="#">This is my DIV element.3</a>
</div>
</div>
<div style="display: none" id='content4'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試4</a></br>
<a href="#">简体中文测试4</a></br>
<a href="#">日本語テキストテスト4</a></br>
<a href="#">한국어 텍스트 테스트2</a></br>
<a href="#">This is my DIV element.2</a>
</div>
</div>
<div style="display: none" id='content5'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試5</a></br>
<a href="#">简体中文测试5</a></br>
<a href="#">日本語テキストテスト5</a></br>
<a href="#">한국어 텍스트 테스트5</a></br>
<a href="#">This is my DIV element.5</a>
</div>
</div>
<div style="display: none" id='content6'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試6</a></br>
<a href="#">简体中文测试6</a></br>
<a href="#">日本語テキストテスト6</a></br>
<a href="#">한국어 텍스트 테스트6</a></br>
<a href="#">This is my DIV element.6</a>
</div>
</div>
<div style="display: none" id='content7'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試7</a></br>
<a href="#">简体中文测试7</a></br>
<a href="#">日本語テキストテスト7</a></br>
<a href="#">한국어 텍스트 테스트7</a></br>
<a href="#">This is my DIV element.7</a>
</div>
</div>
<div style="display: none" id='content8'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試8</a></br>
<a href="#">简体中文测试8</a></br>
<a href="#">日本語テキストテスト8</a></br>
<a href="#">한국어 텍스트 테스트8</a></br>
<a href="#">This is my DIV element.8</a>
</div>
</div>
<div style="display: none" id='content9'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試9</a></br>
<a href="#">简体中文测试9</a></br>
<a href="#">日本語テキストテスト9</a></br>
<a href="#">한국어 텍스트 테스트9</a></br>
<a href="#">This is my DIV element.9</a>
</div>
</div>
<div style="display: none" id='content10'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試10</a></br>
<a href="#">简体中文测试10</a></br>
<a href="#">日本語テキストテスト10</a></br>
<a href="#">한국어 텍스트 테스트10</a></br>
<a href="#">This is my DIV element.10</a>
</div>
</div>
<div style="display: none" id='content11'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試11</a></br>
<a href="#">简体中文测试11</a></br>
<a href="#">日本語テキストテスト11</a></br>
<a href="#">한국어 텍스트 테스트11</a></br>
<a href="#">This is my DIV element.11</a>
</div>
</div>
<div style="display: none" id='content12'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試12</a></br>
<a href="#">简体中文测试12</a></br>
<a href="#">日本語テキストテスト12</a></br>
<a href="#">한국어 텍스트 테스트12</a></br>
<a href="#">This is my DIV element.12</a>
</div>
</div>
<div style="display: none" id='content13'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試13</a></br>
<a href="#">简体中文测试13</a></br>
<a href="#">日本語テキストテスト13</a></br>
<a href="#">한국어 텍스트 테스트13</a></br>
<a href="#">This is my DIV element.13</a>
</div>
</div>
<div style="display: none" id='content14'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試14</a></br>
<a href="#">简体中文测试14</a></br>
<a href="#">日本語テキストテスト14</a></br>
<a href="#">한국어 텍스트 테스트14</a></br>
<a href="#">This is my DIV element.14</a>
</div>
</div>
<div style="display: none" id='content15'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試15</a></br>
<a href="#">简体中文测试15</a></br>
<a href="#">日本語テキストテスト15</a></br>
<a href="#">한국어 텍스트 테스트15</a></br>
<a href="#">This is my DIV element.15</a>
</div>
</div>
<div style="display: none" id='content16'>
<iframe width="100%" height="650" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="https://www.123formbuilder.com/form-2764113/Join-Us"></iframe>
</div>
</div>
<div style="display: none" id='content17'>
<div style="padding: 5px 15px;" align="left">
<a href="#">繁體中文測試17</a></br>
<a href="#">简体中文测试17</a></br>
<a href="#">日本語テキストテスト17</a></br>
<a href="#">한국어 텍스트 테스트17</a></br>
<a href="#">This is my DIV element.17</a>
</div>
</div>
<div style="display: none" id='content18'>
<iframe width="100%" height="450" frameborder="0" scrolling="yes" marginheight="0" marginwidth="0" src="./events/index.html"></iframe>
</div>
         
    </div>
               </section>
			   <div class="marquesina">
				<ul>
<li><b>UK</b> : Brand Licensing Europe 09 - 11 Oct 2018</li>
<li><b>USA</b> : International Quilt Festival 08 - 11 Nov 2018</li>
<li><b>France</b> : Foire Europeenne 07 - 17 Sep 2018</li>  
<li><b>Germany</b> : Kind Plus Jugend 20 - 23 Sep 2018</li>  
<li><b>Canada</b> : International Make-Up Artist Trade Show -Toronto 08 - 09 Sep 2018</li>  
<li><b>Italy</b> : SANA 07 - 10 Sep 2018</li>
<li><b>Japan</b> : Tokyo Fashion Goods Trade Show 06 - 07 Jun 2018</li> 
<li><b>China</b> : ITMA Asia & CITME 26 - 30 Oct 2018</li>
<li><b>Russia</b> : Fashion Industry Exhibition 04 - 07 Oct 2018</li>
<li><b>Brazil</b> : International Yarn & Fabric Show 28 - 30 Aug 2018</li>
<li><b>Korea</b> : Seoul Fashion Week 19 - 24 Mar 2018</li>
<li><b>India</b> : Garment Technology Expo 19 - 22 Jan 2018</li> 
<li><b>Australia</b> : Fashion Exposed 10 - 11 Feb 2018</li>
<li><b>Mexico</b> : Expo Beauty Show 28 - 30 Oct 2018</li>
<li><b>Spain</b> : Salon Look Madrid 19 - 21 Oct 2018 </li>
<li><b>Indonesia</b> : Batik Embroidery & Accessories Fair 09 - 13 May 2018</li>  
<li><b>Netherlands</b> : Excellent Wonen & Leven Fair 04 - 07 Oct 2018</li>
<li><b>Austria</b> : Salzburger Christkindlmarkt 22 Nov - 26 Dec 2018</li>
<li><b>Bangladesh</b> : Int'l Garment & Texstyle Expo 15 - 18 Nov 2018</li>
<li><b>Vietnam</b> : Textile & Garment Exhibition 21 - 24 Nov 2018</li>  
<li><b>Taiwan</b> : Taipei in Style 08 - 11 Nov 2018</li>        
        </ul>			
  </div>
</div>
<iframe width="100%" height="650" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="./designers6/index01.html"></iframe>
<section class="mbr-section mbr-section-nopadding extFeatures6" id="extFeatures6-0" data-rv-view="6" style="background-color: rgb(255, 255, 255);">

    
  <div class="container">
    <div class="row">
      <div class="mbr-cards-row row">
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
                <div class="wraper">
                <div class="container">
                  <div class="card cart-block">
                      <div class="card-block">
                          <div class="card-title">
                            <div class="card-title inner">
                                <font face="microsoft yahei" style="font-size:20px; color: black ;font-weight: bold; vertical-align: middle;">服装品牌设计师</font>
                                <h5 class="card-subtitle">23,218 &nbsp;Global Designers</h5>
                            </div>
                            <font face="microsoft yahei" style="font-size:16px; color: black ;font-weight:normal; vertical-align: middle;">闪电搜索数千位服装设计师，数以万计份真实评价帮您放心选择。</font>
                            
                          </div> 
                          <div class="img-wraper"><img type='button' src="index_files/designer-3.png" width="65" height="65"></div>
                      </div>
                  </div>
                </div>
                </div>
            </div>

            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
               <div class="wraper">
              <div class="container">
                <div class="card cart-block">
                    <div class="card-block">
                          <div class="card-title">
                              <div class="card-title inner">
                                  <font face="microsoft yahei" style="font-size:20px; color: black ;font-weight: bold; vertical-align: middle;">用户数</font>
                                  <h5 class="card-subtitle">143,580 Users</h5>
                              </div>
                             <font face="microsoft yahei" style="font-size:16px; color: black ;font-weight:normal; vertical-align: middle;">高端纺织业者经理云集于此，寻求适合所在公司的最佳纺织资源解决方案。</font>
                              
                          </div>
                          <div class="img-wraper"><img src="index_files/join-3.png" width="65" height="65"></div>
                      </div>


                </div>
              </div>
              </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
              <div class="wraper">
              <div class="container">
                <div class="card cart-block">
                   <div class="card-block">
                        <div class="card-title">
                            <div class="card-title inner">
                                <font face="microsoft yahei" style="font-size:20px; color: black ;font-weight: bold; vertical-align: middle;">供应商</font>
                                <h5 class="card-subtitle">2,503 Suppliers</h5>
                            </div>
                           <font face="microsoft yahei" style="font-size:16px; color: black ;font-weight:normal; vertical-align: middle;">成千上万家优质纺织业者资源服务供应商推出的最佳方案，必有一款适合您。</font>
                            
                          </div> 
                          <div class="img-wraper"><img src="index_files/supplier-3.png" width="65" height="65"></div> 
                      </div>
                </div>
              </div>
            </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
              <div class="wraper">
              <div class="container">
                <div class="card cart-block">
                    <div class="card-block">
                          <div class="card-title">
                            <div class="card-title inner">
                               <font face="microsoft yahei" style="font-size:20px; color: black ;font-weight: bold; vertical-align: middle;">产品/ 服务/ 解决方案</font>
                                <h5 class="card-subtitle">581 Solutions</h5>
                            </div>
                           <font face="microsoft yahei" style="font-size:16px; color: black ;font-weight:normal; vertical-align: middle;">确定问题对象和影响范围→ 分析问题→ 提出解决问题的办法和建议。</font>
                            
                          </div> 
                          <div class="img-wraper"><img src="index_files/solution-5.png" width="65" height="65"></div> 
                    </div>
                </div>
              </div>
              </div>
            </div>
    </div>
    </div>
  </div>
    
</section>

<section class="engine"><a href="#">free website templates</a></section><section class="mbr-section mbr-section-nopadding extFeatures5" id="extFeatures5-1" data-rv-view="9" style="background-color: rgb(255, 255, 255);">

    
  <div class="container">
    <div class="row">
      <div class="mbr-cards-row row">
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
                <div class="wraper">
                <div class="container">
                  <div class="card cart-block">
                      <div class="card-block">
                          <div class="card-title-img">
                            <img src="index_files/tradeshow-3.png" width="65" height="65">
                            <div class="card-title">
                                <font face="microsoft yahei" style="font-size:20px; color: black ;font-weight: bold; vertical-align: middle;">活动/会展/培训</font>
                                <h5 class="card-subtitle">3,821 Events</h5>
                            </div>
                          </div>
                         <font face="microsoft yahei" style="font-size:16px; color: black ;font-weight:normal; vertical-align: middle;">纺织业界人士交流、合作、会展实时更新，欢迎您的发布、关注与参与。</font>
                          
                      </div>
                  </div>
                </div>
                </div>
            </div>

            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
               <div class="wraper">
              <div class="container">
                <div class="card cart-block">
                    <div class="card-block">
                          <div class="card-title-img">
                            <img src="index_files/video-3.png" width="65" height="65">
                            <div class="card-title">
                                <font face="microsoft yahei" style="font-size:20px; color: black ;font-weight: bold; vertical-align: middle;">视频与微课</font>
                                <h5 class="card-subtitle">43,301 Video &amp; Live</h5>
                            </div>
                          </div>
                        <font face="microsoft yahei" style="font-size:16px; color: black ;font-weight:normal; vertical-align: middle;">小资现场新作秀，各大时装发表，供应商新面料及纺织业界新闻。</font>
                          
                      </div>


                </div>
              </div>
              </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
              <div class="wraper">
              <div class="container">
                <div class="card cart-block">
                   <div class="card-block">
                          <div class="card-title-img">
                            <img src="index_files/files-3.png" width="65" height="65">
                            <div class="card-title">
                                <font face="microsoft yahei" style="font-size:20px; color: black ;font-weight: bold; vertical-align: middle;">报告与文档</font>
                                <h5 class="card-subtitle">23,108 Reports</h5>
                            </div>
                          </div>
                         <font face="microsoft yahei" style="font-size:16px; color: black ;font-weight:normal; vertical-align: middle;">数以千计全球纺织业者分享的文件及报告，可使您的判断更为准确。</font>
                          
                      </div>
                </div>
              </div>
            </div>
            </div>
            <div class="mbr-cards-col col-xs-12 col-lg-3" style="padding-top: 0px; padding-bottom: 0px;">
              <div class="wraper">
              <div class="container">
                <div class="card cart-block">
                    <div class="card-block">
                          <div class="card-title-img">
                            <img src="index_files/service-3.png" width="65" height="65">
                            <div class="card-title">
                                <font face="microsoft yahei" style="font-size:20px; color: black ;font-weight: bold; vertical-align: middle;">线上服務</font>
                                <h5 class="card-subtitle">1,302 online vendors</h5>
                            </div>
                          </div>
                       <font face="microsoft yahei" style="font-size:16px; color: black ;font-weight:normal; vertical-align: middle;">快速帮您解决纺织相关问题，面料提供者,原料价差等问题。</font>
                          
                      </div>
                </div>
              </div>
              </div>
            </div>
    </div>
    </div>
  </div>

</section>
<section class="mbr-wowslider-container mbr-section mbr-section__container carousel slide mbr-section-nopadding mbr-wowslider-container--absent" data-ride="carousel" data-keyboard="false" data-wrap="true" data-interval="false" id="wowslider-1y" data-rv-view="4" style="background-color: rgb(255, 255, 255);">
    <div class="mbr-wowslider">
        <div class="ws_images">
            <ul>
                <li>
                    
                    <img src="assets/images/shokay2017collection-1593x900.jpg" alt="title 2" title="title 2"> text 2
                </li><li>
                    
                    <img src="assets/images/shokay2017collection-1-1593x900.jpg" alt="title 2" title="title 2"> text 2
                </li><li>
                    
                    <img src="assets/images/shokay2017collection-2-1593x900.jpg" alt="title 2" title="title 2"> text 2
                </li><li>
                    
                    <img src="assets/images/shokay2017collection-3-1593x900.jpg" alt="title 2" title="title 2"> text 2
                </li><li>
                    
                    <img src="assets/images/shokay2017collection-4-1593x900.jpg" alt="title 2" title="title 2"> text 2
                </li>
            </ul>
        </div>
        <div class="ws_bullets">
            <div>
                <a href="#" title="">
                    <span><img alt="slide1" src="assets/images/shokay2017collection-85x48.png"></span>
                </a><a href="#" title="">
                    <span><img alt="slide1" src="assets/images/shokay2017collection-1-85x48.png"></span>
                </a><a href="#" title="">
                    <span><img alt="slide1" src="assets/images/shokay2017collection-2-85x48.png"></span>
                </a><a href="#" title="">
                    <span><img alt="slide1" src="assets/images/shokay2017collection-3-85x48.png"></span>
                </a><a href="#" title="">
                    <span><img alt="slide1" src="assets/images/shokay2017collection-4-85x48.png"></span>
                </a>
            </div>
        </div>
        <div class="ws_shadow"></div>
        <div class="mbr-wowslider-options">
            <div class="params" data-paddingbottom="0" data-anim-type="basic" data-theme="absent" data-autoplay="true" data-paddingtop="0" data-fullscreen="true" data-showbullets="false" data-timeout="1" data-duration="7" data-height="480" data-width="640" data-responsive="2" data-showcaptions="false" data-captionseffect="slide" data-hidecontrols="false"></div>
        </div>
		</div>
</section>


  
<section class="mbr-section counters1 counters" id="extCounters1-0" data-bg-video="https://www.youtube.com/embed/hPODLF81rdc?rel=0&showinfo=0&amp;autoplay=1&amp;loop=0" data-rv-view="3" style="padding-top: 80px; padding-bottom: 40px;">

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(21, 21, 21);">
    </div>

    <div class="container">
        <div class="row">

            <div class="content col-md-3">

                <div><img src="assets/images/2.svg" width="80" height="80"></div>

                <span class="count">179</span>

                <h2 class="counter-title">Designers</h2>
                
            </div>

            <div class="content col-md-3">
                <div><img src="assets/images/15.svg" width="80" height="80"></div>
                <span class="count">183</span>
                <h2 class="counter-title">Manufacturers</h2>
                
            </div>

            <div class="content col-md-3">
                <div><img src="assets/images/14.svg" width="80" height="80"></div>
                <span class="count">6247</span>
                <h2 class="counter-title">Tags</h2>
                
            </div>

            <div class="content col-md-3">
                <div><img src="assets/images/13.svg" width="80" height="80"></div>
                <span class="count">104</span>
                <h2 class="counter-title">Languages</h2>
                
            </div>

        </div>
    </div>
</section>



  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/wowslider-plugin/wowslider.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/bootstrap-carousel-swipe/bootstrap-carousel-swipe.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/jarallax/jarallax.js"></script>
  <script src="assets/masonry/masonry.pkgd.min.js"></script>
  <script src="assets/imagesloaded/imagesloaded.pkgd.min.js"></script>
  <script src="assets/dataTables/jquery.dataTables.min.js"></script>
  <script src="assets/dataTables/dataTables.bootstrap4.min.js"></script>
  <script src="assets/mobirise3-blocks-plugin/js/script.js"></script>
  <script src="assets/theme/js/script.js"></script>
  <script src="assets/wowslider-effect/effects.js"></script>
  <script src="assets/mobirise-gallery/player.min.js"></script>
  <script src="assets/mobirise-gallery/script.js"></script>
  <script src="assets/wowslider-init/script.js"></script>
  
  
  <input name="animation" type="hidden">
  </body>
</html>
<?php
?>