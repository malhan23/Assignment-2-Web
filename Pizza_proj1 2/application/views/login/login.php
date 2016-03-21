<html>
    <head>
        <meta charset="utf-8">
        <title>Pizza Login</title>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
	<meta name="author" content="">
        
        <link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/login.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.js"></script>
	
    </head>
    
    <body>
          <div class="" id="banner">
      <div class="row">
          <div class="col-lg-6">
              <h1><i class="fa fa-pie-chart"></i> &nbsp;Toronto Pizza &nbsp; <i class="fa fa-pie-chart"></i></h1>
          </div>
          
      </div>
    </div>

      <ul class="nav nav-tabs">
        <li class="pull-right"><a href="<?php  echo base_url();  ?>index.php/login" ><i class="fa fa-sign-in"></i>&nbsp;&nbsp; Login</a></li>
      <li class="pull-right"><a href="<?php  echo base_url();  ?>index.php/user/order"><i class="fa fa-cart-plus"></i>&nbsp;&nbsp; Order Online</a></li>
    <li class="pull-right"><a href="<?php  echo base_url();  ?>index.php/user"><i class="fa fa-home"></i>&nbsp;&nbsp;  Home</a></li>
       
    </ul>
        <div class="well span5 center login-box">
            <div class="login-header">
                <i class="fa fa-lock fa-5x"></i>
                
                <h2 id="logo-name">ADMIN LOGIN</h2>
            </div>
            <div class="gap"></div>
            <?php
            if($this->session->flashdata('error'))
            {?>
            <div class="alert alert-dismissable alert-danger">
                <button class="close" type="button" data-dismiss='alert'>&times;</button>
                <strong>Error!</strong><?php echo $this->session->flashdata('error');?>
            </div>
            <?php }?>
            <form class="form-horizontal" action="<?php echo site_url('login');?>" method="POST" >
                <fieldset>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
                        <input type="text" class="form-control input-sm" placeholder="USER NAME" name="username"/>
                    </div>
                    <div class="form-group input-group">
                        <span class="input-group-addon"><i class="fa fa-key fa-fw"></i></span>
                        <input type="password" class="form-control input-sm" placeholder="PASSWORD" name="password"/>
                    </div>
                    
                    <p >
                        <button type="submit" class="btn btn-block  btn-success" name="loginbtn" value="Login" ><i class="fa fa-sign-in"></i>&nbsp;&nbsp;Login</button>
                    </p>
                </fieldset>
            
            
            </form>
            
        </div>
    </body>
</html>
<style>
    
    body{
      //background:url("<?php echo base_url(); ?>assets/img/logo.jpg") no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    }
    </style>
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