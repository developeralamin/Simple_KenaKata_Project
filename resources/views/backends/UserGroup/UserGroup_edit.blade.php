@extends('admin.admin_master')
@section('admin')

 <div class="content-wrapper">
	  <div class="container-full">
		<!-- Content Header (Page header) -->
	

<section class="content">

		 <!-- Basic Forms -->
		  <div class="box">
			<div class="box-header with-border">
			  <h4 class="box-title">UserGroup Name</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('UserGroup.update',$editData->id) }}" 
	 enctype="multipart/form-data">

	 	@csrf

	<div class="row">
		<div class="col-12">	

	  <div class="row"> {{-- /// 1st row --}}

		<div class="col-md-4" >		
			<div class="form-group">
				<h5>UserGroup Name <span class="text-danger">*</span></h5>
			<div class="controls">
				 <input type="text" name="user_group_name" value="{{ $editData->user_group_name }}"  class="form-control" 
				 >  
			</div>
				  <font style="color: red">
      {{ ($errors->has('user_group_name'))?($errors->first('user_group_name')):'' }}
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
		<a href="{{ route('UserGroup.view') }}" class="btn btn-rounded btn-success">Back</a>
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

  


@endsection
