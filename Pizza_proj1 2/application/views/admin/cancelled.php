<div class="container" id="main-body">
    <br>
    <div class="row">
        <div class="col-lg-12">
        <div class="panel panel-pink">
            <div class="panel-heading">
                <i class="fa fa-ban fa-2x"></i>&nbsp;&nbsp;
                List of Cancelled Orders
            </div>
            <div class="panel-body">
                <div class="table-responsive">
                    <table class="table table-striped table-bordered table-hover">
                        <thead>
                            <tr class="table_header">
                                <th class="text-center">Order No</th>
                                <th class="text-center">Ordered Prizza</th>
                                <th class="text-center">Ordered Crust</th>
                                <th class="text-center">Quantity</th>
                                 <th class="text-center">Customer Name</th>
                                 <th class="text-center">Customer Phone No</th>
                                
                                <th class="text-center" >Total Cost</th>
                                    
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($cancelledOrder as $order){ ?>
                            <tr>
                                <td><?php echo $order['oi_id']; ?></td>
                                <td class="text-center"><?php echo strtoupper($order['pd_type']); ?></td>
                                <td class="text-center"><?php echo strtoupper($order['pt_crust_type']); ?></td>
                                <td class="text-center"><?php echo $order['oi_quantity']; ?></td>
                                <td class="text-center"><?php echo strtoupper($order['ci_name']); ?></td>
                                <td class="text-center"><?php echo $order['ci_phone_no']; ?></td>
                                <td class="text-center"><?php echo $order['oi_total_amount']; ?></td>
                                
                               
                               
                                
                                
                            </tr>
                            <?php } ?>
                        </tbody>
                        
                    </table>
                </div>
            </div>
        </div>
    </div>
        </div>
</div>


<style>
    .container{
        margin-top: 10px;
    }
    .panel-pink{
    border-color: #F04E73;
}
.panel-pink .panel-heading {
    border-color: #F04E73;
    color: #fff;
    background-color: #F04E73;
}
 .table_header {
    font-size: 11px;
    background: #31708f !important;
    color: #bce8f1 !important;
    text-align: center;
}

 #main-body
{
    background-color: white;
  border: 5px ridge  #e31836;
  border-radius: 20px;
  
  font-family: 'Book Antiqua';
}
    
    </style>