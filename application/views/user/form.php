<?php $this->load->view("include/include_form"); ?>

<style>
    div.error{
        color: red;
    }
</style>

<div class="container">
    <div class="row">
        <div class="col-md-6" style="margin:0 auto;">
            <p>
                <?php
                //echo validation_errors();
                ?>
            </p>
            <h3>User Form</h3>
            <?php
            echo form_open(site_url('helpers/form-submit'));
            ?>
            <div class="form-group">
                <label for="txt_name">Name:</label>
                <input type="text" class="form-control" name="txt_name" id="txt_name" placeholder="Enter name">
                <?php echo form_error("txt_name", "<div class='error'>", "</div>"); ?>
            </div>
            <div class="form-group">
                <label for="txt_email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Enter email" name="txt_email">
                <?php echo form_error("txt_email", "<div class='error'>", "</div>"); ?>
            </div>
            <div class="form-group">
                <label for="txt_phone">Phone no:</label>
                <input type="text" class="form-control" id="txt_phone" placeholder="Enter Phone" name="txt_phone">
                <?php echo form_error("txt_phone", "<div class='error'>", "</div>"); ?>
            </div>
            <div class="form-group">
                <label for="txt_salary">Salary:</label>
                <input type="number" class="form-control" id="txt_salary" placeholder="Enter Salary" name="txt_salary">
                <?php echo form_error("txt_salary", "<div class='error'>", "</div>"); ?>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>

</body>
</html>