<?php 
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
//use DB;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home || POS_System</title>
    <!-- All css Files Here -->
    <!-- fonts -->

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,500' rel='stylesheet' type='text/css'>
    <!-- bootstrap css -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}" />
    
    <!-- fontawesome css -->
    
    <link rel="stylesheet" href="{{ URL::asset('css/font-awesome.min.css') }}" />
    <!-- revolution banner css settings -->
    
     <link rel="stylesheet" href="{{ URL::asset('lib/rs-plugin/css/settings.css') }}" />
    <!-- style css -->
     <link rel="stylesheet" href="{{ URL::asset('style.css') }}" />
    <!-- mobilemenu css -->
         <link rel="stylesheet" href="{{ URL::asset('css/meanmenu.min.css') }}" />

    <!-- responsive css -->
             <link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}" />

    <!-- favicon -->
 <link rel="stylesheet" href="{{ URL::asset('images/favicon.png') }}" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <!-- Header-Section-Strat  -->
    <header>
        <div class="container">
            <div class="header_top">
                <div class="row">
                    <div class="col-md-6">
                        <div class="header_top_left float-left">
                            <ul class="social_icon">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                            <ul class="social_others">
                                <li><a><i class="fa fa-phone"></i>01113578958</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>ahmed.ashraf199635@gmail.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="header_top_right text-right">
                            <ul>
                                
                                <li><a href="/login">Register / Login</a></li>
                                <li class="searchbox">
                                    <input type="search" placeholder="Search......" name="search"        class="searchbox-input" onkeyup="buttonUp();" required>
                                    <input type="submit" class="searchbox-submit" value="">
                                    <span class="searchbox-icon"><i class="fa fa-search"></i></span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
            <div class="container">
                <div class="row mega_relative">
                    <div class="col-xs-12 col-sm-2">
                        <div class="logo head_lo">
                            <a href="index.html"><img src="images/logo.png" alt="Logo" /></a>
                        </div>
                    </div>
                    <div class="col-sm-10">
                        <div class="mainmenu float-right">
                            <nav>
                                <ul>
                                    <li><a href="index.html">HOME</a></li>
                                    <li><a href="contact.html">CONTACT</a></li>
                                     
                                                                                <li class="shop_icon">
                                        <a href="checkout.html"><img src="images/menu_icon_img.png" alt="" /></a>
                                        <span>10</span>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
    </header>
    <!-- mobile-menu-area start -->
    <div class="mobile-menu-area">
        <div class="container">
            <div class="mobile-menu">
                <nav id="dropdown">
                    <ul>
                        <li><a href="index.html">HOME</a></li>
                        
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- mobile-menu-area end -->
    <!-- Header-Section-End  -->
   



/**********************************slider********************************************/

/*********************************************************************************************************************************************/
 <!-- Slider-Section-Strat  -->
    <div class="slider_area">
        <div class="fullwidthbanner">
            <ul>

  <?php         
  $top_products=DB::select('select  * from products ORDER BY purchased_times DESC limit 10');
 
  foreach ($top_products as $product ) {
    
    $id=$product->id;
    $product_name=$product->name;
    $description=$product->description;
    $color=$product->color;
    $price=$product->price;

  $cat_id=$product->cat_id; 
  $category=DB::select('select * from categories where id = ?',array($cat_id));
  $category=$category[0];
  $category_name=$category->name;  ?>                    
                                                <!-- SLIDE-1  -->
                <li data-transition="random" data-slotamount="7" data-masterspeed="300"  data-saveperformance="off" >
                    <!-- MAIN IMAGE -->
                    <img src="images/slider/slider_bg-2.jpg"  alt="mainbanner-31"  data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->
                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption banner1 tp-fade tp-resizeme"
                        data-x="910"
                        data-y="20" 
                        data-speed="300"
                        data-start="500"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0"
                        data-endelementdelay="0"
                        data-end="8700"
                        data-endspeed="300"
                        style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;"><img src="images/slider/slide-2.png" alt="">
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption banner12 tp-fade tp-resizeme"
                         data-x="385"
                         data-y="145" 
                        data-speed="300"
                        data-start="800"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0"
                        data-endelementdelay="0"
                         data-end="8700"
                        data-endspeed="300"
                        style="z-index: 7;font-size:72px; font-family:nexa_blackregular;font-weight:700;color:#3a4b60;max-width: auto; max-height: auto; white-space: nowrap;"> 
                        {{$product_name}}
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption banner13 tp-fade tp-resizeme"
                        data-x="385"
                        data-y="190" 
                        data-speed="300"
                        data-start="1100"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0"
                        data-endelementdelay="0"
                         data-end="8700"
                        data-endspeed="300"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;font-size:24px;line-height:26px;font-family:Roboto;font-weight:100; color:#ffffff;letter-spacing:8px;">{{$description}}
                    </div>
                    
                    <!-- LAYER NR. 4.1 -->
                    <div class="tp-caption banner21 tp-fade tp-resizeme"
                        data-x="385"
                        data-y="273"  
                        data-speed="300"
                        data-start="800"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0"
                        data-endelementdelay="0"
                         data-end="8700"
                        data-endspeed="300"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;font-size:20px;line-height:2;font-family:nexa_bookregular;color:#ffffff;">
                        
                    </div>
                    
                    <!-- LAYER NR. 4.2 -->
                    <div class="tp-caption banner21 tp-fade tp-resizeme"
                        data-x="385"
                        data-y="309"
                        data-speed="300"
                        data-start="1000"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0"
                        data-endelementdelay="0"
                         data-end="8700"
                        data-endspeed="300"

                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;font-size:20px;line-height:2;font-family:nexa_bookregular;color:#ffffff;">
                        COLOR: {{$color}}
                    </div>
                    
                    <!-- LAYER NR. 4.3 -->
                    <div class="tp-caption banner21 tp-fade tp-resizeme"
                        data-x="385"
                        data-y="345" 
                        data-speed="300"
                        data-start="1100"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0"
                        data-endelementdelay="0"
                         data-end="8700"
                        data-endspeed="300"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;font-size:20px;line-height:2;font-family:nexa_bookregular;color:#ffffff;">
                        
                    </div>
                    
                    <!-- LAYER NR. 4.4 -->
                    <div class="tp-caption banner21 tp-fade tp-resizeme"
                        data-x="385"
                        data-y="381" 
                        data-speed="300"
                        data-start="1100"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0"
                        data-endelementdelay="0"
                         data-end="8700"
                        data-endspeed="300"

                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;font-size:20px;line-height:2;font-family:nexa_bookregular;color:#ffffff;">
                        
                    </div>

                    <!-- LAYER NR. 4.5 -->
                    <div class="tp-caption banner22 tp-fade tp-resizeme"
                        data-x="385"
                        data-y="418" 
                        data-speed="300"
                        data-start="1400"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0"
                        data-endelementdelay="0"
                         data-end="8700"
                        data-endspeed="300"
                        style="z-index: 5; max-width: auto; max-height: auto; white-space: nowrap;font-size:20px;line-height:2;font-family:nexa_bookregular;color:#ffffff;">
                        
                    </div>
                    
                    <!-- LAYER NR. 4.6 -->
                    <div class="tp-caption banner23 tp-fade tp-resizeme"
                        data-x="385"
                        data-y="450" 
                        data-speed="300"
                        data-start="1700"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0"
                        data-endelementdelay="0"
                         data-end="8700"
                        data-endspeed="300"
                        style="z-index: 6; max-width: auto; max-height: auto; white-space: nowrap;font-size:20px;line-height:2;font-family:nexa_bookregular;color:#ffffff;">PRICE:{{$price}}  
                    </div>
                        
                    <!-- LAYER NR. 4.7 -->
                    <div class="tp-caption banner2 tp-fade tp-resizeme"
                        data-x="385"
                        data-y="530" 
                        data-speed="300"
                        data-start="1800"
                        data-easing="Power3.easeInOut"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0"
                        data-endelementdelay="0"
                         data-end="8700"
                        data-endspeed="300"
                        >
                        <a class="slide_btn" href="shop_now/{{$id}}" style="z-index: 2; max-width: auto; max-height: auto; white-space: nowrap;font-size:16px; color:#fff;border: 2px solid #ffffff;line-height:2;padding: 10px 30px;">SHOP NOW</a>
                    </div>
                </li>
        <?php } ?>

            </ul>
        </div>
    </div>
    <!-- Slider-Section-End  -->


 /***********************************************************************************/
 /**********************************************************************************/
 /**********************************************************************************/   


<?php 
            
$settings= DB::select('select * from settings where id = ?', array(1)); 
$display=$settings[0];
$display=$display->display;

$photo='';
$display_name='';

if($display=='photo')
    $display_name='hidden=""';
else if($display=='name')
    $photo='hidden=""';
                                                    //select from database
  $products= DB::select('select * from products ');?>


@foreach ($products as $product ) 


<?php 
     
  //$data=$product[0];
  $cat_id=$product->cat_id;                                               //select from database
$cat_name= DB::select('select name from categories where id = ?', array($cat_id)); 
 ?>
                                                       
    <!-- Product-Section-Strat  -->
    <section class="product_area section-padding">
        <div class="padding_right main_single_product">
            <div class="single_product">
                <div class="product_img">
                    <img <?php echo $photo ;?> src="images/product/tre-shirt-1.png" alt="DARK BLUE IMAGE" />
                </div>
                <div class="product_text dark_product">
                    <h1><?php  $name=$cat_name[0]; $cat_name=$name->name; echo $cat_name; ?></h1>
                </div>
            </div>
        </div>
        <div class="padding_left main_single_product">
            <div class="single_product single_product_two">
                <div class="product_img">
                    <img src="images/product/tre-shirt-1.png" alt="DARK BLUE IMAGE" />
                </div>
                <div class="product_text_two product_text">
                    <h1 <?php echo $display_name ;?>><?php echo $product->name;   ?></h1>
                    <p><?php echo $product->description;   ?></p>
                    <p>COLOR: <?php echo $product->color;   ?></p>
                    <p>PRICE: <?php echo $product->price;   ?></p>
                    <p>TAX: <?php echo $product->tax;   ?></p>
                    <p>DISCOUNT: <?php echo $product->discount;   ?></p>
                    <p>total: <?php echo $product->price+$product->tax-$product->discount;   ?></p>
                    <a class="shop_now_btn" href="/shop_now/{{$product->id}}">SHOP NOW</a>
                </div>
            </div>
        </div>
 /**********************************************************************************/       
   @endforeach     
/**********************************************************************************/        
    </section>
 /**********************************************************************************//**********************************************************************************//**********************************************************************************/   
    
    <!-- All js Files Here -->
    <!-- jquery-1.11.3 -->
    <script src="js/jquery-1.11.3.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery-1.11.3.min.js') }}"></script>
    <!-- bootstrap js -->
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <!-- revolution js -->
    <script type="text/javascript" src="lib/rs-plugin/js/jquery.themepunch.tools.min.js"></script> 
    <script type="text/javascript" src="{{ URL::asset('lib/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>

    <script type="text/javascript" src="lib/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <script type="text/javascript" src="{{ URL::asset('lib/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

    <script src="lib/rs-plugin/rs.home.js"></script>
    <script type="text/javascript" src="{{ URL::asset('lib/rs-plugin/rs.home.js') }}"></script>

    <!-- search-box js -->
    <script src="js/search-box.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/search-box.js') }}"></script>

    <!-- scrollUp js -->
    <script src="js/jquery.scrollUp.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.scrollUp.js') }}"></script>

    <!-- mobilemenu js -->
    <script src="js/jquery.meanmenu.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/jquery.meanmenu.js') }}"></script>

    <!-- main js -->
    <script src="js/main.js"></script>
    <script type="text/javascript" src="{{ URL::asset('js/main.js') }}"></script>

  </body>
</html>