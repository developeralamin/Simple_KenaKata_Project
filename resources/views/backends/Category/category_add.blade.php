@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>


 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">Category Name</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('Category.store') }}" 
	 enctype="multipart/form-data">

	 	@csrf

	<div class="row">
		<div class="col-12">	

	  <div class="row"> {{-- /// 1st row --}}

		<div class="col-md-4" >		
			<div class="form-group">
				<h5>Category Name <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" name="title"  class="form-control" 
				 >  
			</div>
				  <font style="color: red">
      {{ ($errors->has('title'))?($errors->first('title')):'' }}
     </font>
			</div>
		</div><!-- End Col Md-4 -->

    </div>
			 
</div> <!-- end 2nd row -->


	</div><!-- End Col 12 -->

	</div> <!-- End Row -->
	</div> <!-- End Col M12 -->
	</div> <!-- End Row -->
				 
	 <div class="text-xs-right">
	   <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
		<a href="{{ route('Category.view') }}" class="btn btn-rounded btn-success">Back</a>
    </div>
</form>

				</div>
				<!-- /.col -->
			  </div>
			  <!-- /.row -->
			</div>
			<!-- /.box-body -->
		  </div>
		  <!-- /.box -->

		</section>

	  
	  </div>
  </div>

  
<script type="text/javascript">
	$(document).ready(function(){
		$('#image').change(function(e){
			 var reader = new FileReader();
			 reader.onload = function(e){
			 	$('#showimage').attr('src',e.target.result);
			 }
			 reader.readAsDataURL(e.target.files['0']);

		});

	});
</script>



@endsection
