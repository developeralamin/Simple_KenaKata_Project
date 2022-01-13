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
			  <h4 class="box-title">Customer Details</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	<form method="post" action="{{ route('Customer.store') }}" 
	 enctype="multipart/form-data">

	 	@csrf {{-- cross site request forgery --}}

	<div class="row">
		<div class="col-12">	

	  <div class="row"> {{-- /// 1st row --}}

	<div class="col-md-6" >		
		<div class="form-group">
			<h5>User Group Name<span class="text-danger">*</span></h5>
			<div class="controls">
       <select name="group_id" id="group_id"  class="form-control">
			<option value="" selected="" disabled="">Select Group</option>
		@foreach($usergroups as $usergroup)	
			<option value="{{ $usergroup->id }}">{{ $usergroup->user_group_name}}</option>
		@endforeach	
				 
	  </select>
			</div>
				 
		</div>
	</div><!-- End Col Md-4 -->

		<div class="col-md-6" >		
			<div class="form-group">
				<h5>Name <span class="text-danger">*</span></h5>
			<div class="controls">
	             <input type="text" name="name" value="{{ old('name') }}"  class="form-control">
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->


     <div class="col-md-6" >		
			<div class="form-group">
				<h5>Email <span class="text-danger">*</span></h5>
			<div class="controls">
	             <input type="email" name="email" value="{{ old('email') }}"  class="form-control">
			</div>
			</div>
		</div><!-- End Col Md-4 -->
	

        <div class="col-md-6" >		
			<div class="form-group">
				<h5>Phone <span class="text-danger">*</span></h5>
			<div class="controls">
	       <input type="text" name="phone" value="{{ old('phone') }}"  class="form-control"  
				 >  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->


		 <div class="col-md-6" >		
			<div class="form-group">
				<h5>Address <span class="text-danger">*</span></h5>
			<div class="controls">
	       <input type="text" name="address" value="{{ old('address') }}"  class="form-control"  
				 >  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->

	</div> <!-- End Row -->{{-- /// end 1st row --}}



	</div><!-- End Col 12 -->

	</div> <!-- End Row -->
	</div> <!-- End Col M12 -->
	</div> <!-- End Row -->
				 
	 <div class="text-xs-right">
	   <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">
		<a href="{{ route('Customer.view') }}" class="btn btn-rounded btn-success">Back</a>
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