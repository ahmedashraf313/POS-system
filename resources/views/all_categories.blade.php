@extends("manager_temp");




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
<div class="panel-body">
  <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
           


  
  <thead>
            <tr> <th>ID</th> <th>Category</th> <th> </th> <th></th>    </tr>
          </thead>
          

          <tbody>
 <?php         
  
    

  $categories=DB::select('select * from categories ');
  foreach ($categories as $category ) {
  	
  $category_name=$category->name; 
  $id=$category->id;

  
 ?>                 
      <tr> <td>{{$id}} </td>
         <td><?php echo $category_name; ?></td>  
         <td><a href="edit_category/{{$id}}">Edit</a> </td> 
         <td><a href="delete_category/{{$id}}">Delete</a>   </td> 
           
                   
             
 </tr>

 <?php }?>


          </tbody>

                            </table>
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