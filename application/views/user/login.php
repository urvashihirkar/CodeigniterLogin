<div class="container" id="container">
    <?php $this->load->view('_FlashAlert\flash_alert.php') ; ?>    
   
    <div class="form-container sign-in-container">
        <form action="<?php echo base_url(); ?>User/login" method="post">
            <h1>Sign in</h1>           
            <input type="email" name="email" value="<?= set_value('email'); ?>" class="form-control  <?= (form_error('email') == "" ? '':'is-invalid') ?>" placeholder="Enter Email" autocomplete="off">
            <?= form_error('email'); ?>     
             <input type="password" name="password" value="<?= set_value('password'); ?>" class="form-control <?= (form_error('password') == "" ? '':'is-invalid') ?>" placeholder="Password" autocomplete="off">
                <?= form_error('password'); ?> 

            <button>Sign In</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay"> 

            <div class="overlay-panel overlay-right">
                <h1>Hello, Friend!</h1>
                <p style="    line-height: 18px;">Enter your personal details and start journey with us</p>
                <button class="ghost" id="signUp" style="color: white"> <a href="<?php echo base_url(); ?>user/registration" class="ghost" id="signUp">Sign Up</a></button>
            </div>
        </div>
    </div>
</div>
