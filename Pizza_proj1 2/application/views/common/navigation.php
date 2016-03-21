  <div class="" id="banner">
      <div class="row">
          <div class="col-lg-6">
              <h1><i class="fa fa-pie-chart"></i> &nbsp;Toronto Pizza &nbsp; <i class="fa fa-pie-chart"></i></h1>
          </div>
          
      </div>
    </div>




<?php if(!$this->session->userdata('is_logged_in'))  { ?>
<ul class="nav nav-tabs">
     <li class="pull-right"><a href="<?php  echo base_url();  ?>index.php/login" ><i class="fa fa-sign-in"></i>&nbsp;&nbsp; Login</a></li>
      <li class="pull-right"><a href="<?php  echo base_url();  ?>index.php/user/order"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp; Order Online</a></li>
    <li class="pull-right"><a href="<?php  echo base_url();  ?>index.php/user"><i class="fa fa-home"></i>&nbsp;&nbsp;  Home</a></li>
       
       
    </ul>
<?php  } else {  ?>
<ul class="nav nav-tabs">
        <li><a href="<?php  echo base_url();  ?>index.php/admin"></span><i class="fa fa-home"></i>&nbsp;&nbsp;   Home</a></li>
         <li><a href="<?php echo base_url(); ?>index.php/admin/addOrder" class="pull-right"></span><i class="fa fa-cart-plus"></i>&nbsp;&nbsp;Order</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/admin/complete" class="pull-right"></span><i class="fa fa-thumbs-o-up"></i>&nbsp;&nbsp;Completed</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/admin/inProcess" class="pull-right"></span><i class="fa fa-fire"></i>&nbsp;&nbsp;Active</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/admin/cancelled" class="pull-right"></span><i class="fa fa-ban"></i>&nbsp;&nbsp;Stopped</a></li>
        <li><a href="<?php echo base_url(); ?>index.php/admin" class="pull-right"></span><i class="fa fa-repeat"></i>&nbsp;&nbsp;REFRESH</a></li>
        <li  class="pull-right" ><a href="<?php  echo base_url();  ?>index.php/login/logout" class="pull-right"></span><i class="fa fa-sign-out"></i>&nbsp;&nbsp;Logout</a></li>
    </ul>





<?php } ?>
 <script>
          $('#topnavbar').affix({
    offset: {
        top: $('#banner').height()
    }   
});
          
          </script>
       <style>
              #topnavbar {
    margin: 0;
}
#topnavbar.affix {
    position: fixed;
    top: 0;
    width: 100%;
}

#banner {
     background-color: #e31836;
     color: white;
     font-family: 'Book Antiqua';
     padding-left: 40px;
     padding-right: 10px;
}
.nav{
    background-color: white;
}
    body
    {
        background-color: #237DA3;
    }
              
              </style>