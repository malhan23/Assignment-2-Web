<style>
    
    body{
     /* background:url("<?php echo base_url(); ?>assets/img/logo.jpg") no-repeat center center fixed; */
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
    }
    </style>
    
    <div id="myCarousel" class="carousel slide" data-ride="carousel" style="height:50%;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
        <img src="<?php echo base_url(); ?>assets/img/p5.jpg"  style="height: 100%;width:100%;background-size:cover;" alt="Chania">
      <div class="carousel-caption">
          <h3>TORONTO PIZZA WELCOMES U !!</h3>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url(); ?>assets/img/p4.jpg" style="width:100%;background-size:cover;" alt="Chania">
      <div class="carousel-caption">
        <h3>DELIOUS PIZZA !!</h3>
      </div>
    </div>

    <div class="item">
      <img src="<?php echo base_url(); ?>assets/img/p6.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>DIFFERENT SHAPES N SIZES!!</h3>
      </div>
    </div>
    <div class="item">
      <img src="<?php echo base_url(); ?>assets/img/p8.jpg" alt="Flower">
      <div class="carousel-caption">
        
      </div>
    </div>

    <!--div class="item">
      <img src="img_flower2.jpg" alt="Flower">
      <div class="carousel-caption">
        <h3>Flowers</h3>
        <p>Beatiful flowers in Kolymbari, Crete.</p>
      </div>
    </div-->
  </div>

  <!-- Left and right controls -->
  <!--a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a-->
</div>
    
    
    <?php echo $this->session->userdata('flag'); ?>
    <?php if($this->session->userdata('flag')==1){ ?>
    
    <div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog ">

    <!-- Modal content-->
    <div class="modal-content alert alert-success">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Success !!!</h4>
      </div>
      <div class="modal-body">
        <p>Your order has been successfully been placed.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
    <?php $this->session->unset_userdata('flag');} ?>
    <script>
        
        $(function(){
         
           $("#myModal").modal('show');
           
           
           
           
        });
        
        
        
        </script>