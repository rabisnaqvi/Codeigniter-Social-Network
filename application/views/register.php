<?php
$this->Functions->get_header(); ?>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 col-sm-12">
                <div class="login_view card">
                    <h4 class="text-center">Get Ready to be amazed. !!!</h4>
                    <br>
                    <br>
                    <div class="form-group">
                        <?= form_open('register/do_it'); ?>
                            <div class="col-md-6 col-sm-12">
                                <?= form_input('fname', '', array('class'=>'form-control', 'placeholder'=>'First Name', 'data-validation'=>'required alphanumeric')); ?>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <?= form_input('lname', '', array('class'=>'form-control', 'placeholder'=>'Last Name', 'data-validation'=>'required alphanumeric')); ?>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-sm-12">
                                <?= form_input('email', '', array('class'=>'form-control', 'placeholder'=>'Email', 'data-validation'=>'required email')); ?>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-sm-12">
                                <?= form_input('uname', '', array('class'=>'form-control', 'placeholder'=>'Username', 'data-validation'=>'required')); ?>
                            </div>
                            <div class="clearfix"></div>
                            <br>
                            <div class="col-md-6 col-sm-12">
                                <?= form_password('pass_confirmation', '', array('class'=>'form-control', 'placeholder'=>'Password', 'data-validation'=>'required')); ?>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <?= form_password('pass', '', array('class'=>'form-control', 'placeholder'=>'Confirm Password', 'data-validation'=>'required confirmation')); ?>
                            </div>
                            <div class="divider"></div>
                            <center>
                                <button role="submit" class="btn btn-primary btn-lg">Sign Up</button>
                            </center>
                            <?= form_close(); ?>
                    </div>
                    <div class="divider"></div> <a href="<?= base_url('login') ?>">Already a Member??</a> </div>
            </div>
        </div>
    </div>
    <?php $this->Functions->get_footer();