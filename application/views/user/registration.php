<div class="container" >   
    <div class="form-container ">
     <?php $this->load->view('_FlashAlert\flash_alert.php') ; ?>  
      
        <form action="<?php echo base_url(); ?>User/registration" method="post">
            <h1>Sign up</h1>           
            <input type="text" name="username" value="<?= set_value('username'); ?>" class="form-control <?= (form_error('username') == "" ? '':'is-invalid') ?>" placeholder="Enter Userame" autocomplete="off">  
            <?= form_error('username'); ?>  

              <input type="email" name="email" value="<?= set_value('email'); ?>" class="form-control <?= (form_error('email') == "" ? '':'is-invalid') ?>" placeholder="Enter Email" autocomplete="off"> 
            <?= form_error('email'); ?>   

              <input type="number" name="mobile" value="<?= set_value('mobile'); ?>" class="form-control <?= (form_error('mobile') == "" ? '':'is-invalid') ?>" placeholder="Enter Phone Number" autocomplete="off">  
            <?= form_error('mobile'); ?>     

             <input type="password" name="password" value="<?= set_value('password'); ?>" class="form-control <?= (form_error('password') == "" ? '':'is-invalid') ?>" placeholder="Password" autocomplete="off">
            <?= form_error('password'); ?> 

             <input type="password" name="passconf" value="<?= set_value('passconf'); ?>" class="form-control <?= (form_error('passconf') == "" ? '':'is-invalid') ?>" placeholder="Password Confirmation" autocomplete="off">
            <?= form_error('passconf'); ?> 
            <button>Sign Up</button>
        </form>
    </div>
    <div class="overlay-container">
        <div class="overlay"> 

            <div class="overlay-panel overlay-right">
                <h1>Already a memeber!</h1>
                <button class="ghost" id="signin"> <a href="<?php echo base_url(); ?>User/login" class="ghost" id="signUp">Sign In</a></button>
            </div>
        </div>
    </div>
</div>
