

<div class="container">
    <!-- Main hero unit for a primary marketing message or call to action -->
    <div class="hero-unit">
        <h1>Register User</h1>
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
        <div class="control-group">
            <?php
            $attributes = array(
                'class' => 'control-label'
            );
            echo form_label('Last Name', 'last name', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_last_name = array(
                    'name' => 'last_name',
                    'id' => 'last_name',
                    'placeholder' => 'Your Last Name',
                    'value' => set_value('last_name')
                );
                echo form_input($in_last_name);
                ?>

            </div>
        </div>
        <div class="control-group">
            <?php
            $attributes = array(
                'class' => 'control-label'
            );
            echo form_label('Display Name', 'display_name', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_display_name = array(
                    'type' => 'text',
                    'name' => 'display_name',
                    'id' => 'display_name',
                    'placeholder' => 'Display name',
                    'value' => set_value('display_name')
                );
                echo form_input($in_display_name);
                ?>

            </div>
        </div>
        <div class="control-group">
            <?php
            $attributes = array(
                'class' => 'control-label'
            );
            echo form_label('Comany Name', 'company_name', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_company_name = array(
                    'type' => 'text',
                    'name' => 'company_name',
                    'id' => 'company_name',
                    'placeholder' => 'Company name',
                    'value' => set_value('company_name')
                );
                echo form_input($in_company_name);
                ?>

            </div>
        </div>
        <div class="control-group">
            <?php
            $attributes = array(
                'class' => 'control-label'
            );
            echo form_label('Address', 'address', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_address_1 = array(
                    'name' => 'address_1',
                    'id' => 'address_1',
                    'placeholder' => 'Address 1',
                    'value' => set_value('address_1')
                );
                echo form_input($in_address_1);
                ?>

            </div>
        </div>
        <div class="control-group">
            <?php
            $attributes = array(
                'class' => 'control-label'
            );
            echo form_label('Address', 'address', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_address_2 = array(
                    'name' => 'address_2',
                    'id' => 'address_2',
                    'placeholder' => 'Address 2',
                    'value' => set_value('address_2')
                );
                echo form_input($in_address_2);
                ?>

            </div>
        </div>
        <div class="control-group">
            <?php
            $attributes = array(
                'class' => 'control-label'
            );
            echo form_label('ZipCode', 'zip_code', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_zip_code = array(
                    'name' => 'zip_code',
                    'id' => 'zip_code',
                    'placeholder' => 'Zip Code'
                );
                echo form_input($in_zip_code);
                ?>

            </div>
        </div>
        <div class="control-group">
            <?php
            $attributes = array(
                'class' => 'control-label'
            );
            echo form_label('City', 'city', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_city = array(
                    'name' => 'city',
                    'id' => 'city',
                    'placeholder' => 'City'
                );
                echo form_input($in_city);
                ?>

            </div>
        </div>

        <div class="control-group">
            <?php
            $attributes = array(
                'class' => 'control-label'
            );
            echo form_label('Phone', 'phone', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_phone = array(
                    'name' => 'phone',
                    'id' => 'phone',
                    'placeholder' => 'Phone'
                );
                echo form_input($in_phone);
                ?>

            </div>
        </div>
        <div class="control-group">
            <?php
            $attributes = array(
                'class' => 'control-label'
            );
            echo form_label('fax', 'fax', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_fax = array(
                    'name' => 'fax',
                    'id' => 'fax',
                    'placeholder' => 'Fax'
                );
                echo form_input($in_fax);
                ?>

            </div>
        </div>
        <div class="control-group">
            <?php
            $attributes = array(
                'class' => 'control-label'
            );
            echo form_label('Email', 'email', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_email = array(
                    'type' => 'text',
                    'name' => 'email',
                    'id' => 'email',
                    'placeholder' => 'Email Address',
                    'value' => set_value('email')
                );
                echo form_input($in_email);
                ?>

            </div>
        </div>
        <div class="control-group">
            <?php
            $attributes = array(
                'class' => 'control-label'
            );
            echo form_label('Username', 'user_name', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_user = array(
                    'type' => 'text',
                    'name' => 'user_name',
                    'id' => 'user_name',
                    'placeholder' => 'Username',
                    'value' => set_value('user_name')
                );
                echo form_input($in_user);
                ?>

            </div>
        </div>
        <div class="control-group">
            <?php
            $attributes = array(
                'class' => 'control-label'
            );
            echo form_label('Password', 'password', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_pass = array(
                    'name' => 'password',
                    'id' => 'password',
                    'placeholder' => 'Password'
                );
                echo form_password($in_pass);
                ?>

            </div>
        </div>
        <div class="control-group">
            <?php
            $attributes = array(
                'class' => 'control-label'
            );
            echo form_label('Confirm Password', 'passwordc', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_passc = array(
                    'name' => 'passwordc',
                    'id' => 'passwordc',
                    'placeholder' => 'Confirm Password'
                );
                echo form_password($in_passc);
                ?>

            </div>
        </div>
        <div class="control-group">
            <div class="controls">

                <?php
                $btn_data = array(
                    'type' => 'submit',
                    'content' => 'Register',
                    'class' => 'btn'
                );
                echo form_button($btn_data);
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
