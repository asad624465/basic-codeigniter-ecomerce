
<div class="outer">
  <div class="inner bg-light lter">
    <div class="row">
        <div class="col-xs-12">
            <div class="invoice-title">
                <h2>Invoice</h2>
                  <h3 class="pull-right">Order # <?php echo  $order_info_id->invoice_no?>
                  </h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                    <strong>Billed To:</strong><br>
                        <?php echo  $billing_info->first_name?><br>
                       <?php 
                         echo  $billing_info->customer_address_one.','.$billing_info->customer_city;
                         ?><br>
                        <?php 
                         echo  $billing_info->customer_country.','.$billing_info->customer_postcode;
                         ?>
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                    <strong>Shipped To:</strong><br>
                        <?php echo  $shiping_info->full_name?><br>
                        <?php 
                         echo  $shiping_info->shiping_address.','.$shiping_info->shiping_city;
                         ?><br>
                       <?php 
                         echo  $shiping_info->shiping_country.','.$shiping_info->shiping_postcode;
                         ?>
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <address>
                        <strong>Payment Method:</strong><br>
                        Contact No: <?php echo  $billing_info->customer_telephone?><br>
                       <?php echo  $billing_info->email_address?>
                    </address>
                </div>
                <div class="col-xs-6 text-right">
                    <address>
                        <strong>Order Date:</strong>
                       <?php 
                            function date_time($date)
                            {
                                $date = date('d-m-Y',strtotime($date));
                                return  $date;
                            }
                            if($order_info_id)
                                { 
                                    echo date_time($order_info_id->date_time) ;
                                } 
                        ?>
                    </address>
                    <address>
                        <strong>Order Status:</strong>
                      <?php 
                         $pub = $order_info_id->order_status;
                         if( $pub=='0')
                         {
                            echo "Pending";
                         }elseif( $pub=='1')
                         {
                            echo "Payment";
                         }else
                         {
                            echo "Cancle";
                         }
                        ?><br><br>
                    </address>
                </div>
            </div>
        </div>
    </div>
    
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-condensed">
                            <thead>
                                <tr>
                                    <td><strong>Item</strong></td>
                                    <td class="text-center"><strong>Quantity</strong></td>
                                    <td class="text-center"><strong>Unit Price</strong></td>
                                    <td class="text-right"><strong>Sub Totals</strong></td>
                                </tr>
                            </thead>
                            <tbody>
                                 <?php 
                                 foreach ($order_details as $value) {?>
                                <tr>
                                    <td><?php echo  $value->product_name?></td>
                                    <td class="text-center">
                                      <?php echo  $value->product_sels_quantity?>
                                    </td>
                                    <td class="text-center">
                                    $:<?php echo  $value->product_price?>
                                    </td>
                                    <td class="text-right">
                                       $:<?php echo  $value->product_price*$value->product_sels_quantity?>
                                    </td>
                                </tr>
                                <?php }?>
                                <tr style ="border-top: 2px solid;">
                                    <td class="thick-line"></td>
                                    <td class="thick-line"></td>
                                    <td class="thick-line text-center"><strong>Total</strong></td>
                                    <td class="thick-line text-right">$ <?php echo $order_info_id->order_total?></td>
                                </tr>
                                <tr style="border-top: none;border-bottom: none;">
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>VAT</strong></td>
                                    <td class="no-line text-right">$
                                    <?php
                                        $vat_total = (5/100)*$order_info_id->order_total;
                                       echo  $vat_total;
                                       ?>
                                      
                                    </td>
                                </tr>
                                <tr style="border-top: none;border-bottom: none;">
                                    <td class="no-line"></td>
                                    <td class="no-line"></td>
                                    <td class="no-line text-center"><strong>Grand Total</strong></td>
                                    <td class="no-line text-right">$ <?php echo $order_info_id->order_total+ $vat_total;?> </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</div>
                