@extends("admin_temp");




@section('content')


<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Tables</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            DataTables Advanced Tables
                        </div>

<?php
if($report=='top_products'){?>
<div class="panel-body">
  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
           


  
  <thead>
            <tr> <th>Product</th> <th>Category</th> <th>Purchaced Times</th> <th>Seller</th>    </tr>
          </thead>
          

          <tbody>
 <?php         
  $top_products=DB::select('select  * from products ORDER BY purchased_times DESC limit 10');
 
  foreach ($top_products as $product ) {
    
    $product_name=$product->name;

  $cat_id=$product->cat_id; 
  $category=DB::select('select * from categories where id = ?',array($cat_id));
  $category=$category[0];
  $category_name=$category->name; 

  $purchased_times=$product->purchased_times;

  $seller_id=$product->seller_id;
  $seller=DB::select('select * from users where id = ?',array($seller_id));
  $seller=$seller[0];
  $seller_name=$seller->name;
  
 ?>                 
      <tr> <td><?php echo $product_name; ?> </td>
         <td><?php echo $category_name; ?></td>  
         <td><?php echo $purchased_times;?> </td> 
         <td><?php echo $seller_name;?>   </td> 
           
                   
             
 </tr>

 <?php }?>


          </tbody>

                            </table>
      <?php } else{ ?>                         
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
           


  
  <thead>
            <tr> <th>Product</th> <th>Category</th> <th>Customer</th> <th>Seller</th>  <th>date</th>  <th>time</th>   </tr>
          </thead>
          

          <tbody>
<?php 
date_default_timezone_set("Africa/Cairo");
$today    = date("d-m-Y ");
$today  = explode("-", $today);
$day_now=$today[0];
$month_now=$today[1];
$year_now=$today[2];
$year_now  = explode(" ", $year_now);
$year_now=$year_now[0];

//echo $day_now."$".$month_now."$".$year_now."$";
            
            /* get the selected format */
$settings= DB::select('select * from settings where id = ?', array(1)); 
$format=$settings[0];
$format_id=$format->date_format;

           
$settings= DB::select('select * from date_formats where id = ?', array($format_id));
$format=$settings[0];
$date_format=$format->format;

$sales= DB::select('select * from sales ');

foreach ($sales as $sale ) {
    
    $old_date=$sale->date;
    $sale_date = date("d-m-Y", strtotime($old_date));
    $sale_date  = explode("-", $sale_date);
    $day_sale=$sale_date[0];
    $month_sale=$sale_date[1];
    $year_sale=$sale_date[2];
    $year_sale  = explode(" ", $year_sale);
    $year_sale=$year_sale[0];

//echo $day_sale."$".$month_sale."$".$year_sale;
//echo $report;

if(($report=='day'&&$day_sale==$day_now&&$month_sale==$month_now&&$year_now==$year_sale)  ||  ($report=='month'&&$month_sale==$month_now&&$year_now==$year_sale)){  

  $date = date($date_format, strtotime($old_date));
  $time= $sale->time;
  
  $product_id=$sale->product_id;
  $product=DB::select('select * from products where id = ?',array($product_id));
  $product=$product[0];
  $product_name=$product->name; 

  $cat_id=$product->cat_id; 
  $category=DB::select('select * from categories where id = ?',array($cat_id));
  $category=$category[0];
  $category_name=$category->name; 

  $customer_id=$sale->customer_id;
  $customer=DB::select('select * from users where id = ?',array($customer_id));
  $customer=$customer[0];
  $customer_name=$customer->name; 

  $seller_id=$sale->seller_id;
  $seller=DB::select('select * from users where id = ?',array($seller_id));
  $seller=$seller[0];
  $seller_name=$seller->name;
  
  
      
?>

    <tr> <td><?php echo $product_name; ?> </td>
         <td><?php echo $category_name; ?></td>  
         <td><?php echo $customer_name;?> </td> 
         <td><?php echo $seller_name;?>   </td> 
         <td><?php echo $date;  ?>         </td>
         <td><?php echo $time;  ?>         </td>   
                   
             
 </tr>
    
<?php  }}} ?>
</tbody>

                            </table>


                     
                            <!-- /.table-responsive -->
                            <div class="well">
                                <h4>DataTables Usage Information</h4>
                                <p>DataTables is a very flexible, advanced tables plugin for jQuery. In SB Admin, we are using a specialized version of DataTables built for Bootstrap 3. We have also customized the table headings to use Font Awesome icons in place of images. For complete documentation on DataTables, visit their website at <a target="_blank" href="https://datatables.net/">https://datatables.net/</a>.</p>
                                <a class="btn btn-default btn-lg btn-block" target="_blank" href="https://datatables.net/">View DataTables Documentation</a>
                            </div>
                             </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            </div>

 @stop