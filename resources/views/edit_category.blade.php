@extends("manager_temp");




@section('content')

<?php
  $Category=DB::select('select * from categories where id = ?',array($id));
  $Category=$Category[0];
  $name=$Category->name;

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
<form role="form"  action="/edit_category/{{$id}}" method="POST" >
<input name="_token" type="hidden" value="{{ csrf_token() }}"/>     

<div class="form-group">
<p>Category Name</p>
<input type="text"  name="name" placeholder="please enter the name" class="pass" required="" value="<?php echo $name;?> ">
</input>
</div>
                                       
                                        
                                         
<div class="form-group">                            
<input type="hidden" class="form-control" placeholder="Enter text" name="id" value="<? echo $id; ?>" >
</div>
                                        
<button type="submit" class="btn btn-default" name="submit">Submit Button</button>
<button type="reset" class="btn btn-default">Reset Button</button>
</form>
</div>
                                <!-- /.col-lg-6 (nested) -->
                               
                                     
    <!-- /#wrapper -->
@stop