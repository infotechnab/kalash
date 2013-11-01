                    <div class="imageSlider">
                         <div class="smallImage">
                             <?php  $sn = 1;
                             foreach ($event as $evn){
                                
                                 ?>
                             <div class="listImage"><a href="<?php echo base_url()."index.php/kalash/event/".$evn->id; ?>" > 
                                     <img id="eventImage" src="<?php echo base_url()."uploads/".$evn->image; ?>" />
                                     <label class="overImage<?php echo $sn++; ?>"><?php echo $evn->title; ?></label>
                                 </a></div>
                            <?php } ?>
                            </div>
                        
                         <div class="sliderImage">
                             <div id="wowslider-container1">
	<div class="ws_images"><ul>
                <?php foreach ($slider as $file)
                {?>
<li><img class="sliderZindez" src="<?php echo base_url()."slider/".$file->image;?>" alt="slider" title="<?php echo $file->title;?>" id="wows1_0"/></li>
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
