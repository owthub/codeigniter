<html>

    <head>
        <!-- header section -->
        <?php $this->load->view("include/header_other") ?>
    </head>

    <body>

        <!-- content section -->
        <?php $this->load->view("site/home_content") ?>

        <!-- Footer section -->
        <?php
        $this->load->view("include/footer_other", array(
            "name" => $name,
            "email_footer" => $email
        ))
        ?>

    </body>
</html> 