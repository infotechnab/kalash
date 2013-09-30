<!DOCTYPE HTML >
<html>
    <head>
        <title>Kalash</title>
        <link rel="stylesheet" href="<?php echo base_url()."content/styles/kalash.css" ?>" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()."content/engine1/style.css" ?> "/>
	<script type="text/javascript" src="<?php echo base_url()."content/engine1/jquery.js"?>"></script>

        <style>
#map-canvas {
margin: 0;
padding: 0;
height: 100%;
}
</style>
<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
<script>
var map;
function initialize() {
var mapOptions = {
zoom: 8,
center: new google.maps.LatLng(-34.397, 150.644),
mapTypeId: google.maps.MapTypeId.ROADMAP
};
map = new google.maps.Map(document.getElementById('map-canvas'),
mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

</script>
<style>
    @media screen and (max-width:480px)
    {
        .sliderImage{
            float: none;
            width: 100%;
        }
           
        .listImage{
            width: 275%;
        }
        #headerLogo,.introductionNote{
            width: 100%;
        }
        #listItem li {
            text-align: left;
            }
            .gadegt,.gadegtLast,.copyright,.design{
                float: none;
                width: 100%;
                border-top:#fff solid 2px;
            }
            .flagImg1,.flagImg2{
   
    width: 5%;
    height: 20%;
}
.flagImg1{
     margin-left: 85%;
}
      }
      @media screen and (max-width:800px)
      {
        .gadegt,.gadegtLast,.copyright,.design{
                float: none;
                width: 100%;
                border-top:#fff solid 2px;
            } 
            .flagImg1,.flagImg2{
   
    width: 4%;
    height: 16%;
}
.flagImg1{
     margin-left: 85%;
}
            
            
      }
</style>
    </head>
    
     
    <body>
        <div class="full">
        <div class="fullBody">
            <div class="topFlag"> <img class="flagImg1" src="<?php echo base_url()."content/images/flag2.png" ?>" /> <img class="flagImg2" src="<?php echo base_url()."content/images/flag1.png" ?>" />    </div>
                 <div class="fullContent">
                    <div class="header">
                        <?php foreach ($logo as $image)
                        {
                            $logo = $image->image;
                        } ?>
                        <img id="headerLogo" src="<?php echo base_url()."downloads/".$logo; ?>" alt="kalash logo" /> 
                        <div id="fb-root"></div>
<script>(function(d, s, id) {
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) return;
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=312833668796761";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

                      <!--  <img id="facebookLike" src="<?php echo base_url()."content/images/Facebook-Like-Button.png"?>" alt="facebook like" /> -->
                    </div>
                     <div class="menuList">
                         <ul id="listItem">
                                    <?php foreach ($query as $data){
                                        ?>
                                   
                             <li> <a href="<?php echo base_url()."index.php/kalash/page/".$data->p_id; ?>" ><?php echo $data->title; ?> </a></li> <?php  } ?>
                           <!--  <li><a href="" >Restaurant</a></li>
                             <li><a href="" >Special</a></li>
                             <li><a href="">Features</a></li>
                             <li><a href="">Services</a></li>
                             <li><a href="">Contact</a></li> --> 
                         </ul>
                     </div>
                     
                     <div class="imageSlider">
                         <div class="smallImage">
                             <?php foreach ($event as $evn){
                                 ?>
                            <div class="listImage"><a href="" ><img id="eventImage" src="<?php echo base_url()."uploads/".$evn->image; ?>" /></a></div>
                            <?php } ?>
                            </div>
                         <div class="sliderImage">
                             <div id="wowslider-container1">
	<div class="ws_images"><ul>
                <?php foreach ($slider as $file)
                {?>
<li><img src="<?php echo base_url()."slider/".$file->image;?>" alt="slider" title="<?php echo $file->title;?>" id="wows1_0"/></li>
<?php } ?>
</ul></div>
<div class="ws_bullets"><div>
        <?php foreach ($slider as $data)
        {?>
<a href="#" title="slider"><img src="<?php echo base_url()."slider/".$file->title;?>" alt="slider"/>1</a>
<?php } ?>
</div></div>

	<div class="ws_shadow"></div>
	</div>
	<script type="text/javascript" src="<?php echo base_url()."content/engine1/wowslider.js"?>"></script>
	<script type="text/javascript" src="<?php echo base_url()."content/engine1/script.js"?>"></script>
                         </div>
                     </div>
                     <div class="clear"></div>  