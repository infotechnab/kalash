<div class="listItemDiv">
  <div class="reservationTitle">
        <h4> Menu Item </h4>
    </div> 
                         <div class="listItemImage">
                             <?php foreach ($menuItem as $data){   ?>
                             
                             <a href="<?php echo base_url()."index.php/kalash/event/".$data->id; ?>">  <img id="listImage" src="<?php echo base_url()."uploads/".$data->image; ?>" /> </a>
                            <?php } 
                            echo $links;?>
                        </div> 
                        
                       
 </div>
             