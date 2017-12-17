@extends("seller_temp");




@section('content')

<?php


  $products=DB::select('select * from products where id = ? ',array($id));
  if (!empty($products)) {
 

  $product=$products[0];
  $name=$product->name;
  $cat_id=$product->cat_id;
  $product_seller_id=$product->seller_id;

  if(Session::has('seller')){
  $user=Session::get('seller');
  $current_seller_id=$user->id;}
  
  if($current_seller_id==$product_seller_id){



?>

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
<form role="form"  action="/edit_product/{{$id}}" method="POST" >
<input name="_token" type="hidden" value="{{ csrf_token() }}"/>     

<div class="form-group">
<p>Product Name</p>
<input type="text"  name="name" placeholder="please enter the name" class="pass" required="" value="<?php echo $name;?> ">
</input>
</div>
                                       
<div class="form-group">
<label>select the category  of the product </label>
<select class="form-control" name="category" >
                                                                                                
<?php 

$categories= DB::select('select * from categories ');
?>

@foreach($categories as $category)

<?php 
if($cat_id== ($category->id))
  $selected='selected="selected"';
else
  $selected='';
?>
<option <?php echo $selected;?> > {{$category->name}} </option>
                                                
@endforeach

</select>
</div>                                         
                                         

                                        
<button type="submit" class="btn btn-default" name="submit">Submit Button</button>
<button type="reset" class="btn btn-default">Reset Button</button>
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
  <?php }
  else {
    echo "this product does not belong to you";}}
     ?>                             
                                     
    <!-- /#wrapper -->
@stop