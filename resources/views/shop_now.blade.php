
<!DOCTYPE html>
<html>
<head>
	<title></title>
<link rel="stylesheet" href="{{ URL::asset('/sweetalert/dist/sweetalert.css') }}" />
<script type="text/javascript" src="{{ URL::asset('/sweetalert/dist/sweetalert.min.js') }}"></script>

<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>


</head>
<body>

<?php 

  $product=DB::select('select * from products where id = ?',array($id));
  $product=$product[0];
  $name=$product->name;
  $price=$product->price;  
  $tax=$product->tax;
  $discount=$product->discount;
  $cat_id=$product->cat_id;


  $category=DB::select('select * from categories where id = ?',array($cat_id));
  $category=$category[0];
  $category_name=$category->name;

  $total=$price +($price * $tax /100) -($price * $discount /100);
   
  
  $input="button" ; 
  $amount='hidden=""';

  if (isset($session)){
   	$input="hidden";
   	$amount="";}
  
   
  ?>

<input type="<?php echo $input;; ?>" class="btn btn-default payment" name="submit" value="Add your payment details "></input>


<?php $actual_link =(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";?>

<img src="https://chart.googleapis.com/chart?chs=300x300&cht=qr&chl=http%3A%2F%2F<?php echo $actual_link;?>%2F&choe=UTF-8" title="Link to Product URL" />


<div class="product_text_two product_text">
                    <h1 ><?php echo $product->id;   ?></h1>
                    <h1 ><?php echo $name;   ?></h1>
                    <p><?php echo $category_name;   ?></p>
                    <p>PRICE: <?php echo $product->price;   ?></p>
                    <p>TAX: <?php echo $tax;   ?></p>
                    <p>DISCOUNT: <?php echo $discount;   ?></p>
                    <p>TOTAL: <?php echo $total;   ?></p>
                    <p <?php echo $amount?>;>YOUR AMOUNT: 100   </p>
                    <a class="shop_now_btn" href="">Buy</a>
                </div>

  

  
  <script>

  $('input.payment').click(function(e) {
 swal({
       title: "payment <small>information</small>!",
       text: " <form action='/add_customer' method='POST'>                            <input name='_token' type='hidden' value='{{ csrf_token() }}'>             <br>                                                                       <label class='my-label'>credit card number</label>                         <input type='text' name='credit_no'>                                                                                                                        <input type='hidden' name='id' value='<?php echo $id ?>'>                  <br>                                                                       <label class='my-label'>credit card password</label>                       <input type='text' name='credit_password'>                                     <br>                                                                       <input type='submit' class='btn btn-default' name='submit' value='Submit Button'></input>                                                           </form> ",
       html: true 
});
  
  });

  </script>
 

</body>
</html>

