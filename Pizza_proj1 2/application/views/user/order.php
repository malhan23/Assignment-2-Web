







<body>

    <div class="container" id="main-body" style="margin-top: 10px">
        
        <div class="row">
            <div class="col-lg-12">
                <h2><i class="fa fa-cart-plus"></i>&nbsp;&nbsp; Place Order</h2>
                <hr>
            </div>
        </div>
        <form name="orderList" id="orderList" action="" method="POST" enctype="multipart/form-data" >
<div class="row">

    <div class="col-lg-3">
    <div class="thumbnail">
      <img src="<?php echo base_url(); ?>assets/img/p1.png" >
      <div class="caption">
          <h3 class="text-center"></h3>
          <h4 class="text-center"><p>Pizza Type</p></h4>
                  <center><select class="form-control" name="pd" id="pd">
                          <option value="0">---- NONE ----</option>
                          <?php  foreach($allDetails as $detail){ ?>
                          <option value="<?php echo $detail['pd_id'] ?>"><?php echo strtoupper($detail['pd_type']);?></option>
                           <?php  } ?>
              </select></center>
      </div>
    </div>
  </div>  
    <div class="col-lg-6">

        <div class="row">
            <div class="col-lg-12">
                <label>TOPPINGS</label>
                <select class="form-control" name="topping" id="topping" multiple="multiple" size="10" width="50%">
                  <?php foreach($allTopping as $topping) { ?>
                    <option value="<?php echo $topping['tt_id']?>"><?php echo strtoupper($topping['tt_type'])?></option>
                    
                    <?php } ?>
                </select>
            </div>
        </div><br/><br/>
        <div class="row">
        <div class="col-lg-12">
                
                    <label>CRUST TYPE</label>
                    <select class="form-control" name="curst_type" id="crust_type">
                        <option value="0">----NONE---</option>
                        <?php foreach ($allCrust as $crust) { ?>
                        <option value="<?php echo $crust['pt_id']; ?>"><?php echo strtoupper($crust['pt_crust_type']); ?></option>
                        <?php } ?>
                    </select>
        </div>
        </div>
    </div>  
    <div class="col-lg-3">
        <div class="row">
                   
                       
            <label>Quantity</label><br/>
                    
                    <div class="col-lg-2 ">
                 
                        <button class="btn btn-default btn-primary" name="mins" id="mins" ><b>-</b></button>
                    </div>
                   <div class="col-lg-4">
                      
                       <input type="text" name="quantity" id="quantity" class="form-control text-center" style="width: 100%; font-size: 15px;font-weight: bold" value="1" readonly/>
                   </div>
                   <div class="col-lg-2">
                        
                       <button type="button" class="btn btn-default  btn-primary" name="add" id="add"><b>+</b></button>
                   </div>
            </div>
        <br/><br/>
        <div class="row">
            <label>Base Amount</label>
            <div id="ba" class="text-center">
                <h3>$0.00</h3>
            </div>
        </div>
    </div>
</div>
            <br/><br/>
            <div class="row">
                
            <div class="col-lg-4 col-lg-offset-2">
                
               
                        <button class="btn btn-default btn-warning btn-block" type="reset"><i class="fa fa-repeat">
                            </i>&nbsp;&nbsp;RESET</button>
                    
                </div>
                
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-default btn-primary btn-block" name="order" id="order"><i class="fa fa-shopping-basket">
                            </i>&nbsp;&nbsp;ORDER</button>
                    </div>
               
               
            </div>
           
       
            
       
            </form>
        <br>
</div>
    <!-- Modal Start here-->
<div class="modal fade bs-example-modal-sm" id="myPleaseWait" tabindex="-1"
    role="dialog" aria-hidden="true" data-backdrop="static">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">
                    <span class="glyphicon glyphicon-time">
                    </span>Processing Order...
                 </h4>
            </div>
            <div class="modal-body">
                <div class="progress">
                    <div class="progress-bar progress-bar-info
                    progress-bar-striped active"
                    style="width: 100%">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal ends Here -->
<!--script src="http://localhost:8081/pizza_proj/assets/js/jquery.min.js"></script-->


    
<script>
   $(document).ready(function(argument){
       
     $("#pd").change(function(){
        var pd= $("#pd").val()
       
        if(pd!=0){
            var data = {"pd":pd};
            $.ajax({
               url:"<?php echo base_url(); ?>index.php/user/ajaxPriceDetails",
               
               data:data,
               type:"POST",
               success:function(reponse){
                  
                   
                   $("#ba").html("<h3>$"+reponse+"</h3>");
                },
                error:function(reponse){
                    alert(reponse);
                }
            });
        }
        
     });
  


   $("#add").click(function(){
    var value = $("#quantity").val();
    if(value>0){
        value++;
        $("#quantity").val(value)
    }
   });     
   $("#mins").click(function(){
    var value = $("#quantity").val();
    if(value>0){
    value--;
    $("#quantity").val(value)
    }
   });          
    $("#order").click(function(e){
        e.preventDefault();
        
        var topping=[]
        topping= $("#topping").val();
        var value = $("#quantity").val();
        var crustType       =   $("#crust_type").val();
        var pd  =   $("#pd").val();
        if(pd==0){
            alert("Please Select the Piza Size");
        }
       else{
            if(topping==null || crustType==0){
                alert("Please select the topping & Crust type");
            }
            else{
                var data=[];
            
                var top =topping.join(",");
               
                data = {"pd":pd,"crust":crustType,"top":top,"quantity":value};
                  $('#myPleaseWait').modal('show');
                  
               $.ajax({
                   
                    url:"http://localhost:8081/pizza_proj1/index.php/user/process" ,
                    data:data,
                    type:"POST",
                    success:function(response){
                          $('#myPleaseWait').modal('hide');  
                          if(response==1){
                            window.location = "<?php echo base_url(); ?>index.php/user/processing";
                        }else{
                            alert("Unable to process the Order");
                        }
   
                    },
                    error:function(response){
                        alert(response);
                    }
               });
            }
        }
    })    
        
        
    })
</script>
<style>
   #main-body
{
    background-color: white;
  border: 5px ridge  #e31836;
  border-radius: 20px;
  
  font-family: 'Book Antiqua';
}
hr
{
    border-top: 1px inset #237DA3;
}
.thumbnail{
       background-color: #d9534f;
       border: 1px inset #237DA3;
       border-radius: 20px;
}
h4>p{
     color: white;
}
</style>
</body>
</html>