 <div class="introductionGadegt"> 
       <?php 
 foreach($page as $title){
       if($title->title == 'Home' || $title->title=='Contact'){ ?>
     <div class="introductionNote">
          <div class="listItemDiv">
<div class="reservationTitle">
    <h4> <?php echo $title->title;?> </h4>
    </div> 
     </div>
                             <?php 
                                 echo $title->body;
                                 
                             ?>
                        </div> 
            <div class="locationMap">
                             <div id="map-canvas"></div>
                        </div> <?php
           }
           else{ ?>
     <div class="listItemDiv">
<div class="reservationTitle">
    <h4> <?php echo $title->title;?> </h4>
    </div> 
     </div>
               <div class="introductionNoteBody">
                             <?php 
                                 echo $title->body;
                                 
                             ?>
                        </div> 
           <?php }
       }
                           ?> 
                        
     <div class="clear"> </div>
 </div>
                    