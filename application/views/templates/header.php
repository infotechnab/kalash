<!DOCTYPE HTML >
<html>
    <head>
        <title>Kalash Restaurant</title>
        <link rel="stylesheet" href="<?php echo base_url() . "content/styles/kalash.css" ?>" />
        <meta name="viewport" content="initial-scale=1.0, user-scalable=no">
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() . "content/engine1/style.css" ?> "/>
        <script type="text/javascript" src="<?php echo base_url() . "content/engine1/jquery.js" ?>"></script>

        <style>
            #map-canvas {
                margin: 0;
                padding: 0;
                min-height:300px;
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
                .textwrap{
                    float: right;
                    margin: 1%;
                    width: 100%;
                }        
                #listItem li {
                    display: list-item;
                }  
                #listImage{
                    width: 49%;

                }
            }
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
                .textwrap{
                    float: right;
                    margin: 1%;
                    width: 100%;
                }
                #listItem li {
                    display: list-item;
                }
                #listImage{
                    width:100%;

                }

            }
        </style>
    </head>
  

    <body>
        <div class="full">
            <div class="fullBody">
                <div class="topFlag"> <img class="flagImg1" src="<?php echo base_url() . "content/images/flag2.png" ?>" /> <img class="flagImg2" src="<?php echo base_url() . "content/images/flag1.png" ?>" />    </div>
                <div class="fullContent">
                    <div class="header">
                        <?php
                        foreach ($logo as $image) {
                            $logo = $image->image;
                        }
                        ?>
                        <img id="headerLogo" src="<?php echo base_url() . "downloads/" . $logo; ?>" alt="kalash logo" /> 
                        <div id="fb-root">
                            <iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fsalyani.organization&amp;width=200&amp;height=65&amp;colorscheme=light&amp;layout=box_count&amp;action=like&amp;show_faces=true&amp;send=false&amp;appId=312833668796761" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:200px; height:65px;" allowTransparency="true"></iframe>
                        </div>
                        </div>

                    <div id="navcontainer">
                        <ul id="navlist">
                            <li id="active"><a href="#" id="current">Home</a>
                            </li>
                            <li><a href="#">Items</a>
                                <ul id="subnavlist">
                                  
                                    <li><a href="#">Nepali</a></li>
                                    <li><a href="#">Indian</a></li>
                                    <li><a href="#">Protugal</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Lunch</a><ul id="subnavlist">
                                    <li id="subactive"><a href="#" id="subcurrent">Items</a></li></ul></li>
                            <li><a href="#">Dinner</a><li>
                            <li><a href="#">Reservation</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <br/>  <br/>

                    <?php
                    // Php array for menu 
                    $menuArray = array("Home" => "link", "About Us" => array("mission" => "missionlink", "vission" => "visionlink"), "contact Us" => "ContactUs");
                    ?>