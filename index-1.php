<!DOCTYPE html>
<html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="shortcut icon" href="assets/images/030-worldwide-128x128.png" type="image/x-icon">
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
  content: url(http://cero.lared21.com/wp-content/themes/lared21/images/arr.gif);
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