<?php $this->load->view("include/include_form"); ?>


<div class="container">
    <?php
    echo form_open(site_url('helpers/form-submit'));
    ?>
    <div class="form-group">
        <label for="txt_name">Name:</label>
        <input type="text" class="form-control" name="txt_name" id="txt_name" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="txt_email">Email:</label>
        <input type="email" class="form-control" id="email" placeholder="Enter email" name="txt_email">
    </div>

    <button type="submit" class="btn btn-default">Submit</button>
    <?php echo form_close(); ?>
</div>

</body>
</html>