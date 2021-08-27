<div class="container" style="width:500px" >   
    <div class="form-container " style="">
    <!-- Include Flash Data File -->
    <?php $this->load->view('_FlashAlert\flash_alert.php') ;?>

      <h4>Welcome , <?= $this->session->userdata('USERNAME') ?> 	<a href="<?php echo base_url() . 'user/logout'; ?>"> <i class="glyphicon glyphicon-log-out"></i></a> </h4>
   	
        <a class="btn" href="<?php echo base_url() . 'upload/gallery'; ?>" style="float: right;  margin-top: -7%;">View Images </a>
  
        <div class="form-group " style=" ">
		<?php// echo form_open_multipart('Upload/do_upload');?>
		<form action="<?php echo base_url(); ?>upload/do_upload"  enctype="multipart/form-data" method="post" style='align-items: normal	 !important;'>
	 
	  	<div class="form-group">
	   	 	<input type="text" placeholder="Enter Caption" name="caption" id="caption" class="form-controll"/>
	  	</div>
	  	<div class="form-group">
	   	 	<input type="text" placeholder="Enter Location" name="location" id="location" class="form-controll"/>
	  	</div> 
		<div class="form-group">
			<input type="file"  name="userfile" size="" />
		</div>
		<br /><br />
		  <button class="" id="uploadfile">Upload</button>
		
		</form>

		
		</div>
	</div>
	</div>