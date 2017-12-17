@extends("seller_temp");




@section('content')
<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Forms</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Form Elements
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
<form  role="form" action="add_product" method="POST" >
 <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                        



<div class="form-group">
<label>Enter the name of the product</label>
<input class="form-control" placeholder="Enter name" name="name" required="">
                                            
</div>
<div class="form-group">
<label>select the category of the product</label>
<select class="form-control" name="category">            
<?php         

if(Session::has('seller'))
$user=Session::get('seller');
  $seller_id=$user->id;

$settings= DB::select('select * from settings where id = ?', array(1)); 
$settings=$settings[0];
$tax=$settings->tax_rate;
$discount=$settings->discount;

$categories= DB::select('select * from categories ');
?>
@foreach ($categories as $data ) 
<option > <?php echo $data->name  ?> </option>
@endforeach                                                
</select>
</div>


<div class="form-group">
<label>Enter the tax of the product</label>
<input class="form-control" placeholder="Enter name" name="tax" required="" value="<?php echo $tax;  ?>">
</div>


<div class="form-group">
<label>Enter the discount of the product</label>
<input class="form-control" placeholder="Enter name" name="discount" required="" value="<?php echo $discount;  ?>">
</div>

<div class="form-group">
<input class="form-control" placeholder="Enter name" name="seller_id" type="hidden" value="<?php echo $seller_id;  ?>">
</div>

                                        
                                        
<input type="submit" class="btn btn-default" name="submit" value="Submit Button"></input>
<input type="reset" class="btn btn-default" value="Reset Button"></input>
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                               
                                     
    <!-- /#wrapper -->

@stop
