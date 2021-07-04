<h2 style="text-align:center">User Profile Card</h2>
    <div class="container">
      <div class="row">
        <?php 
          foreach ($admins as $admin) {?>
   <div class="col-md-4">
    <hr>
    <div class="admin_card">
      <img src="<?php echo $admin['img'];?>" alt="John" style="width:100%">
      <h3><?php echo $admin['fname'] .' '. $admin['lname'];?></h3>
      <p class="admin_title"><?php echo $admin['profession'];?></p>
      <!-- <div style="margin: 24px 0;">
        <a href="#"><i class="fa fa-dribbble"></i></a> 
        <a href="#"><i class="fa fa-twitter"></i></a>  
        <a href="#"><i class="fa fa-linkedin"></i></a>  
        <a href="#"><i class="fa fa-facebook"></i></a> 
      </div> -->
      <select name="admin_view">
        <option value="0">Contact</option>
        <option value="1"><?php echo $admin['tel'];?></option>
        <option value="2"><?php echo $admin['email'];?></option>
      </select>
    </div>
  </div>
    <?php } ?>
</div>
</div>