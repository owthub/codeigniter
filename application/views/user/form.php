<h3>Form Helper</h3>

<!--h4>Form without helper</h4>
<form action="" method="post" class="" id="" enctype="multipart/form-data">

    <input type="text" placeholder="Name"/>
    <input type="email" placeholder="Email"/>

    <button type="submit">Submit</button>
</form-->

<h4>With form helper</h4>

<?php
echo form_open('helpers/form-submit', array(
    "method" => "post",
    "class" => "form-class",
    "id" => "form-id",
    "enctype" => "multipart/form-data"
));
?>

<input type="text" placeholder="Name" name="txt_name"/>
<input type="email" placeholder="Email" name="txt_email"/>

<button type="submit">Submit</button>

<?php echo form_close(); ?>