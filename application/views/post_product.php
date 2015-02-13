<!-- 
 * This site is developed and maintained by DigitalFrame
 * E-mail: digitalframe01@outlook.com
-->


<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
        <h1>Post Product</h1>
        <hr>
        <?php if (validation_errors()): ?>
            <div class="alert alert-error">
                <a class="close" data-dismiss="alert">&times;</a>
                <strong>Error!</strong> <?php echo validation_errors(); ?>
            </div>
        <?php endif ?>
        <?php
        $frm_attr = array('class' => 'form-horizontal');
        echo form_open(base_url() . 'users/register', $frm_attr);
        ?>
        <div class="control-group">
            <?php
            $attributes = array(
                'class' => 'control-label'
            );
            echo form_label('First Name', 'first name', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_first_name = array(
                    'name' => 'first_name',
                    'id' => 'first_name',
                    'placeholder' => 'Your First Name',
                    'value' => set_value('first_name')
                );
                echo form_input($in_first_name);
                ?>

            </div>
        </div>        
        <?php
        $this->load->helper('date');
        $datestring = "%Y-%m-%d";
        $time = time();
        $today = mdate($datestring, $time);
        $data = array(
            'active' => 'a',
            'user_reg_date' => "$today",
            'user_type' => 'subscriber'
        );

        echo form_hidden($data);
        ?>
<?php echo form_close() ?>
    </div>


