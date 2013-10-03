 <div class="introductionGadegt">
                         <div class="introductionNote">
                             <?php foreach ($page as $data){
                                 echo $data->body;
                                 
                             } ?>
                        </div> 
                       <?php 
 foreach($page as $title){
       if($title->title == 'Home' || $title->title=='Contact'){ ?>
            <div class="locationMap">
                             <div id="map-canvas"></div>
                        </div> <?php
           }
       }
                           ?> 
                        
     <div class="clear"> </div>
 </div>
                    