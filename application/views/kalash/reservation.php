<div class="reservationForm">
    <div class="reservationTitle">
        <h4> Reservation </h4>
    </div>
    <p>We are here to provide Reservation Facilities</p>
    <hr/>
    <?php $url = base_url(); 
    if($_SERVER['REQUEST_METHOD'] == "POST")
{require_once('recaptchalib.php');
		$privatekey = "6LdjitcSAAAAAGp4v4kqyB32Oqk9Enso2kP8VNlB";
		$resp = recaptcha_check_answer ($privatekey,
		$_SERVER["REMOTE_ADDR"],
		$_POST["recaptcha_challenge_field"],
		$_POST["recaptcha_response_field"]);
		  if (!$resp->is_valid) {
			// What happens when the CAPTCHA was entered incorrectly
			die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
				 "(reCAPTCHA said: " . $resp->error . ")");
		  } else
		  {
		  echo 'Email Sent sucessfully....';
		  //header( 'Location: http://localhost/capcha/?msg=true' ) ;
			// Your code here to handle a successful verification
		  }
		  }
	else
	{ ?>
    <?php echo form_open(''); ?>
    <lable>Name</lable> <br/>
    <input type="text" name="name"  /> <br/> <br/>
    <lable>E-Mail</lable><br/>
    <input type="email" name="email"  /><br/> <br/>
    <label>Address</label><br/>
    <input type="text" name="address" /> <br/> <br/>
    <lable>Date</lable><br/>
    <input type="text" name="date" /> <br/> <br/>
    <lable>Time</lable><br/>
    <select name="hr">
        <?php for($i=0; $i<=12; $i++){ ?>
            <option><?php echo $i; ?></option> 
       <?php } ?>
    </select> :
     <select name="min">
        <?php for($i=00; $i<60; $i++){ ?>
            <option><?php echo $i; ?></option> 
       <?php } ?>
        </select> 
    <select name="am">
        <option>AM</option>
        <option>PM</option>
    </select> <br/> <br/>
    <label>Contact</label><br/>
    <input type="text" name="contact" /> <br/> <br/>
    <lable>Message</lable><br/>
    <textarea name="message"></textarea> <br/> <br/>
      <?php
          require_once('recaptchalib.php');
          $publickey = "6LdjitcSAAAAAH_r97CJFo2efEIsRZah40Q9npIP"; // you got this from the signup page
		echo recaptcha_get_html($publickey);
        ?>
    <br/>
     <input type="submit" value="Send"   />
     
	<?php echo form_close(); }
	?>
    
        
</div>