<form action="<?php echo site_url('submit-form-data') ?>" method="post" class="" id="" enctype="multipart/form-data">

   <input type="hidden" name="first_hidden" value="online web tutor" class="" id=""/>

</form>

<?php
   echo form_open_multipart("submit-form-data",'class="my-class" id="my-id" method="get"');

   echo form_hidden("first_hidden","online web tutor");

   $input_attr = array(
     "name" => "first_input",
     "value" => "Online Web Tutor",
     "class" => "input-class",
     "id" => "input-id",
     //"type" => "password"
   );
   //echo form_input("first_input","Online Web Tutor");
   echo form_password($input_attr);

   $file_attr = array("class"=>"file-class","id"=>"file-id","name"=>"txt_file_upload");
   echo form_upload($file_attr);

   //echo form_textarea("first_txtarea","We can pass our value");
    $options_arr  = array(
      "plugin" => "Plugin tutorial",
      "framework" => "CodeIgniter Tutorial",
      "vue-js" => "Vue JS"
    );
   echo form_dropdown("dd_select",$options_arr);
 ?>




 <?php
  echo form_close();
 ?>
