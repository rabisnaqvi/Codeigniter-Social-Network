<?php
$this->Functions->get_header(); ?>
<div class="container">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 col-sm-12">
            <div class="login_view card">
                <h4 class="text-center">Login to Meet The World !</h4>
                <?php if($this->session->flashdata('registered')): ?>
                <div class="alert alert-dismissible alert-success">
                    <button type="button" class="close" data-dismiss="alert">&times;</button>
                    <?= $this->session->flashdata('registered'); ?>
                </div>
                <?php endif; ?>
                <?= form_open('#'); ?>
                <div class="form-group">
                    <?= form_input('username', '', array('class'=>'form-control', 'placeholder'=>'Username', 'data-validation'=>'required')); ?>
                    <div class="clearfix"></div>
                    <?= form_password('password', '', array('class'=>'form-control', 'placeholder'=>'Password', 'data-validation'=>'required')); ?>
                    <div class="clearfix"></div>
                    <div class="divider"></div>
                    <?= form_submit('submit', 'Login', array('class'=>'btn btn-primary pull-right')); ?>
                </div>
                <?= form_close(); ?>
                <div class="divider"></div> <a href="<?= base_url('register') ?>">Not a Member??</a> </div>
            </div>
        </div>
    </div>
    <?php $this->Functions->get_footer();