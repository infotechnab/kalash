 <div class="introductionGadegt">
      <?php foreach ($page as $data){
                                 $body =  $data->body;
                                $image = $data->image;
                                $title = $data->title;
                             } ?>
                         <div class="introductionNoteBody">
                              <b><?php echo $title; ?></b>
                             <img class="textwrap" src="<?php echo base_url()."uploads/".$image; ?>" />
                            
                             <p id="eventBody"><?php echo $body; ?></p>
                             <div style="clear: left;" > </div> 
                        </div>
    
     <div class="clear"> </div>
 </div>
              