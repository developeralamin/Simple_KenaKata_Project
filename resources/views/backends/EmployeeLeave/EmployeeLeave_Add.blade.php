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
			  <h4 class="box-title">Employee Leave</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	<form method="post" action="{{ route('EmployeeLeave.store') }}" 
	 enctype="multipart/form-data">

	 	@csrf

	<div class="row">
		<div class="col-12">	

	  <div class="row"> {{-- /// 1st row --}}

	<div class="col-md-6" >		
		<div class="form-group">
			<h5>Employee Name<span class="text-danger">*</span></h5>
			<div class="controls">
       <select name="employee_id" id="employee_id"  class="form-control">
			<option value="" selected="" disabled="">Select Employee</option>
		@foreach($allRegis as $allRegi)	
			<option value="{{ $allRegi->id }}">{{ $allRegi->name}}</option>
		@endforeach	
				 
	  </select>
			</div>
				 
		</div>
	</div><!-- End Col Md-4 -->

		<div class="col-md-6" >		
			<div class="form-group">
				<h5>Start Date <span class="text-danger">*</span></h5>
			<div class="controls">
	       <input type="date" name="start_date"  class="form-control"  
				 >  
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->


     <div class="col-md-6" >		
			<div class="form-group">
				<h5>Leave Purpose <span class="text-danger">*</span></h5>
			<div class="controls">
	  <select name="employee_leave_purpose_id" id="employee_leave_purpose_id"  class="form-control">
			<option value="" selected="" disabled="">Select Leave Purpose</option>
		@foreach($allData as $allData)	
			<option value="{{ $allData->id }}">{{ $allData->name}}</option>
		@endforeach	
				 
	 <option value="0">New Purpose</option>
			</select>

			<input type="text" name="name" id="add_another" class="form-control" placeholder="Write Purpose" style="display: none;">	
			</div>
				 
			</div>
		</div><!-- End Col Md-4 -->
	

 <div class="col-md-6" >		
			<div class="form-group">
				<h5>End Date <span class="text-danger">*</span></h5>
			<div class="controls">
	       <input type="date" name="end_date"  class="form-control"  
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
		<a href="{{ route('EmployeeLeave.view') }}" class="btn btn-rounded btn-success">Back</a>
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
		$(document).on('change','#employee_leave_purpose_id',function(){
			var leave_purpose_id = $(this).val();

			if(leave_purpose_id == '0'){
				$('#add_another').show();
			}else{
				$('#add_another').hide();
			}

		});
	});


</script>




@endsection