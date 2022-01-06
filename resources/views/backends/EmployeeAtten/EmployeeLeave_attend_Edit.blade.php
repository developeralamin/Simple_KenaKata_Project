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
			  <h4 class="box-title">Edit Employee Attendance</h4>
			  
			</div>
			<!-- /.box-header -->
			<div class="box-body">
			  <div class="row">
				<div class="col">

	 <form method="post" action="{{ route('EmployeAttendance.store') }}">
	 	@csrf


<div class="row">
<div class="col-12">	


<div class="row">
	<div class="col-md-6" >

	<div class="form-group">
		<h5>Employee Attendance Date <span class="text-danger">*</span></h5>
		<div class="controls">
		 <input type="date" name="date"  value="{{ $editData['0']['date'] }}" id="date" required="" class="form-control">
			
		 </div>
    </div>

	</div> <!-- End Col Md-6 -->

</div> <!-- End Row -->



  <div class="row">
    <div class="col-12">
    			<table id="example1" class="table table-bordered table-striped">
	<thead>
		<tr>
			<th rowspan="2" class="text-center" style="vertical-align: middle;">SL</th>
			<th rowspan="2" class="text-center" style="vertical-align: middle;">Employee List</th>
			<th colspan="3"class="text-center" style="vertical-align: middle;width: 30%">Attendance Status</th>

		</tr>

		<tr>
			<th class="text-center btn present_all" style="display: table-cell;background-color: #00000000;">Present</th>
			<th class="text-center btn leave_all" style="display: table-cell;background-color: #00000000;">Leave</th>
			<th class="text-center btn absent_all" style="display: table-cell;background-color: #00000000;">Absent</th>

		</tr>

	</thead>

	   </thead>
		<tbody>

			@foreach($editData as $key => $data )

		<tr class="text-center" id="div{{ $data->id }}">
			<input type="hidden" name="emp_id[]" value="{{ $data->emp_id }}">
			<td>{{ $key+1 }}</td>
			<td class="text-center">{{ $data['user']['name'] }}</td>
			
		<td colspan="3">
	<div class="switch-toggle switch-3 switch-candy">

		<input type="radio" name="status{{$key}}" id="present{{$key}}"
		 value="Present" checked="checked"  {{ ($data->status == 'Present')?'checked':'' }}>
		<label for="present{{$key}}">Present</label>

		<input type="radio"  name="status{{$key}}" {{ ($data->status == 'Leave')?'checked':'' }} value="Leave" id="leave{{$key}}">
		<label for="leave{{$key}}">Leave</label>

		<input type="radio" name="status{{$key}}"  {{ ($data->status == 'Absent')?'checked':'' }} value="Absent" id="absent{{$key}}">
		<label for="absent{{$key}}">Absent</label>

	</div>
</td>
			 
	</tr>
						 
			</tbody>


	@endforeach


	
			
		  </table>

    </div>
	
	

 </div> <!-- End Row -->

 
  
						 
	<div class="text-xs-right">

	   <input type="submit" class="btn btn-rounded btn-info mb-5" value="Submit">

		<a href="{{ route('EmployeAttendance.view') }}" class="btn btn-rounded btn-success">Back</a>

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
