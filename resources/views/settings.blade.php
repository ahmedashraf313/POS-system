@extends("admin_temp");




@section('content')

<?php

  function arabic($string){
  
  switch ($string) {
      case 'Enter the default of the Tax rate':
          echo "اختار معدل الضريبة الافتراضي";
          break;
      case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;    
          case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;
          case 'value':
          echo "";
          break;

      
      default:
          # code...
          break;
  }
}
   
 function lang($string){
  $settings= DB::select('select * from settings where id = ?', array(1)); 
  $lang=$settings[0];
  $language=$lang->language;
  if($language=='english')
     echo $string;

 else
     arabic($string);


 }



 








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
<form  role="form" action="/settings" method="POST" >
<input name="_token" type="hidden" value="{{ csrf_token() }}"/>

  
<?php
$settings= DB::select('select * from settings where id = ?', array(1)); 
$tax_rate=$settings[0];
$tax=$tax_rate->tax_rate;

?>

<div class="form-group">
<label> <?php lang('Enter the default of the Tax rate');?> </label>
<input class="form-control" placeholder="Enter name" name="tax_rate" value="<?php echo $tax;?>">
</div>


<?php
$discount_rate=$settings[0];
$discount=$discount_rate->discount;

?>
<div class="form-group">
<label>Enter the default discount</label>
<input class="form-control" placeholder="Enter name" name="discount" value="<?php echo $discount;?>">
</div>

 
 <div class="form-group">
<label>select the type  of the display </label>
<select class="form-control" name="display" >
                                                                                                
<?php 

$disp=$settings[0];
$display=$disp->display;

if($display=='both'){
 $both='selected="selected"';
 $name=' ';
 $photo='';
}

else if($display=='name'){
 $name='selected="selected"';
 $both=' ';
 $photo='';
}

else {
 $photo='selected="selected"';
 $name=' ';
 $both='';
}


?>


<option <?php echo $both; ?>  > both       </option>
<option <?php echo $photo; ?> > photo      </option>
<option <?php echo $name; ?>  > name       </option>

</select>
</div>                                           

                                      
                                        
<div class="form-group">
<label>select the format  of the date </label>
<select class="form-control" name="date_format" >
                                                                                                
<?php 

$formats= DB::select('select * from date_formats ');
$selected_format= DB::select('select date_format from settings where id = ?', array(1));

$data=$selected_format[0];
$selected_format=$data->date_format;
?>
@foreach($formats as $format)
<?php 
if($selected_format== ($format->id))
  $selected='selected="selected"';
else
  $selected='';
?>
<option <?php echo $selected;?> > {{$format->name}} </option>
                                                
@endforeach

</select>
</div> 


<div class="form-group">
<label>select the language  of the website </label>
<select class="form-control" name="language" >
                                                                                                
<?php 

$lang=$settings[0];
$language=$lang->language;
if($language=='arabic'){
 $arabic='selected="selected"';
 $english=' ';
}
else {
  $english='selected="selected"';
  $arabic='';
}

?>


<option <?php echo $arabic; ?> value='arabic' > العربية       </option>
<option <?php echo $english; ?>  > english       </option>

</select>
</div> 

<div class="form-group">
                                
<input type="hidden" class="form-control" placeholder="Enter text" name="action" value="edit_answer" >
                                        </div>

                                        
<div class="form-group">
                                
<input type="hidden" class="form-control" placeholder="Enter text" name="id" value="<?php echo '$id'?>" >
</div>

                                        
<input type="submit" class="btn btn-default" name="submit" value="Submit Button"></input>
<input type="reset" class="btn btn-default" value="Reset Button"></input>
                                    </form>
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                               
                                     
    <!-- /#wrapper -->
  @stop
    