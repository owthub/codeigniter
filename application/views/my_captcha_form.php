<form action="<?php echo site_url('my_captcha_submit') ?>" method="post">
   <p>
     <label>Name:</label>
     <input type="text" name="txt_name"/>
   </p>
   <p>
      <label>Enter Captcha Code</label>
      <input type="text" name="txt_code"/>
   </p>
   <p>
     <?php echo $cap_image; ?>
   </p>
   <p>
      <button name="btn_submit">Submit Form</button>
   </p>
</form>
