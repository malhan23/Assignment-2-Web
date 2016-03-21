<div class="container"id="main-body">
    <br>
    <div class="row">
        <div class="col-lg-12">
        
        <div class="panel panel-yellow">
            <div class="panel-heading">
                <i class="fa fa-fire fa-2x"></i> &nbsp;&nbsp;
                List of Active Orders
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
                                <th class="text-center" colspan="2">Operations</th>
                                    
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach($allOrder as $order){ ?>
                            <tr>
                                <td><?php echo $order['oi_id']; ?></td>
                                <td class="text-center"><?php echo strtoupper($order['pd_type']); ?></td>
                                <td class="text-center"><?php echo strtoupper($order['pt_crust_type']); ?></td>
                                
                                <td class="text-center"><?php echo $order['oi_quantity']; ?></td>
                                <td class="text-center"><a href="<?php echo base_url(); ?>index.php/admin/completedOrder/<?php echo $order['oi_id']; ?>" class="btn  btn-success">DONE</a></td>
                                
                                <td class="text-center"><a href="<?php echo base_url(); ?>index.php/admin/cancelOrder/<?php echo $order['oi_id']; ?>"" class="btn  btn-danger">STOP</a></td>
                                
                                
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
     .table_header {
    font-size: 11px;
    background: #31708f !important;
    color: #bce8f1 !important;
    text-align: center;
}
      .panel-yellow {
    border-color: #f0ad4e;
}
.panel-yellow .panel-heading {
    border-color: #f0ad4e;
    color: #fff;
    background-color: #f0ad4e;
}
 #main-body
{
    background-color: white;
  border: 5px ridge  #e31836;
  border-radius: 20px;
  
  font-family: 'Book Antiqua';
}
    
    
    </style>