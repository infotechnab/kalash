<h2>Header Logo Management</h2>
<a href="uploads">Upload New Document </a>
<div id="body">    
     <p id="sucessmsg">
  <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>
    </p>
    <p>List of Documents </p>
    <table border="1" cellpadding="10">
        <tr>            
            <td>S.N.</td>
            <td>image </td>
            <td>Action</td>
        </tr>
            <?php
        if($query){
            foreach ($query as $data){
            ?>
          <tr>
            <td><?php echo $data->id ?></td>
            <td><?php echo $data->title; ?></td>
            <?php $image = $data->image;
                if(($image=='')|| ($image=='0'))
                {
                    $image = 'Image not set'; ?>
            <td> <?php echo $image; ?></td>
              <?php   } else {
?><td><img src="<?php echo base_url();?>downloads/<?php echo $image;?>" widht="50px" height="50px" />  </td> <?php } ?>
           
            <td><?php echo anchor('bnw/deletelogo/'.$data->id,'Delete') ?></td>
        </tr>
            <?php    
            }
        }
    ?>
    </table>
</div>