<style type="text/css">
   
</style>
<div class="container">

    <form class="form-inline" style="  justify-content: left;  flex-flow: : column     !important;  height: 100px; width: 100%;" action="<?php echo base_url() . 'upload/gallery'; ?>" method="GET">
    <div class="row" >
        <div class="form-group col-md-9" >
             <select class="form-control" name="location" style="width: 200px">
                <option value=''>Selet Location</option>
                <?php foreach ($location as $item => $value):?>
                    <option value=<?php echo $value; ?> <?php   if(isset($_GET['location']) && $_GET['location']== $value ){ echo "selected";}?>><?php echo $value; ?></option>
                <?php endforeach; ?>
            </select>

        </div>
        <div class="form-group col-md-3" >
        <input class="btn btn-default aButton" type="submit" name="filter" style="width: 50px" value="Go">
        </div>
        <div class="form-group col-md-3" style="float: right;position:absolute;margin-left:60%;margin-top: -8px;" >
        <a class="btn btn-default ghost aButton" href="<?php echo base_url() . 'user/panel'; ?>">Add  Images </a>
    </div>
    </div>
       
       
        
    </form>

   


   
       <?php foreach ($result['data'] as $item => $value):?>
    <div class="gallery">
      <!-- <a target="_blank" href="img_5terre.jpg"> -->
        <img src="<?php echo $imgurl . $value['file_name']; ?>" alt="Cinque Terre" width="600" height="400">
      <!-- </a> -->
       <div class="desc"><?php echo $value['caption']; ?></div>
    </div>

    <?php endforeach; ?> 



    </div>

    