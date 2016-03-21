
<br>
<div class="container" id="main-body">
    <h1><i class="fa fa-tachometer"></i>&nbsp;&nbsp;DASHBOARD</h1>

    <br/>
    <div class="row">
        <div class="col-lg-12">
        <div class="panel panel-green">
            <div class="panel-heading">
                <i class="fa fa-rocket"></i>&nbsp;&nbsp;
            DELIVERY READY 
            </div>
            <div class="panel-body">
              <div class="table-responsive">
                    <table class="table table-striped  table-hover">
                        <thead>
                            
                            <tr class="table_header">
                                <th>Order No</th>
                                <th>Order Type</th>
                                <th>Quantity</th>
                                <th>Customer Name</th>
                                <th>Customer Phone</th>
                                <th>Customer E- Mail</th>
                                <th>Order Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($allComplete as $complete) { ?>
                            <tr>
                                <td><?php echo $complete['oi_id']; ?></td>
                                <td><?php echo strtoupper($complete['pd_type']); ?></td>
                                <td><?php echo $complete['oi_quantity']; ?></td>
                                 <td><?php echo strtoupper($complete['ci_name']); ?></td>
                                  <td><?php echo strtoupper($complete['ci_phone_no']); ?></td>
                                   <td><?php echo strtoupper($complete['ci_email_address']); ?></td>
                                <td><label class="label label-success">DONE</label>
                            </tr>
                              <?php } ?>
                        </tbody>
                    </table>
                </div>
        </div>
        </div>
        </div>
    </div>
    <!--div class="row">
        
                <div class="table-responsive">
                    <table class="table table-striped  table-hover">
                        <thead>
                            <tr class="table_header">
                                <th>Order No</th>
                                <th>Order Type</th>
                                <th>Quantity</th>
                                <th>Customer Name</th>
                                <th>Customer Phone</th>
                                <th>Customer E- Mail</th>
                                <th>Order Status</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($allInProcess as $process) { ?>
                            <tr>
                                <td><?php echo $process['oi_id']; ?></td>
                                <td><?php echo strtoupper($process['pd_type']); ?></td>
                                <td><?php echo $process['oi_quantity']; ?></td>
                                 <td><?php echo strtoupper($process['ci_name']); ?></td>
                                  <td><?php echo strtoupper($process['ci_phone_no']); ?></td>
                                   <td><?php echo strtoupper($process['ci_email_address']); ?></td>
                                <td><label class="label label-warning">ACTIVE</label>
                                
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
          
    </div>
    <br/><br/>
    
    

</div-->


<style>
     .table_header {
    font-size: 11px;
    background: #31708f !important;
    color: #bce8f1 !important;
    text-align: center;
}
.panel-green{
    border-color: #5cb85c;
   
}
.panel-green .panel-heading {
    border-color: #5cb85c;
    color: #fff;
    background-color: #5cb85c;
   
}
   #main-body
{
    background-color: white;
  border: 5px ridge  #e31836;
  border-radius: 20px;
  
  font-family: 'Book Antiqua';
}
    
    </style>