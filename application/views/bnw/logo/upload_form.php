<h2>Add New logo </h2>
<div id="body">    
     <p id="sucessmsg">
  <?php if($this->session->flashdata('message')){echo $this->session->flashdata('message');}?>
    </p>
    
<?php echo $error;?>
<?php echo form_open_multipart('bnw/uploads');?>
<p>Title:<br />
    <input type="text" name="title" />
    <br/><br/>
<input type="file" name="userfile" size="20" />
<br /><br />

<input type="submit" value="upload" />
</form>
 <p><b>Note:</b> Max file size: 500KB, Max Width: 300px, Max Height: 100px </p>  