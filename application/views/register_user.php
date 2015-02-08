

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
            echo form_label('Username', 'username', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_user = array(
                    'type' => 'text',
                    'name' => 'username',
                    'id' => 'username',
                    'placeholder' => 'Username',
                    'value' => set_value('username')
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
            echo form_label('Email', 'email', $attributes);
            ?>

            <div class="controls">
                <?php
                $in_email = array(
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
<?php echo form_close() ?>
    </div>
